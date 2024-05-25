<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class JabatanController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */

     //digunakan untuk menampilkan daftar jabatan yang tersimpan dalam database.
     public function index()
     {
         $jabatans = DB::table('jabatan')->get();
 
         return view('jabatan.index', compact('jabatans'));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
            'golongan' => 'required|string|max:255',
            'tunjangan' => 'required|numeric',
        ]);
        
        // Menyimpan data ke database menggunakan query builder
        DB::table('jabatan')->insert([
            'nama_jabatan' => $request->input('nama_jabatan'),
            'golongan' => $request->input('golongan'),
            'tunjangan' => $request->input('tunjangan'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect setelah penyimpanan berhasil
        return redirect()->route('jabatanindex')->with('success', 'Jabatan berhasil ditambahkan!');
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
    public function edit($id)
    {
        //untuk mengambil data jabatan berdasarkan ID
        $jabatan = DB::table('jabatan')->where('id', $id)->first();
        return view('jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        //validasi terhadap data yang dikirimkan
        $validatedData = $request->validate([
            'nama_jabatan' => 'required|string|max:255',
            'golongan' => 'required|string|max:255',
            'tunjangan' => 'required|numeric',
        ]);

        //melakukan update data jabatan pada tabel jabatan di database
        DB::table('jabatan')
            ->where('id', $id)
            ->update([
                'nama_jabatan' => $validatedData['nama_jabatan'],
                'golongan' => $validatedData['golongan'],
                'tunjangan' => $validatedData['tunjangan'],
                'updated_at' => now(),
            ]);
        // Redirect setelah update berhasil
        return redirect()->route('jabatanindex')->with('success', 'Jabatan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        //digunakan untuk menghapus data jabatan dari database berdasarkan ID yang diberikan
        DB::table('jabatan')->where('id', $id)->delete();
        // Redirect setelah dihapus berhasil
        return redirect()->route('jabatanindex')->with('delete', 'Jabatan berhasil dihapus!');
    }

    public function CetakPdf(){
        //untuk mengambil semua data dari tabel jabatan di database
        $jabatans = DB::table('jabatan')->get();
        //untuk memuat view bernama jabatan.CetakPdf
        $pdf= FacadePdf::loadview('jabatan.CetakPdf',compact('jabatans'));
        //mengembalikan respon untuk mengunduh file PDF yang telah dihasilkan
        return $pdf->download('DataJabatan.Pdf');
    }
  
    

    /**
     * Remove the specified resource from storage.
     */



    // public function generateJabatanReport()
    // {
    //     $data = Jabatan::all(); // Contoh data untuk laporan
    //     $pdf = PDF::loadView('laporan.jabatan', compact('data'));
    //     return $pdf->download('laporan_jabatan.pdf');
    // }
}
