
package Controller;

import Model.MedicaoPulsoCardiaco;


public class MedidorPulsoCardiacoController {
    private MedicaoPulsoCardiaco med;
    
    private final String complatibleModel = "oximetro";
    
    private String deviceCOM;
    private String mp;
    private String model;
    private String portocol;
    
    private boolean feedback;
    private String ans;

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
    public boolean setMp(String mp) {
        //procura um equipamento compativel
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
    public boolean isFeedback() {
        return feedback;
    }

    /**
     * @param feedback the feedback to set
     */
    public void setFeedback(boolean feedback) {
        this.feedback = feedback;
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
    
}
