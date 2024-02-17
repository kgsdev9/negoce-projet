<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prestation;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrestationRequest;
use Illuminate\Support\Facades\File;

class PrestationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
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
     * Store a newly created resource in storage.,
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
        'categorie' => $request->input('categorie'),
        'description' => $request->input('description'),
        'image' => $image
        ]);

     return redirect()->route('prestation.store', ['success' => true]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ressource= Prestation::find($id);
        return view('admin.prestations.edit', compact('ressource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrestationRequest $request, Prestation $prestation)
    {
        if($request->hasFile('image')) {
            $chemin = 'prestations/'.$prestation->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
            $file = $request->file('image');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('prestations/' , $filename);
            $prestation->image  = $filename;
         }

        $prestation->title = $request->input('title');
        $prestation->slug = \Str::slug($request->input('title'));
        $prestation->categorie = $request->input('categorie');
        $prestation->description = $request->input('description');
        $prestation->update();
        return redirect()->route('prestation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ressource = Prestation::find($id);
        $ressource->delete();
        return redirect()->back();
    }
}
