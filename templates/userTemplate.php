<!-- <link href="css/cover.css" rel="stylesheet"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>

      <div class="navbar-wrapper">
        <div class="container">

          <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Accueil</a></li>
                  <li><a href="index.php?action=listeDesParties">Informations</a></li>
                  <li><a href="index.php?action=jouerPartie">Amis</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="photoProfil"><a href="index.php?action=monJoueur"></a></li>
                </ul>
              </div>
            </div>
          </nav>

        </div>
      </div>


      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="css/image/fond.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Création de partie.</h1>
                <p>Vous pouvez créer vos parties en leur attribuant un nom. Lorsque cette partie est créée, vous pouvez inviter des amis ou choisir de laisser n'importe qui la rejoindre, puis la démarrer.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Créer une partie</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="css/image/imagePNG.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Rejoindre une partie.</h1>
                <p>Vous pouvez rejoindre une partie en répondant à une invitation ou rejoindre une partie publique !</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Rejoindre une partie</a></p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Voir la liste des invitations</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="css/image/fond.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Découvrir et communiquer.</h1>
                <p>Vous pouvez consulter la fiche publique d'un autre joueur. Vous pouvez également chatter en temps réel avec eux ! ;-D</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Consulter les fiches publiques des autres joueurs</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="css/image/imagePNG.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- FOOTER -->
        <footer>
          <p class="pull-right"><a href="#">Back to top</a></p>
          <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

      </div><!-- /.container -->


<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
// $(".navbar-brand").css('transform', 'rotateY('+100+'deg)')
// $(".navbar-brand").on("click", function( event ) {
//   $(".navbar-brand").animate({
//   }, {
//     duration: 50000,
//     specialEasing
//   },
//   complete: function() {
//     $( this ).after( "<div>Animation complete.</div>" );
//   });
//   $(".photoProfil").css('background-image', 'url("css/image/logo_6_qui_prend.png")');
// });
// function AnimateRotate(angle) {
//     // caching the object for performance reasons
//     var $elem = $('.navbar-brand');
//
//     // we use a pseudo object for the animation
//     // (starts from `0` to `angle`), you can name it as you want
//     $({deg: 0}).animate({deg: angle}, {
//         duration: 4000,
//         step: function(now) {
//             // in the step-callback (that is fired each step of the animation),
//             // you can use the `now` paramter which contains the current
//             // animation-position (`0` up to `angle`)
//             $elem.css({
//                 transform: 'rotateX(' + now + 'deg)'
//             });
//         },
//         step: function(now) {
//           $elem.css({
//               transform: 'rotateY(' + now + 'deg)'
//           });
//         }
//     })
//     .queue(step: function(now) {
//       $elem.css({
//           transform: 'rotateY(' + now + 'deg)'
//       });
//     });
// };
//
//
// $(".navbar-brand").on("click", function(event) {
//   AnimateRotate(360);
// });
$(".navbar-brand").on("click", function(event) {
$({deg: 0}).animate({deg: 360}, {
    duration: 4000,
    step: function(now) {
      $(".navbar-brand").css({transform: 'rotate3d(1,2,0,'+now+'deg)'});
    }
});
});

</script>

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery-3.1.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="assets/jquery-3.1.1.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
