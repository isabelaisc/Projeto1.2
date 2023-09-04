<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controllers
{
    //Método Actions
    public function principal(){
        return view('site.contato');
        //echo 'controller sobre nos';
    }
}