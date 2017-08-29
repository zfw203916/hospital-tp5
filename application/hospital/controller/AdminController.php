<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/29/2017
 * Time: 12:09 AM
 */

namespace app\hospital\controller;
use think\Db;
use app\index\model\Up;
use app\index\model\test;
use app\index\model\Ato;
use app\index\model\Bed;
use app\index\model\Doctor;
use app\index\model\Patient;

class AdminController extends HospitalController
{

    // 初始化控制器，判断是否登录
    public function _initialize(){
        if(!session('?Uname')){
            $this->error('请先登录！','index/login');
        }
    }

    // 管理首页
    public function index(){
        //var_dump(session('Uname'));die;
        $this->assign([
            'title'=>'病房管理系统-首页',
            'fuck'=>'fuck-test'
        ]);
        return view();
    }

    // 注销登录
    public function login_out()
    {
        session('Uname',null);
        $this->success('注销成功！','index/login');
    }

    // 工作模块
    public function work()
    {
        $this->assign(['title'=>'病房管理系统-工作模块']);
        return view();
    }

    //修改密码
    public function charge_pwd(){
        $this->assign(['title'=>'病房管理系统-修改密码']);
        return view();
    }

    // 修改密码验证
    public function charge_pwd_check(){
        $old_password = trim(input('old_password'));
        $new_password = trim(input('new_password'));
        $uname = trim(input('uname'));

        /* 验证旧密码对不对,比较这个密码。
        $data_password = Db::name('test')->where('Password='.$old_password)->find();
         if($data_password != $old_password ){
                $this->error('密码错误','');
          }
        */

        /*或者查询当前用户的所有信息*/
        $data_password = Up::get($uname);
        var_dump($data_password);die;
        if($data_password != $old_password ){
            $this->error('密码错误','');
        }
    }

    /*
    * ---------------------------------------------以下是员工信息管理部分----------------------------------------------------------------------------------
    */
    // 医院信息管理
    public function hospital(){
        $this->assign(['title'=>'病房管理系统-医院信息管理']);
        return view();
    }

    // 员工信息注册
    public function add_doctor(){

    }


    /*
    * ---------------------------------------------以下是病人信息管理部分----------------------------------------------------------------------------------
    */
    public function patient(){
        $this->assign(['title'=>'病房管理系统-病人信息管理']);
        return view();
    }



    /*
    * ---------------------------------------------以下是信息查询部分----------------------------------------------------------------------------------
    */

    // 信息查询服务
    public function search()
    {
        $this->assign(['title'=>'病房管理系统-信息查询服务']);
        return view();
    }

}