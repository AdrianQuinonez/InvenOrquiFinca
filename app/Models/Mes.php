<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Mes extends Model
{
    use HasFactory;

    protected $table = "meses";

    public function reportes()
    {
        return $this->hasMany(Reporte::class, 'mes_id');
    }
}
