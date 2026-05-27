<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name','short_name','role_id'])]
#[Table('permisos')]
class Permiso extends Model
{
    //
    public function users(){
        
    }
}

