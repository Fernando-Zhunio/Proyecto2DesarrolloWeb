<?php

require_once("./_Vista/_Plantillas/head.php");
require_once("./_Vista/_Plantillas/navBar.php");
?>

<div class="wv-100 row m-0 vh-100 d-flex align-items-center justify-content-center p-4">
    <div class="col-12 col-lg-6">
        <h1 class="display-4">GRUPO EMPRESARIAL PAGUAY-SABANDO</h1>
        <p class="lead">04-2 495593 / 0996671521 - Correo: alexandra_lkb@hotmail.com</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <div class="d-lg-none d-block">
            <button id="btnLogin" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
               
            </button>
            </p>
            <div class="collapse" id="collapseExample">
            <div class="card">
                    <div class="card-header">
                        <h2 class="display-3"> Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div>
                                <form>
                                    <div class="form-group">
                                        <label for="email">Usuario o Correo</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="clave">Contraseña</label>
                                        <input type="password" class="form-control" id="clave">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 container d-lg-flex align-items-center justify-content-center w-100 d-none ">
        <div class="w-75">
            <div class="shadow p-3 mb-5 bg-white rounde card">
                <div class="card-header">
                    <h2 class="display-3"> Login</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div>
                            <form>
                                <div class="form-group">
                                    <label for="email">Usuario o Correo</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="clave">Contraseña</label>
                                    <input type="password" class="form-control" id="clave">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
<!-- <h1>Login</h1> -->