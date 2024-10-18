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
		Snap.load("svg/webdesign.svg", function ( f ) {

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

				var grafico = f.select( "#Grafico" );
				s.append( grafico );
				grafico.attr({ opacity: 0 });
				sposta(grafico, 500, 0, 600);

				var ecommerce = f.select( "#Ecommerce" );
				s.append( ecommerce );
				ecommerce.attr({ opacity: 0 });
				sposta(ecommerce, 1500, 608, 0);

				var responsive = f.select( "#Responsive" );
				s.append( responsive );
				responsive.attr({ opacity: 0 });
				sposta(responsive, 2000, 560, 0);

				var social = f.select( "#Social" );
				s.append( social );
				social.attr({ opacity: 0 });
				sposta(social, 2500, 416, 0);
		

		}); //Fine SVG
});