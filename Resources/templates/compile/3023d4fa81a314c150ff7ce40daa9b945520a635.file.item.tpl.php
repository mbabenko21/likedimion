<?php /* Smarty version Smarty-3.1.12, created on 2013-01-03 01:19:47
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\game\about\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60150e48136c561a7-19444053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3023d4fa81a314c150ff7ce40daa9b945520a635' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\game\\about\\item.tpl',
      1 => 1357161575,
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
    '611db712e498160218c1c33df6c6a26577f52ef1' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\layout\\item_look.tpl',
      1 => 1357161176,
      2 => 'file',
    ),
    '4e719c31031f8d3c9c9fc17642f21767d4f29eb0' => 
    array (
      0 => 'D:\\server\\OpenServer\\domains\\glor\\Resources\\templates\\templates\\game\\about\\items\\weapon.tpl',
      1 => 1357160015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60150e48136c561a7-19444053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e4813739e717_50388935',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e4813739e717_50388935')) {function content_50e4813739e717_50388935($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['errors'])&&MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])>0){?>
    <?php /*  Call merged included template "layout/errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('errors'=>$_smarty_tpl->tpl_vars['view']->value['errors']), 0, '60150e48136c561a7-19444053');
content_50e4a473dc0b77_53993215($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/errors.tpl" */?>
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['view']->value['layout'])){?>
    <?php echo $_smarty_tpl->getSubTemplate ("layout/".((string)$_smarty_tpl->tpl_vars['view']->value['layout']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php if (MB\Core\Kernel\SmartyService::length($_smarty_tpl->tpl_vars['view']->value['errors'])<1){?>
<?php /*  Call merged included template "layout/item_look.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layout/item_look.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['view']->value['item']), 0, '60150e48136c561a7-19444053');
content_50e4a4743d4e72_77136211($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "layout/item_look.tpl" */?>
<div class="item">
    <div id="item_type"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"item",'line'=>"type"),$_smarty_tpl);?>
: <span
            class="bold"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"item_types",'line'=>((string)$_smarty_tpl->tpl_vars['view']->value['item']->getType())),$_smarty_tpl);?>
</span></div>
    <div id="item_cost"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"item",'line'=>"cost"),$_smarty_tpl);?>
: <span class="bold"><?php echo $_smarty_tpl->tpl_vars['view']->value['item']->getCost();?>
</span></div>
    <hr />
    <?php if ($_smarty_tpl->tpl_vars['view']->value['item']->getType()==2||$_smarty_tpl->tpl_vars['view']->value['item']->getType()==3||$_smarty_tpl->tpl_vars['view']->value['item']->getType()==4||$_smarty_tpl->tpl_vars['view']->value['item']->getType()==5||$_smarty_tpl->tpl_vars['view']->value['item']->getType()==6){?>
    <?php /*  Call merged included template "game/about/items/weapon.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("game/about/items/weapon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['view']->value['item']), 0, '60150e48136c561a7-19444053');
content_50e4a47581e848_82680333($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "game/about/items/weapon.tpl" */?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['view']->value['item']->getMaster()!=''){?>
        <div class="item_master">
            <span id="master"><?php ob_start();?><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"item",'line'=>"master"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_strtolower($_tmp1, 'UTF-8');?>
</span> <span
                class="bold"><?php echo $_smarty_tpl->tpl_vars['view']->value['item']->getMaster();?>
</span>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['view']->value['item']->getModificationLevel()>0){?>
        <span id="item_mod"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"item",'line'=>"modificate"),$_smarty_tpl);?>
</span> <span
            class="bold">+<?php echo $_smarty_tpl->tpl_vars['view']->value['item']->getModificationLevel();?>
</span>
    <?php }?>
