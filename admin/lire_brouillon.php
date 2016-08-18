<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="author" content="">
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php
                    include_once("../../../pdo_blog.php");

                    $req = $bdd->prepare('SELECT titre, contenu, date_redac FROM articles WHERE brouillon = :monbool');
                    $req->execute(array(
                        'monbool' => 1
                    ));

                    while($articles = $req->fetch())
                    {
                        ?>

                        <div class="col-sm-4">
                            <div class="single-blog">
                                <h2><?php $articles['titre']; ?></h2>
                                <ul class="post-meta">
                                    <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> Admin</li>
                                    <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> <?php $articles['date_redac']; ?></li>
                                </ul>
                                <div class="blog-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail">Read More</a>
                            </div>
                            <div class="modal fade" id="blog-detail" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <img src="images/blog/3.jpg" alt="" />
                                            <h2>Lorem ipsum dolor sit amet</h2>
                                            <p><?php $articles['contenu']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }

                ?>
            </div>
        </div>


        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>


    </body>
</html>
