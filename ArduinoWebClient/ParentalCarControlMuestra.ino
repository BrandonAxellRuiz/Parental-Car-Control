#include <SPI.h>
#include <Ethernet.h>

byte mac[] = {  0x00, 0xAB, 0xCB, 0xCD, 0xDE, 0x02 };
IPAddress ip(192,168,1,10);
IPAddress server(192,168,1,80);
//IPAddress gateway(192,168,1,1);
//IPAddress subnet(192,168,1,1);

//String c;
char c;

EthernetClient client;

void connect(){
  if (client.connect(server, 80)) {
      Serial.print("Make a HTTP request ... ");

//      client.println("GET /search?q=arduino HTTP/1.0");
//      client.println("HOST: google.com");

// client.println("GET https://solti.com.mx/backhome/arduino/index.php");
client.println("GET http://192.168.1.80/ParentalCarControl/arduino/index.php");
      client.println();

      Serial.println("okok");

    } 
    else {
      // kf you didn't get a connection to the server:
      Serial.println("connection failed");
  }
    
}

void setup() {

  pinMode(3, OUTPUT);
  Serial.begin(9600);  
  Serial.print("Setup LAN ... ");
  // give the Ethernet shield a second to initialize:
  delay(1000);
  Ethernet.begin(mac, ip);
  Serial.println("ok");
  //delay(1000);


  connect();
    
}

void loop(){

if (client.available()) {
    //c = client.readString();
    c = client.read();
    Serial.print(c);

    if(c=='1') 
    {
      digitalWrite(3,HIGH);  
      Serial.print("Alto");
    }
    else if(c=='2')
    {
      digitalWrite(3,LOW);  
    Serial.print("Bajo");
    }
  }

  // if the server's disconnected, stop the client:
  if (!client.connected()) {
    Serial.println();
    Serial.println("disconnecting.");
    client.stop();

    delay(3000);

    connect();
  } 

}
