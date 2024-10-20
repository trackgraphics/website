$( document ).ready( function() {
    
  var s = Snap( "#hamburger" );
  s.attr( { viewBox: "0 0 50 50" } );

  // Carico il mio svg
  Snap.load( "svg/hamburger.svg", function ( f ) {

    var barra1 = f.select( "#barra1" );
    s.append( barra1 );

    var barra2 = f.select( "#barra2" );
    s.append( barra2 );

    var barra3 = f.select( "#barra3" );
    s.append( barra3 );

    var barra4 = f.select( "#barra4" );
    s.append( barra4 );

    $( ".main--nav__toggle" ).click( function( event ) {
      event.preventDefault();
      if ( $( ".main--nav__collapse" ).hasClass( "main--nav__collapse__in" ) ) {
        $( ".main--nav__collapse" ).removeClass( "main--nav__collapse__in" );
        barra2.animate( { transform: "r0,25,25"}, 300 );
        barra4.animate( { transform: "r0,25,25"}, 300 );
        barra1.animate( { opacity: "1"}, 300 );
        barra3.animate( { opacity: "1"}, 300 );
        barra1.animate( { transform: "t0,0"}, 300 );
        barra3.animate( { transform: "t0,0"}, 300 ); 
      } else {
        barra1.animate( { transform: "t0,12"}, 300 );
        barra3.animate( { transform: "t0,-12"}, 300 );
        barra1.animate( { opacity: "0"}, 300 );
        barra2.animate( { transform: "r45,25,25"}, 300 );
        barra3.animate( { opacity: "0"}, 300 );
        barra4.animate( { transform: "r-45,25,25"}, 300 );
        $( ".main--nav__collapse" ).addClass( "main--nav__collapse__in" );
      }
    });
  }); //Fine SVG
});

// Scroll navigation
$( ".main--nav--link" ).on( "click", function( event ) {
  event.preventDefault();
  var itemName = $( this ).attr( "href" );
  $( ".main--nav__collapse .active" ).removeClass( "active" );
  $( this).parent( "li" ).addClass( "active" );
  var $item = $( itemName ); 
  var top = $item.offset().top;
  var h;
  if ( itemName !== "#intro" ) {
    h = parseInt( $( ".main--header" ).outerHeight() ) + parseInt( $item.css( "margin-top" ) );
  } else {
    h = 60;
  }
  if ( $( ".main--nav__collapse" ).hasClass( "main--nav__collapse__in" ) ) {
    $( ".main--nav__toggle" ).click();
  }
  $( "html, body" ).animate({
    scrollTop: top - h + "px"
  }, 800);
});

// Inizializzo il messaggio di esito invio form
$( function() {
  $( "#message" ).dialog({
    autoOpen: false,
    show: {
      effect: "blind",
      duration: 1000
    },
    hide: {
      effect: "explode",
      duration: 1000
    }
  });
});

// Contatti
$( "#form" ).submit( function( event ) {
  event.preventDefault();

  // Inizializzo la modal per esito invio
  $( "#message" ).dialog({
    autoOpen: false,
    closeText: "&times;",
    show: {
      effect: "blind",
      duration: 1000
    },
    hide: {
      effect: "explode",
      duration: 1000
    }
  });

  // Common values in every form in every page
  var formName = $( "#form_contatti" ).attr( "name" );
  var name = $( "#name" ).val();  
  var email = $( "#email" ).val();
  var phone = $( "#phone" ).val();
  var message = $( "#message" ).val();
  var firstName = name; // For Success/Failure Message
  // Check for white space in name for Success/Fail message
  if ( firstName.indexOf( " " ) >= 0 ) {
    firstName = name.split( " " ).slice( 0, -1 ).join( " " );
  }
  
  // Prepare the data for Ajax
  var obj = {}; 
  obj[ "name" ] = name;
  obj[ "email" ] = email;
  obj[ "phone" ] = phone;
  obj[ "message" ] = message;
  obj[ "firstName" ] = firstName;
  obj[ "formName" ] = formName;

  // Setting type and url
  var type = $( "#form" ).attr( "method" );
  var url = $( "#form" ).attr( "action" );

  // Message
  var ariaLabel   = "Chiudi";
  var msgTitleOK  = "Messaggio inviato. ";
  var msgTextOK   = "Grazie per averci contattato. Ti risponderemo nel più breve tempo possibile.";
  var msgTitleNO  = "Problema tecnico. ";
  var msgTextNO   = "Il tuo messaggio non è stato inviato. Prova ad inviarlo nuovamente, per favore.";
  
  // Let"s start Ajax...
  $.ajax({
    type: type,
    url: url,
    data: obj
  })

  // Success
  .done( function( response ) {
    // Reset form
    $( "#form" ).trigger( "reset" );
    // Show a modal with acknowledgement info
    $( "#message" ).dialog( "option", "title", msgTitleOK );
    $( "#message p" ).text(msgTextOK);
    $( "#message" ).dialog( "open" );
  })

  // (Epic) Fail
  .fail( function( data ) {
    /// Reset form
    $( "#form" ).trigger( "reset" );
    // Show a modal with error info
    $( "#message" ).dialog( "option", "dialogClass", "alert" );
    $( "#message" ).dialog( "option", "title", msgTitleNO );
    $( "#message p" ).text( msgTextNO );
    $( "#message" ).dialog( "open" );
  });// End Ajax.
});


// Mappa
function DisplayCustomMap() {
    var map;

    var style = [
    {
    stylers: [
      { saturation: "-100" },
      { lightness: "20" }
    ]
    },{
    featureType: "poi",
    stylers: [
      { visibility: "off" }
    ]
    },{
    featureType: "transit",
    stylers: [
      { visibility: "off" }
    ]
    },{
    featureType: "road",
    stylers: [
      { lightness: "50" },
      { visibility: "on" }
    ]
    },{
    featureType: "landscape",
    stylers: [
      { lightness: "50" }
    ]
    }
  ]

  var options = {
      scrollwheel: false,
      draggable: false,
      zoom: 16,
      center:  new google.maps.LatLng(45.6452437, 13.790358),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: false
  };
  
  map = new google.maps.Map($( "#mappa_contatti" )[0], options);
  map.setOptions({
      styles: style
  });

  var Office = new google.maps.LatLng(45.6452437, 13.790358);

  var markerOffice = new google.maps.Marker({
    position:Office,
    icon: "img/map-marker.png"
  });

  markerOffice.setMap(map);

  var infoOffice = new google.maps.InfoWindow({
    content:"<strong>CONS. i. e.</strong><br/>Via Conti 5"
  });

  infoOffice.open(map,markerOffice);


}

google.maps.event.addDomListener(window, "load", DisplayCustomMap);
