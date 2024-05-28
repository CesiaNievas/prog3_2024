<?php
include("datebase.class.php");
class Student {
    private $idStudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $user=null;
    private $password=null;
    private $school=null;
    private $conexion=null;


    public function __construct($dni,$surname,$name,$birthdate,$phone,$address,$email,$password,$school,$conexion){
        $this->dni=$dni;
        $this->surname=$surname;
        $this->name=$name;
        $this->birthdate=$birthdate;
        $this->phone=$phone;
        $this->address=$address;
        $this->email=$email;
        $this->password=$password;
        $this->school=$school;
    }
    //agregar
    public function  addStudent()
    {
        //crear la consulta
        $sql= "INSERT INTO students (dni, surname, name, birthdate, phone, adress, email, password, school) VALUES
        (".$this->dni.",'".$this->surname."', '".$this->name."', '".$this->birthdate."', ".$this->phone.",
        '".$this->adress."','".$this->email."','".$this->password."',".$this->school.",  )";
       
        $this->conexion=new Database();
        $result=$this->conexion->query($sql);
        $this-> conexion->close();
       
        return $result:
    }


    //actualizar
 
    public function  editStudent(){

        $sql= "UPDATE  students SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name."', 
        birthdate='".$this->birthdate."', phone='".$this->phone."',, adress='".$this->adress."', email='".$this->email."', 
        password='".$this->password."', school=".$this->school."' WHERE idStudent=".$this->idStudent;
       
        $this->conexion=new Database();
        $result=$this->conexion->query($sql);
        $this-> conexion->close();
       
        return $result:
       
    }
    //eleminar
   
    public function  deleteStudent()
    {
        $sql= "DELETE FROM students WHERE  idStudent=, $this -> idStudent ; 
        
        $this->conexion=new Database();
        $result=$this->conexion->query($sql);
        $this-> conexion->close();
       
        return $result:
    }


 public function  getStudent()
    {

        $sql= "SELECT * FROM students WHERE  idStudent=, $this -> idStudent ; 
        
        $this->conexion=new Database();
        $result=$this->conexion->query($sql);
        $this-> conexion->close();
            if ($result){ 
                if($row=$result->fech_assoc()){
                    $this->dni=$row("dni");
                    $this->name=$row("name");
                    $this->surname=$row("surname");
                    $this->birthdate=$row("birthdate");
                    $this->phone=$row("phone");
                    $this->adress=$row("adress");
                    $this->email=$row("email");
                    $this->password=$row("password");
                    $this->school=$row("school");
                    return true;
                }


            }
       
        return $false;
    }


    public function  getAllStudents(){
       
    }

  public function getIdStudent(){
        return $this-> IdStudent;
    }


    public function setIdStudent($idStudent){
        $this->IdStudent=$IdStudent;
    }





    //geeter y setter
    public function getName(){
        return $this-> $name;
    }


    public function setName($name){
        $this->name=$name;
    }





    public function getDNI(){
        return $this->dni;
    }


    public function setDNI($dni){
        $this->dni=$dni;
    }






    public function getsurname(){
        return $this-> surname;
    }


    public function setsurname($surname){
        $this->surname=$surname;
    }






    public function getIBirthdate(){
        return $this-> IdStudent;
    }


    public function setBirthdate($birthdate){
        $this->birthdate=$birthdate;
    }






    public function getPhone(){
        return $this-> Phone;
    }


    public function setPhone($Phone){
        $this->Phone=$Phone;
    }
  




    public function getAdress(){
        return $this-> Phone;
    }


    public function setAdress($Adress){
        $this->Adress=$Adress;
    }





    public function getEmail(){
        return $this-> Email;
    }


    public function setEmail($Email){
        $this->Email=$Email;
    }







    public function getPassword(){
        return $this-> Email;
    }


    public function setPassword($Password){
        $this->Password=$Password;
    }






    public function getSchool(){
        return $this-> Email;
    }


    public function setSchool($School){
        $this->School=$School;
    }




}
?>
