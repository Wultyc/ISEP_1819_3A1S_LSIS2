#define MODULE_INFO "oximetro"  //tipo de medidor
#define PROTOCOL_VER 0.1        //Versão do protocolo de comunicação
#define ANS_TIME 5000           //Tempo de resposta em ms

void setup() {
  //PinMode

  //Serial Begin
  Serial.begin(9600);
}

void loop() {
  byte command = getCommand();

  switch(command){
    case 1:
      send_module_info();
      break;
    case 2:
      send_integrity_state();
      break;
    case 3:
      start_messure();
      break;
    default:
      send_nonDf();
      break;
  }
}

void start_messure(){
  
}
