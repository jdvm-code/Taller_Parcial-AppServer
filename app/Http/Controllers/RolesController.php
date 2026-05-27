<?php

namespace App\Http\Controllers;

use App\Http\Services\RolesService;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    function __construct(private RolesService $rolesService)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->rolesService->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->rolesService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->rolesService->show($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->rolesService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->rolesService->delete($id);
    }
}
