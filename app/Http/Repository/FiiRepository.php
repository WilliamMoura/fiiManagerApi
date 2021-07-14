<?php

declare(strict_types=1);

namespace App\Http\Repository;

use App\Http\Repository\RepositoryInterface;
use App\Http\Resources\FiiCollection;
use App\Http\Resources\FiiResource;
use App\Models\Fii;
use Illuminate\Database\Eloquent\Collection;

class FiiRepository implements RepositoryInterface
{
    public function index()
    {
        return new FiiCollection(Fii::all());
    }

    public function store(array $request)
    {

    }
}
