<?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:30:11
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\game\main\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2057250d896d2285e30-72667617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fefe0d08c939dc5b1c09c8ae46736cd535d27a50' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\game\\main\\index.tpl',
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
    '85797526d3efe687b40e3e12b857ccd3249027db' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\menu.tpl',
      1 => 1356845066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2057250d896d2285e30-72667617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d896d2c987c7_09395100',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d896d2c987c7_09395100')) {function content_50d896d2c987c7_09395100($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '2057250d896d2285e30-72667617');
content_50dfed8696c166_40461020($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
    
        <?php if ($_smarty_tpl->tpl_vars['view']->value['info']!=''){?>
        <div class="loc_info">
            <?php echo $_smarty_tpl->tpl_vars['view']->value['info'];?>

        </div>
        <?php }?>
    
    
    <?php /*  Call merged included template "layout/menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2057250d896d2285e30-72667617');
content_50dfed8765c185_73093550($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/menu.tpl" */?>
    
    
    <div class="char_status">
        <?php if ($_smarty_tpl->tpl_vars['view']->value['life_p']>0.66){?>
            <?php if (isset($_smarty_tpl->tpl_vars["cl"])) {$_smarty_tpl->tpl_vars["cl"] = clone $_smarty_tpl->tpl_vars["cl"];
$_smarty_tpl->tpl_vars["cl"]->value = "red"; $_smarty_tpl->tpl_vars["cl"]->nocache = null; $_smarty_tpl->tpl_vars["cl"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cl"] = new Smarty_variable("red", null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['view']->value['life_p']<=0.66&&$_smarty_tpl->tpl_vars['view']->value['life_p']>0.33){?>
            <?php if (isset($_smarty_tpl->tpl_vars["cl"])) {$_smarty_tpl->tpl_vars["cl"] = clone $_smarty_tpl->tpl_vars["cl"];
$_smarty_tpl->tpl_vars["cl"]->value = "yellow"; $_smarty_tpl->tpl_vars["cl"]->nocache = null; $_smarty_tpl->tpl_vars["cl"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cl"] = new Smarty_variable("yellow", null, 0);?>
            <?php }else{ ?>
            <?php if (isset($_smarty_tpl->tpl_vars["cl"])) {$_smarty_tpl->tpl_vars["cl"] = clone $_smarty_tpl->tpl_vars["cl"];
$_smarty_tpl->tpl_vars["cl"]->value = "yellowgreen"; $_smarty_tpl->tpl_vars["cl"]->nocache = null; $_smarty_tpl->tpl_vars["cl"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cl"] = new Smarty_variable("yellowgreen", null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['view']->value['mana_p']>0.66){?>
            <?php if (isset($_smarty_tpl->tpl_vars["clm"])) {$_smarty_tpl->tpl_vars["clm"] = clone $_smarty_tpl->tpl_vars["clm"];
$_smarty_tpl->tpl_vars["clm"]->value = "blue"; $_smarty_tpl->tpl_vars["clm"]->nocache = null; $_smarty_tpl->tpl_vars["clm"]->scope = 0;
} else $_smarty_tpl->tpl_vars["clm"] = new Smarty_variable("blue", null, 0);?>
            <?php }elseif($_smarty_tpl->tpl_vars['view']->value['mana_p']<=0.66&&$_smarty_tpl->tpl_vars['view']->value['mana_p']>0.33){?>
            <?php if (isset($_smarty_tpl->tpl_vars["clm"])) {$_smarty_tpl->tpl_vars["clm"] = clone $_smarty_tpl->tpl_vars["clm"];
$_smarty_tpl->tpl_vars["clm"]->value = "bluelight"; $_smarty_tpl->tpl_vars["clm"]->nocache = null; $_smarty_tpl->tpl_vars["clm"]->scope = 0;
} else $_smarty_tpl->tpl_vars["clm"] = new Smarty_variable("bluelight", null, 0);?>
            <?php }else{ ?>
            <?php if (isset($_smarty_tpl->tpl_vars["clm"])) {$_smarty_tpl->tpl_vars["clm"] = clone $_smarty_tpl->tpl_vars["clm"];
$_smarty_tpl->tpl_vars["clm"]->value = "bluelightlight"; $_smarty_tpl->tpl_vars["clm"]->nocache = null; $_smarty_tpl->tpl_vars["clm"]->scope = 0;
} else $_smarty_tpl->tpl_vars["clm"] = new Smarty_variable("bluelightlight", null, 0);?>
        <?php }?>
        <div class="life_bar">
            <div class="persent <?php echo $_smarty_tpl->tpl_vars['cl']->value;?>
" style="width: <?php echo $_smarty_tpl->tpl_vars['view']->value['life_p']*100;?>
%"></div>
            <div class="text"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"life"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->life;?>
 / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->maxLife;?>
</div>
        </div>
        <div class="mana_bar">
            <div class="persent <?php echo $_smarty_tpl->tpl_vars['clm']->value;?>
" style="width: <?php echo $_smarty_tpl->tpl_vars['view']->value['mana_p']*100;?>
%"></div>
            <div class="text"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"skills",'line'=>"energy"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->energy;?>
 / <?php echo $_smarty_tpl->tpl_vars['view']->value['char']->maxEnergy;?>
</div>
        </div>
        <div class="exp_bar">
            <div class="persent brown" style="width: <?php echo $_smarty_tpl->tpl_vars['view']->value['exp_p'];?>
%"></div>
            <?php if ($_smarty_tpl->tpl_vars['view']->value['char']->studyPoints>0){?>
                <?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"sp"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars["sp"])) {$_smarty_tpl->tpl_vars["sp"] = clone $_smarty_tpl->tpl_vars["sp"];
$_smarty_tpl->tpl_vars["sp"]->value = $_tmp1.": ".((string)$_smarty_tpl->tpl_vars['view']->value['char']->studyPoints); $_smarty_tpl->tpl_vars["sp"]->nocache = null; $_smarty_tpl->tpl_vars["sp"]->scope = 0;
} else $_smarty_tpl->tpl_vars["sp"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['view']->value['char']->studyPoints), null, 0);?>
                <?php }else{ ?>
                <?php if (isset($_smarty_tpl->tpl_vars["sp"])) {$_smarty_tpl->tpl_vars["sp"] = clone $_smarty_tpl->tpl_vars["sp"];
$_smarty_tpl->tpl_vars["sp"]->value = ''; $_smarty_tpl->tpl_vars["sp"]->nocache = null; $_smarty_tpl->tpl_vars["sp"]->scope = 0;
} else $_smarty_tpl->tpl_vars["sp"] = new Smarty_variable('', null, 0);?>
            <?php }?>
            <div class="text"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"about_char",'line'=>"exp"),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['view']->value['exp_p'];?>

                %, <?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"menu",'line'=>"level"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo mb_strtolower($_tmp2, 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['view']->value['level'];?>
, <?php echo $_smarty_tpl->tpl_vars['sp']->value;?>
</div>
        </div>
    </div>
    
    
        <?php if (MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['journal'])>0){?>
        <div class="errors">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['mess'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mess']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['journal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mess']->key => $_smarty_tpl->tpl_vars['mess']->value){
$_smarty_tpl->tpl_vars['mess']->_loop = true;
?>
                    <li class="error_item"><span><?php echo $_smarty_tpl->tpl_vars['mess']->value->getPost()->getMessage();?>
</span></li>
                <?php } ?>
            </ul>
        </div>
        <?php }?>
    
    
    <ul class="loc_doors">
        <?php  $_smarty_tpl->tpl_vars['man'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['man']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['mans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['man']->key => $_smarty_tpl->tpl_vars['man']->value){
$_smarty_tpl->tpl_vars['man']->_loop = true;
?>
            <li>
                <a href="/?do=speak&npc=<?php echo $_smarty_tpl->tpl_vars['man']->value->getDialog();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['man']->value->getName();?>
</a>
            </li>
        <?php } ?>
    </ul>
    

    
    <ul class="loc_doors">
        <?php  $_smarty_tpl->tpl_vars['other'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['other']->_loop = false;
 $_smarty_tpl->tpl_vars['npcId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view']->value['others']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['other']->key => $_smarty_tpl->tpl_vars['other']->value){
$_smarty_tpl->tpl_vars['other']->_loop = true;
 $_smarty_tpl->tpl_vars['npcId']->value = $_smarty_tpl->tpl_vars['other']->key;
?>
            <li>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['other']->value->getCharParams()->life/$_smarty_tpl->tpl_vars['other']->value->getCharParams()->maxLife;?>
<?php $_tmp3=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars["p"])) {$_smarty_tpl->tpl_vars["p"] = clone $_smarty_tpl->tpl_vars["p"];
$_smarty_tpl->tpl_vars["p"]->value = $_tmp3; $_smarty_tpl->tpl_vars["p"]->nocache = null; $_smarty_tpl->tpl_vars["p"]->scope = 0;
} else $_smarty_tpl->tpl_vars["p"] = new Smarty_variable($_tmp3, null, 0);?>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars["life_p"])) {$_smarty_tpl->tpl_vars["life_p"] = clone $_smarty_tpl->tpl_vars["life_p"];
$_smarty_tpl->tpl_vars["life_p"]->value = $_tmp4+"%"; $_smarty_tpl->tpl_vars["life_p"]->nocache = null; $_smarty_tpl->tpl_vars["life_p"]->scope = 0;
} else $_smarty_tpl->tpl_vars["life_p"] = new Smarty_variable($_tmp4+"%", null, 0);?>
                <div class="life_bar npc">
                    <div class="persent yellowgreen" style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value*100;?>
%"></div>
                    <div class="text">
                        <a href="/?do=attack&npc=<?php echo $_smarty_tpl->tpl_vars['npcId']->value;?>
&<?php echo smarty_function_math(array('equation'=>'rand(0,100)'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['other']->value->getName();?>
</a>
                        <span id="p"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['p']->value*100;?>
<?php $_tmp5=ob_get_clean();?><?php echo sprintf("%.2f",$_tmp5);?>
%</span>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
    

    
    <ul class="loc_doors">
        <?php  $_smarty_tpl->tpl_vars["door"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["door"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view']->value['doors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["door"]->key => $_smarty_tpl->tpl_vars["door"]->value){
$_smarty_tpl->tpl_vars["door"]->_loop = true;
?>
        <li>
            <a href="/?do=main&go=<?php echo $_smarty_tpl->tpl_vars['door']->value->getTargetLocation();?>
&<?php echo smarty_function_math(array('equation'=>'rand(0000,9999)'),$_smarty_tpl);?>
">
                <span class="b-go b-part b-<?php echo $_smarty_tpl->tpl_vars['door']->value->getDirection();?>
"></span>
                <?php echo $_smarty_tpl->tpl_vars['door']->value->getName();?>

            </a>
        <?php } ?>
    </ul>
    

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:30:14
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50dfed8696c166_40461020')) {function content_50dfed8696c166_40461020($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 11:30:15
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50dfed8765c185_73093550')) {function content_50dfed8765c185_73093550($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\server\\OpenServer\\domains\\glor\\vendor\\smarty\\libs\\plugins\\function.math.php';
?><div class="main_menu">
    <ul class="menu list_menu_main">
        <li>
            <a href="/?do=char:about&<?php echo smarty_function_math(array('equation'=>'rand(1000,99999)'),$_smarty_tpl);?>
">

                <span class="b-set__1 b-part b-char"></span>
            </a>
        </li>
        <li>
            <a href="/?do=service:main&<?php echo smarty_function_math(array('equation'=>'rand(1000,99999)'),$_smarty_tpl);?>
">
            
                <span class="b-set__1 b-part b-service"></span>
            </a>
        </li>
    </ul>
</div><?php }} ?>