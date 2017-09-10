<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/30/2017
 * Time: 12:29 AM
 */

namespace app\hospital\model;


class Up extends Hospital
{
    protected $table = 'Up';

    // birthday读取器,读取器和修改器
    protected function getBirthdayAttr($birthday)
    {
        return date('Y-m-d', $birthday);
    }

    public function read()
    {
        $user = Up::get(function($query){
            $query->where('Uname', 'frank01')->select();
        });
        echo $user->Uname . '<br/>';
        echo $user->Password . '<br/>';
    }

}