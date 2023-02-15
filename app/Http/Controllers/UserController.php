<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }

    
    
    public function create(Request $req )
    {      
        return view('users.create');
    }
  
    public function store(Request $request)
    {
       /* $input = $request->all();User::create($input);return redirect('user')->with('flash_message', 'User Addedd!');  */
        $request->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('user')->with('flash_message', 'User Addedd!');
    }
    
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show')->with('users', $user);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('users', $user);
    }
  
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        
        $user->update
            ([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        return redirect('user')->with('flash_message', 'user Updated!');  
    }
  
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');  
    }

}
