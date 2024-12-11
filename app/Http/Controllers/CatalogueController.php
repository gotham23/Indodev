<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{

    public function index()
    {
        $catalogues = Catalogue::all();
        return view('catalogue.index', compact('catalogues'));
    }

    
    public function create()
    {
        return view('catalogue.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'beams' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        Catalogue::create($request->all());

        return redirect()->route('catalogue.index')->with('success', 'Katalog berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $catalogue = Catalogue::findOrFail($id);
        return view('catalogue.edit', compact('catalogue'));
    }


    public function update(Request $request, $id)
    {
        $catalogue = Catalogue::findOrFail($id);

        $request->validate([
            'beams' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $catalogue->update($request->all());

        return redirect()->route('catalogue.index')->with('success', 'Katalog berhasil diperbarui!');
    }

   
    public function destroy($id)
    {
        $catalogue = Catalogue::findOrFail($id);
        $catalogue->delete();

        return redirect()->route('catalogue.index')->with('success', 'Katalog berhasil dihapus!');
    }
}
