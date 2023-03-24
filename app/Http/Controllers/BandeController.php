<?php

namespace App\Http\Controllers;

use App\Models\Bande;
use App\Models\Artiste;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class BandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bandes = Bande::latest()->get();

        return view('bandes.index', compact('bandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistes = Artiste::all();

        return view('bandes.create', compact('artistes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // Validate input
        $request->validate([
            'nom' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pays' => 'required',
            'date_creation' => 'required|date',
            'artistes' => 'required|array',
            'artistes.*' => 'exists:artistes,id'
        ]);

        // dd($request);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/bandes';
            $bandeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $bandeImage);
            $input['image'] = "$bandeImage";
        }



        // Create new Bande instance and save to database
        $bande = new Bande;
        $bande->nom = $request->nom;
        // $bande->image = $request['image'];
        $bande->image = $bandeImage;
        $bande->pays = $request->pays;
        $bande->date_creation = $request->date_creation;
        $bande->save();

        // dd($request);

        // Attach selected Artistes to the Bande
        $bande->artistes()->attach($request->artistes);

        return redirect()->route('bandes.index')->with('success', 'Bande créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bande $bande)
    {
        $artistes = Artiste::all();

        return view('bandes.edit', compact('bande', 'artistes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bande $bande)
    {
        // Validate input
        $request->validate([
            'nom' => 'sometimes',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pays' => 'sometimes',
            'date_creation' => 'sometimes|date',
            'artistes' => 'sometimes|array',
            'artistes.*' => 'exists:artistes,id'
        ]);
         
        // dd($request);
        // Save image file to storage

        if ($image = $request->file('image')) {
            $destinationPath = 'images/bandes';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        // Update Bande instance in database
        $bande->nom = $request->nom;
        $bande->image = $profileImage;
        $bande->pays = $request->pays;
        $bande->date_creation = $request->date_creation;
        $bande->save();

        // Sync selected Artistes to the Bande
        $bande->artistes()->sync($request->artistes);

        return redirect()->route('bandes.index')->with('success', 'Bande modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bande $bande)
    {
        $bande->artistes()->detach();

        $bande->delete();

        return redirect()->route('bandes.index')->with('success', 'Bande supprimée avec success');
    }
}
