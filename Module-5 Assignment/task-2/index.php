<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            echo  "Name is: " . $this->name."\n" ;
            echo "<br>";
        }
        public function getEmail(){
            echo  "Email is: " . $this->email ;
        }
    
    }
    
    $nameObject= new Person;
    $mailObject= new Person;
    
    $nameObject->setName('Hamza'."\n");
    $nameObject->getName();
    
    $mailObject->setEmail('hamza@gmail.com');
    $mailObject->getEmail();
    ?>

    
</body>
</html>



