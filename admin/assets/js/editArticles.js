function findID(jqueryObj)
{
    //trouve l'id de l'article en remontant dans le dom
    var selectChampID = jqueryObj.parents(".row").children("#articleID");
    var articleID = selectChampID[0].innerText;
    return articleID;
}

function ajax_EditStateArticle(articleID, etat)
{
    jQuery.ajax({
        url: "formulaires/edit_state_article.php",
        method: "POST",
        data: {
            est_un_brouillon : etat,
            idArticles : articleID
        },
        success: function (result, etat) {
            if(etat == 0)
                console.log("L'article est en ligne");
            else if (etat == 1)
                console.log("L'article n'est plus en ligne");
      }
    });
}

$(".onoffswitch input").click(function(){
    if($(this).prop('checked'))
    {
        //active la publication
        var articleID = findID($(this));
        ajax_EditStateArticle(articleID, 0);
    }
    else
    {
        //desactive la publication
        var articleID = findID($(this));
        ajax_EditStateArticle(articleID, 1);
    }
});

$("#validation_modif").click(function(){
    location.reload(true);
});

// repere un keypress de la touche F5 et force un vidage du cache a la place
$(document).bind('keypress', function(e) {
    if (e.keyCode == 116)
    {
        location.reload(true);
    }
});
