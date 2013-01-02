<?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:28:59
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\login\reg.html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2460450d8934ad1aa41-69652959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47559612dc9937bc886d315a6ac1ec0bbfd9c443' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\login\\reg.html.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
    '215698c7640cbb297996a8212b39a1e84ecfae22' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\wrapper.html.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
    '8d6e602103c68add83eac291ee4509c468d2de08' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\errors.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2460450d8934ad1aa41-69652959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d8934b631626_95705989',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d8934b631626_95705989')) {function content_50d8934b631626_95705989($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '2460450d8934ad1aa41-69652959');
content_50dfed3ba6b978_58027756($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
<form action="/reg.php" method="post">
    <input type='hidden' name='otvet' value="<?php echo $_smarty_tpl->tpl_vars['view']->value['otvet'];?>
"/>
    <input type="text" name="login" placeholder="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"login"),$_smarty_tpl);?>
"/><br/>
    <input type="password" name="password" placeholder="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"login_page",'line'=>"password"),$_smarty_tpl);?>
"/><br/>
    <input type="password" name="password_repeat" placeholder="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"password_repeat"),$_smarty_tpl);?>
"/><br/>
    <input type="text" name="email" placeholder="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"email"),$_smarty_tpl);?>
"/>
    <hr/>
    <input type="text" name="char_name" placeholder="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"char_name"),$_smarty_tpl);?>
"/>

    <div class="red">
        <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"race"),$_smarty_tpl);?>

    </div>
    <div class="radio_buttons">
        <label id="light"><input type="radio" name="race" value="light"
                                 checked="true"/><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"light"),$_smarty_tpl);?>
</label>
        <label id="dark"><input type="radio" name="race" value="dark"/><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"dark"),$_smarty_tpl);?>
</label>
    </div>
    <div class="red">
        <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"class"),$_smarty_tpl);?>

    </div>
    <div class="radio_buttons">
        <label><input type="radio" name="class" value="war"
                      checked="true"/><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"classes",'line'=>"warrior"),$_smarty_tpl);?>
</label>
        <label><input type="radio" name="class" value="heal"/><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"classes",'line'=>"healer"),$_smarty_tpl);?>
</label>
        <label><input type="radio" name="class" value="sniper"/><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"classes",'line'=>"sniper"),$_smarty_tpl);?>
</label>
    </div>
    <hr/>
    <span class="antibot"><strong><?php echo $_smarty_tpl->tpl_vars['view']->value['first'];?>
 <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>((string)$_smarty_tpl->tpl_vars['view']->value['func'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['view']->value['second'];?>
</strong> = <input
            type="text" name="captcha"/></span><br/>
    <input type="submit" name="reg_button" value="<?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"registration",'line'=>"button"),$_smarty_tpl);?>
"/>
</form>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:28:59
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50dfed3ba6b978_58027756')) {function content_50dfed3ba6b978_58027756($_smarty_tpl) {?><div class="errors">
    <ul>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li class="error_item"><span><?php echo mb_strtolower($_smarty_tpl->tpl_vars['error']->value, 'UTF-8');?>
</span></li>
    <?php } ?>
    </ul>
</div><?php }} ?>