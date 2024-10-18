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
		Snap.load("svg/assistenza.svg", function ( f ) {

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

				var chiave = f.select( "#Chiave" );
				s.append( chiave );
				chiave.attr({ opacity: 0 });
				sposta(chiave, 500, 0, 560);

				var domicilio = f.select( "#Domicilio" );
				s.append( domicilio );
				domicilio.attr({ opacity: 0 });
				sposta(domicilio, 1500, 372, 0);

				var upgrade = f.select( "#Upgrade" );
				s.append( upgrade );
				upgrade.attr({ opacity: 0 });
				sposta(upgrade, 2000, 372, 0);

				var reti = f.select( "#Reti" );
				s.append( reti );
				reti.attr({ opacity: 0 });
				sposta(reti, 2500, -576, 0);

				var recupero = f.select( "#Recupero" );
				s.append( recupero );
				recupero.attr({ opacity: 0 });
				sposta(recupero, 3000, -576, 0);

		}); //Fine SVG
});