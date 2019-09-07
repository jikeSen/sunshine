<?php


namespace App\Common;


class Tool
{


    /**
     * Des: 生成密码
     * Date: 2019-08-01  12:47
     *
     * @param $passWord
     * @return array
     */
    public static function generatePwd($passWord)
    {
        $salt   = substr(uniqid(rand()), -4);
        $passed = md5(md5($passWord) . $salt);
        return ['salt' => $salt, 'passwd' => $passed];
    }
}