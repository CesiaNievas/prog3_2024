<?php
    include ("model/student.class.php");
  
    $student= new Student(); //creamos el objeto $Student de tipo Student

    

    $operation=$_REQUEST["operation"];

            
            $student->addStudent();

    if ($operation=="add"){
            $student->setDNI($_REQUEST["dni"]);
            $student->setName($_REQUEST["Name"]);
            $student->setSurname($_REQUEST["dni"]);
            $student->setDireccion($_REQUEST["dni"]);
            $student->setEmail($_REQUEST["dni"]);
            $student->setPassword($_REQUEST["dni"]);
            $student->setSchool($_REQUEST["dni"]);
            $student->setPhone($_REQUEST["dni"]);
            $student->setBirthdate($_REQUEST["dni"]);





     } else if($operation=="update") {


     }else if($operation=="delete"){

        
     }


?>
