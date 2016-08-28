
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>ecrire article</title>
    </head>
    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Le Blog de la Certif</span> Admin</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="profil.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                                <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

            <ul class="nav menu">
                <li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
                <li class="active"><a href="ecrire_article.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Ecrire un article</a></li>
                <li><a href="lire_publies.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Consulter articles</a></li>
                <li><a href="lire_brouillon.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Brouillons</a></li>
                <li><a href="lire_contact.php"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> Messages</a></li>


                <li role="presentation" class="divider"></li>
                <li><a href="../index.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> revenir à l'accueil</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


            <h2 class="title-one">Ajouter un article</h2>
                <form class="add_article" action="formulaires/add_article.php" method="post">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" placeholder="Saisissez votre titre ici" >
                <br>

                <div>
                    <p>
                        <label for="article">Article</label>
                        <input type="button" value="G" onclick="insertTag('<gras>','</gras>','textarea');"/>
                        <input type="button" value="I" onclick="insertTag('<italique>','</italique>','textarea');"/>
                        <input type="button" value="Lien" onclick="insertTag('<lien>','</lien>','textarea');" />
                        <input type="button" value="Image" onclick="insertTag('<img>','</img>','textarea');"/>

                        <img src="../images/smilies/smile.png" alt=":)" id="smiley" onclick="insertTag(':)', '', 'textarea');" />
                        <img src="../images/smilies/angry.png" alt=":colere:" id="angry" onclick="insertTag(':colere:', '', 'textarea');" />

                    </p>
                    <p>
                        <input name="previsualisation" type="checkbox" id="previsualisation" value="previsualisation" />
                        <label for="previsualisation">Prévisualisation automatique</label>
                    </p>
                </div>

                <textarea onkeyup="preview(this, 'previewDiv');" onselect="preview(this, 'previewDiv');" id="textarea" cols="150" rows="10"></textarea>

                    <div id="previewDiv"></div>
    	<p> <input type="button" value="Visualiser" onclick="view('textarea', 'viewDiv');" /> </p>

        <div id="viewDiv"></div>


        <script>
        function insertTag(startTag, endTag, textareaId, tagType) {
        var field  = document.getElementById(textareaId);
        var scroll = field.scrollTop;
        field.focus();

        /* === Partie 1 : on récupère la sélection === */
        if (window.ActiveXObject) {
                var textRange = document.selection.createRange();
                var currentSelection = textRange.text;
        } else {
                var startSelection   = field.value.substring(0, field.selectionStart);
                var currentSelection = field.value.substring(field.selectionStart, field.selectionEnd);
                var endSelection     = field.value.substring(field.selectionEnd);
        }

        /* === Partie 2 : on analyse le tagType === */
        if (tagType) {
                switch (tagType) {
                        case "lien":
                                // Si c'est un lien
                                endTag = "</lien>";
                                if (currentSelection) { // Il y a une sélection
                                        if (currentSelection.indexOf("http://") == 0 || currentSelection.indexOf("https://") == 0 || currentSelection.indexOf("ftp://") == 0 || currentSelection.indexOf("www.") == 0) {
                                                // La sélection semble être un lien. On demande alors le libellé
                                                var label = prompt("Quel est le libellé du lien ?") || "";
                                                startTag = "<lien url=\"" + currentSelection + "\">";
                                                currentSelection = label;
                                        } else {
                                                // La sélection n'est pas un lien, donc c'est le libelle. On demande alors l'URL
                                                var URL = prompt("Quelle est l'url ?");
                                                startTag = "<lien url=\"" + URL + "\">";
                                        }
                                } else { // Pas de sélection, donc on demande l'URL et le libelle
                                        var URL = prompt("Quelle est l'url ?") || "";
                                        var label = prompt("Quel est le libellé du lien ?") || "";
                                        startTag = "<lien url=\"" + URL + "\">";
                                        currentSelection = label;
                                }
                        break;

                }
        }

        /* === Partie 3 : on insère le tout === */
        if (window.ActiveXObject) {
                textRange.text = startTag + currentSelection + endTag;
                textRange.moveStart("character", -endTag.length - currentSelection.length);
                textRange.moveEnd("character", -endTag.length);
                textRange.select();
        } else {
                field.value = startSelection + startTag + currentSelection + endTag + endSelection;
                field.focus();
                field.setSelectionRange(startSelection.length + startTag.length, startSelection.length + startTag.length + currentSelection.length);
        }

        field.scrollTop = scroll;
}
function preview(textareaId, previewDiv) {
	var field = textareaId.value;
	if (document.getElementById('previsualisation').checked && field) {

		var smiliesName = new Array(':magicien:', ':colere:', ':diable:', ':ange:', ':ninja:', '&gt;_&lt;', ':pirate:', ':zorro:', ':honte:', ':soleil:', ':\'\\(', ':waw:', ':\\)', ':D', ';\\)', ':p', ':lol:', ':euh:', ':\\(', ':o', ':colere2:', 'o_O', '\\^\\^', ':\\-°');
		var smiliesUrl  = new Array('magicien.png', 'angry.png', 'diable.png', 'ange.png', 'ninja.png', 'pinch.png', 'pirate.png', 'zorro.png', 'rouge.png', 'soleil.png', 'pleure.png', 'waw.png', 'smile.png', 'heureux.png', 'clin.png', 'langue.png', 'rire.gif', 'unsure.gif', 'triste.png', 'huh.png', 'mechant.png', 'blink.gif', 'hihi.png', 'siffle.png');
		var smiliesPath = "../images/smilies/";

		field = field.replace(/&/g, '&amp;');
		field = field.replace(/</g, '&lt;').replace(/>/g, '&gt;');
		field = field.replace(/\n/g, '<br />').replace(/\t/g, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');

		field = field.replace(/&lt;gras&gt;([\s\S]*?)&lt;\/gras&gt;/g, '<strong>$1</strong>');
		field = field.replace(/&lt;italique&gt;([\s\S]*?)&lt;\/italique&gt;/g, '<em>$1</em>');
		field = field.replace(/&lt;lien&gt;([\s\S]*?)&lt;\/lien&gt;/g, '<a href="$1">$1</a>');
		field = field.replace(/&lt;lien url="([\s\S]*?)"&gt;([\s\S]*?)&lt;\/lien&gt;/g, '<a href="$1" title="$2">$2</a>');
		field = field.replace(/&lt;image&gt;([\s\S]*?)&lt;\/image&gt;/g, '<img src="$1" alt="Image" />');


		for (var i=0, c=smiliesName.length; i<c; i++) {
			field = field.replace(new RegExp(" " + smiliesName[i] + " ", "g"), "&nbsp;<img src=\"" + smiliesPath + smiliesUrl[i] + "\" alt=\"" + smiliesUrl[i] + "\" />&nbsp;");
		}

		document.getElementById(previewDiv).innerHTML = field;
	}
}
function getXMLHttpRequest() {
	var xhr = null;

	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest();
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}

	return xhr;
}
function view(textareaId, viewDiv){
	var content = encodeURIComponent(document.getElementById(textareaId).value);
	var xhr = getXMLHttpRequest();

	if (xhr && xhr.readyState != 0) {
		xhr.abort();
		delete xhr;
	}

	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200){
			document.getElementById(viewDiv).innerHTML = xhr.responseText;
		} else if (xhr.readyState == 3){
			document.getElementById(viewDiv).innerHTML = "<div style=\"text-align: center;\">Chargement en cours...</div>";
		}
	}

	xhr.open("POST", "view.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("string=" + content);
}

            </script>
            </br>
                <label for="brouillon">Etat de l'article</label>
                <input type="radio" id="brouillon" name="brouillon" value="1">  Brouillon
                <input type="radio" id="publie" name="brouillon" value="0">  Publié
                <input type="submit" id="ajouter" name="add_article" value="Ajouter">
            </form>
        </div>	<!--/.main-->


        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
