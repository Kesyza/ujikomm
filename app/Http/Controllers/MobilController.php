<?php

namespace App\Http\Controllers;

use Alert;
use Validator;
use App\Models\Merek;
use App\Models\Mobil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::with('merek')->get();
        return view('admin.mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merek = Merek::all();
        return view('admin.mobil.create', compact('merek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nama_mobil' => 'required',
        //     'gambar' => 'required|image|max:2048',
        //     'id_merek' => 'required',
        //     'nomor_polisi' => 'required',
        //     'warna_mobil' => 'required',
        //     'tahun_pembuatan' => 'required',
        //     'status' => 'required',
        //     'harga_sewa' => 'required',
        //     'denda' => 'required',
        // ]);

        $rules = [
            'nama_mobil' => 'required|max:255|unique:mobils',
            // 'gambar' => 'required|image|max:2048|unique:mobils',
            'id_merek' => 'required',
            'nomor_polisi' => 'required|unique:mobils',
            'warna_mobil' => 'required',
            'tahun_pembuatan' => 'required',
            'status' => 'required',
            'harga_sewa' => 'required|numeric',
            'denda' => 'required|numeric',
        ];

        $message = [
            'nama_mobil.required' => 'Nama mobil harus diisi',
            'nama_mobil.unique' => 'Nama mobil sudah digunakan',
            'nama_mobil.max' => 'Nama mobil maksimal 255 karakter',
            // 'gambar.required' => 'Gambar harus diisi',
            // 'gambar.image' => 'Gambar harus berupa file foto',
            // 'gambar.unique' => 'Gambar sudah digunakan',
            'id_merek.required' => 'Nama merek harus diisi',
            'nomor_polisi.required' => 'Nomor polisi harus diisi',
            'nomor_polisi.unique' => 'Nomor polisi sudah digunakan',
            'warna_mobil.required' => 'Warna mobil harus diisi',
            'tahun_pembuatan.required' => 'Tahun pembuatan harus diisi',
            'status.required' => 'Status harus diisi',
            'harga_sewa.required' => 'Harga sewa harus diisi',
            'harga_sewa.numeric' => 'Harga sewa harus berupa angka',
            'denda.required' => 'Denda harus diisi',
            'denda.numeric' => 'Denda harus berupa angka',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input tidak valid, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $mobil = new Mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) .  $image->getClientOriginalName();
            $image->move('image/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->id_merek = $request->id_merek;
        $mobil->nomor_polisi = $request->nomor_polisi;
        $mobil->warna_mobil = $request->warna_mobil;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->status = $request->status;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->denda = $request->denda;
        $mobil->save();
        Alert::success('Bagus...', 'Data berhasil ditambah');
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        $merek = Merek::all();
        return view('admin.mobil.edit', compact('mobil', 'merek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama_mobil' => 'required',
        //     'gambar' => 'required|image|max:2048',
        //     'id_merek' => 'required',
        //     'nomor_polisi' => 'required',
        //     'warna_mobil' => 'required',
        //     'tahun_pembuatan' => 'required',
        //     'status' => 'required',
        //     'harga_sewa' => 'required',
        //     'denda' => 'required',
        // ]);

        $rules = [
            'nama_mobil' => 'required|max:255|unique:mobils',
            'gambar' => 'required|image|max:2048|unique:mobils',
            'id_merek' => 'required',
            'nomor_polisi' => 'required|unique:mobils',
            'warna_mobil' => 'required',
            'tahun_pembuatan' => 'required',
            'status' => 'required',
            'harga_sewa' => 'required|numeric',
            'denda' => 'required|numeric',
        ];

        $message = [
            'nama_mobil.required' => 'Nama mobil harus diisi',
            'nama_mobil.unique' => 'Nama mobil sudah digunakan',
            'nama_mobil.max' => 'Nama mobil maksimal 255 karakter',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.image' => 'Gambar harus berupa file foto',
            'gambar.unique' => 'Gambar sudah digunakan',
            'id_merek.required' => 'Nama merek harus diisi',
            'nomor_polisi.required' => 'Nomor polisi harus diisi',
            'nomor_polisi.unique' => 'Nomor polisi sudah digunakan',
            'warna_mobil.required' => 'Warna mobil harus diisi',
            'tahun_pembuatan.required' => 'Tahun pembuatan harus diisi',
            'status.required' => 'Status harus diisi',
            'harga_sewa.required' => 'Harga sewa harus diisi',
            'harga_sewa.numeric' => 'Harga sewa harus berupa angka',
            'denda.required' => 'Denda harus diisi',
            'denda.numeric' => 'Denda harus berupa angka',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input sudah digunakan, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $mobil = Mobil::findOrFail($id);
        $mobil->nama_mobil = $request->nama_mobil;
        if ($request->hasFile('gambar')) {
            $mobil->deleteImage();
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/mobil/', $name);
            $mobil->gambar = $name;
        }
        $mobil->id_merek = $request->id_merek;
        $mobil->nomor_polisi = $request->nomor_polisi;
        $mobil->warna_mobil = $request->warna_mobil;
        $mobil->tahun_pembuatan = $request->tahun_pembuatan;
        $mobil->status = $request->status;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->denda = $request->denda;
        $mobil->save();
        Alert::success('Mantap...', 'Data berhasil diedit');
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mobil = Mobil::findOrFail($id);
        // $mobil->delete();
        // return redirect()->route('mobil.index');

        if (!Mobil::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sip...', 'Data berhasil dihapus');
        return redirect()->route('mobil.index');
    }
}
