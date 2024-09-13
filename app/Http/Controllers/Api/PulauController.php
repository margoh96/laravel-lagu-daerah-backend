<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pulau;
use Illuminate\Http\Request;

class PulauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pulau = Pulau::orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => 'success',
            'data' => $pulau
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pulau $pulau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pulau $pulau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pulau $pulau)
    {
        //
    }
}
