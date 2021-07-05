<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Repository\UserRepository;

class UserController extends Controller
{
    private $repository;
    protected $validators = [
        "name"   => "required|string",
        "email" => "required|string",
        "lastname" => "required|string",
        "password" => "required|string"
    ];

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->validators);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
        try {
            return response()->json([
                'data' => $this->repository->store($validator->validate()),
                'message' => 'success'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'data' => [],
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
