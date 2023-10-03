 
<!DOCTYPE html>
<html>
 
<head>
    <title>Personal Record</title>
</head>
 
<body>
        <?php

        //server name => localhost
        // username => root
        // password => empty
        // database name => studentpersonalinformation
        $conn = mysqli_connect("localhost", "root", "", "studentpersonalrecord");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $familyname=  $_REQUEST['familyname'];
        $firstname = $_REQUEST['firstname'];
        $middleinitial =  $_REQUEST['middleinitial'];
        $course = $_REQUEST['course'];
        $nickname= $_REQUEST['nickname'];
        $age = $_REQUEST['age'];
        $dateofbirth = $_REQUEST['dateofbirth'];
        $gender= $_REQUEST['gender'];
        $religion = $_REQUEST['religion'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $elementary = $_REQUEST['elementary'];
        $secondary = $_REQUEST['secondary'];
        $nameoffather = $_REQUEST['nameoffather'];
        $nameofmother = $_REQUEST['nameofmother'];
        $occupation = $_REQUEST['occupation'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO studentpersonalinformation VALUES ('$familyname',
            '$firstname','$middleinitial','$course','$nickname ','$age ','$dateofbirth ','$gender ','$religion ','$address ','$email ','$elementary ','$secondary ','$nameoffather ','$nameofmother ','$occupation')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Student Personal Record saved successfully</h3>";
 
            echo nl2br("\n$familyname\n $firstname\n "
                . "$middleinitial\n $course\n $nickname \n $age \n $dateofbirth \n $gender \n $religion \n $address \n $email \n $elementary \n $secondary \n $nameoffather \n $nameofmother \n $occupation");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
  
</body>
 
</html>