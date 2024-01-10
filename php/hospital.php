<?php
$con = new mysqli('localhost','root','','blooddonor');
if($con->connect_error){
    echo $con->connect_errno;
    die();
}
else {
        $Hname = $_REQUEST['Hname'];
        $RegNumber = $_REQUEST['RegNumber'];
        $Haddress = $_REQUEST['address'];
        $DoctorName = $_REQUEST['DoctorName'];
        $Email = $_REQUEST['email']; 
        $phone = $_REQUEST['contact'];
        $username = $_REQUEST['username'];
        $Upassword = $_REQUEST['Upassword'];
        $query = "SELECT * FROM `hospitaltable` WHERE RegNumber = '$RegNumber' " ;
        $result=mysqli_query($con, $query); 
            if(mysqli_num_rows($result) > 0) {
                echo "Hospital Already Registered";
            } 
            else {
                $sql = "INSERT INTO hospitaltable (Hname,RegNumber,Haddress,DoctorName,email,contact,username,Upassword) VALUES('$Hname','$RegNumber','$Haddress','$DoctorName','$Email',$phone,'$username','$Upassword')";
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
                    <h2>SUCCESSFULLY HOSPITAL REGISTERED</h2>
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