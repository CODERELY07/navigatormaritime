<?php
    require_once '../connection/db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $contact_number = htmlspecialchars(trim($_POST['contact-number']));

        $course = htmlspecialchars(trim($_POST['course']));
        $message = htmlspecialchars(trim($_POST['message']));

        if(isset($_POST['select-purpose']) && is_array($_POST["select-purpose"])){
            $purpose = htmlspecialchars(trim(implode(", " , $_POST['select-purpose'])));
        }else{
            $purpose = htmlspecialchars(trim($_POST['select-purpose']));
        }
        

        $sql = "INSERT INTO contact(name,email,number,purpose,course,message) VALUES('$name','$email','$contact_number', '$purpose','$course','$message')";
        if ($conn->query($sql) === TRUE) {
            echo "Send successfully";
            header("Location:../contact.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>