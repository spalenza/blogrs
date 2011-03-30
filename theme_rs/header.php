<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blog - Rodolfo Spalenza</title>
        <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/ico_bar.ico" >
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" />

        <!-- PGN TRASPARENTE PARA IE5 E IE6 -->
        <!--[if lte IE 6]>
        <script src="<?php bloginfo('template_url') ?>/js/DD_belatedPNG_0.0.7a.js" type="text/javascript"></script>
        <script type="text/javascript">
        DD_belatedPNG.fix('#logo, img, #wordpress, #aspas_1, #aspas_2');
        </script>
        <![endif]-->

        <!-- BORDA REDONDA IE -->

        <style type="text/css">
            /* BORDA REDONDA NO IE */
            * {            
                behavior: url(<?php bloginfo('template_url') ?>/pie/PIE.htc);
            }
        </style>

        <?php wp_head(); ?>

        <script src="<?php bloginfo('template_url') ?>/js/jquery.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.raty.min.js" type="text/javascript" ></script>

    </head>
    <body>
        <div id="head_container">
            <a href="<?php echo get_option('home'); ?>">
                <div id="logo">
                    <!-- LOGO -->
                </div>
            </a>
            <div id="search">
                <?php if(function_exists('wp_custom_fields_search'))
                    wp_custom_fields_search(); ?>
            </div>
            <fieldset id="login">

                <form name="loginform" id="loginform" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">

                    <label>usuário<br />
                        <input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>

                    <label>senha<br />
                        <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
                    <br>
                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="login" tabindex="100" />
                        <input type="hidden" name="redirect_to" value="<?php echo get_option('home'); ?>/wp-admin/" />
                        <input type="hidden" name="testcookie" value="1" />
                    </p>
                </form> 
            </fieldset>
            <div id="menu">
                <ul>
                    <li>
                        <div class="menu_one">
                            <a href="<?php echo get_option('home'); ?>">home</a>
                        </div>
                    </li>

                    <?php
                    $mypages = get_pages();
                    foreach ($mypages as $page) {
                    ?>
                        <img src="<?php bloginfo('template_url') ?>/img/tab.jpg" />
                        <div class="menu_one">
                            <a href="<?php echo get_page_link($page->ID) ?>"><?php echo strtolower($page->post_title) ?></a>
                        </div>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
        <div id="separates">
            <!--
             /* global $current_user;
                  get_currentuserinfo();

                  echo 'Username: ' . $current_user->user_login . "\n";
                  echo 'User email: ' . $current_user->user_email . "\n";
                  echo 'User first name: ' . $current_user->user_firstname . "\n";
                  echo 'User last name: ' . $current_user->user_lastname . "\n";
                  echo 'User display name: ' . $current_user->display_name . "\n";
                  echo 'User ID: ' . $current_user->ID . "\n";
              * http://codex.wordpress.org/Function_Reference/get_currentuserinfo
            */
                         SEPARAR HEAD DO BODY -->
        </div>