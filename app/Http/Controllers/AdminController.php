<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Lapangan;
use App\Models\Jadwal;
use App\Models\Peminjaman;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\UserController;

class AdminController extends Controller
{
    public function dashboard() {
        $totalUsers = User::count();
        $totalBookings = Peminjaman::count();
        $totalRevenue = Pembayaran::where('status', 'accepted')->sum('jumlah');

        return view('components.admin.dashboard', compact('totalUsers', 'totalBookings', 'totalRevenue'));
    }

    public function user(Request $request) {
        if ($request->ajax()) {
            $data = User::with('roles')->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $btn = '<a href="'.route('admin.edituser', $row->id).'" class="edit btn btn-success btn-sm me-2">Edit</a>';
                    $btn .= '<form action="'.route('admin.deleteuser', $row->id).'" method="POST" style="display:inline-block;">'.csrf_field().method_field("DELETE").'<button type="submit" class="btn btn-danger btn-sm">Delete</button></form>';
                    return $btn;
                })
                ->make(true);
        }
        return view('components.admin.user');
    }

    public function tambahuser() {
        $roles = Role::all();
        return view('components.admin.tambahuser', compact('roles'));
    }

    public function storeuser(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_telephone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'no_telephone' => $request->no_telephone,
                'password' => Hash::make($request->password)
            ]);

            $user->assignRole($request->role);

            DB::commit();
            return redirect()->route('admin.user')->with('toast_success', 'User created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.user')->with('error', 'Failed to create user: ' . $e->getMessage());
        }
    }

    public function edituser($id) {
        $user = User::find($id);
        $roles = Role::all();
        return view('components.admin.edituser', compact('user', 'roles'));
    }

    public function updateuser(Request $request, $id) {
        $user = User::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'no_telephone' => 'required|string|max:20',
            'password' => 'sometimes|nullable|string|min:8|confirmed',
            'role' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_telephone' => $request->no_telephone,
                'password' => $request->password ? Hash::make($request->password) : $user->password
            ]);

            $user->syncRoles($request->role);

            DB::commit();
            return redirect()->route('admin.user')->with('toast_success', 'User updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.user')->with('error', 'Failed to update user: ' . $e->getMessage());
        }
    }

    public function deleteuser($id) {
        DB::beginTransaction();
        try {
            $user = User::find($id);
            $user->delete();

            DB::commit();
            return redirect()->route('admin.user')->with('toast_success', 'User deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.user')->with('error', 'Failed to delete user: ' . $e->getMessage());
        }
    }

    public function jadwal(Request $request) {
        $jadwal = Jadwal::with('lapangan')->get();
        return view('components.admin.jadwal', compact('jadwal'));
    }

    public function tambahJadwal() {
        $lapangan = Lapangan::all();
        return view('components.admin.tambah', compact('lapangan'));
    }

    public function storeJadwal(Request $request) {
        $request->validate([
            'lapangan_id' => 'required|exists:lapangan,id',
            'hari' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            Jadwal::create($request->all());

            DB::commit();
            return redirect()->route('admin.jadwal')->with('toast_success', 'Jadwal created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.jadwal')->with('error', 'Failed to create schedule: ' . $e->getMessage());
        }
    }

    public function editJadwal($id) {
        $jadwal = Jadwal::find($id);
        $lapangan = Lapangan::all();
        return view('components.admin.edit', compact('jadwal', 'lapangan'));
    }

    public function updateJadwal(Request $request, $id) {
        $jadwal = Jadwal::find($id);

        $request->validate([
            'lapangan_id' => 'required|exists:lapangan,id',
            'hari' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            $jadwal->update($request->all());

            DB::commit();
            return redirect()->route('admin.jadwal')->with('toast_success', 'Jadwal updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.jadwal')->with('error', 'Failed to update schedule: ' . $e->getMessage());
        }
    }

    public function deleteJadwal($id) {
        DB::beginTransaction();
        try {
            $jadwal = Jadwal::find($id);
            $jadwal->delete();

            DB::commit();
            return redirect()->route('admin.jadwal')->with('toast_success', 'Jadwal deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.jadwal')->with('error', 'Failed to delete schedule: ' . $e->getMessage());
        }
    }

    public function index() {
        $lapangan = Lapangan::all();
        return view('components.admin.lapangan', compact('lapangan'));
    }

    public function create() {
        return view('components.admin.tambahlap');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_lapangan' => 'required|string|max:255',
            'harga_per_jam' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'fasilitas' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $data = $request->all();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $data['image'] = $imagePath;
            }

            Lapangan::create($data);

            DB::commit();
            return redirect()->route('admin.lapangan')->with('toast_success', 'Lapangan created successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.lapangan')->with('error', 'Failed to create field: ' . $e->getMessage());
        }
    }

    public function edit($id) {
        $lapangan = Lapangan::find($id);
        return view('components.admin.editlap', compact('lapangan'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_lapangan' => 'required|string|max:255',
            'harga_per_jam' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'fasilitas' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $lapangan = Lapangan::find($id);
            $data = $request->all();

            if ($request->hasFile('image')) {
                if ($lapangan->image) {
                    Storage::disk('public')->delete($lapangan->image);
                }
                $imagePath = $request->file('image')->store('images', 'public');
                $data['image'] = $imagePath;
            }

            $lapangan->update($data);

            DB::commit();
            return redirect()->route('admin.lapangan')->with('toast_success', 'Lapangan updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.lapangan')->with('error', 'Failed to update field: ' . $e->getMessage());
        }
    }

    public function destroy($id) {
        DB::beginTransaction();
        try {
            $lapangan = Lapangan::find($id);
            DB::table('jadwal')->where('lapangan_id', $id)->delete();
            $lapangan->delete();

            DB::commit();
            return redirect()->route('admin.lapangan')->with('toast_success', 'Lapangan deleted successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.lapangan')->with('error', 'Failed to delete field: ' . $e->getMessage());
        }
    }

    public function verification(Request $request) {
        $pembayaran = Pembayaran::with('peminjaman', 'peminjaman.lapangan', 'user')
            ->where('status', 'pending')
            ->get();
        return view('components.admin.verification', compact('pembayaran'));
    }

    public function verifyPembayaran(Request $request, $id, $status) {
        DB::beginTransaction();
        try {
            $pembayaran = Pembayaran::find($id);
            $pembayaran->status = $status;
            $pembayaran->save();

            if ($status === 'accepted') {
                $pembayaran->peminjaman->status = 'confirmed';
                $pembayaran->peminjaman->save();
            }

            DB::commit();
            return redirect()->route('admin.verification')->with('toast_success', 'Verification status updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.verification')->with('error', 'Failed to update verification status: ' . $e->getMessage());
        }
    }
}
