<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>gérer</title>
    </head>

    <body>



        <!-- code corps de page ici -->
        <section id="gerer_articles">
            <div class="container articles">

                <h2>Mes articles sauvegardés</h2>

                <div class="row">
                    <div class="col-sm-4 ">
                        <h3>Article</h3>
                    </div>

                    <div class="col-sm-4">
                        <h3>Publié</h3>
                    </div>

                    <div class="col-sm-4">
                        <h3>Auteur</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 ">
                        <div class="liste">
                            <p>nom</p><br>
                            <p>autre nom</p><br>
                            <p>nom</p>
                        </div>
                    </div>

                    <div class="col-sm-4 ">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                                <label class="onoffswitch-label" for="myonoffswitch1">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                                <label class="onoffswitch-label" for="myonoffswitch2">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                                <label class="onoffswitch-label" for="myonoffswitch3">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>

                    </div>

                    <div class="col-sm-4 ">
                        <div class="liste">
                            <p>auteur</p><br>
                            <p>autre auteur</p><br>
                            <p> another auteur</p>
                        </div>
                </div>

            </div>
        </section>

        <section id="more_articles">
            <button type="button" class="plus" onclick="alert('Ajoutez un article')">+</button>
            <h2>Ajouter un article</h2>

        </section>


        <?php include_once("includes/scripts.php"); ?>
    </body>
</html>
