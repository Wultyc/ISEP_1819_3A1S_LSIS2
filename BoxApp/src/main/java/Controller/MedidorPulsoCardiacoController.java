
package Controller;

import Medidores.PulsoCardiaco;
import Model.MedicaoPulsoCardiaco;


public class MedidorPulsoCardiacoController {
    private MedicaoPulsoCardiaco med;
    private PulsoCardiaco medPC;
    


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
     * @return the medPC
     */
    public PulsoCardiaco getMedPC() {
        return medPC;
    }

    /**
     * @param medPC the medPC to set
     */
    public void setMedPC(PulsoCardiaco medPC) {
        this.medPC = medPC;
    }
    
    public boolean startComunication(){
        medPC = new PulsoCardiaco();
        return true;
    }
    
    public boolean startMeasure(){
        med = new MedicaoPulsoCardiaco(0);
        medPC.startMeasure(med);
        
        return true;
    }
    
    public boolean saveOnCloud(int id){
        med.setId(id);
        med.saveOnCloud();
        return true;
    }
}
