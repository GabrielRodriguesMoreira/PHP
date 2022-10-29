<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $id2=null){
        return view("user",['id'=>$id, 'id2'=>$id2]);
    }   
}
