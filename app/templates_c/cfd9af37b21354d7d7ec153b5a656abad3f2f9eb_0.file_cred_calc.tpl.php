<?php
/* Smarty version 5.0.2, created on 2024-04-20 16:33:15
  from 'file:C:\xampp\htdocs\php_05_obiektowosc\PHP_Studies/app/calc/cred_calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6623d22b4e5b59_02283939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd9af37b21354d7d7ec153b5a656abad3f2f9eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies/app/calc/cred_calc.tpl',
      1 => 1713622791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6623d22b4e5b59_02283939 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app\\calc';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6361375156623d22b4c6da1_17084392', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14024832056623d22b4cb892_53503040', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_6361375156623d22b4c6da1_17084392 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app\\calc';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_14024832056623d22b4cb892_53503040 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app\\calc';
?>

    <section>
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">

            <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" method="post">
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
