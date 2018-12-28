package UI;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;


public class AboutAppUI implements Initializable {

    @FXML
    private Label lable1;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        lable1.setText("Esta aplicaçao e desenvolvida pelo grupo de alunos Microwells e destina-se exclusivamente para avaliaçao na disciplina Laboratorios de Sistemas II lecionada no ISEP durante o 1º Smeestre do ano letivo 2018/2019.\nApenas este uso é premitido para esta versão da aplicação.");
    }    
    
}
