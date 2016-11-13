<?php
/* Smarty version 3.1.30, created on 2016-11-13 21:51:30
  from "C:\Users\Nathi\Desktop\workspace\leanspace\lumen\resources\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5828e06239ab43_60987659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c4f9f1ce3f2fb65e4bca37aa7e603b5c33913bc' => 
    array (
      0 => 'C:\\Users\\Nathi\\Desktop\\workspace\\leanspace\\lumen\\resources\\views\\home.tpl',
      1 => 1479073877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5828e06239ab43_60987659 (Smarty_Internal_Template $_smarty_tpl) {
?>
hi <?php echo $_smarty_tpl->tpl_vars['hi']->value;?>

<br>
the text is : <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

<br>
<div class="container">
    <div class="quote-container">
        <p class="text"><?php echo $_smarty_tpl->tpl_vars['quote']->value->text;?>
</p>
        <p class="author">— <?php echo $_smarty_tpl->tpl_vars['quote']->value->author;?>
</p>
    </div>
</div><?php }
}
