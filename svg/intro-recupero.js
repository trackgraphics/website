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
		Snap.load("svg/recupero.svg", function ( f ) {

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

				var freccia = f.select( "#Freccia" );
				s.append( freccia );
				freccia.attr({ opacity: 0 });
				sposta(freccia, 500, 0, 586);

				var diagnosi = f.select( "#Diagnosi" );
				s.append( diagnosi );
				diagnosi.attr({ opacity: 0 });
				sposta(diagnosi, 1500, 532, 0);

				var professionale = f.select( "#Professionale" );
				s.append( professionale );
				professionale.attr({ opacity: 0 });
				sposta(professionale, 2000, 516, 0);

				var dispositivi = f.select( "#Dispositivi" );
				s.append( dispositivi );
				dispositivi.attr({ opacity: 0 });
				sposta(dispositivi, 2500, 532, 0);

		}); //Fine SVG
});