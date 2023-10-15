<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $dataProfile = User::where('id', $id)->first();
        return  view('profile.index', compact('dataProfile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        // $id = Auth::user()->id;
        // $user = User::find($id);
        // $user->name = $request->input('name');
        // $user->image = $request->input('image');
        // $user->email = $request->input('email');
        // if ($request->file('foto')) {
        //     # code...
        //     // PROSESS IMAGE
        //     $foto = $request->file('foto');
        //     $tujuan_upload = public_path('assets/img/prestasi');
        //     $extension = $foto->getClientOriginalExtension();
        //     $namafileSama = Str::random(80) . "." . $extension;
        //     $destinationPath = 'assets/img/prestasi/';
        //     File::delete($destinationPath . $prestasi->photo);

        //     $prestasi->photo = $namafileSama;
        //     $foto->move($tujuan_upload,  $namafileSama);
        // }
        // // $prestasi->course = $request->input('course');
        // $prestasi->content = $request->input('body');
        // $prestasi->update();

        // return redirect()->back()->with('message', 'Data berita berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
