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
 * @property string $prevencion
 * @property string $tratamiento
 * @property string $via
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

    public function guardarReporte($reporte)
    {
        $this->finca_id = $reporte['nombreF'];
        $this->mes_id = $reporte['mes'];
        $this->year = $reporte['year'] == null ? date('Y') : $reporte['year'];
        $this->higiene = $reporte['higiene'] == 1 ? 'x' : '';
        $this->dyv = $reporte['dyv'] == 1 ? 'x' : '';
        $this->vacunaA = $reporte['vacunaA'] == 1 ? 'x' : '';
        $this->vacunaR = $reporte['vacunaR'] == 1 ? 'x' : '';
        $this->vacunaC = $reporte['vacunaC'] == 1 ? 'x' : '';
        $this->vacunaL = $reporte['vacunaL'] == 1 ? 'x' : '';
        $this->anaplasma = $reporte['anaplasma'] == 1 ? 'x' : '';
        $this->controlGyM = $reporte['controlGyM'] == 1 ? 'x' : '';
        $this->controlM = $reporte['controlM'] == 1 ? 'x' : '';
        $this->controlCyO = $reporte['controlCyO'] == 1 ? 'x' : '';
        $this->vacasP = $reporte['vacasP'];
        $this->vacasE = $reporte['vacasE'];
        $this->terneros = $reporte['terneros'];
        $this->animalesE = $reporte['animalesE'];
        $this->vendidos = $reporte['vendidos'];
        $this->muertos = $reporte['muertos'];
        $this->prevencion = $reporte['prevencion'];
        $this->tratamiento = $reporte['tratamiento'];
        $this->via = $reporte['via'];
        return $this->save();
    }
}
