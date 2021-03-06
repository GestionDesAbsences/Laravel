<?php
namespace App\Http\Controllers;

use App\Absence;
use App\Conge;
use App\Http\Controllers\Controller;
use App\Prof;
use App\Seance;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfAccountController extends Controller {

    public function home() {
        $user = Auth::user();
        $prof = Prof::find($user->id);
        $seances = Seance::all();

        return view('account.prof.home', [
            'prof' => $prof,
            'seances' => $seances
        ]);
    }

    public function absence(Request $request) {
        $request->validate([
            'type' => 'required',
            'seance' =>'required'
        ]);

        $user = Auth::user();
        $retard = (int)($request->only('type')['type'] === 'retard');
        $abs = (int)($request->only('type')['type'] == 'absence');
        $seance = Seance::where('id_seance', '=', $request->only('seance'))->firstOrFail();
        
        $a = Absence::create([
            'id' => null,
            'id_prof' => $user->id,
            'id_seance' => $seance->id_seance,
            'retard' => $retard,
            'absences' => $abs
        ]);
        $a->save();

        return redirect()->route('prof.account')
            ->with('success', 'Absence Ajouter Avec Success');
    }

    public function conge(Request $request) {
        $request->validate([
            'raison' => 'required'
        ]);

        $conge = new Conge();
        $conge->id_prof =Auth::user()->id;
        $conge->raison = $request->input('raison');
        $conge->approuve = false;
        $conge->start = new DateTime('now');
        $conge->end = new DateTime('now');

        $conge->save();

        return $this->redirect()->route('prof.account');
    }

}