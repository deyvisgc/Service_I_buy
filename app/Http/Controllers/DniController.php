<?php

namespace App\Http\Controllers;

use App\lib\Buscardni;
use Illuminate\Http\Request;

class DniController extends Controller
{
    public function buscar(Request $request){
        $dn=$request->get('dni');
        $dni= new Buscardni();
        $user=$dni->dniall($dn);
        dd($user);

    }
}
