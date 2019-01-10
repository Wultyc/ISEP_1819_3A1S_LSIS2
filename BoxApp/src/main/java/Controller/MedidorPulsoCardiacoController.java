package Controller;

import Medidores.Oximetro;
import Model.MedicaoPulsoCardiaco;
import java.io.IOException;

public class MedidorPulsoCardiacoController {

    private MedicaoPulsoCardiaco med;
    private Oximetro oxi;

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
    public Oximetro getMedPC() {
        return oxi;
    }

    /**
     * @param medPC the medPC to set
     */
    public void setMedPC(Oximetro medPC) {
        this.oxi = medPC;
    }

    public boolean startComunication() throws IOException {
        oxi = new Oximetro();
        oxi.firstMessage();
        return true;
    }

    public boolean startMeasure() throws IOException {
        med = new MedicaoPulsoCardiaco(0);
        oxi.setMed(med);
        oxi.startMeasure();

        return true;
    }

    public boolean saveOnCloud(int id) {
        med.setId(id);
        med.saveOnCloud();
        return true;
    }

    public String getResult() {
        return "" + this.med.getPulsoMedio();
    }
}
