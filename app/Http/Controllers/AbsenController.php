<?php

namespace App\Http\Controllers;
use App\Models\Absen;
use Illuminate\Http\Request;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{

    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
     {
         $absens = DB::table('absen')->get();
         return view('absen.index', compact('absens'));
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $absen= Absen::all();
        return view('absen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate input
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_masuk' => 'required|string|max:255',
            'jam_keluar' => 'required|string|max:255',
            // Add validation for pegawai_id
            'pegawai_id' => 'required|integer|exists:pegawai,id',
        ]);

        // Create Absen instance
        $absen = new Absen;
        $absen->tanggal = $validatedData['tanggal'];
        $absen->jam_masuk = $validatedData['jam_masuk'];
        $absen->jam_keluar = $validatedData['jam_keluar'];

        // Set pegawai_id using validated data
        $absen->pegawai_id = $validatedData['pegawai_id'];

        // Save Absen
        $absen->save();

        // Refresh absen data
        $absen = Absen::all(); // Retrieve all absen records

        // Redirect to appropriate route
        // return redirect()->route('absens.index');

        // $validatedData = $request->validate([
        //     'tanggal' => 'required|date',
        //     'jam_masuk' => 'required|string|max:255',
        //     'jam_keluar' => 'required|string|max:255',
        // ]);

        // Absen::create($validatedData);

        // return redirect()->route('departments.index');
        // Validasi input
        // $request->validate([
        //     'tanggal' => 'required|date',
        //     'jam_masuk' => 'required|string|max:255',
        //     'jam_keluar' => 'required|string|max:255',
        // ]);
        
        // Menyimpan data ke database menggunakan query builder
        // DB::table('absen')->insert([
        //     'tanggal' => $request->input('tanggal'),
        //     'jam_masuk' => $request->input('jam_masuk'),
        //     'jam_keluar' => $request->input('jam_keluar'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Redirect setelah penyimpanan berhasil
        return redirect()->route('absens.index')->with('success', 'Absen berhasil ditambahkan!');
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
        $absen = DB::table('absen')->where('id', $id)->first();
        return view('absen.edit', compact('absen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_masuk' => 'required|string|max:255',
            'jam_keluar' => 'required|string|max:255',
        ]);

        DB::table('absen')
            ->where('id', $id)
            ->update([
                'tanggal' => $validatedData['tanggal'],
                'jam_masuk' => $validatedData['jam_masuk'],
                'jam_keluar' => $validatedData['jam_keluar'],
                'id_pegawai' => $validatedData['id_pegawai'],
                'updated_at' => now(),
            ]);

        return redirect()->route('absenindex')->with('success', 'Absen berhasil diperbarui!');

    }


    public function delete($id_absen)
    {
        $absen = Absen::find($id_absen);
        return view('');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id_absen)
    {
        $absen = Absen::find($id_absen);
        // File::delete('img_categories/'.$category->gambar);
        // $category->delete();
        return redirect('/absen');

    }
}
