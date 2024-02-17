<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actualite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class ActualiteController extends Controller
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
        return view('admin.actualites.liste', [
            'allActualites'=> Actualite::all()
        ]);
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.actualites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        Validator::make($data, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'

        ])->validate();

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $filename  = $file->getClientOriginalName();
            $img = Image::make($file->getRealPath());
            $img->resize(720, 408);
            $img->save(public_path('actualites/images/'.$filename));
         }

       Actualite::create([
            'title' => $data['title'],
            'slug' =>Str::slug($data['title']),
             'image' =>$filename,
             'description' =>$data['description'],
        ]);

      return redirect()->route('actualite.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ressource = Actualite::find($id);
        return view('admin.actualites.edit',compact('ressource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ressource  = Actualite::find($id);
        $ressource->title = $request->input('title');
        $ressource->description = $request->input('description');
        if($request->hasFile('image')) {
            $chemin = 'actualites/images/'.$ressource->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
                $file = $request->file('image');
                $filename  = $file->getClientOriginalName();
                $img = Image::make($file->getRealPath());
                $img->resize(508, 320);
                $img->save(public_path('actualites/images/'.$filename));
                $ressource->image  = $filename;
         }
         $ressource->update();
         return redirect()->route('actualite.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $destroy = Actualite::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
