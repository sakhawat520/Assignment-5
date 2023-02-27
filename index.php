<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Assignment Number 5</h1>
  <p>Made By Sakhawat hossen </p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <h3>Task 1 HTML Basics</h3>
        <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
                <label for="exampleInputPassword1">Name: </label>
                <input type="name" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-sm-4">
      <h3>Task 2: Basic OOP in PHP</h3>
        <?php
            class Person {
            private $name;
            private $email;
        
            public function setName($name) {
                $this->name = $name;
            }
        
            public function setEmail($email) {
                $this->email = $email;
            }
        
            public function getName() {
                return $this->name;
            }
        
            public function getEmail() {
                return $this->email;
            }
        }
        $person = new Person();
        $person->setName("Sakhawat Hossen");
        $person->setEmail("Sakhawathossen@example.com");

     ?>
     </br>
     <form>
            <div class="form-group">
                <label>Name: </label>
                <?php echo $person->getName() ?>
            </div>
            <div class="form-group">
                <label>Email Address: </label>
                <?php echo $person->getEmail() ?>
            </div>
        </form>
    </div>
    <div class="col-sm-4">
      <h3>Superglobal Variables in PHP</h3>        
      <?php

   

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            $name = $_POST['name'];
            $email = $_POST['email'];

            $person = new Person();

           
            $person->setName($name);
            $person->setEmail($email);
        }

        
        ?>
        </br>
        <div class="form-group">
                <label>Name: </label>
                <?php echo $person->getName(); ?>
            </div>
            <div class="form-group">
                <label>Email Address: </label>
                <?php echo $person->getEmail();?>
            </div>
    </div>
  </div>
</div>

</body>
</html>
