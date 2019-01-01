package com.microwells.boxapp;

import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.scene.image.Image;



public class MainApp extends Application {

    @Override
    public void start(Stage stage) throws Exception {
        Parent root = FXMLLoader.load(getClass().getResource("/fxml/HomePageUI.fxml"));
        
        Scene HomePageUI = new Scene(root);
        HomePageUI.getStylesheets().add("/styles/Styles.css");
        
    stage.setTitle("Microwell Box");
        //stage.setFullScreen(true); //Janela em fullscreen
        stage.setMaximized(true); //Janela maximizada
        stage.setScene(HomePageUI);
        stage.getIcons().add(new Image("/icons/logo_app.png"));
        stage.setResizable(false);
        stage.show();
    }

    /**
     * The main() method is ignored in correctly deployed JavaFX application.
     * main() serves only as fallback in case the application can not be
     * launched through deployment artifacts, e.g., in IDEs with limited FX
     * support. NetBeans ignores main().
     *
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }

}
