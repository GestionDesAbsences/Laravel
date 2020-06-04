<?php

namespace App\Http\Controllers;

use App\Conge;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function index() {
        $conges = Conge::all();
        return view('conge.index', [
            'conges' => $conges
        ]);
    }

    public function approuve(int $id) {
        $conge = Conge::find($id);
        $conge->approuve = true;
        $conge->update();

        return redirect()->route('absence.index')->with('success', 'Conge Approuve Avec Success');
    }

}
