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
use Illuminate\Support\Facades\Mail;
use App\Mail\MailEtudiant;

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
        $seance = Seance::where('id_seance', '=', $request->only('seance'))->first();
        if (!$seance) {
            return redirect()->route('prof.account');
        }
        
        
        $a = Absence::create([
            'id' => null,
            'id_prof' => $user->id,
            'id_seance' => $seance->id_seance,
            'retard' => $retard,
            'absences' => $abs
        ]);
        $a->save();

        $this->sendEmail(/**$user->email*/);
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

    public function sendEmail(/**$email*/)
    {
        $data['title'] = "This is Test Mail Tuts Make";
 
        Mail::send('emails.email', $data, function($message) {
 
            $message->to('islemlabidi1205@gmail.com', 'Projet LARAVEL')
 
                    ->subject('Absence');
        });
 
    }

}