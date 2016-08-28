function printmsg(afficher_string)
{

}

$(document).ready(function(e){
    var w_article = $(document).getUrlParam("w_article");
    var u_article = $(document).getUrlParam("u_article");
    var d_article = $(document).getUrlParam("d_article");
    var email = $(document).getUrlParam("email");
    var paswd = $(document).getUrlParam("pass");
    var pseudo = $(document).getUrlParam("pseudo");
    var upload = $(document).getUrlParam("upload");

    if (typeof w_article != "undefined")
    {
        if( w_article == "ok")
        {
            //printmsg("L'article a été ajouté à la base de donnée.");
        }
    }

    if (typeof u_article != "undefined")
    {
        if( u_article == "ok")
        {
            //printmsg("L'article a été mis à jour.");
        }
    }

    if (typeof d_article != "undefined")
    {
        if( d_article == "ok")
        {
            //printmsg("L'article a été supprimé.");
        }
    }

    if (typeof email != "undefined")
    {
        if( email == "changed")
        {
            //printmsg("L'adresse email a été mise à jour.");
        }
        else if ( email == "wrongPassword" ) {
            //printmsg("Erreur: Le mot de passe est incorrect.");
        }
        else if ( email == "emptyFields" ) {
            //printmsg("Erreur: au moins un des champs est vide.");
        }
    }

    if (typeof pass != "undefined")
    {
        if(pass == "changed")
        {
            //printmsg("Le mot de passe a été mis à jour.");
        }
        else if (pass == "newPass_notEqual" ) {
            //printmsg("Erreur: Le nouveau mot de passe ne correspond pas à sa confirmation.");
        }
        else if ( pass == "wrongPassword" ) {
            //printmsg("Erreur: Le mot de passe actuel n'est pas le bon.");
        }
        else if ( pass == "emptyFields" ) {
            //printmsg("Erreur: au moins un des champs est vide.");
        }
    }

    if (typeof pseudo != "undefined")
    {
        if( pseudo == "changed")
        {
            //printmsg("Le pseudo a été mis à jour.");
        }
        else if ( pseudo == "alreadyUsed" ) {
            //printmsg("Erreur: Le pseudo est déjà prit par un autre utilisateur.");
        }
        else if ( pseudo == "emptyFields" ) {
            //printmsg("Erreur: au moins un des champs est vide.");
        }
    }

    if (typeof upload != "undefined")
    {
        if( upload == "ok")
        {
            //printmsg("Votre nouvel avatar est prêt a être utilisé !");
        }
        else if ( upload == "tailleSup" ) {
            //printmsg("Erreur: La taille du fichier est supérieure à 1mo.");
        }
        else if ( upload == "wrongExt" ) {
            //printmsg("Erreur: Votre avatar n'a pas le bon format. (.jpg .jpeg .png ou .gif)");
        }
        else if ( upload == "emptyFields" ) {
            //printmsg("Erreur: au moins un des champs est vide.");
        }
    }

});
