package UI;

import Controller.MedidorPulsoCardiacoController;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.layout.BorderPane;
import javafx.stage.Stage;

public class MedidorPulsoCardiacoUI implements Initializable {

    MedidorPulsoCardiacoController controller = new MedidorPulsoCardiacoController();

    @FXML
    private BorderPane rootPane;
    @FXML
    private Button btnHomePage;
    @FXML
    private BorderPane topMenuPane;
    @FXML
    private Label titleLable;
    @FXML
    private Button btnStartMeasure;
    @FXML
    private Button btnSaveSession;
    @FXML
    private Button btnCancel;
    @FXML
    private TextField tbID;
    @FXML
    private Button btnKeyboard1;
    @FXML
    private Button btnKeyboard2;
    @FXML
    private Button btnKeyboard3;
    @FXML
    private Button btnKeyboard4;
    @FXML
    private Button btnKeyboard5;
    @FXML
    private Button btnKeyboard6;
    @FXML
    private Button btnKeyboard7;
    @FXML
    private Button btnKeyboard8;
    @FXML
    private Button btnKeyboard9;
    @FXML
    private ImageView imgGraph;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        boolean feedback = controller.startComunication();
        
        if(feedback){
            //Ativa a UI
        } else {
            //Mensagem de erro
            
            //Fecha a janela
            Stage stage = (Stage) btnHomePage.getScene().getWindow();
            stage.close();
        }
    }

    @FXML
    private void loadHomePage(ActionEvent event) throws IOException {
        /*BorderPane loadPane = FXMLLoader.load(getClass().getResource("/fxml/HomePageUI.fxml"));
      rootPane.getChildren().setAll(loadPane);  */

        Stage stage = (Stage) btnHomePage.getScene().getWindow();
        stage.close();
    }

    @FXML
    public void startMeasure() {    //Inicia a medição
        controller.startMeasure();
    }
    
    @FXML
    public void saveSession(){      //Apresenta os elementos necessarios para guardar os dados
        
    }

    public void saveOnCloud() {     //Regista os dados na Cloud
        int id = 0; //Obetr esta informação de um campo na UI
        controller.saveOnCloud(id);
    }
}
