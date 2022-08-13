<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.siswa.index',[
            'siswas'=>Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required|max:50',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required',
            'no_hp'=>'required|max:11|min:10',
            'kelas'=>'required',

        ]);

        Siswa::create($validatedData);
        return redirect('/dashboard/siswa')->with('success','Data Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('/dashboard/siswa/show',[
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('dashboard.siswa.edit',[
            'siswa'=>$siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $rules = [
            'nama'=>'required|max:50',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required',
            'no_hp'=>'required|max:11|min:10',
            'kelas'=>'required',
        ];

        $validatedData = $request->validate($rules);

        Siswa::where('id', $siswa->id)->update($validatedData);
        return redirect('/dashboard/siswa')->with('success','Data Siswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/dashboard/siswa')->with('success','Data Siswa Berhasil Dihapus!');
    }
}
