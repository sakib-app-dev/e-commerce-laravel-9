<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function users(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }

    public function changeRole(User $user){
        $roles=roles::pluck('role','id');
        // dd($roles);
        return view('admin.users.change_role',compact('user','roles'));
    }

    public function updateRole(Request $req, $user){
        $user =User::find($user);
        // dd($req->role_id);
        $user->update([
            'role_id' => $req->role_id,
        ]);

        return redirect()
        ->route('admin.users_list')
        ->withMessage('Role Updated Successfully');
    }
}
