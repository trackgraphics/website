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
		Snap.load("svg/vendita.svg", function ( f ) {

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

				var punto = f.select( "#Punto-di-domanda" );
				s.append( punto );
				punto.attr({ opacity: 0 });
				sposta(punto, 500, 0, 560);

				var computer = f.select( "#Computer" );
				s.append( computer );
				computer.attr({ opacity: 0 });
				sposta(computer, 1500, 510, 0);

				var notebook = f.select( "#Notebook" );
				s.append( notebook );
				notebook.attr({ opacity: 0 });
				sposta(notebook, 2000, 510, 0);

				var stampanti = f.select( "#Stampanti" );
				s.append( stampanti );
				stampanti.attr({ opacity: 0 });
				sposta(stampanti, 2500, 510, 0);

				var cartucce = f.select( "#Cartucce" );
				s.append( cartucce );
				cartucce.attr({ opacity: 0 });
				sposta(cartucce, 3000, 510, 0);

		}); //Fine SVG
});