<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gaji;

use Illuminate\Foundation\Validation\ValidatesRequests;

class GajiController extends Controller
{

    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gaji = Gaji::all();
        return view('gaji.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gaji.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        Gaji::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/gaji');
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
        return view('gaji.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id_gaji)
    {
        $this->validate($request, [
            'gaji_pokok' => 'required',
            'golongan' => 'required',
            'id_pegawai' => 'required',
        ]);

        $gaji = Gaji::find($id_gaji);

        $gaji->update([
            'gaji_pokok' => $request->gaji_,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/gaji');
    }

    public function delete($id_gaji)
    {
        $gaji = Gaji::find($id_gaji);
        return view('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_gaji)
    {
        $gaji = Gaji::find($id_gaji);
        // File::delete('img_categories/'.$category->gambar);
        // $category->delete();
        return redirect('/gaji');
    }
}
