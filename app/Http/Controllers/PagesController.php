<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
      return view('Bienvenidos');
    }
    public function ayuda()
    {
      return view('ayuda');
    }
    public function ayuda_user()
    {
      return view('ayuda_user');
    }
    public function juego()
    {
      return view('juego');
    }
    public function perfil()
    {
      return view('perfil');
    }
    public function inicio()
    {
      return view('inicio');
    }
}
