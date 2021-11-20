<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return view('datamahasiswa',compact('data'));
    }

    public function tambahmahasiswa() {
        return view('tambahdata');
    }

    public function insertdata(Request $request) {
        // dd($request->all());
        $data = Mahasiswa::create($request->all());
        if ( $request->hasfile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('mahasiswa')->with('success','Data berhasil ditambahkan');
    }

    public function tampilkandata($id) {
        $data = Mahasiswa::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data berhasil diupdate');
    }

    public function delete($id) {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data berhasil dihapus');
    }
}
