<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $table = 'citas';
    protected $fillable = [
        'opcion',
        'cliente',
        'fecha',
        'asunto',
        'hora',
        'asesor',
    ];
    protected $dates = ['fecha'];
    protected $times = ['hora'];

    public const Opcion = ['Limpieza de Carro','Compra de Carro', 'Renta de Carro', 'Lavado'];

    public function opcion()
    {
        return self::Opcion[$this->opcion];
    }

}
