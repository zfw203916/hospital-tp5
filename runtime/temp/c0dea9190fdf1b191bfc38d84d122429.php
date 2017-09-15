<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"D:\phpStudy\WWW\hospital-tp5\public/../application/hospital\view\admin\search_patient.html";i:1502704487;s:83:"D:\phpStudy\WWW\hospital-tp5\public/../application/hospital\view\common\header.html";i:1505490973;s:83:"D:\phpStudy\WWW\hospital-tp5\public/../application/hospital\view\common\footer.html";i:1502704487;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>病例信息查询</title>
    <link rel="stylesheet" href="/static//bootstrap-3.3.5/css/bootstrap.min.css">
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
          工号<?php echo \think\Session::get('Uname'); ?>，您现在的位置是：<?php echo $title; ?>
          <span class="pull-right hui-font-color-alizarin hui-margin-left-15"
                onclick="location.href='<?php echo url('admin/login_out'); ?>'"
                style="cursor:pointer;"> 注销登录
          </span>
          <span class="pull-right" onclick="location.href='<?php echo url('index'); ?>'" style="cursor:pointer;"> 返回首页 </span>
        </div>
      </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 hui-margin-top-30 hui-padding-all-20 hui-background-color-white">

      <form role="form" action="<?php echo url('search_patient_view'); ?>" method="post">
          <div class="form-group">
            <label for="mm">住院号：</label>
            <select class="form-control" name="pno">
              <?php if(is_array($patient) || $patient instanceof \think\Collection || $patient instanceof \think\Paginator): $i = 0; $__LIST__ = $patient;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value='<?php echo $vo['Pno']; ?>'><?php echo $vo['Pno']; ?>.<?php echo $vo['Pname']; ?></option>
              <?php endforeach; endif; else: echo "" ;endif; ?>>
              </select>
          </div>

          <button type="submit" class="btn btn-primary btn-block">提交</button>
        </form>
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

