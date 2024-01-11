<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property string $proprietario
 * @property string $compra
 * @property string $telefono
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */

class Finca extends Model
{
    use HasFactory;

    public function reportes()
    {
        return $this->hasMany(Reporte::class, 'finca_id');
    }
}
