<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
    public function store(Request $request) {
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
            $img->resize(508, 320);
            $img->save(public_path('services/images/'.$filename));
         }

       Service::create([
            'title' => $data['title'],
            'slug' =>Str::slug($data['title']),
             'image' =>$filename,
             'description' =>$data['description'],
        ]);
      return redirect()->route('services.index');

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
