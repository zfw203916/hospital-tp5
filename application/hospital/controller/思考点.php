<?php
namespace app\index\controller;
use app\index\model\User;
use think\Db;

/**
 * Class IndexController
 * @package app\index\controller
 * @author Frank
 */
class IndexController extends MonBaseController
{
    /**
     * @return \think\response\View
     * @易游  内部系统
     */
    public function index()
    {
        return view();
    }


    public function loin(){
        $this->assign([
            'title'=>'内部系统管理页'
        ]);
        return view();
    }
    /**
     * 检查登入状况.
     */
    public function login_check(){
        header("Content-type: text/html; charset=utf-8");
        /*
         * $data = User::get('1');
         * $data = User::get(['id'=>['=',1]]);
         * echo User::get(['id'=>['=',1]])->getLastSql();die;
         * echo $data->getLastSql();die;
         *  $data = User::get(['username'=>['=',input('username')],'password'=>['=',md5(input('password'))]]);
         */

        /*
        $map = [
                'username'=>input('username'),
                'password'=>md5(input('password')),
                'status'=>1
            ];
        $data = Db::name("user")->where($map)->find();
        var_dump($data);die;
        */

        /*
         * 闭包方式查询数据
         */
        $data = User::get(function($query){
            /*
             * SELECT * FROM `mon_user` WHERE `username` = 'test' LIMIT 1
             *$query->where(['username'=>['=',input('username'),'password'=>['=',md5('password')]]]);
             */
            $query->where(['username'=>trim(input('username')), 'password'=>trim(md5(input('password'))),'status'=>1]);
        });

        if($data){
            $this->success("登入成功",'h5email/index');
        }else{
            $this->error("登入失败",'index');
        }
    }


    /**
     * @return \think\response\View
     * @Victor need single h5
     * @This is attract person go here.
     * so must need attach data.考虑抓取数据功能,后期考虑
     */


}
