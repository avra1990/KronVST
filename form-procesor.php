<?php
      if (isset($_POST["name"])) {
        $name= $_POST["name"];
        $email= $_POST["email"];
        $message = $_POST["textarea"];

        $body = "IME KORISNIKA: $name <br /><br />
            EMAIL KORISNIKA: $email <br /><br />
            PORUKA: <br /> $message"; 


        $to = "kron.vst@gmail.com";

        if(isset($_POST["submit"])) {
            mail ($to , 'Nova Poruka' , $body);
            echo ("Hvala sto ste nas kontaktirali"); 
        } else {
            echo "Mail is not correct!";
        }
      }
