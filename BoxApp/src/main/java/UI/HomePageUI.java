package UI;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.layout.AnchorPane;


public class HomePageUI implements Initializable {

    @FXML
    private AnchorPane rootPane;
    @FXML
    private Button btnReload;
    @FXML
    private Button btnPulsoCardiaco;
    @FXML
    private Button btnPressaoArterial;
    @FXML
    private Button btnPesoAltura;
    @FXML
    private Button btnOther;
    
    
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void loadPulsoCardiaco(ActionEvent event) {
    }

    @FXML
    private void loadPressaoArterial(ActionEvent event) {
    }

    @FXML
    private void loadPesoAltura(ActionEvent event) {
    }
    
}
