<?php
    require_once('../config/db_config.php');

    $status = 'Nada ainda';

    if(isset($_POST['submit'])) {
        $status = 'error';
        if(!empty($_FILES['image']['name'])) {
            // Obter informações do arquivo
            $file_name = basename($_FILES['image']['name']);
            $file_type = pathinfo($file_name, PATHINFO_EXTENSION);

            // Permiti certos formatos de arquivo
            $allow_types = array('jpg', 'png', 'jpeg', ' gif');

            if(in_array($file_type, $allow_types)) {
                $image = $_FILES['image']['tmp_name'];
                $image_content = addslashes(file_get_contents($image));

                // Inserir imagens no banco de dados
                $sql = "INSERT into images (image, created) VALUES ('$image_content', NOW())";
                // echo "$sql";
                $insert = $db->query($sql);

                if($insert) {
                    $status = 'success';
                    $status_message = 'Arquivo armazenado com sucesso';
                } else {
                    $status_message = 'Falha no armazenamento do arquivo.';
                }
            } else {
                $status_message = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            }
        }
    } else {
        $status_message = 'Please select an image file to upload.';
    }
    echo $statusMsg; 
?>