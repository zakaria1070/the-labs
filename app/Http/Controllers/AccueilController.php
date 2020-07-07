<?php

namespace App\Http\Controllers;

use App\AboutHome;
use App\Accueil;
use App\CardHome;
use App\Contact;
use App\NavLogo;
use App\NavTitre;
use App\PromotionHome;
use App\Service;
use App\TeamHome;
use App\Testi;
use App\Video;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navtitre = NavTitre::all();
        $navlogo = NavLogo::all();
        $cardhome = CardHome::all();
        $abouthome = AboutHome::all();
        $videos = Video::first();
        $testis = Testi::all();
        $services = Service::all();
        $teams = TeamHome::all();
        $promotions = PromotionHome::first();
        $contacts = Contact::first();
        return view('homes',compact('navtitre','navlogo','cardhome','abouthome','videos','testis','services','teams','promotions','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function show(Accueil $accueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function edit(Accueil $accueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accueil $accueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accueil $accueil)
    {
        //
    }
}
