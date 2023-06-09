<?php

namespace App\Http\Controllers\Home;

use notify;
use App\Models\Contact;
use App\Models\Prestation;
use App\Models\Transaction;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $prestations = Prestation::all();
        $transactions =Transaction::all();
        return view('welcome', compact('prestations', 'transactions'));
    }

    public function contact() {
        return view('contact');
    }

    public function prestationDetail($slug) {

        $ressource =  Prestation::where('slug', $slug)->first();
       
        return view('home.prestationdetail', compact('ressource'));
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
    public function contactsave(ContactRequest $request)
    {
        $data = $request->input();

        Contact::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'message' => $data['message']
        ]);
        Flashy::message('Message envoyé avec succes!', 'http://your-awesome-link.com');
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
