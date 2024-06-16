<?php

    require_once '../connection/db.php';
    sleep(2);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $certificate_no = $_POST['certificate-no'];

        if(empty($certificate_no)){
            echo "Please Type Your Certificate No";
        }else{
            $sql = "SELECT * FROM certificate WHERE number = '$certificate_no'";
            $result = $conn->query($sql) or die("Query Unsuccessful");
    
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "ID: " . $row['id'] . "<br>" ."Number: " . $row['number'];
                }
            }else{
                echo "Invalid Certificate No, Please type correct certificate no.";
            }
        }
    }
?>