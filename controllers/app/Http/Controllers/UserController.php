<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //TODO Consultas a la base de datos con Eloquent ORM
        // $age = 30;
        // $users = DB::select(DB::raw("SELECT * FROM users"))
        //* $users = User::all();
        //TODO $users = User::where()->orWhere()->orderBy()->limit()->get();
        //TODO $users = User::where('age', '>=', 22)->orderBy('age','asc')->get();
        //TODO $users = User::find(1);
        //TODO ->orwhere('zip_code', '280808');
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        $user->name = 'Juanjo';
        $user->email = 'demo@demo.com';
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = 'Calle Falsa 123';
        $user->zip_code = '290909';
        $user->save();

        User::create([
            'name' => 'Ismael',
            'email' => 'info@demo.com',
            'password' => Hash::make('12345678'),
            'age' => 21,
            'address' => 'Calle Prueba 456',
            'zip_code' => '280808',
        ]);

        User::create([
            'name' => 'Olga',
            'email' => 'info@demodemo.com',
            'password' => Hash::make('1234567891'),
            'age' => 30,
            'address' => 'Avenida Prueba 789',
            'zip_code' => '280808',
        ]);

        return redirect()->route('user.index');
    }
}
