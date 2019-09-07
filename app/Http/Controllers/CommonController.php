<?php


namespace App\Http\Controllers;


class CommonController extends Controller
{
    public function test()
    {
        $res = [
            'name' => 'sen',
            'des'  => 025
        ];
        $this->responseJson(200, 'ds', $res);
    }
}