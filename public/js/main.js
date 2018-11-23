console.log("eeeee");
$(document).ready(function(){
    $("#modal").click(function(){
        alert("Email : " + $("#email").val() + " Mot de passe : " + $("#mdp").val() + " Se souvenir : " + $("#souv").prop("checked"));
    });

    });

    function ouvins(){
        location.href = "./inscription.html";
    }

    function ouvind(){
        location.href = "./index.html";
    }

    function ouvoub(){
        location.href = "./index.html";
    }
