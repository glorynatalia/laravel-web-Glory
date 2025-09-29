<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah ". $kode;
        } else {
            return "Masukkan kode matakuliah!";
        }
    }
}
