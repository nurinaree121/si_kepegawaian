<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{

    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai= Pegawai::all();
        return  view('pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'agama' => 'required',
            'pendidikan' => 'required',
            'status_kepegawaian' => 'required',
            'alamat' => 'required',
            
        ]);

        $foto = $request->file('foto');
        $nama_foto = time() . '_' . $foto->getClientOriginalName();
        $tujuan_upload = 'img_categories';
        $foto->move($tujuan_upload, $nama_foto);

        Pegawai::create([
            'username' => $request->username,
            'password' => $request->password,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $foto,
            'agama' => $request->nip,
            'pendidikan' => $request->nip,
            'status_kepegawaian' => $request->nip,
            'alamat' => $request->nip,
        ]);

        return redirect('/pegawai');

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
        return view('pegawai.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $pegawai = Pegawai::find($id);

        if($request->hasFile('foto')){

            File::delete('img_pegawai/'.$pegawai->foto);
            $foto = $request->file('foto');
            $nama_foto = time() . '_' . $foto->getClientOriginalName();
            $tujuan_upload = 'img_pegawai';
            $foto->move($tujuan_upload, $nama_foto);
            $pegawai->foto = $nama_foto;
        }

        $pegawai->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/pegawai');

    }

    public function delete($id_categories)
    {
        $pegawai = Pegawai::find($id_categories);
        return view('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);
        // File::delete('img_categories/'.$category->gambar);
        // $category->delete();
        return redirect('/pegawai');
    }
}
