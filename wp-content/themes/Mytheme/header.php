<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php echo bloginfo("name") ?> - <?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <!-- <meta name="viewport" content="width=device-width"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">


    <link href="<?php echo bloginfo('template_url'); ?>/css/normalize.min.css" rel="stylesheet" media="screen" />
    <link href="<?php echo bloginfo('template_url'); ?>/css/main.css" rel="stylesheet" media="screen" />
    <link href="<?php echo bloginfo('template_url'); ?>style.css" rel="stylesheet" media="screen" />

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <div class="header-container">
                <header class="wrapper clearfix">

                    <h1 class="title"><a href="<?php bloginfo('url');?>"><img src="<?php echo bloginfo('template_directory'); ?>/logo.png"></a><br> <?php echo bloginfo('description'); ?></h1>
                    <nav>

                        <ul>
                            <?php 
                            $args = array(
                                'taxonomy' => "taxo_produits",
                                "hierarchical" => 0,
                                "parent" => 0,
                                "hide_empty" => 0,
                                'order' => 'desc'); 
                            $terms = get_terms($args); //print_r($terms);
                            foreach($terms as $term) :
                                $link = get_term_link($term);
                            echo '<li><a href="'.$link.'">'.$term->name.'</a></li>';
                            ?><?php endforeach; ?>
                    </ul>

                    <form action="<?php bloginfo("url"); ?>" id="search">
                        <input type="text" name="s" placeholder="Rechercher">
                        <input type="submit" value="Go">
                    </form>
                </nav>
            </header>
        </div>
