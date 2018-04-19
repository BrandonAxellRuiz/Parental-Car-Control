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
        $("#status_a").html("igual");
        
    }else{
        
         $.post('bd/location_real.php',{

            latitud : latitud, 
            longitud : longitud,
            name : name

        }, function(data){

            //console.log(data);
            if(data == 1){
                
                $("#namet").html('Seguimiento gps ejecutando <img src="../images/Ellipsis-1.7s-55px.gif">');
  
                console.log("enviado");
                $("#status_a").html("enviado");
    
                localStorage.setItem("latitud", latitud);
                localStorage.setItem("longitud", longitud);
                localStorage.setItem("name", name);
               

            }else if(data == -1){

                swal("Favor de llenar el campo del nombre.","Para continuar preciona el boton de 'Iniciar localizacion'","warning");

            }else if(data == 2){
                
                console.log("igual");
                $("#status_a").html('igual.');
  
                
            }else{
                
                //swal("Error interno.","Lo sentimos favor de Para continuar precionar el boton de 'Iniciar localizacion' de nuevo o recarge la pagina.","error");
                console.log("Error interno.");
                $("#fallos").html("Error interno.");

            }
            
        });
        
    }
       
    //console.log(latitud+','+longitud+','+precision+','+fecha);


  var miPosicion = new google.maps.LatLng(latitud, longitud);
    var miPosiciones = new google.maps.LatLng(28.5716792, -100.6170633);

    
    // Se comprueba si el mapa se ha cargado ya 
    if (mapa == null) {
        // Crea el mapa y lo pone en el elemento del DOM con ID mapa
        var configuracion = {center: miPosicion, zoom: 16, mapTypeId: google.maps.MapTypeId.HYBRID};

        mapa = new google.maps.Map(document.getElementById("googleMap"), configuracion);

        // Crea el marcador en la posicion actual
        
        mapaMarcadores = new google.maps.Marker({position: miPosiciones, title:"Esta es tu posici車nes: "+$("#name").val()});
        mapaMarcadores.setMap(mapa);
        mapaMarcador = new google.maps.Marker({position: miPosicion, title:"Esta es tu posici車n: "+$("#name").val()});
        mapaMarcador.setMap(mapa);

    } else {
        // Centra el mapa en la posicion actual
        mapa.panTo(miPosicion);
        // Pone el marcador para indicar la posicion
        mapaMarcador.setPosition(miPosicion);
    }
}


function mostrarErrores(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            console.log('Permiso denegado por el usuario'); 
            break;
        case error.POSITION_UNAVAILABLE:
            console.log('Posici車n no disponible');
            break; 
        case error.TIMEOUT:
            console.log('Tiempo de espera agotado');
            break;
        default:
            console.log('Error de Geolocalizaci車n desconocido :' + error.code);
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
    $("#status_a").html("");
    $("fallos").html("");
    
}




