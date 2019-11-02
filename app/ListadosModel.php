<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListadosModel extends Model
{
    
    /**
     * @return collection
     */

    public static function Puesto_Area()
    {
        $collection = collect([
            [
                'id' => '1',
                'option' => 'Administrativa'
            ],
            [
                'id' => '2',
                'option' => 'Operativa'
            ]
        ]);
        return $collection;
    }

    public static function Generos()
    {
        $collection = collect([
            [
                'id' => '1',
                'option' => 'Masculino'
            ],
            [
                'id' => '2',
                'option' => 'Femenino'
            ]
        ]);
        return $collection;
    }

    public static function Estado_Civil()
    {
        $collection = collect([
            [
                'id' => '1',
                'option' => 'Soltero'
            ],
            [
                'id' => '2',
                'option' => 'Casado'
            ],
            [
                'id' => '3',
                'option' => 'Unido'
            ]
        ]);
        return $collection;
    }

    public static function Proceso_Contratacion()
    {
        $collection = collect([
            [
                'id' => '1',
                'option' => 'Reclutamiento'
            ],
            [
                'id' => '2',
                'option' => 'Selección'
            ],
            [
                'id' => '3',
                'option' => 'Evaluación'
            ],
            [
                'id' => '4',
                'option' => 'Entrevista'
            ],
            [
                'id' => '5',
                'option' => 'Contratado'
            ],
            [
                'id' => '6',
                'option' => 'No Contratado'
            ],
            [
                'id' => '7',
                'option' => 'Despido'
            ],
            [
                'id' => '8',
                'option' => 'Renuncia'
            ]
        ]);
        return $collection;
    }

}
