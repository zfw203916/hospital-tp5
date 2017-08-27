<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/21/2017
 * Time: 12:13 PM
 */

/**
 * 请求和响应
 *
 * Request对象的作用是与客户端交互，收集客户端的Form、Cookies、超链接，或者收集服务器端的环境变量。
 * Request对象是从客户端向服务器发出请求，
 * 包括用户提交的信息以及客户端的一些信息。
 * 客户端可通过HTML表单或在网页地址后面提供参数的方法提交数据，
 * 然后通过Request对象的相关方法来获取这些数据。
 * Request的各种方法主要用来处理客户端浏览器提交的请求中的各项参数和选项。
 *
 * Response对象用于动态响应客户端请示，控制发送给用户的信息，并将动态生成响应。通常用于输出数据给客户端或者浏览器。
 */

namespace app\index\controller;
use think\Request;
use traits\controller\Jump;

//控制器不存在:app\index\controller\Requestcenter 命名为Center后就好了。
class Center extends Base{

    public function index(){
        echo 'index';
    }

    public function hello($name = 'World')
    {
        $request = Request::instance();
        // 获取当前URL地址 不含域名
        echo 'url: ' . $request->url() . '<br/>';
        return 'Hello,' . $name . '！';
    }

    /**
     * @param Request $request
     * @param string $name
     * @return string
     * http://thinkphp5.test.com/public/index.php/index/center/hello3/name/thinkphp
     */
    public function hello2(Request $request, $name = 'World'){

        // 获取当前域名
        echo 'domain: ' . $request->domain() . '<br/>';
        // 获取当前URL地址 不含域名
        echo 'url: ' . $request->url() . '<br/>';
        return 'Hello,' . $name . '！';
        
    }

    /**
     * @param Request $request
     * 获取请求变量
     * 系统推荐使用param方法统一获取当前请求变量，
     * 该方法最大的优势是让你不需要区分当前请求类型而使用不同的全局变量或者方法，
     * 并且可以满足大部分的参数需求
     */
    public function hello3(Request $request)
    {
        echo '请求参数：';
        dump($request->param());
        echo 'name:'.$request->param('name');
    }

    public function hello4(Request $request, $name = 'World')
    {
        echo '路由信息：';
        dump($request->routeInfo());
        echo '调度信息：';
        dump($request->dispatch());

        return 'Hello,' . $name . '！';
    }


    /**
     * @return \think\response\Json
     * =========================================================================
     * response方式
     */
    public function ResponseHello1()
    {
        $data = ['name' => 'thinkphp', 'status' => '1'];
        return $data;
    }

    public function ResponseHello2()
    {
        $data = ['name'=>'thinkphp', 'status' => '1'];
        return json($data);
    }

    public function ResponseHello3()
    {
        $data = ['name' => 'thinkphp', 'status' => '1'];
        return json($data)->code(201)->header(['Cache-control' => 'no-cache,must-revalidate']);
    }

    public function ResponseHello4($name='')
    {
        if ('thinkphp' == $name) {
            $this->success('欢迎使用ThinkPHP
        5.0','ok');
        } else {
            $this->error('错误的name','guest');
        }
    }

    public function ok(){
        echo "ResponseHello4的调用 success";
    }

    public function guest(){
        echo '这里是ResponseHello4的调用  guest';
    }
}