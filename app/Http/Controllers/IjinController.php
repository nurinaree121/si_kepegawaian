<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ijin;
use Illuminate\Foundation\Validation\ValidatesRequests;

class IjinController extends Controller
{

    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ijin = Ijin::all();
        return view('ijin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ijin.create');
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

        Ijin::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/ijin');

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
        return view('ijin.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id_ijin)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]); 

        $ijin = Ijin::find($id_ijin);

        $ijin->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/ijin');
    }

    public function delete($id_ijin)
    {
        $ijin = Ijin::find($id_ijin);
        return view('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id_ijin)
    {
        $ijin = Ijin::find($id_ijin);
        // File::delete('img_categories/'.$category->gambar);
        // $category->delete();
        return redirect('/ijin');
    }
}
