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
use app\hospital\model\Patient;

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


    /**
     * 病人信息注册
     * @return \think\response\View
     */
    public function add_patient(){

        $doctordata = new Doctor();
        $doctordata
            ->where('Dstate',1)
            ->where('Dzc','医生')
            ->whereOr('Dzc','科主任')
            ->select();
        /**
         * 2 种方式。
         */

        $doctor = Doctor::all(['Dstate'=>1]);
        $bed = Bed::all();
        $data = [
            'title'=>'病人信息注册',
            'doctor'=>$doctor,
            'bed'=>$bed,
        ];
        $this->assign($data);
        return view();
    }


    /**
     * 病人信息注册
     */
    public function add_patient_check(){
        $data = array(
            'Pno'=> input('pno'),
            'Pname'=>input('name'),
            'Psex'=>input('sex'),
            'Pbirth'=>input('birth'),
            'Padd'=>input('address'),
            'Ptele'=>input('tel'),
            'Cno'=>input('cno'),
            'Idate'=>input('idate'),
            'Pmark'=>input('mark'),
            'Odate'=>input('Odate')
        );

        //other array method
        $dataOther = [
            'Pno'=> input('pno'),
            'Pname'=>input('name'),
            'Psex'=>input('sex'),
            'Pbirth'=>input('birth'),
            'Padd'=>input('address'),
            'Ptele'=>input('tel'),
            'Cno'=>input('cno'),
            'Idate'=>input('idate'),
            'Pmark'=>input('mark'),
            'Odate'=>input('Odate')
        ];

        $statues = Patient::create($data);
        $statues ? $this->success('注册成功','patient'):$this->error('注册失败');

    }

    /**
     * @return \think\response\View
     *病人信息更新
     */
    public function update_patient(){
        $patient = Patient::all(['Odate'=>'00000000']);
        $this->assign([
            'title'  => '病历信息更新',
            'patient'=> $patient
        ]);
        return view();
    }
    /**
     * @return \think\response\View
     *病人信息更新
     */
    public function update_patient_check(){
            $data = array(
                'Pmark' =>input('mark'),
            );
        (Patient::get(input('pno'))->save($data)) ? $this->success('恭喜您，修改成功！','patient') : $this->error('修改失败，请重试！');
        //$statues = Patient::update($data,$data);
        //$statues ? $this->success("更新成功"):$this->error("更新失败");
    }

    /**
     * @return \think\response\View
     * 出院手续办理
     */
    public function out_patient(){
        $patient = Patient::all(['Odate'=>'00000000']);
        $data = array(
            'title' => '出院手续办理',
            'patient'=>$patient

        );
        $this->assign($data);
        return view();
    }

    /**
     * 出院手续办理
     */
    public function out_patient_check(){
        $data = [
            'Pno'=>input('pno'),
            'Odate'=>input('odate')
        ];
        (Patient::update($data))?$this->success('更新成功','patient'):$this->error("更新失败");
    }


    /**
     * 病人信息删除
     */
    public function del_patient(){
        $patient = Patient::all(['Dstate'=>1]);
        $this->assign(
            [
                'title'=>'病人信息删除',
                'patient'=>$patient
            ]
        );
        return view();
    }

    /**
     * 病人信息删除验证
     */
    public function del_patient_check(){
        /**
        $status = Patient::destroy(['Pno'=>input('pno')]);
        $status ? $this->success('成功删除','patient'):$this->error("删除失败");
         **/

        /**
         *  (Patient::destroy(input('pno')) == 1) ? $this->success('恭喜您，删除成功！','patient') : $this->error('操作失败，请重试！');
         */

        /**
         * 我的思路是不做物理删除，直接留住数据。
         */
        $status = Patient::update(['Dstate'=>-1],array('Pno'=>input('pno')));
        $status ? $this->success('成功删除','patient'):$this->error("删除失败");
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

    /**
     * @return \think\response\View
     * 科室信息查询
     */
    public function search_keshi(){
        $this->assign([
            'title'=>'科室信息查询',
            'ato'=>Ato::all()
        ]);
        return view();
    }

    /**
     * 科室信息查询
     * 执行的时候出现：类的属性不存在:app\hospital\model\Ato->lz_Aname
     * 我喜欢看到错误，有错误的和不会的地方，才是我想要研究的东西。
     * 查明数据库没这个字段。
     */
    public function search_keshi_view(){
        $ato = Ato::all(['Aname'=>input('aname')]);
        /*
         $ato = Db::name('kesearch')
            ->where('lz_Aname',input('aname'))
            ->select();
        */
        //var_dump($ato);die;
        $data = [
            'title'=>'科室信息查询--'.input('aname'),
            'ato'=>$ato
        ];
        $this->assign($data);
        return view();
    }

    /**
     * 医护信息查询。
     *
     */
    public function search_doctor(){
        $doctor = Doctor::all();
        $this->assign( [
            'title'=> '医护信息查询',
            'doctor'=>$doctor
        ]);
         return view();
    }

    /**
     * 医护信息查询。
     *
     */
    public function search_doctor_view(){
        $doctor = Db::name('Doctorsearch')
            ->where('Dno',input('dno'))
            ->select();
        //echo Db::name('Doctorsearch')->getLastSql();die;
        //$doctor = Doctor::all(['Dno'=>input('D')]);
        //var_dump($doctor);die;
        if(empty($doctor)){
            $this->error('查询出现错误，请重试');
        }
        $this->assign([
            'title'=>'医护信息查询-'.input('dno'),
            'doctor'=>$doctor
        ]);

         return view();

    }

    /**
     * 床位信息查询
     */
    public function search_bed(){
        $this->assign([
            'title'=>'床位信息查询'
        ]);
        return view();
    }

    /**
     * 空床位信息查询
     */
    public function search_bed_null(){
        $bed = Bed::all(['cuse'=>0]);
        $this->assign([
            'title'=>'空床位信息查询',
            'bed'=>$bed
        ]);
        return view();
    }

    /**
     * 非空床位信息查询
     */

    public function search_bed_fill(){
      $bed = Bed::all(['cuse'=>1]);
      $this->assign([
          'title'=>'非空床位信息查询',
          'bed'=>$bed
      ]);
      return view();
  }

    /**
     * 病例信息查询
     */
    public function search_patient(){
        $patient = Patient::all();
        $this->assign([
            'title' => '病例信息查询',
            'patient'=> $patient
        ]);
        return view();
    }
    /**
     * 病例信息查询
     */
    public function search_patient_view(){
        //$patient = Patient::all(['Pno'=>input('pno')]);
        $patient = Db::name('patientsearch')
            ->where('Pno',input('pno'))
            ->select();
        if(empty($patient)) $this->error("查询出现错误，请重试");
        $this->assign([
            'title'=>'病例信息查询',
            'patient'=>$patient
        ]);
        return view();
    }
}