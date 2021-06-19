<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!--bagaimna jika themenya du download diluar negara inggris-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"> <!--SEO-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title><?php //wp_title(); ?> Pindah ke thee support-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> <!--adding body class-->
    <header> <!--BLOCK 1-->
        <section class="top-bar"> 
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-md-7 col-sm-7 col-6">
                        <?php

                            if( is_active_sidebar( 'social-media' ) ){
                                dynamic_sidebar( 'social-media' );
                            }
                        
                        ?>
                    </div> <!--menambahkan sosial media icons-->
                    <div class="search col-xl-3 col-md-5 col-sm-5 col-6 text-right"><?php get_search_form(); ?></div> <!--menambahkan search-->
                </div>
            </div>
        </section>
            <section class="menu-area">
                <div class="container">
                  
                        <div class="row">
                            <section class="logo col-md-3 col-sm-12 col-12 text-center">Logo</section> <!--menambahkan logo-->
                            <nav class="main-menu col-md-9 text-right">
                                <?php wp_nav_menu( 

                                    array( 

                                        'theme_location' => 'my_main_menu',
                                        
                                     

                                        ) 
                                        
                                    ); ?> <!--Menambahkan menu-->
                            </nav>
                        </div>
                    
                </div>
        </section>
    </header> <!--END BLOCK 1-->
