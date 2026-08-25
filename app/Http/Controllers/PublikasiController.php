<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Publikasi;
use App\Models\Status;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::where('jenis', 'publikasi')->get();
        $statuses = Status::all();

        return view('cms.publikasi.create', compact('kategoris', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'status_id' => 'required|integer|max:10',
            'kategori_id' => 'required|integer',
            'thumbnail_id' => 'required|integer',
            'doc_id' => 'required|integer',
            'judul' => 'required|string|max:100',
            'edisi_or_vol' => 'string|max:100',
            'ringkasan' => 'required|string',
        ]);

        try {
            Publikasi::create([
                'status_id' => $validated['status_id'],
                'kategori_id' => $validated['kategori_id'],
                'thumbnail_id' => $validated['thumbnail_id'],
                'doc_id' => $validated['doc_id'],
                'judul' => $validated['judul'],
                'edisi_or_vol' => $validated['edisi_or_vol'],
                'ringkasan' => $validated['ringkasan'],
            ]);

            return redirect()
                ->route('cms.publikasi.index')
                ->with('success', 'Data berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal menyimpan data!');
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
