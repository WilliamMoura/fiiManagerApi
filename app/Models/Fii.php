<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fii extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const TABLE_NAME = 'fiis';

    public const PRIMARY_KEY = 'fii_id';

    public const FILLABLE = [
        'fii_cod',
        'fii_price'        
    ];

    public $fillable = self::FILLABLE;

    protected $primaryKey = self::PRIMARY_KEY;

    protected $table = self::TABLE_NAME;
}
