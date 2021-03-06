<?php

/**
 *
 * Template Name: Home page
 *
 */
?>
<?php get_header(); ?>
<div class="row text-center p-5" id="presentation">
    <div class="col-12 horaires">
        <h2 class="text-md-right p-5">-- Horaires --</h2>
        <div class="text-md-center pl-md-5 m-md-2 wow animate__animated animate__fadeInRight">
            <?php $loop = new WP_Query(array('post_type' => 'horaire', 'orderby' => array('date' => 'ASC'))); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <h4 class="pl-md-5 text-md-left"><?php echo get_field('jour'); ?></h4>
                <p class="pl-md-5 text-md-center"><?php echo get_field('horaire'); ?></p>
                <hr>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<div class="row menu container pt-5 mt-5 m-auto" id="menu">
    <div class="col-12 text-center mt-5 wow animate__animated animate__fadeIn animate__slow">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active color" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Plats</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link color" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Menus</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link color" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Carte des vins</a>
            </li>
        </ul>
        <div class="tab-content m-5" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h2>Entrées</h2>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Foie gras de canard maison, toasts
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">11,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Ceviche de cabillaud, passion et oignon rouge
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">10,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Carpaccio de poisson aneth, citron vert, timut
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">9,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        6 Escargots de Bourgogne rôtis au beurre d’ail
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">7,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Terrine de queue de bœuf au foie gras
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">7,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Œuf cocotte aux lardons, mouillettes
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Croustillant d’andouille de vire, pommes camembert
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Terrine de campagne maison
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,90€</span>
                    </div>
                </div>
                <hr>
                <h2>Plats</h2>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Filet de bœuf* Rossini
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">22,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Steak de thon rouge au sésame
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">22,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Filet de Bar à la crème d’asperges
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">19,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Entrecôte* grillée (race normande, environ 350gr)
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">19,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Gambas poêlées au sel de Guérande
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">17,80€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Filet de Dorade royale, crème de curry
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">17,80€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Magret de canard aux pommes
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">16,80€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Dos de cabillaud, crumble de chorizo
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">14,80€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Tartare de bœuf*
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">13,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Fricassée de rognons de veau au porto
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">13,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Suggestion du jour
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">11,90€</span>
                    </div>
                </div>
                <span class="info">*origine viande bovine française </span>
                <hr>
                <h2>Desserts</h2>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Assiette de fromages normands
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">5,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Café, déca ou thé gourmand
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">7,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Moelleux au chocolat maison
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">7,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Coupe mojito (sorbet mojito, menthe fraiche, sucre de canne, rhum)
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">7.90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Tarte normande maison, glace cannelle
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Gaspacho de fraise, glace faisselle
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Salade de fruits frais de saisons
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Tiramisu pommes-caramel
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-10 text-left">
                        Crème brulée à la vanille bourbon
                    </div>
                    <div class="col-12 col-md-2 text-right">
                        <span class="price">6,10€</span>
                    </div>
                </div>
                <hr>
                <span class="info">Prix nets – Service Compris </span>
                <hr>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h2>Menu à 25€</h2>
                <div class="row">
                    <div class="col-12 text-center">
                        Œuf cocotte aux lardons, mouillettes <br>
                        Terrine de campagne maison
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        ***
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        Dos de cabillaud, crumble de chorizo <br>
                        Tartare de bœuf*
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        ***
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        Crème brulée à la vanille bourbon <br>
                        Tarte normande maison, glace cannelle
                    </div>
                </div>
                <hr>
                <h2>Menu à 33€</h2>
                <div class="row">
                    <div class="col-12 text-center">
                        Carpaccio de poisson aneth, citron vert, timut <br>
                        Foie gras de canard maison, toasts
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        ***
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        Magret de canard aux pommes <br>
                        Filet de Dorade royale, crème de curry
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        ***
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        Tiramisu pommes-caramel <br>
                        Gaspacho de fraise, glace faisselle
                    </div>
                </div>
                <hr>
                <h2>Formule Déjeuner</h2>
                <div class="row">
                    <div class="col-10 text-left">
                        -entrée-plat ou plat-dessert du jour
                    </div>
                    <div class="col-2">
                        <span class="price">14€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-10 text-left">
                        -entrée-plat-dessert du jour
                    </div>
                    <div class="col-2">
                        <span class="price">18€</span>
                    </div>
                </div>
                <hr>
                <span class="info">Servi uniquement le midi du mardi au vendredi Hors jours fériés
                </span>
                <hr>
                <h2>Salades – Burgers </h2>
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-3">
                        <span class="info">Petite</span>
                    </div>
                    <div class="col-3">
                        <span class="info">Grande</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 text-left">
                        <span class="titre">Chèvre chaud</span> <br> Chèvre chaud sur toasts, lardons, salade,
                        tomates, noix.
                    </div>
                    <div class="col-3">
                        <span class="price"> 7,90€</span>
                    </div>
                    <div class="col-3">
                        <span class="price">12,20€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 text-left">
                        <span class="titre">Périgourdine </span> <br> Foie gras, gésiers, magrets fumés, salade,
                        tomates.
                    </div>
                    <div class="col-3">
                        <span class="price">11,90€</span>
                    </div>
                    <div class="col-3">
                        <span class="price">15,70€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 text-left">
                        <span class="titre">Végétarienne </span> <br> Salade, tomates, maïs, champignons,
                        olives, noix.
                    </div>
                    <div class="col-3">
                        <span class="price">7,90€</span>
                    </div>
                    <div class="col-3">
                        <span class="price">11,20€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        <span class="titre">Burger classic </span> <br>Pain, steak haché, cheddar, tomate,
                        oignon, salade.
                    </div>
                    <div class="col-4">
                        <span class="price">13,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        <span class="titre">Burger Bacon </span> <br>Pain, steak haché, cheddar, poitrine fumée,
                        oignon, sce bbq
                    </div>
                    <div class="col-4">
                        <span class="price">14,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        <span class="titre">Burger camembert </span> <br>Pain, steak haché, cheddar, camembert,
                        oignon, poitrine fume
                    </div>
                    <div class="col-4">
                        <span class="price">14,50€</span>
                    </div>
                </div>
                <hr>
                <span class="info">Prix nets – Service Compris </span>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-12">
                        <h2>Vins Blancs AOC </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Sancerre blanc </span> <br>André Dezat & Fils
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">32,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        1/2 bouteille 37,5cl : <span class="price">17,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        Verre 14cl : <span class="price">6,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Pouilly Fumé </span> <br>André Dezat & Fils
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">32,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Petit Chablis </span> <br>William Fevre
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">32,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        Verre 14cl : <span class="price">6,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Gewurztraminer </span> <br>Henri Weber
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">28,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        1/2 bouteille 37,5cl : <span class="price">15,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Bourgogne aligoté </span> <br>Bouchard Père & Fils
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">25,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        Verre 14cl : <span class="price">5,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Coteaux du Layon </span> <br>Domaine de la Motte
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">25,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        Verre 14cl : <span class="price">5,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Côtes du Rhône </span> <br>Camte Perdrix Demazet
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">20,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        Verre 14cl : <span class="price">4,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Vins Rosé AOC </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Sancerre rosé </span> <br>André Dezat & Fils
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">32,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        1/2 bouteille 37,5cl : <span class="price">17,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Côtes de Provence </span> <br>Cuvée Dames de Verez
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">25,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        1/2 bouteille 37,5cl : <span class="price">14,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        Verre 14cl : <span class="price">5,10€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Vins Rouge AOC </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Saint Emilion Grand Cru </span> <br>Château Gravet Renaissance
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">45,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Montagne Saint Emilion </span> <br>Peraclos
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">43,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Listrac Médoc </span> <br>Château Reverdi
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">37,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Saint Amour </span> <br>Clos des billards
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">37,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Crozes Hermitage </span> <br>Chapoutier
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">34,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Sancerre Rouge </span> <br>André Dezat & Fils
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">32,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        1/2 Bouteille 37,5cl : <span class="price">17,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Bourgogne Pinot noir </span> <br>Bouchard Père & Fils
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">29,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Lussac Saint Emilion </span> <br>Château Taureau
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">29,00€</span>
                    </div>
                    <div class="col-12 text-right">
                        1/2 Bouteille 37,5cl : <span class="price">15,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Pinot noir d’alsace </span> <br>Pierre Sparr
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">29,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Saint Nicolas de Bourgueil </span> <br>Domaine Olivier
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">25,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Blaye côtes de bordeaux </span> <br>Château les Jouberts
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">21,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-left">
                        <span class="titre">Côtes du Rhône </span> <br>Reserve des armoiries Demazet
                    </div>
                    <div class="col-12 text-right">
                        Bouteille 75cl : <span class="price">21,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Apéritifs </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Martini blanc ou rouge 6cl
                    </div>
                    <div class="col-4">
                        <span class="price">4,80€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Porto, Pommeau, Suze 6cl
                    </div>
                    <div class="col-4">
                        <span class="price">4,80€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Ricard 2cl
                    </div>
                    <div class="col-4">
                        <span class="price">3,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Americano
                    </div>
                    <div class="col-4">
                        <span class="price">7,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Heineken pression 25cl
                    </div>
                    <div class="col-4">
                        <span class="price">3,80€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Kir cassis, mure, peche, framboise
                    </div>
                    <div class="col-4">
                        <span class="price">4,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Whisky 4cl </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Clan campbell
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Jack daniel’s
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Aberlourd 10 ans
                    </div>
                    <div class="col-4">
                        <span class="price">8,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Glenlivet 12 ans
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Knockando 12 ans
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Rhum 4cl </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Havana 3 ans
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Vieux clément
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Diplomatico
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Matusalem 15 ans
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Champagne </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Coupe
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Bouteille
                    </div>
                    <div class="col-4">
                        <span class="price">60,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Digestifs </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Get 27, Get 31
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Baileys
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Calvados Hors d’âge
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Cognac
                    </div>
                    <div class="col-4">
                        <span class="price">7,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Diplomatico
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Matusalem 15 ans
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Knockando 12 ans
                    </div>
                    <div class="col-4">
                        <span class="price">8,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Boissons sans aclcool </h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Coca cola, coca cola zero 33cl
                    </div>
                    <div class="col-4">
                        <span class="price">4,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Perrier 33cl
                    </div>
                    <div class="col-4">
                        <span class="price">4,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Ice tea 25 cl
                    </div>
                    <div class="col-4">
                        <span class="price">4,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Orangina 25 cl
                    </div>
                    <div class="col-4">
                        <span class="price">4,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Jus d’orange, ananas, tomate, Pamplemousse, abricot 25 cl
                    </div>
                    <div class="col-4">
                        <span class="price">4,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Sirop à l’eau
                    </div>
                    <div class="col-4">
                        <span class="price">2,30€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Eaux</h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        San Pellegrino 1L
                    </div>
                    <div class="col-4">
                        <span class="price">5,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        ½ San Pellegrino
                    </div>
                    <div class="col-4">
                        <span class="price">4,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Vittel 1L
                    </div>
                    <div class="col-4">
                        <span class="price">5,50€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        ½ Vittel
                    </div>
                    <div class="col-4">
                        <span class="price">4,00€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h2>Boissons Chaudes</h2>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Café
                    </div>
                    <div class="col-4">
                        <span class="price">2,20€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Décaféine
                    </div>
                    <div class="col-4">
                        <span class="price">2,20€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Grand café
                    </div>
                    <div class="col-4">
                        <span class="price">4,40€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Thé
                    </div>
                    <div class="col-4">
                        <span class="price">3,90€</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-8 text-left">
                        Infusion
                    </div>
                    <div class="col-4">
                        <span class="price">3,90€</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="slider" id="plat">
    <div class="row">
        <div class="owl-carousel owl-theme pt-2" id="plats">
            <?php $loop = new WP_Query( array( 'post_type' => 'plats','orderby'=> array('date' =>'ASC') )); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="item p-3">
                    <?php $photo = get_field('image');?>
                    <?php $photo_url=$photo['sizes']['large'];?>
                    <img  src="<?php echo $photo_url; ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                </div>
            <?php endwhile;?>
        </div>
    </div>
</div>
<div class="avis" id="avis">

</div>
<?php get_footer(); ?>