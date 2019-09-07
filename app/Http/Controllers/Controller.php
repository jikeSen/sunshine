<?php

namespace App\Http\Controllers;

use App\Common\Code;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function abc()
    {
        $a = [
            'a'   => 1,
            'csa' => 455,
        ];
    }

    public function responseJson(int $code, $msg = '', array $data = [])
    {
        if ($code != Code::PARAM_INVALID) {
            if ($msg == '') {
                $_msg = Code::msg($code);
                $msg  = sprintf($_msg, $msg);
            }
            $msg = $msg ?? '系统未定义错误';
        }

        if ($code == Code::PARAM_INVALID) { // 参数缺失
            if (strpos($msg, '%s')) {
                $_msg = "参数：[%s] 为必填项";
                $msg  = sprintf($_msg, $msg);
            }

        }
        return response()->json([
                                    'code' => $code,
                                    'msg'  => $msg,
                                    'data' => $data ?? new \stdClass()
                                ]);
    }
}
