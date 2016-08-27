<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <ul class="nav menu">
        <li <?php if($page_admin == "index"){echo "class='active'";} ?>><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Index</a></li>
        <li <?php if($page_admin == "w_articles"){echo "class='active'";} ?>><a href="ecrire_article.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Ecrire un article</a></li>
        <li <?php if($page_admin == "r_articles"){echo "class='active'";} ?>><a href="lire_publies.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Consulter les articles publiés</a></li>
        <li <?php if($page_admin == "r_brouillons"){echo "class='active'";} ?>><a href="lire_brouillon.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Consulter les brouillons</a></li>
        <li <?php if($page_admin == "r_contacts"){echo "class='active'";} ?>><a href="lire_contact.php"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> Consulter les messages de contact</a></li>
    </ul>

</div><!--/.sidebar-->
