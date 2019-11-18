<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Http\Controllers\Controller;
class PruebaController extends Controller{
    public function funcionPrueba(){
        return "Estoy dentro de un controlker ;D";
    }
    public function funcionPrueba2($param){
        return "Estoy dentro de un controller y recibi el sgte parametro: ".$param ;
    }

}