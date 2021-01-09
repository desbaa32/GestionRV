<?php

namespace App\Http\Controllers;

use App\Models\Medcin;
use Illuminate\Http\Request;

class MedcinController extends Controller
{
    //
    public function getAll()
    {
        //$medecins = Medcin::all();
        $medecins = Medcin::paginate(3);
        return (view('medecin.list', compact('medecins')));
    }
    public function edit($id)
    {
        $medecin = Medcin::find($id);
        return (view('medecin.edit', compact('medecin')));
    }
    public function update(Request $request)
    {
        $medecin = Medcin::find($request->id);
        $medecin->nom = $request->nom;
        $medecin->prenom = $request->prenom;
        $medecin->telephone = $request->telephone;
        $result = $medecin->save();
        //return (view('medecin.add', ['confirmation' => $result]));
        return $this->getAll();
    }
    public function add()
    {
        return (view('medecin.add'));
    }
    public function delete($id)
    {
        $medecin = Medcin::find($id);
        if ($medecin != null) {
            $medecin->delete();
        }
        return $this->getAll();
    }
    public function traiteForm(Request $request)
    {
        //  echo "le nom saisie $request->nom ,le prenom : $request->prenom et le phone : $request->telephone";

        $medecin = new Medcin();
        $medecin->nom = $request->nom;
        $medecin->prenom = $request->prenom;
        $medecin->telephone = $request->telephone;
        $result = $medecin->save();
        return (view('medecin.add', ['confirmation' => $result]));
        // return (view('medecin.add', ["non ajouter" => "$var"]));
    }
}
