<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\phpStudy\WWW\hospital-tp5\public/../application/hospital\view\admin\hospital.html";i:1502704487;s:83:"D:\phpStudy\WWW\hospital-tp5\public/../application/hospital\view\common\header.html";i:1504017102;s:83:"D:\phpStudy\WWW\hospital-tp5\public/../application/hospital\view\common\footer.html";i:1502704487;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>病房管理系统-医院信息管理</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/main.css">
    <link rel="stylesheet" href="/static/hui.css">
    <style type="text/css">
      [v-cloak]{
        display: none;
      }
    </style>
  </head>
  <body>
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 header">
          工号<?php echo \think\Session::get('Uname'); ?>，您现在的位置是：<?php echo $title; ?> <span class="pull-right hui-font-color-alizarin hui-margin-left-15" onclick="location.href='<?php echo url('admin/login_out'); ?>'" style="cursor:pointer;"> 注销登录 </span> <span class="pull-right" onclick="location.href='<?php echo url('index'); ?>'" style="cursor:pointer;"> 返回首页 </span>
        </div>
      </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 hui-margin-top-30 hui-padding-all-20 hui-background-color-white">


          <button class='btn btn-block btn-success' onclick="javascript:window.location.href='<?php echo url('add_doctor'); ?>'">员工信息注册</button>

          <button class='btn btn-block btn-success' onclick="javascript:window.location.href='<?php echo url('update_doctor'); ?>'">员工信息更新</button>

          <button class='btn btn-block btn-danger' onclick="javascript:window.location.href='<?php echo url('del_doctor'); ?>'">员工信息删除</button>

  </div>
<div class="col-md-4"></div>
</div>
</div>

<div style="height: 100px;"></div>
<footer style="bottom: 0;width: 100%;">
    &copy;2017 中国地质大学（武汉）校医院
</footer>
<script src="https://unpkg.com/vue@2.2.1/dist/vue.js"></script>
</body>
</html>
