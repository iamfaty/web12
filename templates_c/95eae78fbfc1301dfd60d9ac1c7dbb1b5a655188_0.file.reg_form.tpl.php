<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-01 06:17:03
  from 'D:\xampp\htdocs\web12\templates\tpl\reg_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5b454f5ef2f5_57056628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95eae78fbfc1301dfd60d9ac1c7dbb1b5a655188' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web12\\templates\\tpl\\reg_form.tpl',
      1 => 1583039769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5b454f5ef2f5_57056628 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container mt-5">
    <h1 class="text-center">註冊表單</h1>
    
    <form action="user.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
    
      <div class="row">         
        <!--帳號-->              
        <div class="col-sm-4">
          <div class="form-group">
            <label>帳號<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="uname" id="uname" value="" required>
          </div>
        </div>         
        <!--密碼-->              
        <div class="col-sm-4">
          <div class="form-group">
            <label>密碼<span class="text-danger">*</span class="text-danger"></label>
            <input type="password" class="form-control" name="pass" id="pass" value="" required>
          </div>
        </div>         
        <!--確認密碼-->              
        <div class="col-sm-4">
          <div class="form-group">
            <label>確認密碼<span class="text-danger">*</span class="text-danger"></label>
            <input type="password" class="form-control" name="chk_pass" id="chk_pass" value="" required>
          </div>
        </div>         
        <!--姓名-->              
        <div class="col-sm-4">
          <div class="form-group">
            <label>姓名<span class="text-danger">*</span class="text-danger"></label>
            <input type="text" class="form-control" name="name" id="name" value="" required>
          </div>
        </div>         
        <!--電話-->              
        <div class="col-sm-4">
          <div class="form-group">
            <label>電話<span class="text-danger">*</span class="text-danger"></label>
            <input type="text" class="form-control" name="tel" id="tel" value="" required>
          </div>
        </div>             
        <!--信箱-->              
        <div class="col-sm-4">
          <div class="form-group">
            <label>信箱<span class="text-danger">*</span class="text-danger"></label>
            <input type="text" class="form-control" name="email" id="email" value="" required>
          </div>
        </div> 
      </div>
      <div class="text-center pb-20">
        <input type="hidden" name="op" value="reg">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
  
    </form>
  
  </div><?php }
}
