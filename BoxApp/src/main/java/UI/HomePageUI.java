package UI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.image.Image;
import javafx.scene.layout.BorderPane;
import javafx.stage.Stage;
import javax.swing.JOptionPane;

public class HomePageUI implements Initializable {

    @FXML
    private BorderPane rootPane;
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
    @FXML
    private Button btnAboutApp;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    @FXML
    private void loadPulsoCardiaco(ActionEvent event) throws IOException {
        /*BorderPane loadPane = FXMLLoader.load(getClass().getResource("/fxml/MedidorPulsoCardiaco.fxml"));
        rootPane.getChildren().setAll(loadPane);*/
        
        try { 
            Parent root = FXMLLoader.load(getClass().getResource("/fxml/MedidorPulsoCardiaco.fxml"));

            Scene HomePageUI = new Scene(root);
            Stage stage = new Stage();

            stage.setTitle("Microwell Box - Medidor de Pulso Cardíaco");
            //stage.setFullScreen(true); //Janela em full-screen
            stage.setMaximized(true); //Janela maximizada
            stage.setScene(HomePageUI);
            stage.getIcons().add(new Image("/icons/logo_app.png"));
            stage.show();

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Erro! Não foi possivel carregar a página", "Erro!", JOptionPane.ERROR_MESSAGE);
            System.out.println(e.toString());
        }
        
    }

    @FXML
    private void loadPressaoArterial(ActionEvent event) {
    }

    @FXML
    private void loadPesoAltura(ActionEvent event) {
    }

    @FXML
    private void loadAboutApp(ActionEvent event) {
        try { 
            Parent root = FXMLLoader.load(getClass().getResource("/fxml/AboutApp.fxml"));

            Scene HomePageUI = new Scene(root);
            Stage stage = new Stage();

            stage.setTitle("Microwell Box");
            stage.setScene(HomePageUI);
            stage.getIcons().add(new Image("/icons/logo_app.png"));
            stage.setResizable(false);
            stage.show();

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "Erro! Não foi possivel carregar a página", "Erro!", JOptionPane.ERROR_MESSAGE);
            System.out.println(e.toString());
        }
    }

}
