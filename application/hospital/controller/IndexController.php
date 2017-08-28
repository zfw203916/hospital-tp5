<?php
namespace app\hospital\controller;
//use app\hospital\HospitalController; //这个加上出错。
use app\hospital\model\Test;
use think\Db;
//use app\index\model\Up;

class IndexController extends HospitalController
{

    // 引导页
    public function index()
    {

        $this->assign(
            ['title'=>'引导页']
        );
        return view();
    }
    // 登录页面
    public function login()
    {
        $up = Test::get('20161004186');
        //var_dump($up["Uname"]);die;
        if (session('?Uname')) $this->success('您已经登录过了，转往首页','admin/index');
        $this->assign([
                'title'=>'病房管理系统-登录111',
                'up'   => $up
            ]

        );
        return view();
    }
    // 登录验证
    public function login_check()
    {
        //var_dump(session('Uname'));die;
        // 接收工号和密码
        $work = trim(input('work'));
        $password = trim(input('password'));
        // 工号和密码不能为空
        if (empty($work) || empty($password)) {
            $this->error('账号或密码不能为空！');
        }
        // 进行账号验证
        $data = Test::get($work);
        // dump($data);
        if (!$data) {
            $this->error('工号不存在，请验证后输入！');
        }
        // 进行密码验证
        if ($password != $data['Password']) {
            $this->error('工号和密码不匹配！');
        }
        // 如果工号和密码匹配，则登录成功
        session('Uname',$work);
        $this->success('登录成功！','admin/index');
    }

}
