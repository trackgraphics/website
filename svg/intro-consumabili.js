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
		Snap.load("svg/consumabili.svg", function ( f ) {

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

				var goccia = f.select( "#Goccia" );
				s.append( goccia );
				goccia.attr({ opacity: 0 });
				sposta(goccia, 500, 0, 494);

				var scelta = f.select( "#Scelta" );
				s.append( scelta );
				scelta.attr({ opacity: 0 });
				sposta(scelta, 1500, 516, 0);

				var affidabilita = f.select( "#Affidabilita" );
				s.append( affidabilita );
				affidabilita.attr({ opacity: 0 });
				sposta(affidabilita, 2000, 564, 0);

				var risparmio = f.select( "#Risparmio" );
				s.append( risparmio );
				risparmio.attr({ opacity: 0 });
				sposta(risparmio, 2500, 516, 0);

				var ecologia = f.select( "#Ecologia" );
				s.append( ecologia );
				ecologia.attr({ opacity: 0 });
				sposta(ecologia, 3000, 564, 0);

		}); //Fine SVG
});