package UI;

import Controller.MedidorPulsoCardiacoController;
import java.io.IOException;
import java.net.URL;
import java.util.HashSet;
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
    
    private boolean saveOpt = false;
    
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
    @FXML
    private Button btnSaveSession1;

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
        btnSaveSession.setDisable(false);
        btnCancel.setDisable(false);
    }
    
    @FXML
    public void saveSession(){      //Apresenta os elementos necessarios para guardar os dados
        if(saveOpt){
            saveOnCloud();
        } else {
            saveOpt = true;
            tbID.setDisable(false);
            btnKeyboard1.setDisable(false);
            btnKeyboard2.setDisable(false);
            btnKeyboard3.setDisable(false);
            btnKeyboard4.setDisable(false);
            btnKeyboard5.setDisable(false);
            btnKeyboard6.setDisable(false);
            btnKeyboard7.setDisable(false);
            btnKeyboard8.setDisable(false);
            btnKeyboard9.setDisable(false); 
        }
    }

    public void saveOnCloud() {     //Regista os dados na Cloud
        int id = 0; //Obetr esta informação de um campo na UI
        controller.saveOnCloud(id);
    }

    @FXML
    private void add1(ActionEvent event) {
        tbID.setText(tbID.getText() + "1");
    }

    @FXML
    private void add2(ActionEvent event) {
        tbID.setText(tbID.getText() + "2");
    }

    @FXML
    private void add3(ActionEvent event) {
        tbID.setText(tbID.getText() + "3");
    }

    @FXML
    private void add4(ActionEvent event) {
        tbID.setText(tbID.getText() + "4");
    }

    @FXML
    private void add5(ActionEvent event) {
        tbID.setText(tbID.getText() + "5");
    }

    @FXML
    private void add6(ActionEvent event) {
        tbID.setText(tbID.getText() + "6");
    }

    @FXML
    private void add7(ActionEvent event) {
        tbID.setText(tbID.getText() + "7");
    }

    @FXML
    private void add8(ActionEvent event) {
        tbID.setText(tbID.getText() + "8");
    }

    @FXML
    private void add9(ActionEvent event) {
        tbID.setText(tbID.getText() + "9");
    }

    @FXML
    private void deleteText(ActionEvent event) {
        tbID.setText("");
    }
}
