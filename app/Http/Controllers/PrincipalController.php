<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function VistaModulo()
    {
        return view('modulo.index');
    }
    public function VistaMenu()
    {
        return view('menu.index');
    }
    public function VistaPerfil()
    {
        return view('perfil.index');
    }

}
