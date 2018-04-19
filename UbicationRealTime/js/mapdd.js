var watchId; 

    if(navigator.geolocation){
	   
        if($("#name").val()!=""){
            $("#googleMap").attr("style","width:100%;height:400px");

            locations();

        }else{

            swal("Favor de llenar el campo del nombre.","Para continuar preciona el boton de 'Iniciar localizacion'","warning");


        }

    }else{

    	swal("Error interno","Tu navegador no soporta la geolocalizacion, actualiza tu navegador.","error");

    }
    

function locations(){

    if($("#name").val()!=""){
    
     $("#googleMap").attr("style","width:100%;height:400px");
	   watchId = navigator.geolocation.watchPosition(mostrarPosicion, mostrarErrores, opciones);

    }else{

        swal("Favor de llenar el campo del nombre.","Para continuar preciona el boton de 'Iniciar localizacion'","warning");

    }


}


var mapa = null;
var mapaMarcador = null;    

function mostrarPosicion(posicion) {
    
    var latitud = posicion.coords.latitude;
    var longitud = posicion.coords.longitude;
    var precision = posicion.coords.accuracy;
    var fecha = new Date(posicion.timestamp);
    var name = $("#name").val();
 
    
    $("#namet").html('Ejecutando seguimiento.');
    $("#name").attr('disabled','disabled'); 
    $("#iniciar").attr('disabled','disabled'); 
    $("#fin").removeAttr('disabled');
    $("#googleMap").attr("style","width:100%;height:400px");
    
    if(localStorage.getItem("latitud") == latitud && localStorage.getItem("longitud") == longitud && localStorage.getItem("name") == name){
        
        console.log("igual");
        
    }else{
        
         $.post('bd/location_real.php',{

            latitud : latitud, 
            longitud : longitud,
            name : name

        }, function(data){

            //console.log(data);
            if(data == 1){

                console.log("enviado");
                
                localStorage.setItem("latitud", latitud);
                localStorage.setItem("longitud", longitud);
                localStorage.setItem("name", name);
               

            }else if(data == -1){

                swal("Favor de llenar el campo del nombre.","Para continuar preciona el boton de 'Iniciar localizacion'","warning");

            }else if(data == 2){
                
                console.log("igual");
                
            }else{
                
                swal("Error interno.","Lo sentimos favor de Para continuar precionar el boton de 'Iniciar localizacion' de nuevo o recarge la pagina.","error");

            }
            
        });
        
    }
    
    $.ajax({
        
        url: "bd/rd_locations.php",
        type: "GET",
        data: {name: $("#name").val()},
        
    beforeSend: function(data){
        
    }, error: function(data){
        
    }, success: function(data){
        
        var datosobj = []; 
        var datos;
        
        datos = JSON.parse(data);
        
            for(i in datos){               
                
                datosobj[i] = {"lat" : datos[i].latitud, "lo" : datos[i].long};
                 
            }
            for (var i = 0; i < datosobj.length; i++) {
               console.log(i);
              }
            /*console.log(datosobj);
                
                var miPosicion = new google.maps.LatLng(datosobj);
               
                // Se comprueba si el mapa se ha cargado ya 
                if (mapa == null) {
                    // Crea el mapa y lo pone en el elemento del DOM con ID mapa
                    var configuracion = {center: miPosicion, zoom: 16, mapTypeId: google.maps.MapTypeId.HYBRID};
            
                    mapa = new google.maps.Map(document.getElementById("googleMap"), configuracion);
            
                    // Crea el marcador en la posicion actual
                    
                    mapaMarcador = new google.maps.Marker({position: miPosicion, title:"Esta es tu posición: "});
                    mapaMarcador.setMap(mapa);
            
                } else {
                    // Centra el mapa en la posicion actual
                    mapa.panTo(miPosicion);
                    // Pone el marcador para indicar la posicion
                    mapaMarcador.setPosition(miPosicion);
                }
        */
        //console.log(datosobj);
        
        
        }
        });
        //console.log(latitud+','+longitud+','+precision+','+fecha);var miPosicion = new google.maps.LatLng(latitud, longitud);
               
                // Se comprueba si el mapa se ha cargado ya 
                /*if (mapa == null) {
                    // Crea el mapa y lo pone en el elemento del DOM con ID mapa
                    var configuracion = {center: miPosicion, zoom: 16, mapTypeId: google.maps.MapTypeId.HYBRID};
            
                    mapa = new google.maps.Map(document.getElementById("googleMap"), configuracion);
            
                    // Crea el marcador en la posicion actual
                    
                    mapaMarcador = new google.maps.Marker({position: miPosicion, title:"Esta es tu posición: "+$("#name").val()});
                    mapaMarcador.setMap(mapa);
            
                } else {
                    // Centra el mapa en la posicion actual
                    mapa.panTo(miPosicion);
                    // Pone el marcador para indicar la posicion
                    mapaMarcador.setPosition(miPosicion);
                }*/
    
}


function mostrarErrores(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            console.log('Permiso denegado por el usuario'); 
            break;
        case error.POSITION_UNAVAILABLE:
            console.log('Posición no disponible');
            break; 
        case error.TIMEOUT:
            console.log('Tiempo de espera agotado');
            break;
        default:
            console.log('Error de Geolocalización desconocido :' + error.code);
    }
}

var opciones = {
    enableHighAccuracy: true,
    timeout: 100000,
    maximumAge: 1000
};

function detener() {
    
    navigator.geolocation.clearWatch(watchId);
    swal("Gracias por ayudarme a testear la webapp: "+$("#name").val()+"","Atte: Brandon Axell Ruiz, saludos y que tengas un buen dia.","success");
    $("#name").val("");
    $("#name").removeAttr("disabled");
    $("#iniciar").removeAttr("disabled");
    $("#fin").attr("disabled","disabled");
    $("#googleMap").removeAttr("style");
    $("#namet").html('Iniciar seguimiento de geolocalizacion');
    
}




