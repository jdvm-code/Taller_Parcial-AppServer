<?php
namespace App\Http\Repository;
use App\Http\Services\TareaService;
use App\Models\Tarea;

class TareaRepository extends BaseRepository implements TareaService
{
    public function __construct(private Tarea $model)
    {
        parent::__construct($model);
    }

    
}