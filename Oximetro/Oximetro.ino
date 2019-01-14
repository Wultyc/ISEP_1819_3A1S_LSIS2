byte incoming;

void setup() {
  Serial.begin(9600);
  Serial.println("Pulse oxymeter test!");
  pinMode(3, OUTPUT);
  pinMode(A0, INPUT);
}

void loop() {
  if (!Serial.available() > 0) {
    //incoming = Serial.read();
    incoming = 3;
    switch(incoming){
      case 1: Serial.write("oximetro;1.0");break;
      case 2: break;
      case 3:
        int result = iniciarMedicao();
        if(result > 60 && result < 100){
          Serial.write(result);
        }
        else
        {
          Serial.write("oximetro;1.0");
        }
        break;
    }
    
  }
}

float iniciarMedicao(){
  unsigned long time_i;
  unsigned long time_f;
  float res = 0;
  boolean flag = true;
  boolean flag2 = true;
  do{
    int med = analogRead(A0);
    if(med > 0){
      digitalWrite( 3, !digitalRead(3) );
      time_i = millis();
      flag = false;
      do{
        med = analogRead(A0);
        if(med < 100){
          flag2 = false;
          digitalWrite( 3, !digitalRead(3) );
        }
      }while(flag2);
      flag2 = true;
      do{
        med = analogRead(A0);
        if(med > 0){
          flag2 = false;
        }
      }while(flag2);
      time_f = millis();
      res = time_f-time_i;
      return (1/(res/1000))*60;
    }
  }while(flag);
}
