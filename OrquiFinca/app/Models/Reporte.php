<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $finca_id
 * @property int $mes_id
 * @property int $year
 * @property string $higiene
 * @property string $dyv
 * @property string $vacunaA
 * @property string $vacunaR
 * @property string $vacunaC
 * @property string $vacunaL
 * @property string $anaplasma
 * @property string $controlGyM
 * @property string $controlM
 * @property string $controlCyO
 * @property int $vacasP
 * @property int $vacasE
 * @property int $terneros
 * @property int $animalesE
 * @property int $vendidos
 * @property int $muertos
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Reporte extends Model
{
    use HasFactory;

    public function finca()
    {
        return $this->belongsTo(Finca::class, 'finca_id');
    }

    public function mes()
    {
        return $this->belongsTo(Mes::class, 'mes_id');
    }
}
