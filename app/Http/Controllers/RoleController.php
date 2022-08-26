<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = User::latest()->paginate(5);
        return view('role.index', compact('data'))
            ->with((request()->input('page', 1) - 1) * 5);
    }

    public function create(Request $request)
    {
        return view('/role/create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:assures,email',
            'password' => 'required|string|min:6',
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->save();
        $role = new RoleUser();
        $role->user_id = $user->id;
        $role->role_id = $request->role;
        $role->save();
        return redirect('/r_user');
    }

    public function show(Request $request)
    {
        $user = User::find($request->id);
        return view('role.show', compact('user'));
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index')
            ->with('success', 'Assuré deleted successfully');
    }
}
