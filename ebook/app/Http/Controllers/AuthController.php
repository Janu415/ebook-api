<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120115,
            'NAMA' => 'Janu Girindra Aji',
            'PHONE' => '085727102890',
            'CLASS' => 'XII RPL 4'
        ];
    }
}