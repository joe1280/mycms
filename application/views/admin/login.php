<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0032)http://pende.com/index.php/login -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>登录</title>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	line-height:25px;
}
img {
  border: 0;
}
a {
	font-size: 14px;
}
dl,dt,dd{	
	padding:0px;
	margin:0px;
	list-style-type:none;

}

.wrap{
}
.wrap dl{
	margin:10% auto;
	width:330px;
	border:1px solid #CCC;
	border-top:3px solid #4D7496;
}
.title{
	font-weight:900;
	font-size:18px;
	border-bottom:1px solid #ccc;
	height:40px;
	line-height:40px;
	background:url(http://pende.com/staticfile/images/admin/login/logo60x60.png) 10px no-repeat;
	padding:10px;
	padding-left:65px;
	
}
.wrap dl dd{
	padding:10px;
	
}
.frm_login{
	background: url(http://pende.com/staticfile/images/default/login/login_bj.gif) no-repeat;
	margin-top:10px;
}
.frm_login input{
	height:25px;
	margin-bottom:10px;
	_margin-bottom:7px;
	margin-left:36px;
	width:80%;
	line-height:25px;
	padding-left:10px;
	padding-right:10px;

}
.copyr{
	padding:10px;
	border-top:2px solid #ccc;
	height:30px;

}

</style>
</head>

<body>
	<div class="wrap">
    	<dl>
        	<dt class="title">HXCMS System</dt>
            <dd>
                       	  <form class="frm_login" action="http://pende.com/index.php/login/submit" method="post" enctype="application/x-www-form-urlencoded">
                <input value="" name="username" type="text" placeholder="请输入用户名">
                  <input value="" name="password" type="password" placeholder="请输入密码">
                  <input value="" style="width:25%; float:left;   margin-right:5px;" name="captcha" type="text" placeholder="验证码">
                  
                  <div style=" float:left;width:65px; margin-right:10px; height:30">

                 <img style="cursor:pointer;" onclick=this.src="<?=site_url('login/code').'/'?>"+Math.random() src="<?=site_url('login/code')?>" width="65" height="30" style="border:0;" alt="看不清刷新验证码" title='看不清刷新验证码'></div>
                 
                 <input style="width:90px; margin-left:0px; height:33px;" name="" type="submit" value="登录">
                    
                </form>
            </dd>
            <dt class="copyr">HXCMS Copyright(C)2007-2014</dt>
        </dl>

    </div>


</body></html>