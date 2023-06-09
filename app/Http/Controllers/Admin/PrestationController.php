<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prestation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrestationRequest;

class PrestationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   

        $ressource = Prestation::orderByDesc('created_at')->get();
        return view('admin.prestations.liste', compact('ressource'));
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prestations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrestationRequest $request)
    {   

        if($request->file('image')){
            $file= $request->file('image');
            $image  = $file->getClientOriginalName();
            $file-> move(public_path('prestations'), $image);
        }

        $prestations =  Prestation::create([
        'title' =>$request->input('title'),
        'slug' =>\Str::slug($request->input('title')),
        'mini_description' => $request->input('mini_description'),
        'description' => $request->input('description'),
        'image' => $image 
        ]);

     return redirect()->back();
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
