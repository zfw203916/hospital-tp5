<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/29/2017
 * Time: 12:09 AM
 */

namespace app\hospital\controller;
use think\Db;
//use app\index\model\Up;
use app\index\model\test;
use app\index\model\Ato;
use app\index\model\Bed;
use app\index\model\Doctor;
use app\index\model\Patient;

class AdminController extends HospitalController
{
    // 管理首页
    public function index(){
        $this->assign([
            'title'=>'病房管理系统-首页',
            'fuck'=>'fuck-test'
        ]);
        return view();
    }
}