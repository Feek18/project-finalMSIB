<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function dashboard() {
        return view('components.admin.dashboard');
    }

    public function user(Request $request) {
        if ($request->ajax()) {
            $data = User::with('roles')->get();
            return Datatables::of($data)
                ->addColumn('action', function($row){
                    $btn = '<a href="'.route('admin.edituser', $row->id).'" class="edit btn btn-success btn-sm">Edit</a>';
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
        return view('components.admin.jadwal');
    }
    public function tambah(Request $request) {
        return view('components.admin.tambah');
    }
    public function edit(Request $request) {
        return view('components.admin.edit');
    }
    public function verification(Request $request) {
        return view('components.admin.verification');
    }
}
