<?php

namespace App\Http\Controllers;

use App\Prof;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profs = Prof::latest()->paginate(5);

        return view('prof.index',compact('profs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prof.create');
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

        $user->role = "prof";
        $user->save();

        $etud = new Prof;
        $etud->id_user = $user->id;    
        $etud->name = $request->name;
        $etud->tel = $request->tel;    
        $etud->save();
   
        return redirect()
                    ->route('prof.index')
                    ->with('success','Prof created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prof $prof)
    {
        var_dump($prof) or die;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prof $prof)
    {
        return view('prof.edit', compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prof $prof)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
        ]);
 

        $user = User::find($prof->id_user);
        
        
        $email = $request->email !== null ? $request->email : $user->email;

        $user->email = $email;

        $user->save();

        $prof->update($request->all());
  
        return redirect()
                ->route('prof.index')
                ->with('success','Prof updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prof::destroy($id);

        return redirect()
                ->route('prof.index')
                ->with('success','Prof deleted successfully');
    }
}
