$(document).ready(function () {
    $(".nesrine").click(function () {
        $nom = ($(this).attr("class"));
        $(this).parent().parent().attr("class", $nom);
        $selecteur = "." + $nom + " .right, ."+$nom+" .left";
		$($selecteur).toggle();
		
    });
	$("img").click(function(){
		$(this).attr("class");
	});
    $(".like").click(function () {
        $nombreDeLike = ($(this).attr("value"));
        $nbLike = parseInt($nombreDeLike) + 1;
        $(this).parent().parent().attr("class", $nbLike);
        $sentence = "." + $(this).parent().parent().attr("class") + " td p";
        $($sentence).text($nbLike);
        $($sentence).show();
        $(this).attr("value", $nbLike);
    })
    $("#ajouter").click(function () {
		alert($("table tr:last td:last p").text());
		id = $("#id").val();
        pseudo = $("#pseudo").val();
        message = $("#message").val();
		nbLike=0;
        $.ajax({

            type: "POST",
            url: "ajouterChat.php",
            data: {pseudo:pseudo,message:message},
            success: function (result) {
				$('table tbody').append("<td class='right' style='color: red; display: block;font-size: 1em;margin-top: 1.33em;margin-bottom: 1.33em;margin-left: 0;margin-right: 0;font-weight: bold;'>"+pseudo+"</td><td class='left' style='display: block;font-size: .83em;margin-top: 1.67em;margin-bottom: 1.67em;margin-left: 0;margin-right: 0;font-weight: bold;'>"+message+"</td><td><img src='like.png'  id='c' height='20px' width='20px' value="+nbLike+" class='like'></td><td><p id=179></p></td> <td><img src='hide.png' class='nesrine'  alt='' height='10px' width='10px' srcset='' id='hide' value="+id+"></td> ");
            }
        });
    });
});