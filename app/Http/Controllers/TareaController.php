<?php

namespace App\Http\Controllers;

use App\Http\Services\TareaService;
use Illuminate\Http\Request;

class TareaController extends Controller
{

    function __construct(private TareaService $tareaServices)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->tareaServices->index($request);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->tareaServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->tareaServices->show($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->tareaServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->tareaServices->delete($id);
    }
}
