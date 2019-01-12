package Model;

import java.io.IOException;
import java.io.InputStream;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.Date;
import java.util.logging.Level;
import java.util.logging.Logger;

public class MedicaoPulsoCardiaco extends Medicao {

    private final String mainURL = "http://microwells.rpinto.eu/index.php?";

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

    public boolean saveOnCloud() {
        try {
            URL url = new URL(this.mainURL + "client=" + super.getId() + "&value=" + this.pulsoMedio);
            InputStream is = url.openStream();
        } catch (MalformedURLException ex) {
            Logger.getLogger(MedicaoPulsoCardiaco.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(MedicaoPulsoCardiaco.class.getName()).log(Level.SEVERE, null, ex);
        }
        return true;
    }
}
