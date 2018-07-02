<?php get_header(); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="<?php echo get_bloginfo('template_url') ?>/images/bg.jpeg" alt="Desafío Latam" />
                <div class="carousel-caption">
                    <form class="form-inline">
                        <button type="button" class="btn btn-primary">Comienza acá!</button>
                        <button type="submit" class="btn btn-success">Más info</button>
                    </form>
                    <h1>Comienza una nueva vida y únete al mundo tecnológico</h1>
                    <p>Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica. Se necesitan más desarrolladores y Tú puedes ser uno!</p>     
                </div>
            </div>
    
            <div class="item">
            <img class="img-responsive" src="<?php echo get_bloginfo('template_url') ?>/images/bg22.jpeg" alt="Desafío Latam"/>
            </div>
        
            <div class="item">
            <img class="img-responsive" src="<?php echo get_bloginfo('template_url') ?>/images/home-bg.jpg" alt="Desafío Latam" />
            </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container bg-1 text-center">
        <h1>El bootcamp de programación más grande de latinoamérica</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in aliquet leo. Etiam vitae mauris diam. Etiam pellentesque pretium tortor, sed dignissim sapien lobortis pellentesque</p>
        <img class="headimage" src="<?php echo get_bloginfo('template_url') ?>/images/viewing-gallery-for-happy-people.png" alt="happy">
    </div>

    <div class="container bg-2 text-center">
        <h1>Solicita información e inscríbete</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in aliquet leo. Etiam vitae mauris diam. Etiam pellentesque pretium tortor, sed dignissim sapien lobortis pellentesque</p>
        <button type="button" class="btn btn-primary">Inscríbete!</button>
        <p>Vive la experiencia Desafío Latam!</p>
    </div>

    <div class="container bg-2">
        <div class="row">
            <div class="col-md-4">
                <h1>Contacto</h1>
                <p>
                    <b>Desafío Latam</b>
                </p>
                <p>
                    Ezequías Alliende 2361
                </p>
                <p>
                    +56 9 55177975
                </p>
                <p>
                    <a href="">inscripciones@desafiolatam.com</a>
                </p>
            </div>
            <div class="col-md-8">
                <h1>Suscríbete</h1>
                <p>Lorem ipsum asdf jojoo aaasd </p>
                <form class="form-inline">
                    <div class="form-group">                        
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Ingresa tu email">
                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>
            </div>
        </div>
        
    </div>
<?php get_footer(); ?>