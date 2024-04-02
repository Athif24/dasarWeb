<!DOCTYPE html>
<html>
    <head>
        <Title>
            HTML Injection
        </Title>
    </head>
    <body>
        <h2>
            HTML Injection
        </h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["input"];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'  );
            echo "Inpu  : " .$input. "<br>";

            $email = $_POST["email"];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email : " .$email;
            } else {
                echo "Email yang dimasukkan tidak benar.";
            }
        }
        ?>



        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <label for="input">
                Input : 
            </label>
            <input type="text" name="input" id="input">
            <br><br>

            <label for="email">
                Email : 
            </label>
            <input type="text" name="email" id="email">
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>