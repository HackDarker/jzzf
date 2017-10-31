<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>业务员</title>
    <?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/header.tpl.php';?>
	
</head>

<body>
    <div id="wrapper">
	<?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/Setupleftmenu.tpl.php';?>
        <div id="page-wrapper" class="gray-bg">
        <?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/top.tpl.php';?>
         <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>安全设置</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a>Salesman</a>
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
                            <form class="form-horizontal" id="pwdform" action="/merchants.php?m=Salesman&c=pfpay&a=security" method="POST">
                                <div class="form-group"><label class="col-lg-2 control-label">旧密码</label>
                                    <div class="col-sm-9 input-group"><input type="password" class="form-control" placeholder="旧密码" name="oldpwd"> <span class="help-block m-b-none"></span>
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">新密码</label>
                                    <div class="col-sm-9 input-group"><input type="password" class="form-control" placeholder="新密码" name="newpwd"></div>
                                </div>
								
								<div class="form-group"><label class="col-lg-2 control-label">确认密码</label>
                                    <div class="col-sm-9 input-group"><input type="password" class="form-control" placeholder="确认密码" name="new2pwd"></div>
                                </div>
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
	return true;
});
		 
/* var flag = false;
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
} */
</script>
</html>