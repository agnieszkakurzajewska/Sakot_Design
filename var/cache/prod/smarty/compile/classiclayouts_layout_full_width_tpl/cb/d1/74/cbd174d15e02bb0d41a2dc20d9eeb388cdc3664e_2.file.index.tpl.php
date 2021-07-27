<?php
/* Smarty version 3.1.39, created on 2021-07-27 22:20:26
  from '/home/srv38468/domains/by-sakot-design.com/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610086aaea4785_24560891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd174d15e02bb0d41a2dc20d9eeb388cdc3664e' => 
    array (
      0 => '/home/srv38468/domains/by-sakot-design.com/public_html/themes/classic/templates/index.tpl',
      1 => 1622533359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610086aaea4785_24560891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2098041363610086aaea2b62_37109252', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_282362525610086aaea2f83_15892541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_596002042610086aaea3930_36589784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_125305104610086aaea3590_62514683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_596002042610086aaea3930_36589784', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2098041363610086aaea2b62_37109252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2098041363610086aaea2b62_37109252',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_282362525610086aaea2f83_15892541',
  ),
  'page_content' => 
  array (
    0 => 'Block_125305104610086aaea3590_62514683',
  ),
  'hook_home' => 
  array (
    0 => 'Block_596002042610086aaea3930_36589784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_282362525610086aaea2f83_15892541', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125305104610086aaea3590_62514683', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
