<?php

declare(strict_types=1);

namespace App\Http\Repository;

use App\Http\Repository\RepositoryInterface;
use App\Http\Resources\FiiCollection;
use App\Http\Resources\FiiResource;
use App\Models\Fii;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class FiiRepository implements RepositoryInterface
{
    public function index()
    {
        return new FiiCollection(Fii::all());
    }

    public function store(array $request) : Fii
    {
        try {
            $fii = Fii::create([
                'fii_cod' => $request['fii_cod'],
                'fii_price' => $request['fii_price']
            ]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        return $fii;
    }

    public function update(int $id, array $request): Fii
    {
        $fii = Fii::find($id);

        if (empty($fii)) {
            throw new Exception("Not found itens", 404);
        }

        $fii->fii_price = $request['fii_price'];
        $fii->save();

        return $fii;
    }
}
