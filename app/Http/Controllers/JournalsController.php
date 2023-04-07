<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\Produit;

class JournalsController extends Controller
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
        $journals =  Journal::all();
        $produits = Produit::all(); 
        return view('index', compact('produits', 'journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produits = Produit::all();

        return view('journals.create', compact('produits'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'produit_id' => 'required',
            'production' => 'required',
            'vente' => 'required',
            'productionVendue' => 'required',
            'Description' => 'required',
        ]);

        $journal = new Journal();
        $journal->produit_id = $request->input('produit_id');
        $journal->production = $request->input('production');
        $journal->vente = $request->input('vente');
        $journal->productionVendue = $request->input('productionVendue');
        $journal->Description = $request->input('Description');
        $journal->save();

        return redirect('/journals')->with('success', 'Journal created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $journal = Journal::find($id);
        return view('journals.show')->with('journal',$journal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $journal = Journal::find($id);
        
       

        return view('journals.edit')->with('journal',$journal);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'produit_id'=>'required',
            'production' => 'required',
            'vente' => 'required',
            'productionVendue' => 'required',
            'Description' => 'required'
            
        ]);
        


        $journal = Journal::find($id);

        $journal->produit_id = $request->input('produit_id');
        $journal->production = $request->input('production');
        $journal->vente = $request->input('vente');
        $journal->productionVendue = $request->input('productionVendue');
        $journal->Description = $request->input('Description');
        
        $journal->save();

        return redirect('/journals')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $journal = Journal::find($id);
        
      
        $journal->delete();

        return redirect('/journals')->with('success','Post Deleted');

    }
}
