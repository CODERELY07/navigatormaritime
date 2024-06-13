<?php
    require_once '../connection/db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $contact_number = htmlspecialchars(trim($_POST['contact-number']));
        $message = htmlspecialchars(trim($_POST['message']));

        if(isset($_POST['select-course']) && is_array($_POST["select-course"])){
            $courses = htmlspecialchars(trim(implode(", " , $_POST['select-course'])));
        }else{
            $courses = htmlspecialchars(trim($_POST['select-course']));
        }
        

        $sql = "INSERT INTO book_course(name,email,number,courses,message) VALUES('$name','$email','$contact_number', '$courses','$message')";
        if ($conn->query($sql) === TRUE) {
            echo "Send successfully";
            header("Location:../house-courses.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>