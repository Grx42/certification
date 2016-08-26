<section id="blog">
    <div class="container">

        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Petit Blog entre Ami(e)s</h2>
                    <h2 class="title-one">Enjoy!</h2>
                <p class="blog-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </div>
        </div>

        <?php
            $req = $bdd->prepare('SELECT idArticles, titre, contenu, date_redac, login FROM articles LEFT JOIN comptes ON comptes_idcomptes = idcomptes WHERE brouillon = :est_un_brouillon ORDER BY date_redac DESC');

            $req->execute(array(
                'est_un_brouillon' => 0
            ));


            while($articles = $req->fetch())
            {
        ?>

        <div class="row">
            <div class="col-sm-4">
                <div class="single-blog">
                    <h3><?php echo $articles['titre']; ?></h3>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> <?php echo $articles['login']; ?></li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong><?php echo $articles['date_redac']; ?></li>
                    </ul>
                    <div class="blog-content">
                        <p><?php echo $articles['contenu']; ?></p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail<?php echo $articles['idArticles']; ?>">Read More</a>
                </div>
                <div class="modal fade" id="blog-detail<?php echo $articles['idArticles']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h2><?php echo $articles['titre']; ?></h2>
                                <p><?php echo $articles['contenu']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }

        $req->closeCursor();

        ?>


            <?php /*
            <div class="col-sm-4">
                <div class="single-blog">
                    <h3>Titre 3</h3>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-three">Read More</a>
                </div>
                <div class="modal fade" id="blog-three" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h2>Sous-Titre 3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             */ ?>

        </div>
    </div>
</section> <!--/#blog-->
