<?php

namespace App\Http\Controllers;

use App\Models\Hitung;
use Illuminate\Http\Request;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required',
            'phone' => 'bail|required',
            'type' => 'bail|required',
        ]);

        $project = new Hitung();
        $project->name = $request->name;
        $project->phone = ltrim($request->phone, "0");
        $project->type = $request->type;
        $project->save();

        return
            redirect()->route('home')->with(['pesan' => 'Kami akan segera menghubungi Anda', 'level-alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hitung $hitung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hitung $hitung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hitung $hitung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hitung $hitung)
    {
        //
    }
}
