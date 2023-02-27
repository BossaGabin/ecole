<?php
 class Model
 {
     private $host='localhost';//Nom du serveur
     private $name='db_blog';
     private $user='root';
     private $pass='';
     private $bd;

     function __construct($host=null,$name=null,$user=null,$pass=null)
    {

        if($host !=null)
        {
            $this->host=$host;
            $this->name=$name;
            $this->user=$user;
            $this->pass=$pass;
        }
        try {
            //code...
            $this->bd=new PDO('mysql:host='.$this->host.';dbname='.$this->name,$this->user,$this->pass);
        } catch (PDOException $e) {
            //throw $th;
            die('Impossible de se connecté a la base: '.$e->getMessage());
        }
     }

     public function select($sql, $data=array()){

        $req = $this->bd->prepare($sql);
        $req->execute($data);
        return $req;
     }

       public function insert($sql, $data=array()){

        $req = $this->bd->prepare($sql);
        $req->execute($data);
       }

       public function affiche($sql, $data=array()){

        $req = $this->bd->query($sql);
        $data = $req->fetchAll();
        return $data;
       }

       public function modifie($sql, $data=array()){
        $req = $this->bd->prepare($sql);
        $req->execute();

       }
       public function supprime($sql, $data=array()) {

        $req = $this->bd->prepare($sql);
        $req->execute();
       }
 }
 $BD = new Model();
?>