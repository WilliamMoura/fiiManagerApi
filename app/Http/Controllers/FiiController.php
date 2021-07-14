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
}
