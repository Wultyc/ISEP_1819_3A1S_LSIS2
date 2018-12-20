byte getCommand(){
  byte r = Serial.read();
  Serial.print("T");
  return r;
}

bool send_module_info(){
  Serial.print(MODULE_INFO + ";" + PROTOCOL_VER);
}

bool send_integrity_state(){
  Serial.print("T");  //Para já fica assim
}

bool send_nonDf(){
  Serial.print("E");
}
