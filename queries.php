<?php
# Get All row

function showDB(){

  try {
    $user = 'root';
    $pass = '1q2w3e';
    $dbh = new PDO('mysql:host=localhost;dbname=animal',$user,$pass);
    foreach($dbh->query('SELECT * from applicant') as $row) {
        print_r($row);
    }
    $dbh = null;
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
}

?>


<?php
function insertApplicant($obj){

  try {
    $user = 'root';
    $pass = '1q2w3e';
    $dbh = new PDO('mysql:host=localhost;dbname=animal;charset=utf8',$user,$pass);
    $dbh -> exec("SET CHARACTER SET utf-8");
    $sql =$dbh->prepare("INSERT INTO applicant (ownername,address,phone,pettype,petname,petcolor,breed,petage,rabies,gender,norf,leukemia) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");

    $sql->execute(array($obj->ownername,$obj->address,$obj->phone,$obj->pettype,$obj->petname,$obj->petcolor,$obj->breed,$obj->petage,$obj->rabies,$obj->gender,$obj->norf,$obj->leukemia));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $dbh = null;
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
}

?>

<?php
function acceptApplicant($obj){

  try {
    $user = 'root';
    $pass = '1q2w3e';
    $dbh = new PDO('mysql:host=localhost;dbname=animal;charset=utf8',$user,$pass);
    $dbh -> exec("SET CHARACTER SET utf-8");

    $id = $obj->licensenumber;

    $sql =$dbh->prepare("UPDATE applicant SET licensenumber = :licensenumber, country = :country, issue = :issue, expiration = :expiration, feepaid = :feepaid, senior = :senior, guide = :guide WHERE pid = $id");
    $sql->bindParam(':licensenumber', $obj->licensenumber);
    $sql->bindParam(':country'      , $obj->country      );
    $sql->bindParam(':issue'        , $obj->issue        );
    $sql->bindParam(':expiration'   , $obj->expiration   );
    $sql->bindParam(':feepaid'      , $obj->feepaid      );
    $sql->bindParam(':senior'       , $obj->senior       );
    $sql->bindParam(':guide'        , $obj->guide        );
    $sql->execute();
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $dbh = null;
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
}

?>
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

<?php
# Get Applicant confirm yet
  function getApplicantYet(){
    try {
      $user = 'root';
      $pass = '1q2w3e';
      $dbh = new PDO('mysql:host=localhost;dbname=animal;charset=utf8',$user,$pass);
      $dbh -> exec("SET CHARACTER SET utf-8");
      $sql = $dbh->prepare("SELECT * FROM applicant where licensenumber IS NULL");
      $sql->execute();
      #echo 'Count row : '.$sql->rowCount().'<br/>';
      $result = $sql->fetchAll();

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      $dbh = null;

      return $result;

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
  }



?>
<?php
# Get Applicant confirm yet
  function getApplicantComplete(){
    try {
      $user = 'root';
      $pass = '1q2w3e';
      $dbh = new PDO('mysql:host=localhost;dbname=animal;charset=utf8',$user,$pass);
      $dbh -> exec("SET CHARACTER SET utf-8");
      $sql = $dbh->prepare("SELECT * FROM applicant where licensenumber IS NOT NULL");
      $sql->execute();
      #echo 'Count row : '.$sql->rowCount().'<br/>';
      $result = $sql->fetchAll();

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

      $dbh = null;
      return $result;

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
  }
?>

<?php
  function getApplicant_with_id($id){
    try {
      $user = 'root';
      $pass = '1q2w3e';
      $dbh = new PDO('mysql:host=localhost;dbname=animal;charset=utf8',$user,$pass);
      $dbh -> exec("SET CHARACTER SET utf-8");
      $sql = $dbh->prepare("SELECT * FROM applicant where pid = $id");
      $sql->execute();
      #echo 'Count row : '.$sql->rowCount().'<br/>';
      $result = $sql->fetchAll();

      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

      $dbh = null;
      return $result;

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
  }

?>
