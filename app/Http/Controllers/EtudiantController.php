<?php

namespace App\Http\Controllers;
use App\Etudiant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::latest()->paginate(5);
  
        return view('etudiant.index',compact('etudiants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' =>'required',
            'password' =>'required|required_with:password_confirmation|same:password_confirmation',
            'tel' => 'required',
        ]);

        $user = new User; 
        $user->email = $request->email;
        $password = Hash::make($request->password);
        $user->password = $password;

        $user->role = "etudiant";
        $user->save();

        $etud = new Etudiant;
        $etud->id_user = $user->id;    
        $etud->name = $request->name;
        $etud->tel = $request->tel;    
        $etud->save();
   
        return redirect()->route('etudiant.index')
                        ->with('success','Etudiant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show',compact('etudiant'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        return view('etudiant.edit',compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
        ]);

        $user = User::find($etudiant->id_user);
        
        $user->email = $request->email;

        $user->save();

        $etudiant->update($request->all());
  
        return redirect()->route('etudiant.index')
                        ->with('success','Etudiant updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
  
        return redirect()->route('etudiant.index')
                        ->with('success','Etudiant deleted successfully');
    
    }
}
