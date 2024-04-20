<?php
/* Smarty version 5.0.2, created on 2024-04-20 15:50:45
  from 'file:C:\xampp\htdocs\php_05_obiektowosc\PHP_Studies\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6623c835ce3be6_62631280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f312f16732b7b2dca949200a1332d96f8b7de84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app\\../templates/main.tpl',
      1 => 1712774516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6623c835ce3be6_62631280 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/css/additional.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
    <noscript>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="cred_calc.php" class="logo"><strong>Cred Calc</strong> <span>by Kamil Kaszuba</span></a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li><a>Placeholder 0</a></li>
                <li><a>Placeholder 1</a></li>
                <li><a>Placeholder 2</a></li>
                <li><a>Placeholder 3</a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <section id="banner" class="major">
            <div class="inner">
                <header class="major">
                    <h1>Hi, this is a loan calculator</h1>
                </header>
                <div class="content">
                    <p>A website that will help you calculate your loan installments.
                    <ul class="actions">
                        <li><a href="#contact" class="button next scrolly">Get Started</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Content -->
        <section id="contact">
            <div class="inner">

                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18467011066623c835ce2679_89426568', 'content');
?>


            </div>
        </section>

        <!-- Footer -->
        <footer id="footer" class="footerExtend">
            <div class="inner">
                <ul class="icons">
                    <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Kamil Kaszuba</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/assets/js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'content'} */
class Block_18467011066623c835ce2679_89426568 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\templates';
?>
 Domyślna treść zawartości, nie ma nic <?php
}
}
/* {/block 'content'} */
}
