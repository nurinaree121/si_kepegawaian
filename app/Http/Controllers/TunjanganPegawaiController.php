<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TunjanganPegawai;
use Illuminate\Foundation\Validation\ValidatesRequests;


class TunjanganPegawaiController extends Controller
{

    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tunjangan = TunjanganPegawai::all();
        return view('tunjangan_pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tunjangan_pegawai.create');
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

        TunjanganPegawai::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/tunjangan');

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
        return view('tunjangan_pegawai.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id_tunjangan)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $tunjangan = TunjanganPegawai::find($id_tunjangan);

        $tunjangan->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/tunjangan');
    }

    public function delete($id_tunjangan)
    {
        $tunjangan = TunjanganPegawai::find($id_tunjangan);
        return view('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_tunjangan)
    {
        $tunjangan = TunjanganPegawai::find($id_tunjangan);
        // File::delete('img_categories/'.$category->gambar);
        // $category->delete();
        return redirect('/absen');
    }
}
