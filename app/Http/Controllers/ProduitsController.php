<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitsController extends Controller
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
    $produits = Produit::all();
    return view('produits.index', compact('produits'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'required',   
        ]);
        
        $produits = new Produit();
        $produits->name = $request->input('name');
        $produits->description = $request->input('description');
        
      

        $produits->save();

        return redirect('/produits')->with('success','Produit Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $produit = Produit::find($id);
        return view('produits.show')->with('produit',$produit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $produit = Produit::find($id);
        
       

        return view('produits.edit')->with('produit',$produit);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'required',   
        ]);

        //Handle File Upload
      
    
        
       

        $produit = Produit::find($id);
      
        $produit->name = $request->input('name');
        $produit->description = $request->input('description');
        
      

        $produit->save();

        return redirect('/produits')->with('success','Produit Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $produit = Produit::find($id);
        if (!auth()->user()) {
            return redirect('/produits')->with('error','Unauthorized Page');
       }
      
        $produit->delete();

        return redirect('/produits')->with('success','produit Deleted');

    }
}
