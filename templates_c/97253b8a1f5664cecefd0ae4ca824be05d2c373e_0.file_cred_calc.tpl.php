<?php
/* Smarty version 5.0.2, created on 2024-05-11 21:13:24
  from 'file:cred_calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_663fc354598a85_00780700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97253b8a1f5664cecefd0ae4ca824be05d2c373e' => 
    array (
      0 => 'cred_calc.tpl',
      1 => 1714848075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_663fc354598a85_00780700 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1187164000663fc354539012_97834797', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1152570326663fc35453b0f5_69195947', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_1187164000663fc354539012_97834797 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1152570326663fc35453b0f5_69195947 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_08_baza_danych\\PHP_Studies\\app\\views';
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
            <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
                <div class="contact-method">
                    <ol class="errors">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg');
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
            <?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
                <div class="contact-method">
                    <ol class="infos">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'msg');
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
