<?php

namespace App\Http\Controllers;

use Alert;
use Validator;
use App\Models\Sopir;
use Illuminate\Http\Request;

class SopirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sopir = Sopir::all();
        return view('admin.sopir.index', compact('sopir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sopir.create');
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
        //     'nama_sopir' => 'required',
        //     'foto' => 'required|image|max:2048',
        //     'nomor_hp' => 'required',
        // ]);

        $rules = [
            'nama_sopir' => 'required',
            'foto' => 'required|image|max:2048|unique:sopirs',
            'nomor_hp' => 'required|numeric|unique:sopirs',
            'tarif' => 'required',
        ];

        $message = [
            'nama_sopir.required' => 'Nama sopir harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa file foto',
            'foto.unique' => 'Foto sudah digunakan',
            'nomor_hp.required' => 'Nomor telepon harus diisi',
            // 'nomor_hp.max' => 'Nomor telepon tidak boleh lebih dari 13 angka',
            'nomor_hp.numeric' => 'Nomor telepon tidak bisa diisi oleh huruf',
            'nomor_hp.unique' => 'Nomor telepon sudah digunakan',
            'tarif.required' => 'Tarif harus diisi',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input sudah digunakan, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $sopir = new Sopir;
        $sopir->nama_sopir = $request->nama_sopir;
        if ($request->hasFile('foto')) {
            $sopir->deleteImage();
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/sopir/', $name);
            $sopir->foto = $name;
        }
        $sopir->nomor_hp = $request->nomor_hp;
        $sopir->tarif = $request->tarif;
        Alert::success('Bagus...', 'Data berhasil ditambah');
        $sopir->save();
        return redirect()->route('sopir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('admin.sopir.edit', compact('sopir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama_sopir' => 'required',
        //     'foto' => 'required',
        //     'nomor_hp' => 'required',
        // ]);

        $rules = [
            'nama_sopir' => 'required',
            'foto' => 'required|image|max:2048|unique:sopirs',
            'nomor_hp' => 'required|numeric|unique:sopirs',
            'tarif.required' => 'Tarif harus diisi',
        ];

        $message = [
            'nama_sopir.required' => 'Nama sopir harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa file foto',
            'foto.unique' => 'Foto sudah digunakan',
            'nomor_hp.required' => 'Nomor telepon harus diisi',
            // 'nomor_hp.max' => 'Nomor telepon tidak boleh lebih dari 13 angka',
            'nomor_hp.numeric' => 'Nomor telepon tidak bisa diisi oleh huruf',
            'nomor_hp.unique' => 'Nomor telepon sudah digunakan',
            'tarif.required' => 'Tarif harus diisi',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input sudah digunakan, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $sopir = Sopir::findOrFail($id);
        $sopir->nama_sopir = $request->nama_sopir;
        if ($request->hasFile('foto')) {
            $sopir->deleteImage();
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/sopir/', $name);
            $sopir->foto = $name;
        }
        $sopir->nomor_hp = $request->nomor_hp;
        $sopir->tarif = $request->tarif;
        $sopir->save();
        Alert::success('Mantap...', 'Data berhasil diedit');
        return redirect()->route('sopir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sopir  $sopir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $sopir = Sopir::findOrFail($id);
        // $sopir->delete();
        // return redirect()->route('sopir.index');

        if (!Sopir::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sip...', 'Data berhasil dihapus');
        return redirect()->route('sopir.index');
    }
}
