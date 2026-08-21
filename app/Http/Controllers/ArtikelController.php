<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cms.artikel.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::where('jenis', 'artikel')->get();
        $statuses = Status::all();

        return view('cms.artikel.create', compact('kategoris', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $validated = $request->validate([
            'judul' => 'required|string|max:100',
            'kategori_id' => 'required|integer|max:10',
            'penulis' => 'required|string|max:100',
            'ringkasan' => 'required|string',
            'isi_artikel' => 'required|string',
            'status_id' => 'required|integer|max:10'
        ]);

        try {
            Artikel::create([
                'judul' => $validated['judul'],
                'kategori_id' => $validated['kategori_id'],
                'penulis' => $validated['penulis'],
                'ringkasan' => $validated['ringkasan'],
                'isi_artikel' => $validated['isi_artikel'],
                'status_id' => $validated['status_id'],
            ]);

            return redirect()
                ->route('cms.artikel.index')
                ->with('success', 'Data created successfully!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to create data!');
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
