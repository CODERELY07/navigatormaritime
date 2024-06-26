<?php
    require_once 'connection/db.php';
        
    // IN HOUSE COURSE
    if($_POST['course']){
        $sql = "SELECT * FROM house_course";
        $result = $conn->query($sql) or die("SQL QUERRY FAILED");

        $output = "";
        if($result->num_rows > 0){
            $output = "<table class='table table-striped font-arimo table-bordered'>
                <tr>
                    <td class='fs-14 font-grey bolder'>Course</td>
                    <td class='fs-14 font-grey bolder'>Days</td>
                </tr>
            ";

            while($row = $result->fetch_assoc()){
                $output .="<tr>
                    <td class='fs-14 font-grey'>{$row['course']}</td>
                    <td class='fs-14 font-grey'>{$row['days']}</td>
                </tr>";
            }

            $output .= "</table>";
            $conn->close();

            echo $output;
        }else{
            echo "<h2 class='font-grey'>No Record Found</h2>";
        }
    }
?>