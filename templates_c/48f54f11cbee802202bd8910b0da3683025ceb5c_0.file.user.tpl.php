<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 17:07:29
  from 'D:\xampp\htdocs\web12\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e593ac109c203_42345940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f54f11cbee802202bd8910b0da3683025ceb5c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web12\\templates\\user.tpl',
      1 => 1582905993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin.tpl' => 1,
    'file:tpl/login.tpl' => 1,
  ),
),false)) {
function content_5e593ac109c203_42345940 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.css">

    <title>會員管理</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
	<?php if ($_SESSION['admin']) {?>
	  <?php $_smarty_tpl->_subTemplateRender("file:tpl/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php } else { ?>
	  <?php $_smarty_tpl->_subTemplateRender("file:tpl/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<style>
			.form-signin {
					width: 100%;
					max-width: 400px;
					padding: 15px;
					margin: 0 auto;
			}      
		</style>
		<div class="container mt-5">
				<form class="form-signin" action="user.php" method="post">
						<h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
						<div class="mb-3">
						<label for="name" class="sr-only">帳號</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="請輸入帳號"  required>
						</div>
						<div class="mb-3">
						<label for="pass" class="sr-only">密碼</label>
						<input type="password" name="pass" id="pass" class="form-control" placeholder="請輸入密碼" required>
						</div>
				
						<div class="checkbox mb-3">
						<label>
								<input type="checkbox" name="remember" id="remember"> 記住我
						</label>
								
						</div>
						<input type="hidden" name="op" id="op" value="login">
						<button class="btn btn-lg btn-primary btn-block" type="submit">會員登入</button>
						<div>
								您還沒還沒註冊嗎？請 <a href="#">點選此處註冊您的新帳號</a>。
						</div>
				</form>
		</div>
	<?php }?>

  </body>
</html><?php }
}
