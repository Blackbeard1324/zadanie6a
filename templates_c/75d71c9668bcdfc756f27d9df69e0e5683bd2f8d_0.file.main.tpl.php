<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 18:43:11
  from 'E:\Programy\xampp\htdocs\zadanie5\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602c042fb58cc9_16710933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d71c9668bcdfc756f27d9df69e0e5683bd2f8d' => 
    array (
      0 => 'E:\\Programy\\xampp\\htdocs\\zadanie5\\templates\\main.tpl',
      1 => 1613497383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602c042fb58cc9_16710933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_794658817602c042fb55021_51066804', 'header');
?>

<div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32868795602c042fb582d1_90235635', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_690466223602c042fb58847_97884194', 'footer');
?>

</div>
<ul class="copyright">
    &copy; Untitled Inc. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP & Kamil Skupień</a></li>
</ul>


<?php echo '<script'; ?>
 src="/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'} */
class Block_794658817602c042fb55021_51066804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_794658817602c042fb55021_51066804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<head>
    <title>Solid State by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/noscript.css" /></noscript>
</head>
<body>

<section id="banner">
    <div class="inner">
        <div class="logo"><span class="icon fa-gem"></span></div>
        <h2>Witaj</h2>
        <p>Obliczymy Twoje raty kredytowe już dziś. <h6>*A przynajmniej spróbujemy</h6></p>
    </div>
</section>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_32868795602c042fb582d1_90235635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_32868795602c042fb582d1_90235635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_690466223602c042fb58847_97884194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_690466223602c042fb58847_97884194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Default <?php
}
}
/* {/block 'footer'} */
}
