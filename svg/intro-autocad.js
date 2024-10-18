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
		Snap.load("svg/autocad.svg", function ( f ) {

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

				var grafico = f.select( "#Fulmine" );
				s.append( grafico );
				grafico.attr({ opacity: 0 });
				sposta(grafico, 500, 0, 600);

				var produzione = f.select( "#Produzione" );
				s.append( produzione );
				produzione.attr({ opacity: 0 });
				sposta(produzione, 1500, 516, 0);

				var corsi = f.select( "#Corsi" );
				s.append( corsi );
				corsi.attr({ opacity: 0 });
				sposta(corsi, 2000, 516, 0);

				var software = f.select( "#Software" );
				s.append( software );
				software.attr({ opacity: 0 });
				sposta(software, 2500, 596, 0);
		

		}); //Fine SVG
});