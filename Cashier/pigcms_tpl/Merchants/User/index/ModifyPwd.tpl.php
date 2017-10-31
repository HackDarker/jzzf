<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>收银台 | 收银台</title>
    <?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/header.tpl.php';?>
	
</head>

<body>
    <div id="wrapper">
	<?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/leftmenu.tpl.php';?>
        <div id="page-wrapper" class="gray-bg">
        <?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/top.tpl.php';?>
         <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>收银台</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a>User</a>
                        </li>
                        <li>
                            <a>pay</a>
                        </li>
                        <li class="active">
                            <strong>修改密码</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
			   <div class="row">
				<div class="col-lg-6">
				<div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>密码修改</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" id="pwdform" action="/merchants.php?m=User&c=index&a=doModifyPwd" method="POST">
                                <?php if ($phone && isset($sms_config['sms_key']) && $sms_config['sms_key']) {?>
								<p>密码很重要，请记住</p>
                                <div class="form-group"><label class="col-lg-2 control-label">老手机号</label>
                                    <div class="col-sm-9 input-group"><input type="text" class="form-control" value="验证码将发送到【<?php echo $phone;?>】上" readonly/>
                                    </div>
                                </div>
								<div class="form-group">
									<label class="col-lg-2 control-label">手机号</label>
                                    <div class="col-sm-9 input-group"><input type="text" class="form-control" placeholder="如不填写则不修改手机号，修改后短信验证码将发送到您修改的手机号上" name="phone"></div>
                                </div>
                                <?php } else { ?>
								<p>密码很重要，请记住。如果需要，请修改手机号，以便以后使用短信验证功能</p>
								<div class="form-group">
									<label class="col-lg-2 control-label">修改手机号</label>
                                    <div class="col-sm-9 input-group"><input type="text" class="form-control" placeholder="修改手机号，以便以后使用短信验证功能" name="phone" value="<?php echo $phone;?>"></div>
                                </div>
                                <?php }?>
                                <div class="form-group"><label class="col-lg-2 control-label">旧密码</label>
                                    <div class="col-sm-9 input-group"><input type="password" class="form-control" placeholder="旧密码" name="oldpwd"> <span class="help-block m-b-none"></span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">新密码</label>
                                    <div class="col-sm-9 input-group"><input type="password" class="form-control" placeholder="新密码" name="newpwd"></div>
                                </div>
								<div class="form-group">
									<label class="col-lg-2 control-label">新密码</label>
                                    <div class="col-sm-9 input-group"><input type="password" class="form-control" placeholder="再输入一次新密码" name="new2pwd"></div>
                                </div>
                                <?php if ($phone && isset($sms_config['sms_key']) && $sms_config['sms_key']) {?>
								<div class="form-group">
									<label class="col-lg-2 control-label">验证码</label>
                                    <div class="col-sm-9 input-group">
                                    	<input type="text" class="form-control" placeholder="输入您获取的短信验证码" name="code">
                                    	<input type="hidden" value="-1" id="codetime">
                                    	<a class="input-group-addon">获取验证码</a>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-sm btn-primary"> 修 改 </button>
                                    </div>
                                </div>
                            </form>
                        </div>
						</div>
                    </div>
					</div>
            </div>
            </div>
        </div>
   <?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/footer.tpl.php';?>
</body>

 <script>
$("#pwdform").submit(function(){
	var oldpwd=$.trim($('input[name="oldpwd"]').val());
	var newpwd=$.trim($('input[name="newpwd"]').val());
	var new2pwd=$.trim($('input[name="new2pwd"]').val());
	
	if(!oldpwd){
		swal("温馨提醒", "您没有输入旧密码", "error");
		$('input[name="oldpwd"]').focus();
		return false;
	}
	if(!newpwd){
		swal("温馨提醒", "您没有输入新密码", "error");
		$('input[name="newpwd"]').focus();
		return false;
	}
	if(!new2pwd){
		swal("温馨提醒", "您没有输入新密码！", "error");
		$('input[name="new2pwd"]').focus();
		return false;
	}
	if(newpwd != new2pwd){
		swal("温馨提醒", "两次输入的新密码不一致", "error");
		$('input[name="new2pwd"]').focus();
		return false;
	}
	<?php if ($phone && isset($sms_config['sms_key']) && $sms_config['sms_key']) {?>
	var code = $.trim($('input[name="code"]').val());
	if(!code){
		swal("温馨提醒", "短信验证码不能为空", "error");
		$('input[name="code"]').focus();
		return false;
	}
	<?php } else {?>
	var phone = $.trim($('input[name="phone"]').val());
	if(!phone){
		swal("温馨提醒", "手机号不能为空", "error");
		$('input[name="phone"]').focus();
		return false;
	}
	<?php }?>
	return true;
});
		 
var flag = false;
$(document).ready(function(){
	$('.input-group-addon').click(function(){
		if (flag) return false;
		flag = true;
		$.ajax({
			url:'?m=User&c=index&a=getCode',
			type:"post",
			dataType:"JSON",
			success:function(ret){
				if(!ret.error){
					$('#codetime').val(60);
					count_down();
				} else {
					flag = false;
					swal({
					  title: "获取短信验证码",
					  text: ret.info,
					  type: "error"
					 });
			   }
			}
		});
	});
});

function count_down(){
	var down = setInterval(function(){
		var num = $('#codetime').val();
		if(num > 0){
			$('#codetime').val(num - 1);
			$('.input-group-addon').html('(' + parseInt(num - 1) + ')秒后重新获取');
		}else{
			flag = false;
			$('#codetime').val(-1);
			$('.input-group-addon').html('获取验证码');
			clearInterval(down);
		}
	},1000);
}
</script>
</html>