<?php
/* Smarty version 5.0.2, created on 2024-04-20 16:33:02
  from 'file:C:\xampp\htdocs\php_05_obiektowosc\PHP_Studies\app\calc\../../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6623d21e6f69a0_44808904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c44bee0e08f1df963dc796d21ac8b1b07479809' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\app\\calc\\../../templates/main.tpl',
      1 => 1713623580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6623d21e6f69a0_44808904 (\Smarty\Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/css/additional.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
    <noscript>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="" class="logo"><strong>Cred Calc</strong> <span>by Kamil Kaszuba</span></a>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6759076066623d21e6f0880_51577301', 'content');
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
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc/assets/js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'content'} */
class Block_6759076066623d21e6f0880_51577301 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\PHP_Studies\\templates';
?>
 Domyślna treść zawartości, nie ma nic <?php
}
}
/* {/block 'content'} */
}
