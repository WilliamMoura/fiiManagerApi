<?php

namespace App\Http\Repository;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository implements RepositoryInterface
{
    public function index()
    {
        
    }

    public function store(array $request) : User
    {
        return User::create([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
    }
}
