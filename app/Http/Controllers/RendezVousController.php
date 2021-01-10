<?php

namespace App\Http\Controllers;

use App\Models\Medcin;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RendezVousController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        $medecins = Medcin::all();
        return view('rendezvous.add', compact('medecins'));
    }

    public function getAll()
    {
        //$medecins = Medcin::all();
        $rendezvouss = RendezVous::all();
        return (view('rendezvous.list', compact('rendezvouss')));
    }
    public function edit($id)
    {
        $rendezvous = RendezVous::find($id);
        return (view('rendezvous.edit', compact('rendezvous')));
    }
    public function update(Request $request)
    {
        $rendezvous = Medcin::find($request->id);
        $rendezvous->libelle = $request->libelle;
        $rendezvous->date = $request->date;
        $rendezvous->medcins_id = $request->medcins_id;
        $rendezvous->users_id = Auth::user()->id;
        $rendezvous->save();
        /*  return $this->getAll(); */
        return Redirect('/rendezvous/list');
    }
    public function delete($id)
    {
        $rendezvous = RendezVous::find($id);
        if ($rendezvous != null) {
            $rendezvous->delete();
        }
        return $this->getAll();
    }
    public function traiteFormRv(Request $request)
    {
        //  echo "le nom saisie $request->nom ,le prenom : $request->prenom et le phone : $request->telephone";
        // $medecins = $request->medecins;
        $rendezvous = new RendezVous();
        $rendezvous->libelle = $request->libelle;
        $rendezvous->date = $request->date;
        $rendezvous->medcins_id = $request->medcins_id;
        $rendezvous->users_id = Auth::user()->id;
        $result = $rendezvous->save();
        $medecins = Medcin::all();
        return (view('rendezvous.add', ['confirmation' => $result, 'medecins' => $medecins]));
        // return (view('rendezvous.add', ["non ajouter" => "$var"]));
    }
}
