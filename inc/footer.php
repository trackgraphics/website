<?php function getFormName($pageID) { // Get the proper form name
  switch ( $pageID ) {
    case 'home':
    $formName = 'informazioni';
    break;
    case 'vendita':
    $formName = 'vendita';
    break;
    case 'assistenza':
    $formName = 'assistenza';
    break;
    case 'consumabili':
    $formName = 'consumabili';
    break;
    case 'recupero':
    $formName = 'recupero-dati';
    break;
    case 'ransomware':
    $formName = 'ransomware';
    break;
    case 'grafica':
    $formName = 'grafica';
    break;
    case 'webdesign':
    $formName = 'webdesign';
    break;
    case 'autocad':
    $formName = 'autocad';
    break;
    case 'contatti':
    $formName = 'informazioni';
    break;
    case 'chisiamo':
    $formName = 'informazioni';
    break;
  }
  echo $formName;
}?>

<!-- Contatti -->
<div id="contatti" class="container">
  <h2>Contattaci</h2>
  <div class="row">
    <div class="col-md-6">
      <p>
        Come forse avrai intuito, non siamo un <strong>negozio di informatica</strong> sempre aperto al pubblico: 
        noi ti offriamo anche (e soprattutto) <strong>consulenza informatica.</strong> 
        Per questo motivo e per offrirti il miglior servizio possibile, riceviamo <strong>solo su appuntamento.</strong>
      </p>
      <ul class="lead list-unstyled">
        <li>
          <a class="contact-actions" href="<?php if( $pageID === 'webdesign' || $pageID === 'grafica' || $pageID === 'autocad' ) { echo 'tel:+393289190069'; } else { echo 'tel:+393289190069'; }?>">
            <i class="fa fa-circled fa-phone"></i>
              Chiama 
              <?php if( $pageID === 'webdesign' || $pageID === 'grafica' || $pageID === 'autocad' ) { echo '328 9190069'; } else { echo '328 9190069'; }?>
          </a>
        </li>
        <li>
          <a class="contact-actions" href="mailto:info@trackgraphics.it?subject=Richiesta informazioni">
            <i class="fa fa-circled fa-envelope-o"></i>Contattaci per email
          </a>
        </li>
      </ul>
      <p>
        Oppure compila il modulo di contatto e ti risponderemo il prima possibile.
      </p>
    </div>

    <div class="col-md-6">
      <!-- Form itself -->
      <form name="<?php getFormName($pageID) ?>" id="form" action="contact/form_processor" method="POST">
        <fieldset>
        <h4>Le tue generalità</h4>
        <div class="form-group">
          <div class="controls">
            <input id="name" type="text" class="form-control" placeholder="Nome" required />
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <input id="email" type="email" class="form-control" placeholder="Email" required />
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <input id="phone" type="text" class="form-control" placeholder="Telefono (facoltativo)"/>
          </div>
        </div>
        </fieldset>
        <fieldset>
        <h4>Veniamo al dunque</h4>
        <div class="form-group">
          <div class="controls">
            <textarea id="message" rows="5" cols="100" class="form-control" placeholder="Come possiamo aiutarti?" required minlength="5" maxlength="999"></textarea>
          </div>
        </div>
        </fieldset>
        <fieldset>
        <div class="row">
          <div class="col-md-12 control-privacy">
            <input id="privacy-agreement" type="checkbox" class="checkbox-custom" required>
            <label for="privacy-agreement" class="checkbox-custom-label">
              Ho letto e accetto la &nbsp;<a href="http://www.iubenda.com/privacy-policy/229001" title="Privacy Policy" target="_blank"> Privacy policy</a>.
            </label>
          </div>
        </div>
        </fieldset>
        <button id="submit" type="submit" class="btn btn-lg btn-primary btn-labeled g-recaptcha" data-sitekey="6LcA32UqAAAAAIp36nhAPe8zRj2FNyvczmg70dTJ" data-callback="onSubmit">
            <span class="btn-label">Invia la richiesta</span>
            <i class="fa fa-send"></i>
        </button>
      </form>
    </div>
  </div>
</div><!-- /Contatti -->

<!-- Mappa -->
<div id="map"></div>

