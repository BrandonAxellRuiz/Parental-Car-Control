var watchId; 
var mapa = null;
var mapaMarcador = null; 
var marker;
var latLng;



    if(navigator.geolocation){
	   
       carga();
       
    }else{

    	swal("Error interno","Tu navegador no soporta la geolocalizacion, actualiza tu navegador.","error");

    }
    


    function carga(){
        
        $("#namet").html('Seguimiento gps ejecutando <img src="../images/Ellipsis-1.7s-55px.gif">');
        $("#iniciar").removeAttr("onclick","carga");
        $("#iniciar").attr("onclick","initMap()");
        $("#iniciar").html("Refrescar seguimiento");
        $("#fin").removeAttr("disabled");
        
        map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 12,
            center: new google.maps.LatLng(28.6333747,-100.5672007),
            mapTypeId: 'terrain'
            
        });
        
    
        watchId = navigator.geolocation.watchPosition(initMap, mostrarErrores, opciones);

        $("#googleMap").attr("style","width: 100% !important; height: 400px !important");
         
        
    }
       

    function initMap() {
        
        $("#iniciar").attr("disabled","disabled");
    
        $.ajax({
            
            url : 'bd/rd_locations.php',
            type : 'GET',
            
        beforeSend : function(data){
            
        }, error : function(data){
            
    
        }, success :  function(data){
            
            datos = JSON.parse(data);
            
            var titles;
            var d = new Date();

            var hm =  d.getHours()+':'+d.getMinutes();
            
         
            for(i in datos){

        
                latLng = new google.maps.LatLng(datos[i].latitud, datos[i].long);
                
               
                if(datos[i].time_create == hm){
                    
                    var imagen ="";
                    titles = 'Ubicacion actual de ' + datos[i].name_tester;
                    imagen = '../images/car.png';
                    marker = "";
                    
                }else{
                    
                    var imagen ="";
                    titles = 'Ultima ubicacion de ' + datos[i].name_tester+' desde '+ datos[i].time_create;
                    imagen = '../images/location-off.png';
                    marker = "";
                    
                }

                marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    zoom: 4,
                    title: titles,
                    icon: imagen,
                    //draggable:true,
                   
                    
                  });

            }
         
        
            console.log("refresh");
          
            $("#iniciar").removeAttr("disabled");
            $("#status_a").html("Refresh "+hm);
        
        
        }
        });
        
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
        swal("Geolocalizacion detenida","Se finalizo el proceso de ubicacion mediante gps","success");
        $("#iniciar").html("Iniciar seguimiento");
        $("#iniciar").removeAttr("onclick","initMap");
        $("#fin").attr("disabled","disabled");
        $("#iniciar").attr("onclick","carga()");
        $("#namet").html('Iniciar seguimiento de geolocalizacion');
        $("#status_a").html("");
        $("fallos").html("");
        
    }




