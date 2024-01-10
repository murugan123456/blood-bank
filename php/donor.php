<?php
$con = new mysqli('localhost','root','','blooddonor');
if($con->connect_error){
    echo $con->connect_errno;
    die();
}
else {
        $name = $_REQUEST['name'];
        $city = $_REQUEST['city'];
        $number = $_REQUEST['number'];
        $blood = $_REQUEST['blood'];
        $date = $_REQUEST['date'];
        $yesno = $_REQUEST['yesno'];
        $Ldate = $_REQUEST['Ldate'];
        $query = "SELECT * FROM bloodtable WHERE name = '$name' and city='$city' and number =$number and blood = '$blood' and yesno = '$yesno' and uDOB = $date and Ldate='$Ldate' ";
        $result=mysqli_query($con, $query); 
            if(mysqli_num_rows($result) > 0) {
                echo "data already exist";
            } 
            else {
                $sql = "INSERT INTO bloodtable(name,city,number,blood,uDOB,yesno,Ldate) VALUES('$name','$city',$number,'$blood','$date','$yesno','$Ldate')";
                if(mysqli_query($con, $sql))
        {
            echo "<html>
                    <style>
                        h2{
                            text-align:center;
                            font-size:20px;
                            color:red;
                        }
                    </style>
                    <body>
                    <h2>Your Details Stored Successfully</h2> <br>
                    <h2>THANK YOU FOR YOUR INTEREST</h2>
                    </body>
                  </html>";
        }
            else{
                echo "insert data failed";
            }
        }
    }
    mysqli_close($con);
 ?>