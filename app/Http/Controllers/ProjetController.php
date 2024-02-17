<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class ProjetController extends Controller
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
        return view('admin.projets.liste', [
            'allProjets'=> Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projets.create');
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
            $img->save(public_path('projets/images/'.$filename));
         }
       Project::create([
            'title' => $data['title'],
            'slug' =>Str::slug($data['title']),
             'image' =>$filename,
             'description' =>$data['description'],
        ]);
      return redirect()->route('projet.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ressource = Project::find($id);
        return view('admin.projets.edit',compact('ressource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ressource  = Project::find($id);
        $ressource->title = $request->input('title');
        $ressource->description = $request->input('description');
        if($request->hasFile('image')) {
            $chemin = 'projets/images/'.$ressource->image;
            if(File::exists($chemin)) {
            $docs =    File::delete($chemin) ;
            }
                $file = $request->file('image');
                $filename  = $file->getClientOriginalName();
                $img = Image::make($file->getRealPath());
                $img->resize(508, 320);
                $img->save(public_path('projets/images/'.$filename));
                $ressource->image  = $filename;
         }
         $ressource->update();
         return redirect()->route('projet.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $destroy = Project::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
