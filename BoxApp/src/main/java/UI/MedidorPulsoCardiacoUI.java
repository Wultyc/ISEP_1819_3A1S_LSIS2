package UI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.layout.BorderPane;


public class MedidorPulsoCardiacoUI implements Initializable {

    @FXML
    private BorderPane rootPane;
    @FXML
    private Button btnHomePage;
    @FXML
    private BorderPane topMenuPane;
    @FXML
    private Label titleLable;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void loadHomePage(ActionEvent event) throws IOException {
      /*BorderPane loadPane = FXMLLoader.load(getClass().getResource("/fxml/HomePageUI.fxml"));
      rootPane.getChildren().setAll(loadPane);  */
    }
    
}
