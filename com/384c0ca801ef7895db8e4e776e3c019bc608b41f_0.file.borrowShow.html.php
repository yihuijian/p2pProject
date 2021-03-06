<?php
/* Smarty version 3.1.30, created on 2017-04-16 08:43:40
  from "D:\wampServer\wamp\www\p2pProject\tpl\admin\borrowShow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f3129c05fa16_62141457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '384c0ca801ef7895db8e4e776e3c019bc608b41f' => 
    array (
      0 => 'D:\\wampServer\\wamp\\www\\p2pProject\\tpl\\admin\\borrowShow.html',
      1 => 1492190895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f3129c05fa16_62141457 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>人人理财后台管理系统</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
borrowShow.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
bootstrap/dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
addBorrow.css"/>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
style.css"/>

	
</head>
<body>
   <ul id="myTab" class="nav nav-tabs" style="margin-left:10px">
   <li class="li1 active">
      <a href="#tag1" data-toggle="tab" style="text-decoration:none">
        查询项目
      </a>
   </li>
   <li class="li2"><a href="#tag2" style="text-decoration:none" data-toggle="tab">添加项目</a></li>
   <li class="dropdown">
      <a href="#" style="text-decoration:none" id="myTabDrop1" class="dropdown-toggle" 
         data-toggle="dropdown">编辑项目
         <b class="caret"></b>
      </a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
         <li class="li3-1"><a href="#tag3-1" style="text-decoration:none" tabindex="-1" data-toggle="tab">终止项目</a></li>
         <li class="li3-2"><a href="#tag3-2" style="text-decoration:none" tabindex="-1" data-toggle="tab">项目当前收益</a></li>
      </ul>
   </li>
</ul>
<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="tag1">
      <div class="panel panel-default" style="width:80%;margin-left:10px;">
     	<div class="panel-heading" style="font-weight:600">借贷项目汇总</div>
	    <table class="table">
		    <tr>
		    	<th>序号</th>
		    	<th>名称</th>
		    	<th>利息</th>
		    	<th>贷款期数</th>
		    	<th>服务费</th>
		    	<th>借贷人数</th>
		    	<th>额度范围</th>
		    	<th>创建时间</th>
		    	<th>总额</th>
		    </tr>
		    <tr>
		    	<td>1</td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    	<td></td>
		    </tr>
	    </table>
     </div>
   </div>
   <div class="tab-pane fade" id="tag2">
   	<form class="form-horizontal" id="addBorrow">
   		<h4>添加借贷产品</h4>
 			<p>
 				<label class="control-label" for="typename" style='font-size:16px;'>项目名称</label>
				<input type="text" class="input-xlarge" name="typename" id="typename">
 			</p>
 			
			<p>
				<label class="control-label" style='font-size:16px' for="timesum">借贷期限</label>
				<select id="timesum" name="timesum">
					<option>1个月</option>
					<option>2个月</option>
					<option>3个月</option>
					<option>6个月</option>
					<option>12个月</option>
				</select>
			</p>
			
			<p>
				<label class="control-label" style='font-size:16px' for="maxmoney">最大金额</label>
				<input type="text" class="input-xlarge" name="maxmoney" id="maxmoney">
			</p>
			
			<p>
				<label class="control-label" style='font-size:16px' for="minmoney">最小金额</label>
				<input type="text" class="input-xlarge" name="minmoney" id="minmoney">
			</p>
			
			<p>
				<label class="control-label" style='font-size:16px' for="invest">月利息值</label>
				<input type="text" class="input-xlarge" name="invest" id="invest"/>
			</p>

			<p>

				 <label class="control-label" style='font-size:16px' for="saverFeed">服务费用</label>
				<input type="text" class="input-xlarge" name="saverFeed" id="saverFeed">
			</p>	

		<div class="form-actions" style="margin-top:30px;">
			<button type="button" class="btn btn-primary" id="addBorrowBtn">添加</button>
			
			<button class="btn"  style="margin-left:40px">取消</button>
		</div>
    </form>  
   </div>
   <div class="tab-pane fade" id="tag3-1">
      <div class="panel panel-default" style="width:90%;margin-left:10px">
     	<div class="panel-heading" style="font-weight:600">终止借贷项目</div>
	    <table class="table" id="table2">
		    <tr>
		    	<th style='text-align:center'>序号</th>
		    	<th style='text-align:center'>名称</th>
		    	<th style='text-align:center'>利息</th>
		    	<th style='text-align:center'>贷款期数</th>
		    	<th style='text-align:center'>服务费</th>
		    	<th style='text-align:center'>最大额</th>
		    	<th style='text-align:center'>最小额</th>
		    	<th style='text-align:center'>创建人</th>
		    	<th style='text-align:center'>操作</th>
		    </tr>
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		    	<tr>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
</td>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['invest'];?>
</td>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['timesum'];?>
</td>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['saverFeed'];?>
</td>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['maxmoney'];?>
</td>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['minmoney'];?>
</td>
		    		<td style='text-align:center'><?php echo $_smarty_tpl->tpl_vars['v']->value['auser'];?>
</td>
		    		<td style='text-align:center'><button class='btn btn-danger cancle'>删除</button><input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
 /></td>
		    	</tr>
		    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    </table>

      </div>
   </div>
   <div class="tab-pane fade" id="tag3-2">
      <p>Enterprise Java Beans (EJB) is a development architecture 
         for building highly scalable and robust enterprise level    
         applications to be deployed on J2EE compliant 
         Application Server such as JBOSS, Web Logic etc.
      </p>
   </div>
</div>
</body>

</html><?php }
}
