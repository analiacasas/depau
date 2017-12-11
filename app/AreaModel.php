<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
     protected  $table="areas";
 protected  $primaryKey="id";
 protected $fillable=['id','descripcion'];
}
