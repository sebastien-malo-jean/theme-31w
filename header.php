<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="author" content="Sebastien Malo Jean">
    <meta name="description" content="">
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title')?></title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <header class="entete">
        <section class="global">
            <h1><a href="<?php bloginfo("url") ?>"><?php bloginfo('name')?></a></h1>
            <h2><?php bloginfo('description')?></h2>
            <div class="entete__nav">
                <?php
                wp_nav_menu(array(
                                        "menu" => "principal",
                                        "container" => "nav"
                                    )); ?>
            </div>
            <div class="entete__search_form">
                <?php
                get_search_form();
            ?>
            </div>
            <!-- <form action="#" class="recherche">
                <input type="search" name="" id="">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="32" height="32">
            </form> -->
        </section>
    </header>