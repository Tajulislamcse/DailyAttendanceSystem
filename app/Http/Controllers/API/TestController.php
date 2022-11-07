<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
       //$test=resolve("App\Services\TestService");
      // $message=$test->validatedRequest();
        return response()->json(['data'=>'this is satayatjit']);

    }
}
