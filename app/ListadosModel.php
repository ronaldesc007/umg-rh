<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListadosModel extends Model
{
    
    /**
     * @return collection
     */

    public static function Depto_Area()
    {
        $collection = collect(['Administrativa', 'Operativa']);
        return $collection;
    }

    public static function Generos()
    {
        $collection = collect(['Masculino', 'Femenino']);
        return $collection;
    }

    public static function Estado_Civil()
    {
        $collection = collect(['Soltero', 'Casado', 'Unido']);
        return $collection;
    }

    public static function Proceso_Contratacion()
    {
        $collection = collect(['Reclutamiento', 'Selección', 'Evaluación', 'Entrevista', 'Contratación', 'No Contratación']);
        return $collection;
    }

}
