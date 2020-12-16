<!DOCTYPE html>
<html lang="pt">
    <head>
        <style>
            .error {
                color: #A52A2A;
                font-size: 2vmin;
            }
            input, textarea{
                width: 70%;
                float: right;
            }
            .btn{
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Nome é obrigatóro";
                } else {
                    $name = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameErr = "Apenas são permitidos letras e espaços";
                    }
                }
                if (empty($_POST["email"])) {
                    $emailErr = "Email é obrigatório";
                } else {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "formato de email inválido";
                    }
                }
                if (empty($_POST["comment"])) {
                    $comment = "Mensagem obrigatória";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <p><span class="error">* Campos Obrigatórios</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Nome: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Mensagem: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
        </form>
        <br><br><br> 
        <?php
        if(isset($_POST['submit']))
            echo "<p>Iremos responder em breve!</p>";
        ?>
    </body>
</html>
