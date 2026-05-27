<?php
namespace App\Http\Repository;
use App\Http\Services\PermisoService;
use App\Http\Services\RolesService;
use App\Models\Permiso;
use App\Models\Role;

class PermisoRepository extends BaseRepository implements PermisoService
{
    public function __construct(private Permiso $model)
    {
        parent::__construct($model);
    }

    
}