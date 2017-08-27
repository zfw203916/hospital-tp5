<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/23/2017
 * Time: 11:48 PM
 */

namespace app\index\controller;
use think\Db;

class User extends Base
{
    public function index(){
        //var_dump(session('userinfo'));die;
        if (session('userinfo')) {
            $this->success('您已经登录了，直接跳转到成功页！','loginUp');
        }else{
            return view('login');
        }

    }

    public function signup_check(){

        $username = trim(input('username'));
        //$password = md5(trim(input('password')));
        $password = trim(input('password'));
        $password1 = trim(input('password1'));

        /*
            if(strlen($username < 2 ) || strlen($password < 2)){
                //$this->error("用户名或密码长度不得小于6位！");
                echo '用户名或密码长度不得小于6位！';die;
            }
        */
        if($password != $password1){
            $this->error("两次密码不相同");
        }

        $data =  Db::name('user')->where('username', $username)->find();
        if($data){
            $this->error('用户名存在， 请确认后重试！');
        }

        $data = [
            'username'=>$username,
            'password'=>md5($password1),
            'create_time'=>time()
        ];

        $result = Db::name('user')->insert($data);

        if($result == 1){
            $this->success('恭喜您注册成功！','loginUp');
        }else{
            $this->error('注册时出现问题，请重试或联系管理员！');
        }

    }

    public function login(){
        $username = trim(input('username'));
        $password = trim(input('password'));

        $data =  Db::name('user')->where(array('username'=>$username, 'password'=>$password))->find();
        if($data){
            session('userinfo',$data[0]);
           $this->success('登入成功','loginUp');
        }else{
            $this->error('登入失败');
            return view();
        }


    }
    public function  loginUp(){

        $info = session('userinfo');
        echo '嗨，登录成功！' . '<br>';
        echo '用户名：' . $info. '<br>';

    }
}