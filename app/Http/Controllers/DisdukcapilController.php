<?php

namespace App\Http\Controllers;

use App\Models\Disdukcapil;
use Illuminate\Http\Request;

class DisdukcapilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get search keyword from query string
        $search = $request->input('search');
        
        // Query data Disdukcapil
        $disdukcapil = Disdukcapil::query()
            ->when($search, function ($query) use ($search) {
                $query->where('nik', 'LIKE', "%$search%");
            })
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('pages.disdukcapil.index', compact('disdukcapil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.disdukcapil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nik' => 'required',
            'namalengkap' => 'required',
            'alamat' => 'required',
            'nomorhp' => 'required',
        ]);

        // Create new Disdukcapil instance
        $disdukcapil = new Disdukcapil();
        $disdukcapil->nik = $request->nik;
        $disdukcapil->namalengkap = $request->namalengkap;
        $disdukcapil->alamat = $request->alamat;
        $disdukcapil->nomorhp = $request->nomorhp;
        $disdukcapil->save();

        return redirect()->route('disdukcapil.index')->with('success', 'Data disdukcapil telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $disdukcapil = Disdukcapil::findOrFail($id);
            return view('pages.disdukcapil.show', compact('disdukcapil'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('disdukcapil.index')->with('error', 'Data tidak ditemukan.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $disdukcapil = Disdukcapil::findOrFail($id);
            return view('pages.disdukcapil.edit', compact('disdukcapil'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('disdukcapil.index')->with('error', 'Data tidak ditemukan.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $disdukcapil = Disdukcapil::findOrFail($id);

            // Validate the request data
            $request->validate([
                'nik' => 'required',
                'namalengkap' => 'required',
                'alamat' => 'required',
                'nomorhp' => 'required',
            ]);

            // Update the Disdukcapil instance
            $disdukcapil->update([
                'nik' => $request->nik,
                'namalengkap' => $request->namalengkap,
                'alamat' => $request->alamat,
                'nomorhp' => $request->nomorhp,
            ]);

            return redirect()->route('disdukcapil.index')->with('success', 'Data disdukcapil telah berhasil diperbarui.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('disdukcapil.index')->with('error', 'Data tidak ditemukan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $disdukcapil = Disdukcapil::findOrFail($id);
            $disdukcapil->delete();
            return redirect()->route('disdukcapil.index')->with('success', 'Data disdukcapil berhasil dihapus.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('disdukcapil.index')->with('error', 'Data tidak ditemukan.');
        }
    }
}
