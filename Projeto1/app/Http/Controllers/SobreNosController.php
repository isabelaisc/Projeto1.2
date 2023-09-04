<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controllers
{
    //Método Actions
    public function principal(){
        return view('site.sobrenos');
        //echo 'controller sobre nos';
    }
}