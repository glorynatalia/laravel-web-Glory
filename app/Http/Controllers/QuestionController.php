<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        //$data['nama'] =$request->nama;
        //$data['email'] =$request->email;
        //$data['pertanyaan'] =$request->pertanyaan;

        //return view('home-question-respon', $data);

        $request->validate([
            'username'       => 'required|max:10',
            'email'      => 'required|email',
            'pertanyaan' => 'required|max:300|min:8',
        ], [

            'username.required' => 'Nama tidak boleh kosong',
            'username.max' => 'Nama maksimal 10 karakter',
            'email.required' => 'Email Tidak valid',
        ]);

        //return view('home-question-respon', $data);
        //return redirect()->router('home);
        //return redirect()->back();
        //return redirect()->away('https://pcr.ac.id');
        return redirect()->route('home.index')->with('info', 'berhasil dikirim');

    }


}
