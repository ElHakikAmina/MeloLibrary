<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Models\Bande;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArtisteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistes = Artiste::all();

        return view('artistes.index', compact('artistes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bandes = Bande::latest()->get();

        return view('artistes.create', compact('bandes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pays' => 'required',
            'date_naissance' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/artistes';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Artiste::create($input);

        return redirect()->route('artistes.index')->with('Success', 'Artiste created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artiste $artiste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artiste $artiste)
    {
        return view('artistes.edit', compact('artiste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artiste $artiste)
    {
        $request->validate([
            'nom' => 'sometimes',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pays' => 'sometimes',
            'date_naissance' => 'sometimes',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/artistes';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
        $artiste->fill($input);
        $artiste->save();

        return redirect()->route('artistes.index')->with('success', 'Artiste update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artiste $artiste)
    {
        $artiste->delete();

        return redirect()->route('artistes.index');
    }
}
