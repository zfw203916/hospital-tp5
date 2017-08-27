<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/15/2017
 * Time: 3:26 PM
 */

namespace app\index\controller;
use think\Controller;

class Base extends Controller{
    public function test(){
        $this->assign('name', 'frank');
        return $this->fetch();
        //echo 'fetching';
    }
}