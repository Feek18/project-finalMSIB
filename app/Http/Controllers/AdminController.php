<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use App\Models\Lapangan;
use App\Models\Jadwal;
use Illuminate\Support\Facades\DB;
use App\Models\Peminjaman;
use App\Models\Pembayaran;
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

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_telephone' => $request->no_telephone,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole($request->role);

        return redirect()->route('admin.user')->with('success', 'User created successfully.');
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

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_telephone' => $request->no_telephone,
            'password' => $request->password ? Hash::make($request->password) : $user->password
        ]);

        $user->syncRoles($request->role);

        return redirect()->route('admin.user')->with('success', 'User updated successfully.');
    }

    public function deleteuser($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.user')->with('success', 'User deleted successfully.');
    }

     public function jadwal(Request $request) {
        $jadwal = Jadwal::with('lapangan')->get();
        return view('components.admin.jadwal', compact('jadwal'));
    }

    // Show form to create new schedule
    public function tambahJadwal() {
        $lapangan = Lapangan::all();
        return view('components.admin.tambah', compact('lapangan'));
    }

    // Store new schedule
    public function storeJadwal(Request $request) {
        $request->validate([
            'lapangan_id' => 'required|exists:lapangan,id',
            'hari' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status' => 'required|string|max:255',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('admin.jadwal')->with('success', 'Jadwal created successfully.');
    }

    // Show form to edit schedule
    public function editJadwal($id) {
        $jadwal = Jadwal::find($id);
        $lapangan = Lapangan::all();
        return view('components.admin.edit', compact('jadwal', 'lapangan'));
    }

    // Update existing schedule
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

        $jadwal->update($request->all());

        return redirect()->route('admin.jadwal')->with('success', 'Jadwal updated successfully.');
    }

    // Delete existing schedule
    public function deleteJadwal($id) {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return redirect()->route('admin.jadwal')->with('success', 'Jadwal deleted successfully.');
    }
    
      public function index()
    {
        $lapangan = Lapangan::all();
        return view('components.admin.lapangan', compact('lapangan'));
    }

    public function create()
    {
        return view('components.admin.tambahlap');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_lapangan' => 'required|string|max:255',
        'harga_per_jam' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deskripsi' => 'nullable|string',
        'lokasi' => 'nullable|string',
        'fasilitas' => 'nullable|string',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $data['image'] = $imagePath;
    }

    Lapangan::create($data);

    return redirect()->route('admin.lapangan')->with('success', 'Lapangan created successfully.');
}


    public function edit($id)
    {
        $lapangan = Lapangan::find($id);
        return view('components.admin.editlap', compact('lapangan'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_lapangan' => 'required|string|max:255',
        'harga_per_jam' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deskripsi' => 'nullable|string',
        'lokasi' => 'nullable|string',
        'fasilitas' => 'nullable|string',
    ]);

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

    return redirect()->route('admin.lapangan')->with('success', 'Lapangan updated successfully.');
}


    public function destroy($id)
{
    // Temukan entri lapangan
    $lapangan = Lapangan::find($id);
    
    // Hapus entri terkait di tabel jadwal
    DB::table('jadwal')->where('lapangan_id', $id)->delete();
    
    // Hapus entri lapangan
    $lapangan->delete();

    return redirect()->route('admin.lapangan')->with('success', 'Lapangan deleted successfully.');
}
    public function verification(Request $request) {
    $pembayaran = Pembayaran::with('peminjaman', 'peminjaman.lapangan', 'user')
        ->where('status', 'pending')
        ->get();
    return view('components.admin.verification', compact('pembayaran'));
}

public function verifyPembayaran(Request $request, $id, $status) {
    $pembayaran = Pembayaran::find($id);
    $pembayaran->status = $status;
    $pembayaran->save();

    // Update the status of related peminjaman if pembayaran is accepted
    if ($status === 'accepted') {
        $pembayaran->peminjaman->status = 'confirmed';
        $pembayaran->peminjaman->save();
    }

    return redirect()->route('admin.verification')->with('success', 'Verification status updated successfully.');
}

}
