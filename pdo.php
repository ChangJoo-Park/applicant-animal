<?php
function createDB(){
  # New DB Create
  $user = 'root';
  $pass = '1q2w3e';
  $dbh = new PDO('mysql:host=localhost;dbname=animal',$user,$pass);

  try{
    $dbh-> query('CREATE TABLE applicant(
        pid int(10) not null auto_increment primary key,
        ownername     varchar(50),
        address       varchar(50),
        phone         varchar(50),
        pettype       varchar(50),
        petname       varchar(50),
        petcolor      varchar(50),
        breed         varchar(50),
        petage        varchar(50),
        rabies        varchar(50),
        gender        varchar(50),
        norf          varchar(50),
        leukemia      varchar(50),
        licensenumber varchar(50),
        country       varchar(50),
        issue         varchar(50),
        expiration    varchar(50),
        feepaid       varchar(50),
        senior        varchar(50),
        guide         varchar(50)
      )');
    $dbh = null;
    print "Success";

  }catch(PDOException $e){
    print "Error!: ". $e->getMessage()."<br/>";
    die();
  }
}
//createDB();
?>


