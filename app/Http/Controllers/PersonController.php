<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat atribut name
    private $name = "Sugih Nurdiansyah";
    private $code = "190914003";


    //Membuat method index
    public function index() {
        //mengembalikan nilai attribute name
        return $this->name . " ". $this->code;
    }
    public function show($param){
        //merubah attribute name
        $this->name = $param;
        return $this->name;
    }
}
