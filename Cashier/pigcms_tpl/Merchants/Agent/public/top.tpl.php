       <style>.navbar-right{margin-right:0px}
       .navbar-top-links .dropdown-messages{ width: 250px;height:230px}
       #myLoginUrlDiv .modal-body{text-align: center;}
       .navbar{ margin-bottom: 0;}
       .dropdown-messages-box .media-body{text-align: center;color: #f8ac59; font-size: 15px;}
       .navbar-header .bgcolor{background-color: #1cb295;border-color: #1cb295;}
       .navbar-header>ul{ height: 90px; margin-bottom: 0px;}
       .navbar-header>ul>dl{ float: left; padding: 20px 30px; margin: 0px 10px; text-align: center; height: 100%;}
       .navbar-header>ul>dl a{ display: inline-block; width: 100%; height: 100%;}
       .navbar-header>ul>dl a dt{color: #f7fcff;}
        .navbar-static-top{ background: #008fd3; height: 90px;}
        .navbar-right{ margin-top: 10px;}
        .nav_selected{ background: #0082c5;}
        .nav.navbar-right > li > a {
    color: #ffffff;
}
       </style>
       <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-header">
            <!--<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>-->
            <ul class="clearfix ">
<!--                 <dl <?php if(!ROUTE_CONTROL=='pay' || !ROUTE_CONTROL=='pfpay') echo 'class="nav_selected"'; ?>>
                    <a href="#">
                        <dd><i><img src="./Cashier/pigcms_static/image/APP_generate.png"></i></dd>
                        <dt>APP生成</dt>
                    </a>
                </dl>-->
                <dl <?php if (ROUTE_ACTION =='index' && ROUTE_ACTION=='index'){echo 'class="nav_selected"';} ?>>
                    <a href="/merchants.php?m=Agent&c=index&a=index">
                        <dd><i><img src="./Cashier/pigcms_static/image/icon-cloud.png"></i></dd>
                        <dt>云收单</dt>
                    </a>
                </dl>
                <dl <?php if (ROUTE_CONTROL=='adManage' && ROUTE_ACTION=='adlist'){ echo 'class="nav_selected"';} ?>>
                    <a href="/merchants.php?m=Agent&c=adManage&a=adlist">
                        <dd><i><img src="./Cashier/pigcms_static/image/icon-cog.png"></i></dd>
                        <dt>广告管理</dt>
                    </a>
                </dl>
                <dl <?php if (ROUTE_CONTROL=='index' && ROUTE_ACTION=='SetAccount'){ echo 'class="nav_selected"';} ?>>
                        <a href="/merchants.php?m=Agent&c=index&a=SetAccount">
                        <dd><i><img src="./Cashier/pigcms_static/image/icon-cog.png"></i></dd>
                        <dt>设置</dt>
                    </a>
                </dl>
            </ul>
       </div>
            <ul class="nav navbar-top-links navbar-right">
               <?php if(defined('WxPay_CfgTips') && WxPay_CfgTips){?>
                <li class="dropdown" id="CfgTips">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i><span class="label label-warning">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                           <div class="dropdown-messages-box">
                                <div class="media-body">
                                    <strong><?php echo WxPay_CfgTips;?></strong>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <?php }?>
               <li class="dropdown" id="help-link">
                    <a class="dropdown-toggle count-info" href="/merchants.php?m=Index&c=help&a=index" title="帮助文档" target="_blank">
                        <i class="fa  fa-question-circle"></i> <!--<span class="label label-warning">16</span>-->
                    </a>
                </li>
                <!--
                <li class="dropdown" id="siteEwmLi">
                    <a class="dropdown-toggle count-info" href="#" title="用户登录二维码">
                        <i class="fa fa-qrcode"></i> <span class="label label-warning">16</span>
                    </a>
                </li>
                -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i><span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>-->


                <li>
                    <a  href="?m=Agent&c=index&a=logout">
                        <i class="fa fa-sign-out"></i> 退出
                    </a>
                </li>
            </ul>
        </nav>
        </div>
        
        <div class="modal inmodal" tabindex="-1" role="dialog"  id="myLoginUrlDiv">
        <div class="modal-dialog" style="width: 500px;">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close _close"><span style="font-size: 35px;">×</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">
                </div>
                <?php if(!empty($this->employer) && isset($this->employer['account'])){?>
                <div class="downewm" style="text-align: center;line-height: 25px;"><span>用户名：<?php echo $this->employer['account'];?></span><br/></div>
                <?php }else{?>
                <div class="downewm" style="text-align: center;line-height: 25px;"><span>用户名：<?php echo $this->merchant['username'];?></span><br/>
                <?php if(in_array($this->merchant['source'],array(1,2,3)) && !($this->merchant['mfypwd']>0)){?>
                <span>默认密码：<?php    $password=md5($this->merchant['thirduserid'].'@me');$password=substr($password,2,8).'cf'.$this->merchant['source']; echo $password;?></span>
                <?php } ?>
                </div>
                <?php }?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white _close">关闭</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
     var ltyp=0;
     <?php if(!empty($this->employer) && isset($this->employer['account'])){?>
         ltyp=1;
     <?php }?>
     $('#siteEwmLi a').click(function(){
        $('#myLoginUrlDiv .modal-body').qrcode({ 
            //render: "table", //table方式 
            width: 250, //宽度 
            height:250, //高度 
            text:'<?php echo $this->SiteUrl?>/merchants.php?m=Index&c=login&a=agentLogin&ltyp='+ltyp //任意内容 
        });
         $('#myLoginUrlDiv').show();
     });

         $("#myLoginUrlDiv ._close").click(function(){
              $('#myLoginUrlDiv').hide();
              $('#myLoginUrlDiv .modal-body').html('');
          });
    </script>