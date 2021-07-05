<?php

namespace App\Http\Repository;

interface RepositoryInterface 
{
    public function index();

    public function store(array $request);
}