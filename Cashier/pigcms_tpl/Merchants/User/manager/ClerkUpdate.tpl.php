
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>员工列表</title>
	<?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/header.tpl.php';?>


    <!-- FooTable -->
    <link href="<?php echo  RL_PIGCMS_STATIC_PATH;?>plugins/css/footable/footable.core.css" rel="stylesheet">
	<link href="<?php echo $this->RlStaticResource;?>plugins/css/iCheck/custom.css" rel="stylesheet">
	<style>
		.ibox{
		 	border: 1px solid #e7eaec;
		}
		.part_item {
  			background: none repeat scroll 0 0 #fff;
  			border: 1px solid #ccc;
  			border-radius: 5px;
  			padding-bottom: 15px;
  			margin-bottom: 10px;
		}
		.form .part_item p {
  			display: inline-block;
  			font-size: 14px;
  			overflow: hidden;
  			padding: 10px 20px 0;
  			text-overflow: ellipsis;
  			white-space: nowrap;
		}
		.part_item_b {
  			border-top: 1px solid #ccc;
  			margin-top: 10px;
		}
		.form .part_item p.active {
  			color: #f87b00;
		}
		.part_item input {
  			font-size: 14px;
  			margin-bottom: 2px;
  			margin-right: 5px;
		}
		.pagination{
			margin:0px;
		}
		.mustInput {
  			color: red;
  			margin-right: 5px;
		}
		@media (min-width: 768px){
			.form .part_item p {
				width: 37%;
			}
		}
		@media (min-width: 992px){
			.form .part_item p {
				width: 24%;
			}
		}
	.form-control, .single-line{width: 50%;}
	
	.ibox {
    border: 1px solid #e7eaec;
    border-top: none;
}

	.tit_h4{ height: 40px; line-height: 40px; padding: 0 20px; width: 100%;margin:0px !important;}
	.tit_h4 span{ color: #676a6c; font-weight: normal;}
	.tit_h4 a{ color: #44b549; font-weight: normal;}
	.jbxi_bg>div{border-top: 1px solid #f2f2f2; padding: 20px 0; margin: 0px !important;float: left; width: 100%;}
	.jbxi_bg>div>label{ width: 100px; text-align: right; float: left; margin-right: 30px;}
	.jbxi_bg>div>div>label{padding-top: 5px;}
	.jbxi_bg>div>div>input{border: none;}
	.form-control{
    width: 80%;
}
.footable-odd {
    background-color: #ffffff;
}
.bc{position: absolute; bottom: -55px; left: 50%; width: 70px; height: 30px; margin-left: -35px; background: #4EBE53; border-radius: 5px; border: none; color: #FFFFFF;}
	</style>
</head>

<body>

    <div id="wrapper">
	<?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/managerleft.tpl.php';?>

        <div id="page-wrapper" class="gray-bg">
        <?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/top.tpl.php';?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>员工列表</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a>User</a>
                        </li>
                        <li>
                            <a>店员信息管理</a>
                        </li>
                        <li class="active">
                            <strong>编辑店员</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                    	<!--
                        	作者：2721190987@qq.com
                        	时间：2016-10-20
                        	描述：基本信息
                        -->
                    	<div class="ibox-content" style="border-top:none;">
                    		
                    		  <div class="panel-body" style="padding: 0px; ">
                    		   
                                <form action="/merchants.php?m=User&c=manager&a=ClerkUpdate" id="ClerkUpdate" method ="post" class="form-horizontal form-border jbxi_bg clearfix" style="width: 80%; margin: 0 auto 60px; position: relative; border: 1px solid #EEEEEE;">
                                    <input name="id" type="hidden" value="<?php echo $data['id']; ?>">
                                	<h4 class="tit_h4"><span>编辑店员</span></h4>
                                    <div class="form-group clearfix">
                                        <label class="control-label">员工姓名</label>
                                        <div >
                                            <input type="text" class="form-control" placeholder="昵称" name="username" value="<?php echo $employee['username'];?>" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group clearfix">
                                        <label class=" control-label">登录帐号</label>
                                        <div>
                                            <input type="text" class="form-control"  placeholder="建议使用邮箱" value="<?php echo $employee['account'];?>" disabled="disabled" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group clearfix">
                                       <label class=" control-label">修改密码</label><input type="checkbox" id="xuanzhe" style="margin-top: 13px;" name='ispwd' value="1"/>
                                        <div class="mima" style="display: none; margin-left: 0px;">
                                            <label style="width: 100px; text-align: right; display:inline-block; margin-right:10px;">新密码</label><input type="text" placeholder="输入新密码"  name="password"  style="height: 30px; width: 150px; margin-left: 10px;border: none"><br />
                                            <label style="width: 100px; text-align: right; display:inline-block;margin-right:10px;">确认密码</label><input type="text" placeholder="输入新密码" name="password1" style="height: 30px; width: 150px;margin-left: 10px;border: none">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group clearfix">
                                        <label class=" control-label">联系电话</label>
                                        <div>
                                            <input type="phone" class="form-control" name="phone" value="<?php echo $employee['phone'];?>" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group clearfix">
                                        <label class=" control-label">收款二维码ID</label>
                                        <div>
                                            <input type="phone" class="form-control" name="phone" value="<?php echo $qrcode['qrcode_id'];?>" disabled="disabled">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <input type="button" class="bc" value="保存" onclick="ClerkAdd();">
                                    
                                </form>


                            </div>
                    	</div>
                    	<!--
                        	作者：2721190987@qq.com
                        	时间：2016-10-20
                        	描述：end
                        -->
                        
                    </div>
                </div>
            </div>
        </div>
		<?php include RL_PIGCMS_TPL_PATH.APP_NAME.'/'.ROUTE_MODEL.'/public/footer.tpl.php';?>
     </div>
    </div>
    <script>
  	$("#xuanzhe").click(function(){
  		if($(this).is(':checked')){
 		$(".mima").show();
 	}else{
 		$(".mima").hide();
 	}
  	})
  </script>
<script>
/**
 * 表单提交
 */
function ClerkAdd(){
	var username = $('input[name="username"]').val();
  	var password1 = $('input[name="password1"]').val();
  	var password = $('input[name="password"]').val();
  	var phone = $('input[name="phone"]').val();
  	var tel = /^1[3|4|5|7|8]\d{9}$/;

  	
  	if(username == ''){
  	  	swal({title: "错误",text: "请填写昵称",type: "error"});
  	  	return false;
  	}

  	if($('#xuanzhe').is(':checked')){
  	  	if(password != password1){
  	  	  	swal({title: "错误",text: "两次密码输入不一致",type: "error"});
  	  	  	return false;
  	  	}
  	}
	
  	if(phone == ''){
  	  	swal({title: "错误",text: "请填写手机号码",type: "error"});
  	  	return false;
  	}
  	
	if(!tel.exec(phone)){
		swal({title: "错误",text: "手机号码格式错误",type: "error"});
  	  	return false;
	}
  	$('#ClerkUpdate').submit();
  	
}



</script>
  <script>
  	$("#xuanzhe").click(function(){
  		if($(this).is(':checked')){
 		$(".mima").show();
 	}else{
 		$(".mima").hide();
 	}
  	});
  	$("#shoukuan").click(function(){
  		if($(this).is(':checked')){
 		$(".shoukuan").show();
 	}else{
 		$(".shoukuan").hide();
 	}
  	})
  	
  	
  	
  </script>
 <!--
	<script type="text/html" id="employersEditTpl">
		<figure>
              <iframe width="425" height="349" src="?m=User&c=merchant&a=employersEdit&eid={($eid)}" frameborder="0"></iframe>
        </figure>
	</script>

     FooTable 
    <script src="<?php echo $this->RlStaticResource;?>plugins/js/footable/footable.all.min.js"></script>
	
	<!-- iCheck -->
    <script src="<?php echo $this->RlStaticResource;?>plugins/js/iCheck/icheck.min.js"></script>
	
	<!-- Jquery Validate
    <script src="<?php echo $this->RlStaticResource;?>plugins/js/validate/jquery.validate.min.js"></script>
 -->
    <!-- Page-Level Scripts -->
    <script>
      /*   $(document).ready(function() {
			employers.init();
        });
		!function(a,b){
			var employers = employers || {};
			employers.init = function(){
				var c = employers;
				b('.footable').footable();
				b('.i-checks').iCheck({
                	checkboxClass: 'icheckbox_square-green',
                	radioClass: 'iradio_square-green',
            	});
				b('#check_box').on('ifChanged', function(){
					c.selectall('id[]','check_box');
				});
				b('.info_del_all').click(function(){
					c.delAll();
				});
				b('.part_item .checkAll').click(function(){
					var checkItems = b(this).parents('.part_item_t').siblings('.part_item_b').find('p').find('input[name="authority[]"]');
					if (b(this).is(':checked') == false) {
						checkItems.each(function(ke,el){
							$(el).iCheck('uncheck');
						});
					}else{
						checkItems.each(function(ke,el){
							$(el).iCheck('check');
						});
					}
				});
				jQuery.extend(jQuery.validator.messages, {
  					required: "必填字段",
  					remote: "请修正该字段",
  					email: "请输入正确格式的电子邮件",
  					equalTo: "请再次输入相同的值",
  					maxlength: jQuery.validator.format("请输入一个长度最多是 {0} 的字符串"),
  					minlength: jQuery.validator.format("请输入一个长度最少是 {0} 的字符串"),
				});
				b('#employersForm').validate({
                    errorPlacement: function (error, element){
                            element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        },
						account: {
							minlength: 4
						},
						password: {
							minlength: 4
						}
                    }
                });
				b('.formSubmit').click(function(){
					if(b('#account').val() != ''){
						$.post('?m=User&c=merchant&a=checkAccount',{account:b('#account').val()},function(re){
							if(re.status == 0){
								b('#account').addClass('error');
								swal("错误", re.msg+" :)", "error");
							}else if(re.status == 1){
								b('#employersForm').submit();
							}
						},'json');
					}else{
						b('#employersForm').submit();
					}
				});
				b('.status-checkbox').change(function(){
					var i = b(this).attr('data-id'),s = b(this).is(':checked') ? 1 : 0;
					$.post('?m=User&c=merchant&a=field',{eid:i,status:s},function(re){
						if(re.status == 0){
							swal("错误", re.msg+" :)", "error");
						}
					},'json');
				});
				b('.employersDel').click(function(){
					var c = b(this);
					swal({
        				title: "是否删除这条数据?",
        				text: "删除数据后将无法恢复，确认要删除吗！",
        				type: "warning",
                   	 	confirmButtonColor: "#DD6B55",
                   	 	confirmButtonText: "删除",
                    	cancelButtonText: "取消",
                    	closeOnConfirm: false,
                    	showCancelButton: true,
    				}, function (){
						$.post('?m=User&c=merchant&a=employersDel',{eid:c.attr('data-id')},function(re){
							if(re.status == 0){
								swal("错误", re.msg+" :)", "error");
							}else{
								swal("成功", re.msg+" :)", "success");
								c.parents('tr').remove();
								b('.footable').footable();
							}
						},'json');
    				});
				});
				b('.employersEdit').click(function(){
					c.edit(b(this).attr('data-id'));
				});
			};
			employers.selectall = function(name,id){
				var checkItems = b('input[name="'+name+'"]');
				if ($("#"+id).is(':checked') == false) {
					checkItems.each(function(ke,el){
						$(el).iCheck('uncheck');
					});
				}else{
					checkItems.each(function(ke,el){
						$(el).iCheck('check');
					});
				}
			}
			employers.delAll = function(){
				swal({
        			title: "是否删除选中?",
        			text: "删除数据后将无法恢复，确认要删除吗！",
        			type: "warning",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "删除",
                    cancelButtonText: "取消",
                    closeOnConfirm: false,
                    showCancelButton: true,
    			}, function (){
					var checkItems = b('input[name="id[]"]'),c = false;
			
					checkItems.each(function(ke,el){
						if($(el).is(':checked') == true){
							c = true;
						}
					});
					if(c == false){
						swal("错误", "你至少需要选中一项 :)", "error");
						return false;
					}
					$('.employersDelAll').submit();
    			});
			}
			employers.edit = function(data){
				var $data = b('#employersEditTpl').html().replace('{($eid)}',data);
				b('#myModal6').find('.modal-content .modal-body').find('.col-lg-12').html($data);
				b('.employersEditJump').click();
				employers.iframeRresponsible();
				var index = window.setTimeout(function(){
					$(window).resize();
				},200);
			}
			employers.iframeRresponsible = function(){
				var $allObjects = $("iframe, object, embed"),
        		$fluidEl = $("figure");

   	 			$allObjects.each(function() {
        			$(this)
           			 // jQuery .data does not work on object/embed elements
            		.attr('data-aspectRatio', this.height / this.width)
            		.removeAttr('height')
            		.removeAttr('width');
    			});
   		 		$(window).resize(function() {
        			var newWidth = $fluidEl.width();
        			$allObjects.each(function() {
        			    var $el = $(this);
        			    $el
        			    .width(newWidth)
        			    .height(newWidth * $el.attr('data-aspectRatio'));
        			});
    			}).resize();
			}
			a.employers = employers;
		}(window,jQuery); */
    </script>
</body>
</html>