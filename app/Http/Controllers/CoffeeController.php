<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kopis = Coffee::all();
        return view('admin.listcoffee', [
            'kopis' => $kopis,
            'title' => 'List Coffee'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.list.tambah', [
            'kopi' => Coffee::all(),
            'title' => 'Create Coffee'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'kategori' => 'required|in:arabica,robusta,liberica,excelsa',
            'is_available' => 'required|boolean',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
        ]);

        // Handle file upload
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = time() . '_' . $gambar->getClientOriginalName();
            // Simpan ke storage/app/public/coffee-images
            $gambarPath = $request->file('gambar')->storeAs(
                'coffee-images',
                $filename,
                'public'  // Specify the public disk
            );
        }

        try {
            // Create new coffee record
            Coffee::create([
                'nama' => $validated['nama'],
                'deskripsi' => $validated['deskripsi'],
                'harga' => $validated['harga'],
                'stok' => $validated['stok'],
                'kategori' => $validated['kategori'],
                'is_available' => $validated['is_available'],
                'gambar' => $gambarPath ?? null,
            ]);

            return redirect()->route('listcoffee')
                ->with('success', 'Kopi berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
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
    public function destroy(Coffee $coffee)
    {
        try {
            // Delete the associated image if it exists
            if ($coffee->gambar && Storage::disk('public')->exists($coffee->gambar)) {
                Storage::disk('public')->delete($coffee->gambar);
            }

            // Delete the coffee record
            $coffee->delete();

            return redirect()->route('listcoffee')
                ->with('success', 'Kopi berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus data. Silakan coba lagi.');
        }
    }
}
