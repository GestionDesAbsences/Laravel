<?php

namespace App\Http\Controllers;

use App\Absence;
use App\Conge;
use App\Etudiant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EtudiantAccountController extends Controller {

    public function home() {
        $user = Auth::user();
        $etudiant = Etudiant::find($user->id);
        return view('account.etudiant.home', [
            'etudiant' => $etudiant
        ]);
    }

    public function approuvedConge() {
        $conges = Conge::where('approuve', '=', '1')->get();

        return view('account.etudiant.approuved', [
            'conges' => $conges
        ]);
    }

}