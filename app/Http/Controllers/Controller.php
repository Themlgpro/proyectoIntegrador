<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function index()
    {
        return view('welcome');
    }

    public function logueo()
    {
        return view('loginModule/logueo');
    }

    public function createUser()
    {
    	return view('loginModule/createNewUser');
    }

    public function almacen()
    {
    	return view('almacenModule/almacen');
    }

    public function ventas()
    {
    	return view('ventasModule/ventas');
    }

    public function reportes()
    {
    	return view('reportesModule/reportes');
    }
}

