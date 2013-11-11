<?php
  include "./queries.php";
  include "./class_office.php"
?>
<?php
$office = new office(
    $_POST['licensenumber'],
    $_POST['country'],
    $_POST['issuedate'],
    $_POST['expirationdate'],
    $_POST['fee'],
    $_POST['switch-senior'],
    $_POST['switch-guidedog']
);
/*
echo $_POST['licensenumber'];
echo $_POST['country'];
echo $_POST['issuedate'];
echo $_POST['expirationdate'];
echo $_POST['fee'];
echo $_POST['switch-senior'];
echo $_POST['switch-guidedog'];
*/
#  showDB();
acceptApplicant($office);
?>
  <script type="text/javascript">
    alert("Accept Complete");
    window.location="http://127.0.0.2/";
  </script>

