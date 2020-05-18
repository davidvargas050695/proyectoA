<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    //
    public function scopenombre($query ,$nombre)
    {
      if($nombre)
      return  $query->orWhere('nombre', 'LIKE', "%$nombre%");


    }

    public function scopedescripcion($query ,$descripcion)
    {
      if($descripcion)
      return  $query->orWhere('descripcion', 'LIKE', "%$descripcion%");


    }
    public function scopedependecia($query ,$dependecia)
    {
      if($dependecia)
      return  $query->orWhere('dependecia', 'LIKE', "%$dependecia%");


    }
    public function scopeprodecencia($query ,$prodecencia)
    {
      if($prodecencia)
      return  $query->orWhere('prodecencia', 'LIKE', "%$prodecencia%");


    }



}
