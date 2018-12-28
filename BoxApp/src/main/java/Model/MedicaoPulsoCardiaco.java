
package Model;

import java.util.Date;


public class MedicaoPulsoCardiaco extends Medicao{
    
    private int pulsoMedio;
    private boolean error;
    
    public MedicaoPulsoCardiaco(int id) {
        super(id);
    }

    /**
     * @return the pulsoMedio
     */
    public int getPulsoMedio() {
        return pulsoMedio;
    }

    /**
     * @param pulsoMedio the pulsoMedio to set
     */
    public void setPulsoMedio(int pulsoMedio) {
        this.pulsoMedio = pulsoMedio;
    }
    
    /**
     * @return the timestamp
     */
    @Override
    public Date getTimestamp() {
        return super.getTimestamp();
    }

    /**
     * @param timestamp the timestamp to set
     */
    @Override
    public void setTimestamp() {
        super.setTimestamp();
    }

    /**
     * @return the error
     */
    public boolean isError() {
        return error;
    }

    /**
     * @param error the error to set
     */
    public void setError(boolean error) {
        this.error = error;
    }
    
    public boolean saveOnCloud(){
        return true;
    }
}
