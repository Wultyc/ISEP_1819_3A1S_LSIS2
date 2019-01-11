package UI;

import Controller.MedidorPulsoCardiacoController;
import java.io.IOException;
import java.net.URL;
import java.util.HashSet;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.layout.BorderPane;
import javafx.stage.Stage;
import javax.swing.JOptionPane;

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
    private Button btnKeyboard0;
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
    private Button btnDelete;
    @FXML
    private Label lblInstrucoes;
    @FXML
    private Label lblResultado;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        boolean feedback = false;
        
        try {
            feedback = controller.startComunication();
        } catch (IOException ex) {
            Logger.getLogger(MedidorPulsoCardiacoUI.class.getName()).log(Level.SEVERE, null, ex);
        } catch (InterruptedException ex) {
            Logger.getLogger(MedidorPulsoCardiacoUI.class.getName()).log(Level.SEVERE, null, ex);
        }

        if (!feedback) {
            try {
                //Mensagem de erro
                JOptionPane.showMessageDialog(null, "Erro! Existe um erro com o medidor", "Erro!", JOptionPane.ERROR_MESSAGE);
                //Fecha a janela
                closeWindow();
            } catch (IOException ex) {
                Logger.getLogger(MedidorPulsoCardiacoUI.class.getName()).log(Level.SEVERE, null, ex);
            }
        }

        imgGraph.setVisible(false);
        lblResultado.setVisible(false);
        lblInstrucoes.setText("Pressione o botão \"Iniciar a Medição\"");
    }
    
    private void closeWindow() throws IOException {
        /*BorderPane loadPane = FXMLLoader.load(getClass().getResource("/fxml/HomePageUI.fxml"));
      rootPane.getChildren().setAll(loadPane);  */

        Stage stage = (Stage) btnHomePage.getScene().getWindow();
        stage.close();
    }

    @FXML
    private void loadHomePage(ActionEvent event) throws IOException {
        closeWindow();
    }

    @FXML
    public void startMeasure() throws IOException {    //Inicia a medição
        lblInstrucoes.setText("Coloque o seu dedo em cima no sensor");
        imgGraph.setVisible(true);

        controller.startMeasure();
        
        lblResultado.setText("Resultado: " + controller.getResult() + " bmp");

        btnSaveSession.setDisable(false);
        btnCancel.setDisable(false);
        lblResultado.setVisible(true);

        lblInstrucoes.setText("Medição concluida. Se pretender guardar os dados pressione o botão \"Guardar\"");
    }

    @FXML
    public void saveSession() {      //Apresenta os elementos necessarios para guardar os dados
        if (saveOpt) {
            int id = 0;
            try {
                id = Integer.parseInt(tbID.getText());
                controller.saveOnCloud(id);
                JOptionPane.showMessageDialog(null, "Informação guardada com sucesso.", "Guardado com sucesso!", JOptionPane.INFORMATION_MESSAGE);
                lblInstrucoes.setText("Informação guardada com sucesso. Pode fechar a janela.");
            } catch (Exception e) {
                JOptionPane.showMessageDialog(null, "Erro! O número que inseriu não é válido", "Erro!", JOptionPane.ERROR_MESSAGE);
                lblInstrucoes.setText("O número que inseriu não é válido.\nIntroduza o seu número de cliente e pressione o botão \"Guardar\"");
            }
        } else {
            lblInstrucoes.setText("Introduza o seu número de cliente e pressione o botão \"Guardar\"");
            saveOpt = true;
            tbID.setDisable(false);
            btnKeyboard0.setDisable(false);
            btnKeyboard1.setDisable(false);
            btnKeyboard2.setDisable(false);
            btnKeyboard3.setDisable(false);
            btnKeyboard4.setDisable(false);
            btnKeyboard5.setDisable(false);
            btnKeyboard6.setDisable(false);
            btnKeyboard7.setDisable(false);
            btnKeyboard8.setDisable(false);
            btnKeyboard9.setDisable(false);
            btnDelete.setDisable(false);
        }
    }

    @FXML
    private void add0(ActionEvent event) {
        tbID.setText(tbID.getText() + "0");
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
