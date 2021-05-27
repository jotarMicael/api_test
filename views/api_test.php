<?php

if (!$_GET) {
    $result = json_decode(file_get_contents('https://www.freetogame.com/api/games'), true);
} else {
    if ($_GET["category"] == 'on') {
        var_dump("hola");
        die;
    }

    $result = json_decode(file_get_contents('https://www.freetogame.com/api/games?category=' . $_GET["category"]), true);
}
?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../docs/img/favicons/favicon.ico">

    <title>Free games</title>

    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!------------------------>

    <!-- Custom styles for this template -->
    <link href="../css/album.css" rel="stylesheet">
    <link href="../css/hover.css" rel="stylesheet">
    <link href="../css/preloader.css" rel="stylesheet">
    <link href="../css/hover_icons.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="all" onload="this.media='all'">
    <!------------------------------------->

</head>

<body>
    <div id="preloader">
        <div id="carga"></div>
    </div>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">My name is Micael Jotar.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact me</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="jotarmicael@gmail.com" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center hvr-icon-grow">
                    <i class="fas fa-gamepad hvr-icon"></i>&nbsp;
                    <strong>Games</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">

                <h1> <i class="fas fa-search mr-2"></i>Find Games</h1>
                <p class="lead text-muted">Something short and leading about the free games.</p>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="all" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                        All
                    </label>

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" name="exampleRadios" id="shooter"  value="option2" <?php if($_GET['category'] == "shooter"){ echo "checked";} ?> >
                    <label class="form-check-label" for="exampleRadios2">
                        Shooter
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" name="exampleRadios" id="mmorpg" value="option3"<?php if($_GET['category'] == "mmorpg"){ echo "checked";} ?> >
                    <label class="form-check-label" for="exampleRadios3">
                        Mmorpg
                    </label>
                </div>

                <input type="text" id="formulario" class="searchInput form-control form-control-lg deep-dark" placeholder="Search for games" autocomplete="off">
                <button class="btn btn-info mt-2" id="boton">Search game</button>
            </div>



        </section>

        <div class="album py-5 bg-light">
            <div class="row">
                <div class="container">

                    <div id="resultado" class="row">
                        <!-- body -->
                    </div>




                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div id="mdHeader" class="modal-header">
                        <!-- header -->
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div id="mdBody" class="modal-body">
                        <!-- body -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Copyright 2021: &copy;MjProductions </p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../js/core/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.js" integrity="sha512-uhp2Ee4MNexF4HNrWF5Vo82DIq6bvfdEcDJEqOAVy7q2h2I4HsZTFgfEoHt7+j/Ez2cEeJ0yyrZZxcGeY9aT+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!---------------------------------------------------------------->
    <script>
        const games = <?php echo json_encode($result); ?>

        const formulario = document.querySelector('#formulario');

        const boton = document.querySelector('#boton');

        const resultado = document.querySelector('#resultado');

        const mdHeader = document.querySelector('#mdHeader');

        const mdBody = document.querySelector('#mdBody');

        const filter = () => {
            resultado.innerHTML = '';
            const texto = formulario.value.toLowerCase();
            for (let game of games) {
                let name = game.title.toLowerCase();
                if (name.indexOf(texto) !== -1) {
                    resultado.innerHTML += `   
                    
                    <div class="col-md-4">      
                <div class="card mb-4 box-shadow">  
                <div class="hover01 column">  
                    <figure><img class="card-img-top" src="${game.thumbnail}" alt="Card image cap"></figure>
                </div>
                                    <div id="resultado" class="card-body">
                                        <h4 class="card-text">${game.title}</h4>
                                            <p class="card-text">${game.short_description}</p>
                                             <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary btn-rounded" data-toggle="modal" data-target="#myModal">
                                                        View more...
                                                    </button>                                       
                                                </div>
                                             <small class="text-muted">${game.id}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       
                    
                    `
                    mdHeader.innerHTML = `<h4 class="card-text">Game: ${game.title}</h4>`;
                    mdBody.innerHTML = `<img class="card-img-top" src="${game.thumbnail}" alt="Card image cap"><hr>
                    <div class="container">
                    <div class="container"> <p> Genre: <a href="#">${game.genre}</a> </p> </div>
                    <div class="container"> <p> Platform: <a href="#">${game.platform}</a> </p> </div>
                    <div class="container"> <p> Release Date: <a href="#">${game.release_date}</a> </p> </div>
                    <div class="container"> <p> Developer: <a href="#">${game.developer}</a> </p> </div>
                        <div class="container"> <p> <a href="${game.game_url}"> Official page </a> </p> </div>
                    </div>   
                    `

                }
            }
            if (resultado.innerHTML === '') {
                resultado.innerHTML +=
                    `<p class="card-text">Game not founded</p>`

            }
        };

        const show = () => {
            const texto = formulario.value.toLowerCase();
            for (let game of games) {
                let name = game.title.toLowerCase();
                resultado.innerHTML += `       
            <div class="col-md-4">      
                <div class="card mb-4 box-shadow">  
                <div class="hover01 column">  
                    <figure><img class="card-img-top" src="${game.thumbnail}" alt="Card image cap"></figure>
                </div>
                        <div id="resultado" class="card-body">
                         <h4 class="card-text"> <a href="#">${game.title}</a></h4>
                                <p class="card-text">${game.short_description}</p>
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary btn-rounded" data-toggle="modal" data-target="#myModal">
                                            View more...
                                        </button>                                       
                                    </div>
                                 <small class="text-muted">${game.id}</small>
                                </div>
                            </div>
                        </div>
                    </div>       
        `
                mdHeader.innerHTML = `  <h4 class="card-text">Game: ${game.title}</h4>`;
                mdBody.innerHTML = `<img class="card-img-top" src="${game.thumbnail}" alt="Card image cap"><hr>
        <div class="container">
        <div class="container"> <p> Genre: <a href="#">${game.genre}</a> </p> </div>
        <div class="container"> <p> Platform: <a href="#">${game.platform}</a> </p> </div>
        <div class="container"> <p> Release Date: <a href="#">${game.release_date}</a> </p> </div>
        <div class="container"> <p> Developer: <a href="#">${game.developer}</a> </p> </div>
            <div class="container"> <p> <a href="${game.game_url}"> Official page </a> </p> </div>
        </div>   
        `
            }
        };
        show();
        formulario.addEventListener('keyup', filter);
    </script>

    <!-- preloader -->

    <script>
        window.onload = function() {

            var contenedor = document.getElementById('preloader');
            contenedor.style.visibility = 'hidden';
            contenedor.style.opacity = '0';

        }
    </script>

    <!-- -->
    <script>
        $(document).ready(function() {

            $('#shooter').click(function() {

                window.location.href = `?category=shooter`;

            })
            $('#mmorpg').click(function() {

                window.location.href = `?category=mmorpg`;
            })

            $('#all').click(function() {

                url = "http://localhost/free_games/views/api_test.php";
                $(location).attr('href', url);
            })


        });
    </script>
</body>

</html>