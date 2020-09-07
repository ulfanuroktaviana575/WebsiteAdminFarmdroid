<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard/dashboard');
    }

    public function daftarPenyakit()
    {
        return view('daftar/daftarPenyakit');
    }
    public function news()
    {
        return view('news/news');
    }
    public function keluhKesah()
    {
        return view('keluhKesah/keluhKesah');
    }
    public function account()
    {
        return view('account/account');
    }
    public function editNews()
    {
        return view('news/editNews');
    }
    public function penyakitPertanian()
    {
        return view('chatbot/penyakitPertanian');
    }
    public function kebijakan()
    {
        return view('chatbot/informasiUmum');
    }
    public function informasiPupuk()
    {
        return view('chatbot/informasiPupuk');
    }
    public function bantuanPertanian()
    {
        return view('chatbot/bantuanPertanian');
    }
    public function isuPertanian()
    {
        return view('chatbot/isuPertanian');
    }
    public function pengaduan()
    {
        return view('chatbot/pengaduan');
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
    public function update(Request $request, $id)
    {
        //
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
