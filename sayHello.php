<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="sayHellostyle.css">
    <script src="sayHelloscript.js"></script>
</head>

<body>
    <form action="sayHelloAction.php" method="POST">
        <div class="container">
            <h1 class="title">Say Hello!</h1>
            <div class="row">
                <label class="Label">Your Name</label><br>
                <input class="inputBox" type="text" placeholder="Enter your name" name="name" onclick="msg(this)" required>
            </div>
            <div class="row">
                <label class="Label">Email</label><br>
                <input class="inputBox" type="email" placeholder="Enter your email address" name="email" onclick="msg(this)" required>
            </div>
            <div class="row">
                <label class="Label">Needed Services</label><br>
                <select name="service" class="inputBox" onclick="msg(this)" required>
                <option name="service" value=""><strong>Choose Services</strong></option>
                <option name="service" value="E-cash">E-cash</option>
                <option name="service" value="E-Chaneling">E-Chaneling</option>
                <option name="service" value="Train Booking">Train Booking</option>
                <option name="service" value="Loan">Loan</option>
            </select>
            </div>

            <div class="row">
                <label class="Label">Budget</label><br>
                <select name="budget" class="inputBox" onclick="msg(this)" required>
                <option value=""><strong>Select Budget</strong></option>
                <option value="E-cash">E-cash</option>
                <option value="E-Chaneling">E-Chaneling</option>
                <option value="Train Booking">Train Booking</option>
                <option value="Loan">Loan</option>

            </select>

            </div>
            <div class="row">
                <label class="Label">Message</label><br>
                <textarea class="inputBox" placeholder="Your mesage here..." name="messege" onclick="msg(this)" required></textarea>
            </div>
            <div class="row">
                <input class="submitButton" type="submit" name="submit" value="Submit">
            </div>
        </div>
    </form>
    
    <div class="tablecontainer">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Budget</th>
                <th>Messege</th>
            </tr>
     <?php
   $server="localhost";
   $username="root";
   $password="";
   $database="SAYHELLODB";
   $conn=new mysqli($server,$username,$password,$database);
   if($conn->connect_error){
       die("Connection Error");
   }
    $sql="SELECT * FROM login";
       
      
      $result = ($conn->query($sql));
      if($result){
          while($row=$result->fetch_row()){
            $name=$row[0];
             $email=$row[1];
          $service=$row[2];
          $budget=$row[3];
          $message=$row[4];
          echo  "<tr><td>".$name."</td><td>".$email."</td><td>".$service."</td><td>".$budget."</td><td>".$message."</td></tr>";
           
      }
     echo "</table>";
    }
    else{
        echo "0 result";
    }
      ?>

</table>
    </div>




</body>

</html>