<?php // include_once "inc/mailchimp.php" ?>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h4>Mappa del sito</h4>
        <ul class="fa-ul">
          <li>
            <a href="#computer-services-footer" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
             <i class="fa-li fa fa-laptop"></i>
              Computer&nbsp;<i class="fa fa-angle-down"></i>
            </a>
          </li>
          <ul id="computer-services-footer" class="fa-ul collapse">
            <li><a href="vendita-consulenza-computer" title="Vendita computer e consulenza informatica a Trieste"><i class="fa-li fa fa-desktop"></i> Vendita computer</a></li>
            <li><a href="assistenza-tecnica-riparazione-computer" title="Assistenza tecnica computer multimarca a Trieste"><i class="fa-li fa fa-wrench"></i> Assistenza tecnica</a></li>
            <li><a href="cartucce-toner-stampanti" title="Cartucce toner originali e compatibili a Trieste"><i class="fa-li fa fa-tint"></i> Consumabili stampanti</a></li>
            <li><a href="recupero-dati" title="Recupero dati professionale a Trieste"><i class="fa-li fa fa-undo"></i> Recupero dati</a></li>
            <li><a href="cancellazione-sicura-dati" title="Cancellazione sicura dei dati a Trieste"><i class="fa-li fa fa-trash-o"></i> Cancellazione sicura dei dati</a></li>
          </ul>
          <li><a href="progettazione-stampa-grafica-pubblicitaria" title="Progettazione e stampa grafica pubblicitaria a Trieste"><i class="fa-li fa fa-print fa-lg"></i> Grafica</a></li>
          <li><a href="realizzazione-restyling-siti-web" title="Realizzazione e restyling siti web responsive con Bootstrap e Joomla! a Trieste"><i class="fa-li fa fa-globe fa-lg"></i> Siti Web</a></li>
          <li><a href="servizi-per-autocad" title="Corsi personalizzati e produzione AutoCAD dwg a Trieste"><i class="fa-li fa fa-pencil fa-lg"></i> AutoCAD</a></li>
        </ul>
      </div>

      <div class="col-sm-4">
        <h4>Informazioni</h4>
        <ul class="fa-ul">
          <li><a class="scroll" href="#contatti" title="Contatta TRACK Graphics."><i class="fa fa-li fa-envelope"></i>Contatti</a></li>
          <!-- <li><a href="chi-siamo" title="Leggi la nostra storia."><i class="fa fa-li fa-users"></i>Chi siamo</a></li> -->
          <li><a href="testimonianze" title="Clienti soddisfatti di noi."><i class="fa fa-li fa-comments"></i> Dicono di noi</a></li>
          <li><a href="http://www.iubenda.com/privacy-policy/229001" title="Clienti soddisfatti di noi." target="_blank"><i class="fa fa-li fa-gavel"></i>Privacy</a></li>
        </ul>

      </div>

      <div itemscope itemtype="http://schema.org/LocalBusiness" class="col-sm-4">
        <h4>
          <a href="<?php echo '/'; ?>" title="Vendita e assistenza tecnica computer a Trieste, grafica pubblicitaria, realizzazione siti web e servizi per AutoCAD">
            <span itemprop="name">TRACK Graphics</span> s.a.s.
          </a>
        </h4>
        <ul class="list-unstyled">
          <li><strong>© 2016</strong> Tutti i diritti riservati</li>
          <li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">Via Del Muraglione, 24</span> - 
            <span itemprop="postalCode">34137</span> 
            <span itemprop="addressLocality">TRIESTE</span>
            <meta itemprop="addressCountry" content="ITALIA">(ITALIA)</li>
          <li>T: 
            <span itemprop="telephone">040350290</span> E: 
            <span itemprop="email">info@trackgraphics.it</span></li>
          <li>P. IVA: 00941410326 / N° REA: TS - 112483</li>
        </ul>
      </div>
    </div>

    <div class="row text-center">
      <ul class="list-inline social">
        <li><a href="http://www.facebook.com/TRACKGraphicsTrieste/" title="Seguici su Facebook"><i class="fa fa-circled fa-facebook"></i></a></li>
        <li><a href="http://twitter.com/TRACK_Graphics" title="Seguici su Twitter"><i class="fa fa-circled fa-twitter"></i></a></li>
        <li><a href="http://plus.google.com/b/107932246528226277985/+TrackgraphicsIt/posts/p/pub?gmbpt=true&pageId=107932246528226277985" title="Seguici su Google+"><i class="fa fa-circled fa-google-plus"></i></a></li>
        <li><a href="http://www.linkedin.com/company/track-graphics" title="Seguici su LinkedIn"><i class="fa fa-circled fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
  
  <small>
    <i class="fa fa-heart"></i> 
    Xe un sito web fato con <strong class="mypopover" data-title="Morbìn" data-content="Vocabolo friuliano di uso comune nel dialetto Triestino. La parola <em>morbìn</em> si può tradurre come <em>allegria</em> o <em>voglia di divertirsi.</em> L'atteggiamento che è alla base del nostro lavoro, insomma.">morbìn</strong> a Trieste.
  </small>
</footer><!-- /Footer -->

<!-- Pop up -->
<?php if ( $pageID == 'inesistente' ) : ?>

<div id="popup" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Per la tua sicurezza</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block" src="img/ransomware-teslacrypt-trieste.jpg" width="400" height="315" alt="TRACK Graphics Trieste può rimuovere l'infezione da Cryptolocker Teslacrypt e decriptare i tuoi file.">
        <p>
          Vi hanno sequestrato tutti i dati? Se siete caduti nella trappola, sappiate che non tutto è perduto. Esiste una <strong>concreta possibilità</strong> di recupero.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
        <a class="btn btn-primary" href="eliminazione-ransomware" title="TRACK Graphics Trieste offre la soluzione per eliminare i ransomware dal tuo coomputer.">Approfondisci</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php endif; ?>
