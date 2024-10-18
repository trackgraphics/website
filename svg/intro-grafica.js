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
		Snap.load("svg/grafica.svg", function ( f ) {

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

				var idea = f.select( "#Idea" );
				s.append( idea );
				idea.attr({ opacity: 0 });
				sposta(idea, 500, 0, 586);

				var design = f.select( "#Design" );
				s.append( design );
				design.attr({ opacity: 0 });
				sposta(design, 1500, 582, 0);

				var tirature = f.select( "#Tirature" );
				s.append( tirature );
				tirature.attr({ opacity: 0 });
				sposta(tirature, 2000, 532, 0);

				var offerte = f.select( "#Offerte" );
				s.append( offerte );
				offerte.attr({ opacity: 0 });
				sposta(offerte, 2500, 596, 0);
		

		}); //Fine SVG
});