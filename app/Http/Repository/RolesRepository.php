<?php
namespace App\Http\Repository;
use App\Http\Services\RolesService;
use App\Models\Role;

class RolesRepository extends BaseRepository implements RolesService
{
    public function __construct(private Role $model)
    {
        parent::__construct($model);
    }

    
}