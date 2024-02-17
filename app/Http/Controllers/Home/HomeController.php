<?php

namespace App\Http\Controllers\Home;

use notify;
use App\Models\Project;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * DB::select("select top 5 * from actualites  order by created_at desc")
     */
    public function index()
    {
        return view('welcome', [
            'allProjets'=> Project::take(3)->orderByDesc('created_at')->get(),
            'allActualites'=> DB::select("SELECT * from actualites order by rand() desc limit 3")
        ]);
    }

    public function actualites() {
        return view('home.blog', [
            'allActualites'=> Actualite::all()
        ]);
    }

    public function contact() {
        return view('contact');
    }

    public function projet() {
        return view('home.projet', [
            'allProjects'=> Project::all()
        ]);
    }



    public function service()
        {
        return view('home.services', [
            'allServices'=> Service::all()
        ]);
        }

    /**
     * Store a newly created resource in storage.
     */
    public function contactsave(ContactRequest $request)
    {
        $data = $request->input();
        Mail::to('kgsdev8@gmail.com')->send(new ContactMail($data['name'], $data['name'], $data['email'], $data['message']));
        Alert::success('Message envoyé', 'Votre message a été envoyé avec success');
        return redirect()->back();
    }


}
