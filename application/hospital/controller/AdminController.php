<?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 8/29/2017
 * Time: 12:09 AM
 */

namespace app\hospital\controller;
use think\Db;
use app\hospital\model\Up;
use app\hospital\model\test;
use app\hospital\model\Ato;
use app\hospital\model\Bed;
use app\hospital\model\Doctor;
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

    // 工作模块
    public function work()
    {
        $this->assign([
            'title'=>'病房管理系统-工作模块',
        ]);
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
        $data = Up::get($uname);
        //var_dump($data_password);die;
        if($old_password != $data['Password'] ){
            $this->error('原密码错误，请确认后再重试！');
        }

        $data['Password'] = $new_password;
        $status = $data->save();
        ($status == 1) ? $this->success('恭喜您！修改成功！','index') : $this->error('修改失败或一次修改了多条！');

    }
    /***************************************************************
     *
     */
    /**
     * @return array|string
     * 新增用户数据1,test,一个实例化模型。
     */
    public function add()
    {
        $user           = new Up;
        $user->Uname = 'frank';
        $user->Password    = '123456';
        if ($user->save()) {
            return '用户[ ' . $user->Uname . ':' . $user->Password . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }
    // 新增用户数据2 ,test，一个引用。
    public function add1()
    {
        $user['Uname'] = 'frank02';
        $user['Password']     = '123456';
        if ($resule = Up::create($user)) {
            return '用户[ ' . $user['Uname'] . ':' . $user['Password']  . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }

    // 新增用户数据2 ,test，一个引用。
    public function upRead()
    {
        $user['Uname'] = 'frank02';
        $user['Password']     = '123456';
        if ($resule = Up::read($user)) {
            return '用户[ ' . $user['Uname'] . ':' . $user['Password']  . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }

    /************************************************************************
     *
     */
    // 注销登录
    public function login_out()
    {
        session('Uname',null);
        $this->success('注销成功！','index/login');
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
        $ato = Ato::all();
        //var_dump($ato);die;
        $data = [
            'title' => '病房管理系统-员工信息注册',
            'ato'   => $ato
        ];
        $this->assign($data);
        return view();
    }


    /**
     * 员工信息注册验证
     * 添加信息
     */
    public function add_doctor_check(){
        $work = trim(input('work'));
        $name = trim(input('name'));
        if(empty($work) || empty($name)){
            $this->error('工号或姓名不能为空！');
        }

        $data = [
            'Dno'     => $work,
            'Dname'   => $name,
            'Dsex'    => input('sex'),
            'Dzc'     => input('dzc'),
            'lz_Aname'=> input('keshi'),
            'Dstate'  => 1
        ];

        $status = Doctor::create($data);
        $status ? $this->success("注册成功","hospital"):$this->error("注册失败","add_doctor");
    }

    /**
     * 员工信息更新
     * select tables all the data
     *          where the data
     *          update the data
     *          prompt message
     * @The up is logic business;
     */
    public function update_doctor(){
        $doctor = Doctor::all(['Dstate'=>1]);
        $ato = Ato::all();
        $data = [
            'title'=>'员工信息更新',
            'ato'=>$ato,
            'doctor'=>$doctor
        ];
        $this->assign($data);
        return view();
    }

    /**
     *  员工信息更新验证
     */
    public function update_doctor_check(){

        $data = [
            'Dno'      => input('dno'),
            'Dzc'      => input('dzc'),
            'lz_Aname' => input('keshi')
        ];
        $status = Doctor::update($data);
        $status ? $this->success("更新成功","hospital") : $this->error("更新失败,请重试");
    }

    /**
     *  员工信息删除
     */
    public function del_doctor(){
        $doctor = Doctor::all(['Dstate '=> 1]);
        $data = [
            'title'=>'员工信息删除',
            'doctor'=>$doctor
        ];
        $this->assign($data);
        return view();
    }
    /**
     *  员工信息验证删除
     */
    public function del_doctor_check(){
        $data = [
            'Dno'=> input('dno')
        ];

        $statues = Doctor::destroy($data);

        /* or use this method.
        $statues = Db::table('doctor')
            ->where($data)
            ->delete();
        */
        $statues ? $this->success('删除成功') : $this->error('删除失败');

    }
    public function test(){
        $list = Test::all();
        var_dump($list);die;
        $this->assign('list', $list);
        $this->assign('count', cstount($list));
        return $this->fetch();

    }

    /*
    * ---------------------------------------------以下是病人信息管理部分----------------------------------------------------------------------------------
    */
    public function patient(){
        $this->assign(['title'=>'病房管理系统-病人信息管理']);
        return view();
    }

    public function add_patient(){

        $data = [
            'title'=>'病人信息注册',
            'doctor'=>1,
            'bed'=>2
        ];
        $this->assign($data);
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