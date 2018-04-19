  
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta charset="utf-8" />
<title>Demo Arduino Ethernet</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
    <script type="text/javascript" >
    const cruds = new Firebase('https://backhome-16b56.firebaseio.com/car_status/1');

function load_status_change() {
	
	var datos={};

    cruds.on('value',function(data){
    	
    	datos = data.val();
    	
          
        $.each(datos, function(id,values){

            $("#status_change").html(values.status);
            
        });
        
    });

}</script>
  <body onload="load_status_change()">
      <div id="status_change"></div>
  </body>
     