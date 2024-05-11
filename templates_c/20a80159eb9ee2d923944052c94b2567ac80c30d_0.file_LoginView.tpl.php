<?php
/* Smarty version 5.0.2, created on 2024-05-11 21:13:15
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_663fc34bbed612_31379491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20a80159eb9ee2d923944052c94b2567ac80c30d' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1714849559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_663fc34bbed612_31379491 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_174198798663fc34bb82747_75619962', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_174198798663fc34bb82747_75619962 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
?>

	<form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
		<legend>Logowanie do systemu</legend>
		<fieldset>
			<div class="pure-control-group">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" />
			</div>
			<div class="pure-control-group">
				<label for="id_pass">pass: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
			<div class="pure-controls">
				<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
			</div>
		</fieldset>
	</form>

<?php
}
}
/* {/block 'content'} */
}
