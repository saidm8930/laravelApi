<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingApi extends Controller
{
    function getData(){
        return [
            'firstName: ' => 'SAID',
            'lastName: ' => 'MOHAMMED'
        ];
    }
}
