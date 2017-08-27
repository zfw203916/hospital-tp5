<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/21/2017
 * Time: 10:44 PM
 */

namespace app\index\model;
use think\model;

class User extends Model
{
    // 新增用户数据
    public function add()
    {
        $user           = new UserModel;
        $user->username = '流年';
        $user->nickname    = 'thinkphp@qq.com';
        $user->createtime = strtotime('1977-03-05');
        if ($user->save()) {
            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }

}