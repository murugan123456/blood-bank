<?php 
$con = new mysqli('localhost','root','','blooddonor');
if(!$con){
    echo $con->connect_errno;
    die();
}
else {
    echo " <html> <style> 
     body{
        text-transform:uppercase;
        height:100vh;
        display: grid;
        place-items:center;
     }
     table{
        text-align:center;
        color:#1245f5;
        border-collapse : collapse;
        border:2px solid crimson;
        overflow:scrole-y;
     }
     caption{
        color:deeppink;
        margin:10px;
     }
     table th{
        color:green;
        padding:10px;
        border : 1px solid crimson
     }
     table tr td{
        padding:5px;
        text-transform : uppercase;
        border : 1px solid crimson
     }
     h2{
        color:red;
        text-align:center;
     } </style> </html>";
    $blood = $_REQUEST['bloodname'];
    $city = $_REQUEST['city'];
    $username=$_REQUEST['username'];
    $Upassword=$_REQUEST['pwd'];
    $validate="SELECT * FROM hospitaltable WHERE username='$username' AND Upassword='$Upassword'";
    $verification = mysqli_query($con, $validate);
    if(mysqli_fetch_array($verification)){
    $query ="SELECT * FROM bloodtable WHERE blood='$blood' AND city='$city' ";
    $result=mysqli_query($con, $query);
    if(mysqli_num_rows($result)>0){
    echo "<table><caption>$blood BLOOD DONOR DETAILS in $city</caption> <tr> <th>NAME</th> <th>CITY</th> <th>PHONE NUMBER</th> <th>BLOOD GROUP</th> <th>Date of Birth</th> <th>ALREADY BLOOD DONATED</th> <th>Last Date of BLood Donation</th> </tr>";
   while($row =  mysqli_fetch_array($result)){
    echo "<tr> <td>".$row['name']; 
    echo "</td> <td>".$row['city'];
    echo "</td> <td>".$row['number'];
    echo "</td> <td>".$row['blood'];
    echo "</td> <td>".$row['uDOB'];
    echo "</td> <td>".$row['yesno'];
    echo "</td> <td>".$row['Ldate'];
    "</td> </tr>" ;
   }
   echo "</table>"; 
}
else{
   echo "<h2> $blood donor is not available in $city <br> please check nearby cities</h2>";
}
}
    else {
      echo "<h2> Invalid username or password </h2>";
    }
}
mysqli_close($con);
?>