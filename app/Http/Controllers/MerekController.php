<?php

namespace App\Http\Controllers;

use Alert;
use Validator;
use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merek = Merek::all();
        return view('admin.merek.index', compact('merek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merek.create');
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
        //     'nama_merek' => 'required',
        // ]);

        $rules = [
            'nama_merek' => 'required|max:255|unique:mereks',
        ];

        $message = [
            'nama_merek.required' => 'Nama merek harus diisi',
            'nama_merek.unique' => 'Nama merek sudah digunakan',
            'nama_merek.max' => 'Nama merek maksimal 255 karakter',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input tidak valid, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $merek = new Merek;
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        Alert::success('Bagus...', 'Data berhasil ditambah');
        return redirect()->route('merek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merek = Merek::findOrFail($id);
        return view('admin.merek.edit', compact('merek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama_merek' => 'required',
        // ]);

        $rules = [
            'nama_merek' => 'required|max:255|unique:mereks',
        ];

        $message = [
            'nama_merek.required' => 'Nama merek harus diisi',
            'nama_merek.unique' => 'Nama merek sudah digunakan',
            'nama_merek.max' => 'Nama merek maksimal 255 karakter',
        ];

        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails()) {
            Alert::error('Waduh...', 'Data yang anda input sudah digunakan, silahkan diulang')->autoclose(2000);
            return back()->withErrors($validation)->withInput();
        }

        $merek = Merek::findOrFail($id);
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        Alert::success('Mantap...', 'Data berhasil diedit');
        return redirect()->route('merek.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $merek = Merek::findOrFail($id);
        // $merek->delete();
        // return redirect()->route('merek.index');

        if (!Merek::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sip...', 'Data berhasil dihapus');
        return redirect()->route('merek.index');
    }
}
