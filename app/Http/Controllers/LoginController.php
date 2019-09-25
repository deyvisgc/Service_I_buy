<?php

namespace App\Http\Controllers;

use App\Repositorio\loginRepositorio;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @var loginRepositorio
     */
    private $loginRepositorio;

    /**
     * LoginController constructor.
     * @param loginRepositorio $loginRepositorio
     */
    public function __construct(loginRepositorio $loginRepositorio)
    {
        $this->loginRepositorio = $loginRepositorio;
    }
    public function getData(){
        return Response()->json($this->loginRepositorio->alla());
    }
}
