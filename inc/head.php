<!DOCTYPE html>
<html lang="it" class="no-js">
<?php
  define('BASE_URL','/trackgraphics');
  
  function getCanonicalURL($pageID) { // Get the proper canonical URL
    switch ( $pageID ) {
      case 'home':
      $canonicalURL = 'https://www.trackgraphics.it';
      break;
      case 'vendita':
      $canonicalURL = 'https://www.trackgraphics.it/vendita-consulenza-computer';
      break;
      case 'assistenza':
      $canonicalURL = 'https://www.trackgraphics.it/assistenza-tecnica-riparazione-computer';
      break;
      case 'consumabili':
      $canonicalURL = 'https://www.trackgraphics.it/cartucce-toner-stampanti';
      break;
      case 'recupero':
      $canonicalURL = 'https://www.trackgraphics.it/recupero-dati';
      break;
      case 'ransomware':
      $canonicalURL = 'https://www.trackgraphics.it/eliminazione-ransomware';
      break;
      case 'grafica':
      $canonicalURL = 'https://www.trackgraphics.it/progettazione-stampa-grafica-pubblicitaria';
      break;
      case 'webdesign':
      $canonicalURL = 'https://www.trackgraphics.it/realizzazione-restyling-siti-web';
      break;
      case 'autocad':
      $canonicalURL = 'https://www.trackgraphics.it/servizi-per-autocad';
      break;
      case 'chisiamo':
      $canonicalURL = 'https://www.trackgraphics.it/chi-siamo';
      break;
      case 'testimonianze':
      $canonicalURL = 'https://www.trackgraphics.it/testimonianze';
      break;
    }
    echo $canonicalURL;
  }
  
  function getOpenGraphMarkup($pageID) { // Get the proper OpenGraph for facebook sharing
    switch ( $pageID ) {
      case 'home':
      $og['title'] = 'Vendita e riparazione computer, grafica e stampa, siti web a Trieste';
      $og['description'] = 'TRACK Graphics Trieste offre vendita e riparazione computer assemblati, recupero dati, siti web e-commerce, progettazione grafica e stampa volantini, disegni dwg e corsi AutoCAD.';
      $og['image'] = 'home-fb.png';
      break;
      case 'vendita':
      $og['title'] = 'Computer personalizzati e assemblati a Trieste';
      $og['description'] = 'TRACK Graphics Trieste si occupa di consulenza informatica, vendita di computer personalizzati e assemblati con cura, notebook selezionati delle migliori marche, stampanti inkjet, laser a colori e multifunzione.';
      $og['image'] = 'computer-fb.png';
      break;
      case 'assistenza':
      $og['title'] = 'Riparazione computer a Trieste';
      $og['description'] = 'TRACK Graphics Trieste offre assistenza tecnica remota e on-site, riparazioni computer e upgrade, interventi a domicilio. Offriamo assistenza e consulenza su reti LAN, intranet e server.';
      $og['image'] = 'assistenza-fb.png';
      break;
      case 'consumabili':
      $og['title'] = 'Cartucce toner originali e compatibili a Trieste';
      $og['description'] = 'TRACK Graphics Trieste offre cartucce e toner compatibili di qualità per farti risparmiare sui costi di stampa.';
      $og['image'] = 'consumabili-fb.png';
      break;
      case 'recupero':
      $og['title'] = 'Recupero dati a Trieste';
      $og['description'] = 'TRACK Graphics di Trieste si occupa di recupero dati da qualsiasi supporto danneggiato.';
      $og['image'] = 'recupero-fb.png';
      break;
      case 'ransomware':
      $og['title'] = 'Eliminazione ransomware a Trieste';
      $og['description'] = 'TRACK Graphics di Trieste si occupa di rimozione ransomware come Cryptolocker e Teslacrypt.';
      $og['image'] = 'ransomware-fb.png';
      break;
      case 'grafica':
      $og['title'] = 'Grafica pubblicitaria progettazione e stampa a Trieste';
      $og['description'] = 'TRACK Graphics di Trieste si occupa di progettazione di immagine coordinata e stampa di grafica pubblicitaria.';
      $og['image'] = 'grafica-fb.png';
      break;
      case 'webdesign':
      $og['title'] = 'Realizzazione e restyling siti web a Trieste';
      $og['description'] = 'TRACK Graphics di Trieste si occupa di realizzazione e restyling siti web anche e-commerce.';
      $og['image'] = 'siti-web-fb.png';
      break;
      case 'autocad':
      $og['title'] = 'Produzione dwg e corsi personalizzati AutoCAD a Trieste';
      $og['description'] = 'TRACK Graphics di Trieste offre corsi di AutoCAD 2D e 3D, realizzazione disegni dwg con AutoCAD.';
      $og['image'] = 'AutoCAD-fb.png';
      break;
      case 'chisiamo':
      $og['title'] = 'Vendita e assistenza tecnica computer a Trieste, grafica pubblicitaria, realizzazione siti web e servizi per AutoCAD';
      $og['description'] = 'TRACK Graphics è una piccola e atipica azienda di Trieste: offriamo servizi personalizzati per l\'informatica.';
      $og['image'] = 'home-fb.png';
      break;
      case 'testimonianze':
      $og['title'] = 'Vendita e riparazione computer, grafica e stampa, siti web a Trieste';
      $og['description'] = 'TRACK Graphics è una piccola e atipica azienda di Trieste: offriamo servizi personalizzati per l\'informatica.';
      $og['image'] = 'home-fb.png';
      break;
    }
    return $og;
  } 
