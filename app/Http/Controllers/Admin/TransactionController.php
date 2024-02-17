<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



     public function create() {
        return view('admin.transactions.create');
     }

     public function store(TransactionRequest $request)
     {

         if($request->file('image')){
             $file= $request->file('image');
             $image  = $file->getClientOriginalName();
             $file-> move(public_path('transactions'), $image);
         }

         $prestations =  Transaction::create([
         'title' =>$request->input('title'),
         'slug' =>\Str::slug($request->input('title')),
         'mini_description' => $request->input('mini_description'),
         'description' => $request->input('description'),
         'image' => $image
         ]);

      return redirect()->back();


     }
}
