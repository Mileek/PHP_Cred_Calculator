<?php
/* Smarty version 5.0.2, created on 2024-04-20 15:50:39
  from 'file:C:\xampp\htdocs\php_05_obiektowosc\PHP_Studies\app/cred_calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6623c82f458693_68354295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b555001c892dad656a5d90362a8cd0bece9a4810' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app/cred_calc.tpl',
      1 => 1713620843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6623c82f458693_68354295 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3973677006623c82f4439c1_37076923', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11306240886623c82f446c68_36268132', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_3973677006623c82f4439c1_37076923 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_11306240886623c82f446c68_36268132 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app';
?>

    <section>
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">

            <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/cred_calc.php" method="post">
                <div class="fields">
                    <div class="field">
                        <label for="id_amount">Kwota kredytu: </label>
                        <input id="id_amount" type="text" name="amount" value="<?php echo $_smarty_tpl->getValue('form')->amount;?>
" /><br />
                    </div>
                    <div class="field">
                        <label for="id_years">Ilość lat: </label>
                        <input id="id_years" type="text" name="years" value="<?php echo $_smarty_tpl->getValue('form')->years;?>
" /><br />
                    </div>
                    <div class="field">
                        <label for="id_interest">Oprocentowanie [%]: </label>
                        <input id="id_interest" type="text" name="interest" value="<?php echo $_smarty_tpl->getValue('form')->interest;?>
" /><br />
                    </div>
                </div>
                <ul class="actions">
                    <li><input class="primary" type="submit" value="Oblicz" /></li>
                </ul>
            </form>
        </div>
    </section>
    <section class="split">
        <section>
                        <span class="icon solid alt fa-envelope"></span>
            <h3>Lista błędów:</h3>
            <?php if ($_smarty_tpl->getValue('messages')->isError()) {?>
                <div class="contact-method">

                    <ol class="errors">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getErrors(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                            <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ol>
                </div>
            <?php }?>
        </section>
        <section>
            <span class="icon solid alt fa-poll-h"></span>
            <h3>Wynik:</h3>
            <?php if (((null !== ($_smarty_tpl->getValue('result')->result ?? null)) && (null !== ($_smarty_tpl->getValue('result')->fullResult ?? null)))) {?>
                <div class="contact-method">
                    <h4> Rata kredytu: <?php echo $_smarty_tpl->getValue('result')->result;?>
 </h4>
                    <h4> Całą kwota do zapłaty: <?php echo $_smarty_tpl->getValue('result')->fullResult;?>
 </h4>
                </div>
            <?php }?>
        </section>
        <section>
                        <span class="icon solid alt fa-envelope"></span>
            <h3>Informacje: </h3>
            <?php if ($_smarty_tpl->getValue('messages')->isInfo()) {?>
                <div class="contact-method">
                    <ol class="infos">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getInfos(), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
                            <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ol>
                </div>
            <?php }?>
        </section>

        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
