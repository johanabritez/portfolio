<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    // protected $fillable = ['title', 'description', 'url', 'date'];

	/* se sobreescribe la función getRouteKeyName de la clase Model para que el modelo Project ya no busque por defecto el objeto por el id sino por el campo url. Se hace esto para que sea más amigable de leer en la url */

   	public function getRouteKeyName()
   	{
   		return 'url'; //ahora va a buscar por url y ya no id
   	}
}
