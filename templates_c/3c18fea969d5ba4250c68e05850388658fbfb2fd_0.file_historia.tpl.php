<?php
/* Smarty version 5.0.2, created on 2024-05-11 22:32:52
  from 'file:historia.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_663fd5f4d47b37_23585684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c18fea969d5ba4250c68e05850388658fbfb2fd' => 
    array (
      0 => 'historia.tpl',
      1 => 1715459571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_663fd5f4d47b37_23585684 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1463943014663fd5f4d3f8e0_46033058', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_816185273663fd5f4d43541_25592340', 'contentHistory');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_1463943014663fd5f4d3f8e0_46033058 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'contentHistory'} */
class Block_816185273663fd5f4d43541_25592340 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
        <div class="dataBlock" style="margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            <strong>Id:</strong> <?php echo $_smarty_tpl->getValue('item')['idwynik'];?>
<br />
            <strong>Kwota:</strong> <?php echo $_smarty_tpl->getValue('item')['kwota'];?>
<br />
            <strong>Lat:</strong> <?php echo $_smarty_tpl->getValue('item')['lat'];?>
<br />
            <strong>Procent:</strong> <?php echo $_smarty_tpl->getValue('item')['procent'];?>
<br />
            <strong>Rata:</strong> <?php echo $_smarty_tpl->getValue('item')['rata'];?>
<br />
            <strong>Data:</strong> <?php echo $_smarty_tpl->getValue('item')['data'];?>

        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
/* {/block 'contentHistory'} */
}
