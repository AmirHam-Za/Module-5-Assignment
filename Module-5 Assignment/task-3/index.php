<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<style>
    form{
        
        text-align: center;
        margin-top: 150px;
        
    }
</style>



<div class="form">
    <form action="" method="POST" >
        <h2 style="color:green; font-family:cursive">Please Input Your Name and Email:</h2>
        <input style="padding:10px" type="text" name="name" placeholder="Type User Name"><br><br>
        
        <input style="padding:10px" type="email" name="email" placeholder="Type User Email"><br><br>
        
    
        <input type="submit" value ="Submit Here" style="color:green; background:gold; border:none; padding:10px; border-radius:5px;">
            
    
    </form>

    <?php
        //Retrieve name from query string and store to a local variable
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "<h3 style='text-align:center;color:green;'> Name Is: $name</h3>";
        echo "<h3 style='text-align:center;color:green;'> Email Is: $email </h3>";
    ?>





    <?php
        class Person{
        public $name;
        public $email;

        //set name
        public function setName($name){
            $this->name= $name;
        }
        public function setEmail($email){
            $this->email= $email;
        }

        //get name
        public function getName(){
            
            echo "<p style=color:purple;'>Name is: $this->name </p> ";

            // echo "<br>";
        }
        public function getEmail(){
            echo "<p style=color:purple;'>Email is:$this->email </p> ";
            echo "<p style=color:red;'>This Come from getName() and getEmail() methods</p> ";

        }

        }

        $nameObject= new Person;
        $mailObject= new Person;

        $nameObject->setName($name."\n");
        $nameObject->getName();

        $mailObject->setEmail($email."\n");
        $mailObject->getEmail();

    ?>
<div>



   




    

    
</body>
</html>

