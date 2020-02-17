// import anime from 'animejs/lib/anime.es.js';
// const anime = require('animejs');

var isLogin = true;
var rotation = 360;
var element = document.getElementById('login');


// $("#btnRegistrar").click(function(params) {
//     var correo = $("#correo").val();
//     var usuario = $("#usuario").val();
//     // alert(usuario + correo);
//     $.ajax({
//         type: "GET",
//         url: "_Modelo/Verificaciones.php",
//         data: { correo: correo, usuario: usuario },
//         success: function(response) {
//             // var jsonNombre = JSON.parse(response);
//             //  $('#navbarDropdown1').text(jsonNombre[0].Nombres);
//             //  console.log(jsonNombre);
//             //  console.log(jsonNombre[0].Nombres);
//             alert(response);
//             console.log(JSON.parse(response));

//         }
//     });
// });
var isUserValid = false;
var isCorreoValid = false;

function probar() {
    alert("fer");
}
$("#btnRegistrar").attr("disabled", true);
$("#usuario").keyup(function() {
    var usuario = $("#usuario").val();
    $.ajax({
        type: "GET",
        url: "_Modelo/Verificaciones.php",
        data: { usuario: usuario },
        success: function(response) {
            var jsonNombre = JSON.parse(response);
            // alert(jsonNombre.cantidad);
            if (jsonNombre.cantidad != 0) {
                $("#usuarioCaption").text("ya existe usuario");
                isUserValid = false;
                $("#btnRegistrar").attr("disabled", true);
            } else {

                $("#usuarioCaption").text("Ok");
                isUserValid = true;
                if (isCorreoValid == true && $("#contrasena").val() != "") {
                    $("#btnRegistrar").attr("disabled", false);
                }

            }
        }
    });
});

$("#correo").keyup(function() {
    var correo = $("#correo").val();
    $.ajax({
        type: "GET",
        url: "_Modelo/Verificaciones.php",
        data: { correo: correo },
        success: function(response) {
            var jsonNombre = JSON.parse(response);
            // alert(jsonNombre.cantidad);
            if (jsonNombre.cantidad != 0) {
                $("#correCaption").text("ya existe correo");
                isCorreoValid = false;
                $("#btnRegistrar").attr("disabled", true);

            } else {
                $("#correCaption").text("Ok");
                isCorreoValid = true;
                if (isUserValid == true && $("#contrasena").val() == "") {
                    $("#btnRegistrar").attr("disabled", false);
                }
            }

        }
    });
});

$("#loginRegister").click(function() {
    // alert("hola mundo");
    isLogin = !isLogin;
    if (isLogin) {
        $("#loginRegister").text("Registrarse");


        //     // rotate: {
        //     //     value: rotation,
        //     //     duration: 1000,
        //     //     easing: 'easeInOutSine'
        //     // }
        // });
        // rotation += 360;
        $("#login").removeClass("d-none");
        $("#registro").addClass("d-none");
    } else {

        $("#loginRegister").text("Login");
        $("#login").addClass("d-none");
        $("#registro").removeClass("d-none");

    }
});