<?php

namespace App\Http\Controllers;

use Alert;
use Validator;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggan.create');
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
        //     'nama_pelanggan' => 'required',
        //     'nik' => 'required|numeric',
        //     'jenis_kelamin' => 'required',
        //     'alamat' => 'required',
        //     'nomor_hp' => 'required|numeric',
        //     'email' => 'required',
        // ]);

        $rules = [
            'nama_pelanggan' => 'required',
            'nik' => 'required|numeric|unique:pelanggans',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required|numeric|unique:pelanggans',
            'email' => 'required',
        ];

        $message = [
            'nama_pelanggan.required' => 'Nama pelanggan harus diisi',
            'nik.required' => 'NIK harus diisi',
            'nik.numeric' => 'NIK tidak bisa diisi oleh huruf',
            'nik.max' => 'NIK tidak boleh lebih dari 16 angka',
            'nik.unique' => 'NIK sudah digunakan',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'alamat.unique' => 'Alamat harus diisi',
            'nomor_hp.required' => 'Nomor telepon harus diisi',
            // 'nomor_hp.max' => 'Nomor telepon tidak boleh lebih dari 13 angka',
            'nomor_hp.numeric' => 'Nomor telepon tidak bisa diisi oleh huruf',
            'nomor_hp.unique' => 'Nomor telepon sudah digunakan',
            'email.required' => 'Email harus diisi',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input tidak valid, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $pelanggan = new Pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->nik = $request->nik;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->nomor_hp = $request->nomor_hp;
        $pelanggan->email = $request->email;
        $pelanggan->save();
        Alert::success('Bagus...', 'Data berhasil ditambah');
        return redirect()->route('pelanggan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama_pelanggan' => 'required',
        //     'nik' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'alamat' => 'required',
        //     'nomor_hp' => 'required',
        //     'email' => 'required',
        // ]);

        $rules = [
            'nama_pelanggan' => 'required',
            'nik' => 'required|numeric|unique:pelanggans',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required|numeric|unique:pelanggans',
            'email' => 'required',
        ];

        $message = [
            'nama_pelanggan.required' => 'Nama pelanggan harus diisi',
            'nik.required' => 'NIK harus diisi',
            'nik.numeric' => 'NIK tidak bisa diisi oleh huruf',
            'nik.max' => 'NIK tidak boleh lebih dari 16 angka',
            'nik.unique' => 'NIK sudah digunakan',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'alamat.unique' => 'Alamat harus diisi',
            'nomor_hp.required' => 'Nomor telepon harus diisi',
            // 'nomor_hp.max' => 'Nomor telepon tidak boleh lebih dari 13 angka',
            'nomor_hp.numeric' => 'Nomor telepon tidak bisa diisi oleh huruf',
            'nomor_hp.unique' => 'Nomor telepon sudah digunakan',
            'email.required' => 'Email harus diisi',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input sudah digunakan, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->nik = $request->nik;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->nomor_hp = $request->nomor_hp;
        $pelanggan->email = $request->email;
        $pelanggan->save();
        Alert::success('Mantap...', 'Data berhasil diedit');
        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $pelanggan = Pelanggan::findOrFail($id);
        // $pelanggan->delete();
        // return redirect()->route('pelanggan.index');

        if (!Pelanggan::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sip...', 'Data berhasil dihapus');
        return redirect()->route('pelanggan.index');
    }
}
