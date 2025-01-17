<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['department', 'position'])->get();
        return response()->json($users);
    }

    public function edit ($id) {
        $user = User::find($id);
        return response()->json($user);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
        ]);
        $validated['password'] = Hash::make('password');
        User::create($validated);
        return response()->json(['message' => 'User created successfully']);

    }



    public function update(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
        ]);

        $user = User::find($request->id);
        $user->update($validated);

        return response()->json(['message' => 'User updated successfully']);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}
