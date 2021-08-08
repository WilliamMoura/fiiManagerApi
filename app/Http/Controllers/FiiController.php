<?php

namespace App\Http\Controllers;

use App\Http\Repository\FiiRepository;
use App\Http\Repository\RepositoryInterface;
use Illuminate\Http\Request;

class FiiController extends Controller
{
    private RepositoryInterface $repository;

    public function __construct(FiiRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        return response()->json(
            $this->repository->index(),
            200
        );

    }

    public function store(Request $request)
    {
        return response()->json(
            $this->repository->store($request->all()),
            201
        );
    }

    public function update(Request $request, int $id)
    {
        return response()->json(
            $this->repository->update($id, $request->all()),
            200
        );
    }
}
