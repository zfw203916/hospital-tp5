<?php
namespace app\hospital\controller;
//use app\hospital\HospitalController; //这个加上出错。

class IndexController extends HospitalController
{
    /**
     *登入
     * @return mixed
     */
    public function index(){

        if (session('?Uname')) $this->success('您已经登录过了，转往首页','admin/index');
        $this->assign(
            ['title'=>'病房管理系统-登录']
        );

        return view('login');

    }

    /**
     * 登录验证
     */
    public function login_check(){

        // 接收工号和密码
        $work = trim(input('work'));
        $password = trim(input('password'));
        // 工号和密码不能为空
        if (empty($work) || empty($password)) {
            $this->error('账号或密码不能为空！');
        }
        // 进行账号验证
        $data = Up::get($work);
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

    /**
     * 注销登录
     */
    public function login_out(){
        session('Uname',null);
        $this->success('注销成功！','index/login');
    }

    /**
     * 修改密码
     */
    public function charge_pwd(){

        $old_password = trim(input('old_password'));
        $new_password = trim(input('new_password'));
        $uname = trim(input('uname'));
        // 验证旧密码对不对
        $data = Up::get($uname);
        // dump($data['Password']);exit;
        if ($old_password != $data['Password']) {
            $this->error('原密码错误，请确认后再重试！');
        }
        $data['Password'] = $new_password;
        $status = $data->save();
        // dump($status);
        ($status == 1) ? $this->success('恭喜您！修改成功！','index') : $this->error('修改失败或一次修改了多条！');

    }


}
