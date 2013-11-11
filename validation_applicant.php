<?php
  include "./queries.php";
?>
<?php  include "./class_applicant.php"; ?>

<?php
$applicant = new Applicant(
    $_POST['name'],
    $_POST['address'],
    $_POST['phone'],
    $_POST['switch-pettype'],
    $_POST['petname'],
    $_POST['petcolor'],
    $_POST['switch-breed'],
    $_POST['petage'],
    $_POST['rabies'],
    $_POST['switch-gender'],
    $_POST['switch-nf'],
    $_POST['catsonly']
  );

#  showDB();
insertApplicant($applicant);
?>
  <script type="text/javascript">
    alert("Thank you for applicant");
     window.location="http://127.0.0.2/";
  </script>
?>

