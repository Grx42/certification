<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>album</title>
    </head>

    <?php include_once('../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("fonctions/librairie.php"); ?>

    <?php //sert a ajouter la class="active" dans le menu
        $page = "album";
    ?>

    <body>
        <?php include_once("includes/header.php"); ?>


        <!-- code corps de page ici -->

        <section id="portfolio">
            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2 class="title-one">Portfolio</h2>
                        <p>Voici un petit album photo retraçant notre petite escapade Simplon. </p>
                    </div>
                </div>

                <div class="portfolio-items">

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/1.jpg" alt="Iness Grand Narbonne">
                            </div>
                            <a href="images/portfolio/big-item1.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>In'Ess Le Grand Narbonne</h4>
                                <a href="images/portfolio/big-item1.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item jooma">
                        <div class="view efffect" >
                            <div class="portfolio-image">
                                <img src="images/portfolio/2.jpg" alt="Pré rentrée">
                            </div>
                            <a href="images/portfolio/big-item2.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Pré rentrée Simplon.IN'ESS</h4>
                                <a href="images/portfolio/big-item2.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/3.jpg" alt="la visite des locaux">
                            </div>
                            <a href="images/portfolio/big-item3.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>La visite d'IN'ESS</h4>
                                <a href="images/portfolio/big-item3.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item megento">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/4.jpg" alt="rentrée de la promotion">
                            </div>
                            <a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>la rentrée de la première promotion de la formation Simplon.IN’ESS </h4>
                                <a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/5.jpg" alt="premier meet up">
                            </div> <a href="images/portfolio/big-item5.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Premier meet up de la formation Simplon</h4>
                                <a href="images/portfolio/big-item5.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/6.jpg" alt="Hour of Code">
                            </div>
                            <a href="images/portfolio/big-item6.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Hour of Code</h4>
                                <a href="images/portfolio/big-item6.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/7.jpg" alt="hackathon ERDF">
                            </div>
                            <a href="images/portfolio/big-item7.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Premier hackathon ERDF - Simplon IN'ESS</h4>
                                <a href="images/portfolio/big-item7.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item joomla">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/8.jpg" alt=" kids Coding des collèges">
                            </div>
                            <a href="images/portfolio/big-item8.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4> kids Coding des collèges du Grand Narbonne</h4>
                                <a href="images/portfolio/big-item8.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item html">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/9.jpg" alt="Restitution des projets">
                            </div>
                            <a href="images/portfolio/big-item9.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Restitution des projets de la Start Up Week by Simplon.co</h4>
                                <a href="images/portfolio/big-item9.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/10.jpg" alt="Hackathon Grand sud en Partage">
                            </div>
                            <a href="images/portfolio/big-item10.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Premier Hackathon Grand sud en Partage by Simplon</h4>
                                <a href="images/portfolio/big-item10.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item joomla">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/11.jpg" alt="Fin de la formation">
                            </div>
                            <a href="images/portfolio/big-item11.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>c'est la fin de la formation !</h4>
                                <a href="images/portfolio/big-item11.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12 portfolio-item megento">
                        <div class="view efffect">
                            <div class="portfolio-image">
                                <img src="images/portfolio/12.jpg" alt="les diplômes de la promotion">
                            </div>
                            <a href="images/portfolio/big-item12.jpg" data-gallery="prettyPhoto">
                                <div class="mask text-center">
                                <h3>Novel</h3>
                                <h4>Le Grand Narbonne remet les diplômes à la première promotion de Simplon.IN’ESS</h4>
                                <a href="images/portfolio/big-item12.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i>
                            </div>
                            </a>
                        </div>
                    </div>

                </div>
                <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
            </div>

        </section> <!--/#portfolio-->

        <?php include_once("includes/footer.php"); ?>
        <?php include_once("includes/scripts.php"); ?>

    </body>
</html>