<!-- /Pop up -->

<!-- Librerie JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.4.1/snap.svg-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!-- Script nostri -->
<script src="js/script.js"></script>

<!-- Google Maps API -->
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiyTblyvObm9ZNkZAeyIvlPwK9A2wOSBQ&loading=async&libraries=marker&callback=initMap"></script>

<!-- Google reCAPTCHA v2 API
<script>function onSubmit(token) {
        document.getElementById("form").submit();
    }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->

<!-- Snap SVG -->
<?php if ( $pageID == 'home' ) {
    echo '<script src="svg/intro-home.js"></script>';
  }
?>

<?php if ( $pageID == 'vendita' ) {
    echo '<script src="svg/intro-vendita.js"></script>';
  }
?>

<?php if ( $pageID == 'assistenza' ) {
    echo '<script src="svg/intro-assistenza.js"></script>';
  }
?>

<?php if ( $pageID == 'consumabili' ) {
    echo '<script src="svg/intro-consumabili.js"></script>';
  }
?>

<?php if ( $pageID == 'recupero' ) {
    echo '<script src="svg/intro-recupero.js"></script>';
  }
?>

<?php if ( $pageID == 'grafica' ) {
    echo '<script src="svg/intro-grafica.js"></script>';
  }
?>

<?php if ( $pageID == 'webdesign' ) {
    echo '<script src="svg/intro-webdesign.js"></script>';
  }
?>

<?php if ( $pageID == 'autocad' ) {
    echo '<script src="svg/intro-autocad.js"></script>';
  }
?>

<?php if ( $pageID == 'ransomware' ) {
    echo '<script src="svg/intro-ransomware.js"></script>';
  }
?>

<!-- Matt Aussaguel's WOW JS -->
<script>
 new WOW().init();
</script>

<!-- Thumbnail Grid -->
<script>
  $(function() {
    Grid.init();
  });
</script>

<!-- Google Analytics -->
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  try {
      var _gaq = _gaq || [];
      _gaq.push (['_setAccount', 'UA-11844431-1']);
      _gaq.push (['_gat._anonymizeIp']);
      _gaq.push (['_trackPageview']);
      }
  catch(err) {}
</script>

<!-- Privacy Policy e Cookie Policy -->
<div id="acconsento-click" data-key="4E42964D84AA3573A858A651B1678D3F6F0E3683034BCE89F6B6132347949C1C23F2CFAB298827A75D65DC0454C85B56" data-site-id="706750a4-b9f5-4f7d-aab0-85b8d691434b" data-lang="it"></div>
<script>
  const acconsento_a=['text/css','/front/js/app.9c70bfd2.js','stylesheet','','src','https://acconsento.click','https://polyfill.io/v3/polyfill.min.js?features=es2019%2Ces2018%2Ces2017%2Ces2016%2Ces2015%2Cdefault%2Ces5%2Ces6%2Ces7%2CJSON%2Cfetch%2ClocalStorage','append','href','onload','rel','type','script','createElement','/front/js/chunk-vendors.e6b9dd13.js'];const acconsento_b=function(acconsento_c){acconsento_c=acconsento_c-0x0;let acconsento_d=acconsento_a[acconsento_c];return acconsento_d;};const acconsento_c=acconsento_b;let acconsento_vendor=document[acconsento_c('0xd')](acconsento_c('0xc')),acconsento_app=document['createElement'](acconsento_c('0xc')),acconsento_style=document[acconsento_c('0xd')]('link'),acconsento_fontawesome=document[acconsento_c('0xd')](acconsento_c('0xc')),acconsento_polyfill=document['createElement'](acconsento_c('0xc')),acconsento_base_url=acconsento_c('0x5');acconsento_vendor[acconsento_c('0x4')]=acconsento_base_url+acconsento_c('0xe'),acconsento_app[acconsento_c('0x4')]=acconsento_base_url+acconsento_c('0x1'),acconsento_fontawesome[acconsento_c('0x4')]=acconsento_base_url+acconsento_c('0x3'),acconsento_style[acconsento_c('0x8')]=acconsento_base_url+'/front/css/app.bdeb29ca.css',acconsento_style[acconsento_c('0xa')]=acconsento_c('0x2'),acconsento_style[acconsento_c('0xb')]=acconsento_c('0x0'),acconsento_polyfill['src']=acconsento_c('0x6'),acconsento_vendor[acconsento_c('0x9')]=function(){document['head']['append'](acconsento_fontawesome,acconsento_style,acconsento_app);},document['head'][acconsento_c('0x7')](acconsento_polyfill,acconsento_vendor);
</script>