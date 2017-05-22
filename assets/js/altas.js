jQuery(document).on('submit', '#alta', function(event) {
	event.preventDefault();
	var matr=$('#matr').val();
	var grp=$('#grp').val();
	var nom=$('#nom').val();
	var ap=$('#ap').val();
	var am=$('#am').val();
	var carr=$('#carrera').val();	
	var foto=$('#foto').val();
	
	var resp="alumno";
	
	/* Act on the event */	
	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {matr:matr,nom:nom,ap:ap,am:am,carr:carr,grp:grp,foto:foto,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		//alert(res.matr);
		if (res.error==false) {
//alert("correcto");
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			limpiar();
		}else{
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
		console.log(res.responseText);
	})
	.fail(function(res) {
		console.log("error");
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
		console.log(res.responseText);
	})
	.always(function() {
		console.log("complete");
	});		
});
//jquery listo para alta de profesores
jQuery(document).on('submit', '#fprof', function(event) {
	event.preventDefault();
	/* Act on the event */
	//alert("activo");
	var rfc=$('#rfc').val();
	var nombre=$('#nom_p').val();
	var ap=$('#ap').val();
	var am=$('#am').val();
	var resp="profesor";

	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {rfc:rfc,nombre:nombre,ap:ap,am:am,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		if (res.error==false) {
			//alert("correcto");
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			limpiar();
		}else{
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
	})
	.fail(function() {
		console.log("error");
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
	})
	.always(function() {
		console.log("complete");
	});
	

});
//jquery para el alta de grupos
jQuery(document).on('submit', '#fgrupo', function(event) {
	event.preventDefault();
	/* Act on the event */
	//alert("activo");
	var idg=$('#id_g').val();
	//var nombre=$('#nom_g').val();
	var hor=$('#horario').val();
	var sem=$('#sem').val();
	var resp="grupo";
	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {idg:idg,hor:hor,sem:sem,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		if (res.error==false) {
			//alert("correcto");
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			limpiar();
		}else{
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
	})
	.fail(function() {
		console.log("error");
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
	})
	.always(function() {
		console.log("complete");
	});
});
jQuery(document).on('submit', '#fmat', function(event) {
	event.preventDefault();
	/* Act on the event */
	//alert("activo");
	var idm=$('#id_materia').val();
	var nombre=$('#nom_m').val();
	var credit=$('#cr').val();
	var sem=$('#sem').val();
	var hrs=$('#hrs').val();
	var resp="materia";	
	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {idm:idm,nombre:nombre,credit:credit,sem:sem,hrs:hrs,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		if (res.error==false) {
			//alert("correcto");
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			limpiar();
		}else{
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
	})
	.fail(function() {
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
});
//Scrip para el alta de nuevos tutores
jQuery(document).on('submit', '#ftut', function(event) {
	event.preventDefault();
	/* Act on the event */
	//alert("activo");
	var idt=$('#id_tutor').val();
	var g_asc=$('#ga').val();
	var nom=$('#nom_t').val();
	var ap=$('#ap_t').val();
	var am=$('#am').val();	
	var resp="tutor";
	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {idt:idt,g_asc:g_asc,nom:nom,ap:ap,am:am,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		if (res.error==false) {
			//alert("correcto");
			limpiar();
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			
		}else{
			console.log(res.responseText);
			alert(res.tipo);
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
	})
	.fail(function() {
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
});

jQuery(document).on('submit', '#fusu', function(event) {
	event.preventDefault();
	var nom=$('#id_u').val();
	var contra=$('#contra').val();
	var tipo=$('#tipo').val();
	var resp="usuarios";
	/* Act on the event */	
	
	//alert("datos serializados"+dat);
	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {nom:nom,contra:contra,tipo:tipo,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		//alert(res.matr);
		if (res.error==false) {
//alert("correcto");
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			limpiar();
		}else{
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
		console.log(res.responseText);
	})
	.fail(function(res) {
		console.log("error");
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
		console.log(res.responseText);
	})
	.always(function() {
		console.log("complete");
	});		
});

jQuery(document).on('submit', '#matprof', function(event) {
	event.preventDefault();
	var rfc=$('#rfc').val();
	var idm=$('#id_m').val();
	var anio=$('#anio').val();
	var resp="mat-prof";
	/* Act on the event */	
	
	alert("datos serializados");
	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {rfc:rfc,idm:idm,anio:anio,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		//alert(res.matr);
		if (res.error==false) {
//alert("correcto");
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			limpiar();
		}else{
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
		console.log(res.responseText);
	})
	.fail(function(res) {
		console.log("error");
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
		console.log(res.responseText);
	})
	.always(function() {
		console.log("complete");
	});		
});


jQuery(document).on('submit', '#matgrup', function(event) {
	event.preventDefault();
	var idg=$('#idg').val();
	var cm=$('#cm').val();
	var resp="mat-grup";
	/* Act on the event */	
	
	alert("datos serializados");
	$.ajax({
		url: 'consultas/alta_alumno.php',
		type: 'POST',
		dataType: 'json',
		data: {idg:idg,cm:cm,resp:resp},
	})
	.done(function(res) {
		console.log("success");
		//alert(res.matr);
		if (res.error==false) {
//alert("correcto");
			$('.alert-success').fadeIn(500);
			setTimeout("$('.alert-success').fadeOut(3000);", 3000);
			limpiar();
		}else{
			$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);}
		console.log(res.responseText);
	})
	.fail(function(res) {
		console.log("error");
		$('.alert-danger').fadeIn(500);
			setTimeout("$('.alert-danger').fadeOut(3000);", 3000);
		console.log(res.responseText);
	})
	.always(function() {
		console.log("complete");
	});		
});


function limpiar() {
	$('#matr').val("");
	$('#grp').val("");
	$('#nom').val("");
	$('#ap').val("");
	$('#am').val("");
	$('#carrera').val("");	
	$('#foto').val("");
	$('#sem').val("");
	$('#rfc').val("");
	$('#nom_p').val("");
	$('#ap').val("");
	$('#am').val("");
	$('#id_g').val("");
	$('#nom_g').val("");
	$('#horario').val("");
	$('#id_materia').val("");
	$('#nom_m').val("");
	$('#cr').val("");
	$('#sem').val("");
	$('#hrs').val("");
	$('#id_tutor').val("");
	$('#ga').val("");
	$('#nom_t').val("");
	$('#ap_t').val("");
	$('#am').val("");
}
