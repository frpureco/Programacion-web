//#fr es el id del form//submit es para cuando se presione el boton submit
jQuery(document).on('submit', '#form', function (event) {    
event.preventDefault();
var matr=$('#matricula').val();
var resp="alumno";
if (matr=="") {  
   $('.Error').fadeIn(500);
           setTimeout( "$('.Error').fadeOut(1500);",3000 );
}else{
$.ajax({  
  url: 'mostrarTabla.php',
  type: 'POST',
  dataType:'json',
  data: {matr: matr,resp:resp},
})
.done(function(resp) {
  console.log("resp "+resp.tab);
  console.log("success");  
  if (resp.result==0) {
    $('.vacio').fadeIn(1500);
           setTimeout( "$('.vacio').fadeOut(1500);",3000 );
  }
  $('#mit').html(resp.tab);
  $('#matricula').val("");
  //$('#mit').set

})
.fail(function(resp) {
  alert("error: "+resp);
  console.log(resp.responseText);
  console.log("error");
})
.always(function() {
  console.log("complete");
});

}
});

jQuery(document).ready(function($) {
  $('#mostrar').click(function(event) {
    event.preventDefault(); 
    alert("mosr");
    var resp="mostrar";
    $.ajax({
      url: 'mostrarTabla.php',
      type: 'POST',
      dataType: 'json',
      data: {resp:resp},
    })
    .done(function(resp) {
      alert(resp.tab1);
      console.log("success");
      if (resp.result==0) {
    $('.vacio').fadeIn(1500);
           setTimeout( "$('.vacio').fadeOut(1500);",3000 );
  }
  $('#tp').html(resp.tab);
  $('#tm').html(resp.tab1);
  $('#matricula').val("");
    })
    .fail(function(resp) {
      console.log(resp.responseText);
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });
});


function caragartabla(){
  //alert("holl");
  var resp="mat-prof";
$.ajax({
  url: 'mostrarTabla.php',
      type: 'POST',
      dataType: 'json',
      data: {resp:resp},
})
.done(function(resp) {
  //alert(resp.tab);
  console.log("success");
  if (resp.result==0) {
    $('.vacio').fadeIn(1500);
           setTimeout( "$('.vacio').fadeOut(1500);",3000 );
  }
  $('#mmat').html(resp.tab);
})
.fail(function(resp) {
  console.log(resp.responseText);
  console.log("error");
})
.always(function() {
  console.log("complete");
});
}

function caragartablaMaterias(){
  //alert("holl");
  var resp="mat-grupo";
$.ajax({
  url: 'mostrarTabla.php',
      type: 'POST',
      dataType: 'json',
      data: {resp:resp},
})
.done(function(resp) {
  //alert(resp.tab);
  console.log("success");
  if (resp.result==0) {
    $('.vacio').fadeIn(1500);
           setTimeout( "$('.vacio').fadeOut(1500);",3000 );
  }
  $('#tm').html(resp.tab);
})
.fail(function(resp) {
  console.log(resp.responseText);
  console.log("error");
})
.always(function() {
  console.log("complete");
});
}

//mostrar las tablas en la pagina de agrega_mat_grup.php
jQuery(document).ready(function($) {
  $('#mostrarM_G').click(function(event) {
    event.preventDefault(); 
    //alert("mosr");
    var resp="mostrarmg";
    $.ajax({
      url: 'mostrarTabla.php',
      type: 'POST',
      dataType: 'json',
      data: {resp:resp},
    })
    .done(function(resp) {
      //alert(resp.tab);
      console.log("success");
      if (resp.result==0) {
    $('.vacio').fadeIn(1500);
           setTimeout( "$('.vacio').fadeOut(1500);",3000 );
  }

  $('#tg').html(resp.tab);
  $('#tm').html(resp.tab1);
  //$('#matricula').val("");
    })
    .fail(function(resp) {
      console.log(resp.responseText);
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });
});