</div>
<?php }?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-01-03 01:19:47
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e4a473dc0b77_53993215')) {function content_50e4a473dc0b77_53993215($_smarty_tpl) {?><div class="errors">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-01-03 01:19:48
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\layout\item_look.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e4a4743d4e72_77136211')) {function content_50e4a4743d4e72_77136211($_smarty_tpl) {?>
<div class="item_look">
    <div class="item_image">

    </div>
    <div class="item_info">
    <?php if ($_smarty_tpl->tpl_vars['item']->value->getModificationLevel()>0){?>
        <?php if (isset($_smarty_tpl->tpl_vars["modif"])) {$_smarty_tpl->tpl_vars["modif"] = clone $_smarty_tpl->tpl_vars["modif"];
$_smarty_tpl->tpl_vars["modif"]->value = "+".((string)$_smarty_tpl->tpl_vars['item']->value->getModificationLevel()); $_smarty_tpl->tpl_vars["modif"]->nocache = null; $_smarty_tpl->tpl_vars["modif"]->scope = 0;
} else $_smarty_tpl->tpl_vars["modif"] = new Smarty_variable("+".((string)$_smarty_tpl->tpl_vars['item']->value->getModificationLevel()), null, 0);?>
        <?php }else{ ?>
        <?php if (isset($_smarty_tpl->tpl_vars["modif"])) {$_smarty_tpl->tpl_vars["modif"] = clone $_smarty_tpl->tpl_vars["modif"];
$_smarty_tpl->tpl_vars["modif"]->value = ''; $_smarty_tpl->tpl_vars["modif"]->nocache = null; $_smarty_tpl->tpl_vars["modif"]->scope = 0;
} else $_smarty_tpl->tpl_vars["modif"] = new Smarty_variable('', null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value->getMaster()!=''){?>
        <?php if (isset($_smarty_tpl->tpl_vars["mast"])) {$_smarty_tpl->tpl_vars["mast"] = clone $_smarty_tpl->tpl_vars["mast"];
$_smarty_tpl->tpl_vars["mast"]->value = "(".((string)$_smarty_tpl->tpl_vars['item']->value->getMaster()).")"; $_smarty_tpl->tpl_vars["mast"]->nocache = null; $_smarty_tpl->tpl_vars["mast"]->scope = 0;
} else $_smarty_tpl->tpl_vars["mast"] = new Smarty_variable("(".((string)$_smarty_tpl->tpl_vars['item']->value->getMaster()).")", null, 0);?>
        <?php }else{ ?>
        <?php if (isset($_smarty_tpl->tpl_vars["mast"])) {$_smarty_tpl->tpl_vars["mast"] = clone $_smarty_tpl->tpl_vars["mast"];
$_smarty_tpl->tpl_vars["mast"]->value = ''; $_smarty_tpl->tpl_vars["mast"]->nocache = null; $_smarty_tpl->tpl_vars["mast"]->scope = 0;
} else $_smarty_tpl->tpl_vars["mast"] = new Smarty_variable('', null, 0);?>
    <?php }?>
        <span id="item_name">
        <?php if (isset($_smarty_tpl->tpl_vars['counter']->value)){?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->getCount()>1){?>
                <?php if (isset($_smarty_tpl->tpl_vars["v"])) {$_smarty_tpl->tpl_vars["v"] = clone $_smarty_tpl->tpl_vars["v"];
$_smarty_tpl->tpl_vars["v"]->value = "p"; $_smarty_tpl->tpl_vars["v"]->nocache = null; $_smarty_tpl->tpl_vars["v"]->scope = 0;
} else $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("p", null, 0);?>
                <?php }else{ ?>
                <?php if (isset($_smarty_tpl->tpl_vars["v"])) {$_smarty_tpl->tpl_vars["v"] = clone $_smarty_tpl->tpl_vars["v"];
$_smarty_tpl->tpl_vars["v"]->value = "s"; $_smarty_tpl->tpl_vars["v"]->nocache = null; $_smarty_tpl->tpl_vars["v"]->scope = 0;
} else $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("s", null, 0);?>
            <?php }?>
            <?php }else{ ?>
            <?php if (isset($_smarty_tpl->tpl_vars["v"])) {$_smarty_tpl->tpl_vars["v"] = clone $_smarty_tpl->tpl_vars["v"];
$_smarty_tpl->tpl_vars["v"]->value = "s"; $_smarty_tpl->tpl_vars["v"]->nocache = null; $_smarty_tpl->tpl_vars["v"]->scope = 0;
} else $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("s", null, 0);?>
        <?php }?>
            <div class="name"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['item']->value->getName($_tmp1), 'UTF-8');?>
</div>
            <div class="bold"><?php echo $_smarty_tpl->tpl_vars['modif']->value;?>
</div>
            <div class="bold"><?php echo mb_strtolower($_smarty_tpl->tpl_vars['mast']->value, 'UTF-8');?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['counter']->value)){?>
            <div class="counter bold">(<?php echo $_smarty_tpl->tpl_vars['item']->value->getCount();?>
 <?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"other",'line'=>"sh"),$_smarty_tpl);?>
)</div>
        <?php }?>
        </span>
        <span id="item_info"><?php echo $_smarty_tpl->tpl_vars['item']->value->getInfo();?>
</span>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2013-01-03 01:19:49
         compiled from "D:\server\OpenServer\domains\glor\Resources\templates\templates\game\about\items\weapon.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50e4a47581e848_82680333')) {function content_50e4a47581e848_82680333($_smarty_tpl) {?><div class="damage">
    <span id="damage"><?php echo MB\Core\Kernel\SmartyService::lang(array('sect'=>"item",'line'=>"damage"),$_smarty_tpl);?>
:</span>
    <span class="bold">
        <?php echo $_smarty_tpl->tpl_vars['item']->value->getParams()->minDamage;?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value->getParams()->maxDamage;?>

    </span>
</div><?php }} ?>