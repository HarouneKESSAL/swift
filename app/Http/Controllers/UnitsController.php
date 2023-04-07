<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Unit;

class unitsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $units =  unit::orderBy('title','desc')->get();
        $units =  Unit::orderBy('created_at','desc')->paginate(5);
        return view('units.index')->with('units',$units);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'nomUnite' => 'required|max:255',
            'adresse' => 'required|max:255',
            'ville' => 'required',
            'codePostal' => 'required',
            'responsable'=> 'required',
            'type'=>'required',
        ]); 
       


        $unit = new Unit();
        $unit->nomUnite = $request->input('nomUnite');
        $unit->adresse = $request->input('adresse');
        $unit->ville = $request->input('ville');
        $unit->codePostal = $request->input('codePostal');
        $unit->responsable = $request->input('responsable');
        $unit->type = $request->input('type');
        

        $unit->save();

        return redirect('/units')->with('success','unit Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $unit = Unit::find($id);
        return view('units.show')->with('unit',$unit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $unit = unit::find($id);
        
        // if (auth()->user()->id !== $unit->user_id) {
        //      return redirect('/units')->with('error','Unauthorized Page');
        // }

        return view('units.edit')->with('unit',$unit);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nomUnite' => 'required|max:255',
            'adresse' => 'required|max:255',
            'ville' => 'required',
            'codePostal' => 'required',
            'responsable'=> 'required',
            'type'=>'required',
            
        ]);

        
        

        $unit = new Unit();
        $unit->nomUnite = $request->input('nomUnite');
        $unit->adresse = $request->input('adresse');
        $unit->ville = $request->input('ville');
        $unit->codepostal = $request->input('codepostal');
        $unit->responsable = $request->input('responsable');
        $unit->type = $request->input('type');
        $unit->user_id = auth()->user()->id;

        
        
        $unit->save();

        return redirect('/units')->with('success','unit Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $unit = Unit::find($id);
    //     if (auth()->user()->id !== $unit->user_id) {
    //         return redirect('/units')->with('error','Unauthorized Page');
    //    }
      
        $unit->delete();

        return redirect('/units')->with('success','unit Deleted');

    }
}
