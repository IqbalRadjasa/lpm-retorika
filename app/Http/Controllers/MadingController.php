<?php

namespace App\Http\Controllers;

use App\Models\Mading;
use App\Models\StatusMading;
use Illuminate\Http\Request;

class MadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mading = Mading::with(['status_mading', 'media_asset.media'])->first();
        // dd($mading);

        return view('cms.mading.index', compact('mading'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statusMadings = StatusMading::get();
        return view('cms.mading.create', compact('statusMadings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'status_mading_id' => 'required|integer',
            'media_id' => 'required|integer',
            'judul' => 'required|string|max:100',
        ]);

        try {
            // dd('success');
            Mading::create([
                'status_mading_id' => $validated['status_mading_id'],
                'media_id' => $validated['media_id'],
                'judul' => $validated['judul'],
            ]);

            return redirect()
                ->route('cms.mading.index')
                ->with('success', 'Data berhasil ditambah!');
        } catch (\Exception $e) {
            // dd($e);
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal menambahkan data!');
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
    public function edit(Mading $mading)
    {
        $mading->load(['status_mading', 'media_asset.media']);
        $statusMadings = StatusMading::get();
        // dd($statusMadings);
        return view('cms.mading.edit', compact(
            'mading',
            'statusMadings'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mading $mading)
    {
        // dd($request);
        $validated = $request->validate([
            'status_mading_id' => 'required|integer',
            'media_id' => 'required|integer',
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required|string',
        ]);

        try {
            // dd('success');
            $mading->update([
                'status_mading_id' => $validated['status_mading_id'],
                'media_id' => $validated['media_id'],
                'judul' => $validated['judul'],
                'deskripsi' => $validated['deskripsi']
            ]);

            return redirect()
                ->route('cms.mading.index')
                ->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            // dd($e);
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal memperbarui data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
