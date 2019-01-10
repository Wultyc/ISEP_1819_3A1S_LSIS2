package Medidores;

import Model.MedicaoPulsoCardiaco;
//import com.fazecast.jSerialComm.*;

public class Oximetro {
    private final String complatibleModel = "oximetro";
    
    private MedicaoPulsoCardiaco med;
    
    private String deviceCOM;
    private String mp;
    private String model;
    private String portocol;
    
    private boolean feedback;
    private String ans;
    
    /**
     * @return the deviceCOM
     */
    public String getDeviceCOM() {
        return deviceCOM;
    }

    /**
     * @return boolean
     */
    public boolean setDeviceCOM() {
        //procura um equipamento compativel
        return true;
    }

    /**
     * @return the mp
     */
    public String getMp() {
        return mp;
    }

    /**
     * @return boolean
     */
    public boolean setMp() {
        //procura um equipamento compativel
        //sendCommand(1)
        return true;
    }

    /**
     * @return the model
     */
    public String getModel() {
        return model;
    }

    /**
     * 
     */
    public void setModel() {
        int p = this.mp.indexOf(";");
        this.portocol = this.mp.substring(0, p);
    }

    /**
     * @return the portocol
     */
    public String getPortocol() {
        return portocol;
    }

    /**
     * 
     */
    public void setPortocol() {
        int p = this.mp.indexOf(";");
        this.portocol = this.mp.substring(p);
    }

    /**
     * @return the feedback
     */
    public boolean getFeedback() {
        return feedback;
    }

    /**
     * @param feedback the feedback to set
     */
    public void setFeedback(boolean feedback) {
        this.feedback = feedback;
    }

    /**
     * @return the med
     */
    public MedicaoPulsoCardiaco getMed() {
        return med;
    }

    /**
     * @param med the med to set
     */
    public void setMed(MedicaoPulsoCardiaco med) {
        this.med = med;
    }
    
    public boolean sendCommand(int c){  //Comando com respota
        this.ans = ""; //se exitir alguma resposta guada-a aqui
        this.feedback = true; //guarda o feedback
        
        return this.feedback;
    }
    
    public boolean sendCommand(int c, String o){  //Comando com ordem
        this.ans = ""; //se exitir alguma resposta guada-a aqui
        this.feedback = true; //guarda o feedback
        
        return this.feedback;
    }
    
    public boolean firstMessage(){
        boolean fb1,fb2;
        
        fb1 = setDeviceCOM();
        fb2 = setMp();
        
        if(fb1 == true && fb2 == true){
            setModel();
            setPortocol();
            return true;
        } else{
            return false;
        }
    }
    
    public boolean startMeasure(){
        
        sendCommand(3);
        
        if(this.feedback == true){
            
            try {
                getMed().setPulsoMedio(Integer.parseInt(this.ans));
            } catch (NumberFormatException e) {
                getMed().setError(true);
            }
            getMed().setTimestamp();
            return true;
        } else{
            getMed().setError(true);
            return false;
        }
        
    }
}