?>
  <head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="TRACK Graphics s.n.c. - Trieste">
    <meta name="google-site-verification" content="XB_MLJAGYt6iD8UoyP0pU8yHKU17rCUZAfrjjTSawj4">

    <!-- Open Graph meta-->
    <?php $results = getOpenGraphMarkup( $pageID );?>
    <meta property="og:url"         content="<?php getCanonicalURL($pageID) ?>" />
    <meta property="og:type"        content="article" />
    <meta property="og:title"       content="<?php echo $results['title']; ?>" />
    <meta property="og:description" content="<?php echo $results['description']; ?>" />
    <meta property="og:image"       content="<?php echo 'https://www.trackgraphics.it/img-fb/' . $results['image']; ;?>"/>

    <link rel="shortcut icon" href="favicon.ico">

    <title><?php echo $pageTitle; ?></title>

    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <!-- Daniel Eden's Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
    <!-- Main CSS based upon Boostrap-->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Canonical link -->
    <link rel="canonical" href="<?php getCanonicalURL($pageID) ?>">

    <!-- Modernizr -->
    <script src="https://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js"></script>
      
  </head>

  <body>
  <!-- Facebook SDK -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '476437075878072',
        xfbml      : true,
        version    : 'v2.5'
      });
    };
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script><!-- /Facebook SDK -->

  <!-- Loader -->
  <div class="splash-screen"></div>

  <div class="modal fade" id="messaggio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Titolo</h4>
        </div>
        <div class="modal-body">
          <p>Testo del messaggio.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Chiudi</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navbar -->
  <nav id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars fa-lg"></i></button>
        <a class="navbar-toggle scroll" href="#contatti"><i class="fa fa-envelope fa-lg"></i></a>
        <a class="navbar-brand" href="<?php echo '/'; ?>" title="Vendita e assistenza tecnica computer a Trieste, grafica pubblicitaria, realizzazione siti web e servizi per AutoCAD"><img src="img/logo-track-graphics.svg" width="40" height="40" alt="TRACK Graphics: informatica e servizi a Trieste"><strong>TRACK</strong>&nbsp;Graphics</a>
      </div>
      
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown <?php if( $pageID == 'vendita' || $pageID == 'assistenza' || $pageID == 'recupero' || $pageID == 'cancellazione' ) {echo 'active';} ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-laptop fa-lg"></i>Computer<i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu">
              <li <?php if( $pageID == 'vendita' ) {echo ' class="active"';} ?>><a href="vendita-consulenza-computer" title="Vendita computer e consulenza informatica a Trieste"><i class="fa fa-desktop"></i>Vendita computer</a></li>
              <!-- <li class="divider" role="separator"></li> -->
              <li <?php if( $pageID == 'assistenza' ) {echo ' class="active"';} ?>><a href="assistenza-tecnica-riparazione-computer" title="Assistenza tecnica computer multimarca a Trieste"><i class="fa fa-wrench"></i>Assistenza tecnica</a></li>
              <!-- <li class="divider" role="separator"></li> -->
              <li <?php if( $pageID == 'consumabili' ) {echo ' class="active"';} ?>><a href="cartucce-toner-stampanti" title="Cartucce toner originali e compatibili a Trieste"><i class="fa fa-tint"></i>Consumabili stampanti</a></li>
              <!-- <li class="divider" role="separator"></li> -->
              <li <?php if( $pageID == 'recupero' ) {echo ' class="active"';} ?>><a href="recupero-dati" title="Recupero dati professionale a Trieste"><i class="fa fa-undo"></i>Recupero dati</a></li>
              <li <?php if( $pageID == 'ransomware' ) {echo ' class="active"';} ?>><a href="eliminazione-ransomware" title="Come rimuovere ransomware a Trieste"><i class="fa fa-unlock"></i>Eliminazione ransomware</a></li>
            </ul>
          </li>
          <li <?php if( $pageID == 'grafica' ) {echo ' class="active"';} ?>><a href="progettazione-stampa-grafica-pubblicitaria" title="Progettazione e stampa grafica pubblicitaria a Trieste"><i class="fa fa-print fa-lg"></i>Grafica</a></li>
          <li <?php if( $pageID == 'webdesign' ) {echo ' class="active"';} ?>><a href="realizzazione-restyling-siti-web" title="Realizzazione e restyling siti web responsive a Trieste"><i class="fa fa-globe fa-lg"></i>Siti Web</a></li>
          <li <?php if( $pageID == 'autocad' ) {echo ' class="active"';} ?>><a href="servizi-per-autocad" title="Corsi personalizzati e produzione AutoCAD dwg a Trieste"><i class="fa fa-pencil fa-lg"></i>AutoCAD</a></li>
          <li><a href="#contatti" class="visible-md-block visible-lg-block scroll" title="Contatta TRACK Graphics"><i class="fa fa-envelope"></i> Contatti</a></li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div>
  </nav><!-- /Navbar -->