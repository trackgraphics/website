$( document ).ready( function() {
	
	var s = Snap("#svg");
	s.attr({ viewBox: "0 0 640 640" });

	var x = 416; // Centro del cuore
	var y = 512;

	function sleep(milliseconds) {
		var start = new Date().getTime();
		for (var i = 0; i < 1e7; i++) {
			if ((new Date().getTime() - start) > milliseconds){
			  break;
			}
		}
	}

	// Carico il mio svg
	Snap.load("svg/home.svg", function ( f ) {

		var home = f.select( "#Home" );
		s.append( home );

		var cuoreBg = home.select( "#Cuore-bg" );
		//var ombra = s.filter(Snap.filter.shadow(0, 3, 3, "#333", 0.5));
		//cuoreBg.attr({ filter: ombra });
		var cuore = home.select( "#Cuore-i" );
		
		function batticuore() {
			cuore.stop().animate(
				{ transform: 's1.15, x, y' }, // Sistole.
				800, // Frequenza cardiaca 60 bpm
				function() {
					cuore.attr({ transform: 'scale(1 1 1)'}); // Diastole.
					batticuore(); // Ciclo infinito.
				}
			);
		}

		batticuore();

		function sposta(obj, time, dx, dy) {
			obj.animate(
				{ opacity: "1 0" }, 
				time, 
				mina.elastic,
				function() {
					obj.animate(
						{ transform: "t" + dx + " 0" },
						2000,
						mina.elastic,
						function() {
							obj.animate( 
								{ transform: "t" + dx + " " + dy + '"' }, 
								2000, 
								mina.elastic, 
								function() {
									var stroke = obj.select("[stroke-width='2']");
									stroke.animate( { opacity: "1 0" }, 1000 );
								});
						});
				});
		}
		
		var grafica = home.select( "#Grafica" );
		grafica.attr({ opacity: 0 });
		sposta(grafica, 1000, 160, -384);

		var autocad = home.select( "#AutoCAD" );
		autocad.attr({ opacity: 0 });
		sposta(autocad, 3000, 160, -128);

		var computer = home.select( "#Computer" );
		computer.attr({ opacity: 0 });
		sposta(computer, 5000, -352, -384);

		var sitiweb = home.select( "#SitiWeb" );
		sitiweb.attr({ opacity: 0 });
		sposta(sitiweb, 7000, -352, -192);

	}); //Fine SVG
});