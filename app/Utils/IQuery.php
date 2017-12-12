<?php 
/**
 * desc: 工具类
 * autoer: limingcun
 * date: 2017/09/14
 */
namespace App\Utils;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class IQuery{
     /**
     ** 净化表单插入数据
     **/
    function cleanInput($input){
        $clean = strtolower($input);
        $clean = preg_replace("/[^a-z]/", "", $clean);
        $clean = substr($clean,0,12);
        return $clean;
    }
}