(function(){
	var $frm = $("#formulario")[0];
	var $n = $("#nombres");
	var $a = $("#apellidos");
	var $ca = $("#carrera");
	var $f = $("#facultad");
	var $c = $("#carnet");
	var $u = $("#url");
	var $env = $("#enviar");

	var $res = $("#respuesta");

	$env.click(function(){
		funcion($n,$a,$ca,$f,$c,$res);
	});

}());

	function funcion(nomb, apel, carr, facu, carne, respo) {

			console.log(nomb.val());
		$.ajax({
			url: "../resources/assets/php/insert.php",
			type: "POST",
			data: {
				nombres:nomb.val(),
				apellidos:apel.val(),
				carrera:carr.val(),
				facultad:facu.val(),
				carnet:carne.val()
			},
			beforeSend: function(){console.log("Enviando...");},
			success: function(datos){
				if(!datos) {
					console.log("No hay datos");
				}
				respo.append(datos);
			},//.innerHTML = x || html(x)			error: function(){alert("ERROR!!!");},
			complete: function(){console.log("exito");}
		});
	}
