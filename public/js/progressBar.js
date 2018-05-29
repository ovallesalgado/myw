$(document).ready(function() {
   //$("#progressbar").progressbar({value: 50});
      Carga();
});


function Carga(){
   // var tablaDatos=$("#datos");
  
 $("#progressbar").progressbar({value: 50})
/*    var Tabladeseos=$("#Tabladeseos");
var route="http://127.0.0.1:8000/consultaDeseos";
$("#Tabladeseos").empty();
$.get(route,function(res){
    $(res).each(function(key,value){
       
    // tablaDatos2.append("<span>"+value1.ahorro+"</span><br>").addClass("dim");
    // $("#progressbar" ).append("<div>"+value.ahorro+"</div>")
    Tabladeseos.append("<tr><td>"+value.id+"</td><td>"+value.nombre+"</td><td>"+value.precio+"</td><td>"+value.descripcion+"</td><td>"+value.cuota+"</td><td>"+value.ahorro+"</td><td>"+html("<div id='progressbar'></div>")+"</td></tr>'");
    });
});*/
}
