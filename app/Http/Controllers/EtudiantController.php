<?php

namespace App\Http\Controllers;

use App\Etudiant;

use Illuminate\Http\Request;
use App\Http\Requests\EtudiantRequest;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function viewModifier($id)
    {
        $etudiant = Etudiant::find($id);
        // $etudiant = Etudiant::where('id',$id)->first();
        return view('modification',compact('etudiant'));
    }

    public function store(EtudiantRequest $request)
    {
        $etudiant = new Etudiant();
        return $this->actionOnEtudiant($etudiant, $request->all());
    }
    public function update(EtudiantRequest $request)
    {
        $etudiant = Etudiant::find($request->id);
        return $this->actionOnEtudiant($etudiant, $request->all());
    }
    public function listEtudiants()
    {
        $etudiants = Etudiant::all();
        return view('etudiants', ['etudiants' => $etudiants]);
    }

    public function supprimer($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiants');
    }
    private function actionOnEtudiant(Etudiant $etudiantModel, $data){
        $etudiantModel->nom = $data['nom'];
        $etudiantModel->prenom = $data['prenom'];
        $etudiantModel->filiere = $data['filiere'];
        $etudiantModel->classe = $data['classe'];
        $etudiantModel->save();
        return redirect('/etudiants');
    }
}
