<?php
  $pageID = 'brand';
  $pageTitle = 'Brand identity e logo design a Trieste';
  $description = 'TRACK Graphics di Trieste si occupa di brand identity e logo design.';
  $hasJumbotron = false;
?>
<?php include('inc/head.php'); ?>
    <!-- Contenuto principale -->
    <div class="container" id="page-container">

      <!-- Presentazione dei servizi -->
      <div id="brand-intro" class="page-header">
        <h1>Brand identity e logo design</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem accusamus at aspernatur veniam ut optio nostrum! Reprehenderit beatae nemo, dicta libero veritatis odio repellendus explicabo, cupiditate tempora deleniti facilis sint!</p>
      </div>

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