<?php
namespace app\index\controller;

use think\Controller;

/**
 * Class IndexController
 * @package app\index\controller
 * @author Frank
 */
class IndexController extends MonBaseController
{
    /**
     * @return \think\response\View
     * @Mars need single h5
     */
    public function index()
    {
        return view();
    }

    /**
     * @return \think\response\View
     * @Victor need single h5
     * @This is attract person go here.
     * so must need attach data.考虑抓取数据功能
     */
    public function  attract(){
        return view();
    }

    public function test(){
        return view();
    }
}
