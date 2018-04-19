const cruds = new Firebase('https://backhome-16b56.firebaseio.com/car_status/1');

function load_status_change() {
	
	var datos={};

    cruds.on('value',function(data){
    	
    	datos = data.val();
    	
          
        $.each(datos, function(id,values){

            $("#status_change").html(values.status);
            
        });
        
    });

}

