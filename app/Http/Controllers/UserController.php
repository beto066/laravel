<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(string $username){
        $args = ['a', 'b', 'c', 1, 2, 3 ];
        $whilezada = '';
        $trens = ['algo' => 'lalala', 'algo2' => 'lalala2', 'algo3' => 'lalala7'];

        return view('users', compact(['username', 'args', 'whilezada', 'trens']));
    }

    public function test(TestRequest $request){
    }
}
