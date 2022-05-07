<?php

namespace App\Http\Controllers;

use App\Mail\RegisterSuccessfully;
use App\Models\participant;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:2',
            'npm' => 'required|min:7|max:8|unique:participants',
            'kelas' => 'required',
            'jurusan' => 'required',
            'domisili' => 'required',
            'acara' => 'required',
            'email' => 'required|email:dns',
            'nomorwa' => 'required'
        ]);

        participant::create($data);

        Mail::to($data['email'])->send(new RegisterSuccessfully());

        return redirect('/registered');

        // dd('yeay');
        // return $request;
    }
}
