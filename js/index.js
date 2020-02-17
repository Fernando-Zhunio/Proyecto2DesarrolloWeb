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
        // var wow = new WOW({

        //     boxClass: 'wow', // animated element css class (default is wow)
        //     animateClass: 'animated', // animation css class (default is animated)
        //     offset: 0, // distance to the element when triggering the animation (default is 0)
        //     mobile: true, // trigger animations on mobile devices (default is true)
        //     live: true, // act on asynchronously loaded content (default is true)
        //     callback: function(box) {
        //         // the callback is fired every time an animation is started
        //         // the argument that is passed in is the DOM node being animated
        //     },
        //     scrollContainer: null // optional scroll container selector, otherwise use window
        // });
        // var element = $("#login");
        // anime({
        //     targets: element,
        //      translateX: 270

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
wow.init();