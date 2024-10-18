$( document ).ready( function() {
		
		var s = Snap("#svg");
		s.attr({ viewBox: "0 0 640 640" });

		function sleep(milliseconds) {
				var start = new Date().getTime();
				for (var i = 0; i < 1e7; i++) {
						if ((new Date().getTime() - start) > milliseconds){
							break;
						}
				}
		}

		// Carico il mio svg
		Snap.load("svg/ransomware.svg", function ( f ) {

				function sposta(obj, time, dx, dy) {
						obj.animate(
								{ opacity: "1 0" }, 
								time, 
								mina.elastic,
								function() {
										obj.animate(
												{ transform: "t" + dx + " 0" },
												time,
												mina.elastic,
												function() {
														obj.animate( 
																{ transform: "t" + dx + " " + dy + '"' }, 
																time, 
																mina.elastic);
												});
								});
				}

				var lucchetto = f.select( "#Lucchetto" );
				s.append( lucchetto );
				lucchetto.attr({ opacity: 0 });
				sposta(lucchetto, 500, 0, 600);

				var cryptolocker = f.select( "#Cryptolocker" );
				s.append( cryptolocker );
				cryptolocker.attr({ opacity: 0 });
				sposta(cryptolocker, 1500, 524, 0);

				var antivirus = f.select( "#Antivirus" );
				s.append( antivirus );
				antivirus.attr({ opacity: 0 });
				sposta(antivirus, 2000, 628, 0);

				var assistenza = f.select( "#Assistenza" );
				s.append( assistenza );
				assistenza.attr({ opacity: 0 });
				sposta(assistenza, 2500, 628, 0);

				var diagnosi = f.select( "#Diagnosi" );
				s.append( diagnosi );
				diagnosi.attr({ opacity: 0 });
				sposta(diagnosi, 3000, 524, 0);

		}); //Fine SVG
});