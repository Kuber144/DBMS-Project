<?php   
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
        $conn=new mysqli("localhost","root","12345","feedback_management");
        require('connection.php');
            $sql = "select * from instructor;";  
            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "Name: " . $row["name"]. " - Email " . $row["email"]. "<br>";
                }
            }
            else
            echo "0 results";
            $conn->close();
                ?>  
                </body>
                </html>