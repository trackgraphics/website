<?php
  $pageID = 'webdesign';
  $pageTitle = 'Realizzazione e restyling siti web a Trieste';
  $description = 'TRACK Graphics di Trieste si occupa di realizzazione e restyling siti web anche e-commerce.';
?>
<?php include('inc/head.php'); ?>
    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <svg id="svg"></svg>
          </div>
          <div class="col-md-6">
            <p class="h1">Realizziamo il tuo sito</p>
            <img src="svg/web.svg" class="img-responsive wow bounceIn" data-wow-duration="3s" data-wow-delay="0.5s" alt="TRACK Graphics realizza siti internet su misura.">
            <p class="lead">
              Vuoi <strong>realizzare</strong> un nuovo sito web o stai pensando ad un <strong>restyling?</strong> Vuoi raggiungere nuovi clienti vendendo i tuoi prodotti e servizi anche online con un <strong>e-commerce?</strong> Contattaci per un preventivo!
            </p>
            <p>
              <a id="btn-form" href="#servizi-intro" class="btn btn-primary btn-lg btn-labeled scroll" title="Scopri i nostri servizi">
                <span class="btn-label">Il tuo sito web</span><i class="fa fa-angle-down"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div><!-- /Jumbotron -->
    
    <!-- Contenuto principale -->
    <div class="container" id="page-container">

      <!-- Presentazione dei servizi -->
      <div id="servizi-intro" class="page-header">
        <h1>Siti Web su misura</h1>
      </div>

      <div class="row">
        <div class="col-md-6 wow slideInUp" data-wow-duration="1s">
          <p>
            Da noi il tuo sito Web è "tuo" sul serio. Esistono sempre più soluzioni che consentono di realizzare un un sito web in <strong>pochi clic.</strong> Il web è pieno zeppo di siti internet <strong>identici</strong> tra loro. Solo a Trieste abbiamo contato 3 officine con lo stesso layout del sito: questo perché c'è chi propone soluzioni a <strong>basso costo</strong> e pronte all'uso.
          </p>
          <ul class="fa-ul">
            <li class="wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s"><i class="fa-li fa fa-shopping-cart fa-lg"></i>
              Realizzazione di blog, <strong>e-commerce</strong> e portali con creazione di <strong>template personalizzati</strong> per WordPress e Joomla!
            </li>
            <li class="wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa-li fa fa-dashboard fa-lg"></i>
              Realizzazione di <strong>gestionali</strong> su misura e <strong>web application</strong> per ogni tua esigenza.
            </li>
            <li class="wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="0.75s"><i class="fa-li fa fa-facebook fa-lg"></i>
              Progettazione e conduzione di pagine sui <strong>social network</strong> più diffusi come Facebook, Google+, YouTube, Twitter e LinkedIn.
            </li>
            <li class="wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa-li fa fa-envelope fa-lg"></i>
              Newsletter ed <strong>e-mail marketing</strong> con realizzazione di modelli email personalizzati e responsive.
            </li>
          </ul>
        </div>
        <div class="col-md-6 wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <img class="img-responsive center-block" src="img/siti-web-responsive-ecommerce-blog-a-trieste.jpg" alt="Siti web responsive ecommerce blog a Trieste">
        </div>
      </div><!-- /Services presentation-->

      <div class="page-header">
        <h2>Realizzazioni</h2>
      </div>
      <div id="idea" class="row">
        <div class="col-md-12 wow slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <p>
            Una breve rassegna di quello che abbiamo fatto per i nostri clienti e che potremmo realizzare per te. La presentazione dei nostri lavori non sarebbe stata possibile senza l'ispirazione di <a href="http://tympanus.net/codrops/2013/03/19/thumbnail-grid-with-expanding-preview/" title="Thumbnail Grid with Expanding Preview" target="_blank">Mary Lou.</a>
          </p>
        </div>
      </div><!-- /Intro -->
      <!-- Portfolio -->
        <ul id="og-grid" class="og-grid">
          <!-- 1 -->
          <li>
            <a href="http://www.morsa-mav.com" data-largesrc="portfolio-siti/portfolio-siti-web-vetrina.jpg" data-title="Morsa MAV" data-description="Visita <a href='http://www.morsa-mav.com' title='Morsa MAV' target='_blank'>www.morsa-mav.com</a> e scopri un nuovo modo di tagliare a mano il prosciutto crudo <strong>senza mai toglierlo dalla morsa.</strong>." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-vetrina.jpg" alt="Siti web tipo vetrina a Trieste."/>
            </a>
          </li>
          <!-- 2 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-onlus.jpg" data-title="Water for Unity" data-description="Visita <a href='http://www.water-for-unity.com' title='Water for Unity' target='_blank'>www.water-for-unity.com</a> e scopri di più su questa bella iniziativa lanciata da Rodolfo Carone e Francesca Tuzzi." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-onlus.jpg" alt="Siti web per onlus a Trieste."/>
            </a>
          </li>
          <!-- 3 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-officina.jpg" data-title="VIOLA Racing" data-description="<a href='http://www.mviolaracing.com' title='VIOLA Racing' target='_blank'>www.mviolaracing.com</a> è il sito del nostro amico Massimo Viola: in Brasile produce artigianalmente marmitte da gara per il motocross." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-officina.jpg" alt="Siti web per officina gommista elettrauto a Trieste."/>
            </a>
          </li>
          <!-- 4 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-consulenti-immobiliari.jpg" data-title="Partners Servizi" data-description="Cerchi il tetto dei tuoi sogni? Visita <a href='http://www.partnerservizi.it' title='Partners Servizi' target='_blank'>www.partnerservizi.it</a> e guarda tutti gli annunci immobiliari." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-consulenti-immobiliari.jpg" alt="Siti web per agenzie immobiliari a Trieste."/>
            </a>
          </li>
          <!-- 5 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-e-commerce.jpg" data-title="Genedieta" data-description="<a href='http://www.genedieta.com' title='Genedieta' target='_blank'>www.genedieta.com</a> propone un test del DNA che ti dirà qual è l'alimentazione più adatta a te in base ai tuoi geni." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-e-commerce.jpg" alt="Siti e-commerce a Trieste."/>
            </a>
          </li>
          <!-- 6 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-negozio.jpg" data-title="CADDY Barber Shop" data-description="Visita <a href='http://www.caddybarbershop.it' title='CADDY Barber Shop' target='_blank'>www.caddybarbershop.it</a> e scopri di più su questo negozio da barbiere vecchio stile di Trieste." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-negozio.jpg" alt="Siti web per negozi a Trieste."/>
            </a>
          </li>
          <!-- 7 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-blog.jpg" data-title="Sorgente Divina" data-description="Nel blog <a href='http://www.sorgentedivina.it' title='Sorgente Divina' target='_blank'>www.sorgentedivina.it</a> troverai notizie e approfondimenti su Reiki e Ho'oponopono." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-blog.jpg" alt="Realizzazione blog e portali con Wordpress e Joomla! a Trieste."/>
            </a>
          </li>
          <!-- 8 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-studi-professionali.jpg" data-title="Il Condominio" data-description="<a href='http://www.ilcondominiots.it' title='Il Condominio' target='_blank'>Il Condominio</a> amministra stabili a Trieste. Con professionalità e passione da oltre 20 anni." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-studi-professionali.jpg" alt="Siti web per studi professionali a Trieste."/>
            </a>
          </li>
          <!-- 9 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-agenzie-immobiliari.jpg" data-title="L'Appartamento" data-description="<a href='http://www.lappartamento.it' title='L'Appartamento' target='_blank'>L'Appartamento</a> è uno che studio si occupa di intermediazione e consulenza immobiliare, principalmente compravendite e locazioni." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-agenzie-immobiliari.jpg" alt="Siti web per intermediatori immobiliari a Trieste."/>
            </a>
          </li>
          <!-- 10 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-associazioni-culturali.jpg" data-title="Gendai Reiki Italia" data-description="Visita <a href='http://www.gendaireiki.it' title='Gendai Reiki Italia' target='_blank'>www.gendaireiki.it</a> il sito italiano ufficiale del metodo Gendai Reiki ideato da Hiroshi Doi sensei." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-associazioni-culturali.jpg" alt="Siti web per associazioni culturali a Trieste."/>
            </a>
          </li>
          <!-- 11 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-professionisti.jpg" data-title="SOS Illeciti Bancari" data-description="<a href='http://www.sosillecitibancari.it' title='SOS Illeciti Bancari' target='_blank'>SOS Illeciti Bancari</a> è al fianco di chi è in gravi difficoltà finanziarie per colpa delle banche, di Equitalia e della pubblica amministrazione." data-cta="Ti serve un <strong>sito web</strong> simile?">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-professionisti.jpg" alt="Siti web per consulenti ed intermediatori finanziari a Trieste."/>
            </a>
          </li>
          <!-- 12 -->
          <li>
            <a href="#contatti" data-largesrc="portfolio-siti/portfolio-siti-web-su-misura.jpg" data-title="TRACK Graphics" data-description="Visita <a href='https://www.trackgraphics.it' title='TRACK Graphics'>www.trackgraphics.it</a> e scoprirai che non fanno solo siti web, ma forniscono un servizio a 360&deg; su misura." data-cta="Ti serve un sito web o <a href='https://www.trackgraphics.it' title='TRACK Graphics' target='_blank'>altro?</a>">
              <img src="portfolio-siti/thumbs/portfolio-siti-web-su-misura.jpg" alt="TRACK Graphics Trieste offre vendita e riparazione computer assemblati, recupero dati, siti web e-commerce, progettazione grafica e stampa volantini, disegni dwg e corsi AutoCAD."/>
            </a>
          </li>
        </ul>
      <!-- /Portfolio -->
    </div><!-- /Contenuto principale -->
    
    <!-- Call to action -->
    <div class="container-fluid text-center page-cta">
      <div class="container">
        <p class="h2">Il tuo sito web su misura</h2>
        <p>
          Ogni sito che realizziamo è frutto di un'attenta analisi dei tuoi obiettivi. Per formulare un preventivo accurato dobbiamo chiacchierare un po' con te.
        </p>   
        <a class="btn btn-primary btn-lg btn-labeled scroll" href="#contatti" title="Contatta TRACK Graphics">
          <span class="btn-label">Contattaci</span><i class="fa fa-phone-square"></i>
        </a>
      </div>
    </div><!-- /Call to action -->
    
    <!-- Caratteristiche -->
    <div class="container">  
      <div id="features" class="row">
        <!-- Feature #1 -->
        <div class="col-md-4 wow fadeInLeft" data-wow-duration="1s">
          <div class="row">
            <div class="col-xs-4 col-md-12 center-block">
            <div class="feature-icon feature-icon-files"></div>              
          </div>
            <div class="col-xs-8 col-md-12">
              <h3>Autonomia</h3>
              <p>
                Realizziamo la struttura e la grafica del tuo sito web lasciando a te la <strong class="mypopover" data-title="Blog o e-commerce" data-content="Grazie alle credenziali utente che ti forniremo sarai in grado di gestire in piena autonomia i contenuti del tuo sito.">pubblicazione e l'aggiornamento</strong> dei contenuti. Sempre se te la senti.
              </p>
            </div>
          </div>
        </div>
        
        <!-- Feature #2 -->
        <div class="col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="row">
            <div class="col-xs-4 col-md-12">
              <div class="feature-icon feature-icon-bullhorn"></div>              
            </div>
            <div class="col-xs-8 col-md-12">
              <h3>Responsive</h3>
              <p>
                Realizziamo siti web con un <strong class="mypopover" data-title="Siti web responsive" data-content="La maggior parte delle persone naviga su Internet con il loro smarphone. I nostri siti web sono utilizzabili anche da tablet e smartphone.">layout responsivo</strong>. Il tuo sito sarà bello da navigare su computer desktop, tablet e smartphone.
              </p>
            </div>
          </div>
        </div>
        
        <!-- Feature #3 -->
        <div class="col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
          <div class="row">
            <div class="col-xs-4 col-md-12">
              <div class="feature-icon feature-icon-plane"></div>
            </div>
            <div class="col-xs-8 col-md-12">
              <h3>Non solo siti</h3>
              <p>
                La tua presenza sul Web non può limitarsi al sito e basta: possiamo integrarla con una bella pagina sui <strong class="mypopover" data-title="Diventa social" data-content="Una pagina Facebook ben realizzata con una bella copertina ed un bel logo garantisce una maggior interazione con i tuoi potenziali clienti.">social network</strong>.
              </p>
            </div>
          </div>
        </div>
      </div><!-- /Features -->
    </div><!-- /Caratteristiche -->

    <!-- Slider delle testimonianze -->
    <?php include('inc/slider.php'); ?><!-- /Slider delle testimonianze -->

    <!-- Footer, Social, Contatti e Script vari -->
    <?php include('inc/footer.php'); ?><!-- /Footer, Social, Contatti e Script vari -->
  </body>
</html>