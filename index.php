<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
<?php include "./styles.php"  ?>
</head>
<body>

  <?php
    include "./navigation.php"
  ?>
  <?php
    include "./queries.php"
  ?>
	<div class="row">
		<div class="large-12 columns">
			<h2>Animal Registration Service</h2>
			<hr />
      <?php  $resultYet = getApplicantYet(); ?>
      <h3><strong><?= count($resultYet);?> 건</strong>의 처리중인 신청서 </h3>

      <table>
        <tr>
          <th>Owner Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Type</th>
          <th>Name</th>
          <th>Color</th>
          <th>Breed</th>
          <th>Age</th>
          <th>Rabies Vaccine</th>
          <th>Gender</th>
          <th>Netured or Fertiel</th>
          <th>Leukemia</th>
          <th>Check</th>
        </tr>
<?php foreach ($resultYet as $v1 ) { ?>
        <tr>
        <td><?= $v1[1]; // 이름 ?></td>
        <td><?= $v1[2]; // 주소?></td>
        <td><?= $v1[3]; //전화번호?></td>
        <td><?= $v1[4]; //종류?></td>
        <td><?= $v1[5]; // 동물 이름?></td>
        <td><?= $v1[6]; // 색 ?></td>
        <td><?= $v1[7]; // 출산여부?></td>
        <td><?= $v1[8]; // 나이?></td>
        <td><?= $v1[9]; // rabies?></td>
        <td><?= $v1[10];// 성별 ?></td>
        <td><?= $v1[11];// 중성화 ?></td>
        <td><?= $v1[12];// leukemia ?></td>
        <td><a href="accept.php?id=<?= $v1[0]?>" class="small button">Check</a></td>
        </tr>
<?php  } ?>
      </table>
      <hr />

<!-- Completed Applicant -->
<?php $resultCompelete = getApplicantComplete(); ?>
      <h3><strong><?= count($resultCompelete);?> 건의 </strong>처리 완료된 신청서</h3>
      <hr />
		</div>
	</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>

  <script src="js/foundation.min.js"></script>
  <!--

  <script src="js/foundation/foundation.js"></script>

  <script src="js/foundation/foundation.alerts.js"></script>

  <script src="js/foundation/foundation.clearing.js"></script>

  <script src="js/foundation/foundation.cookie.js"></script>

  <script src="js/foundation/foundation.dropdown.js"></script>

  <script src="js/foundation/foundation.forms.js"></script>

  <script src="js/foundation/foundation.joyride.js"></script>

  <script src="js/foundation/foundation.magellan.js"></script>

  <script src="js/foundation/foundation.orbit.js"></script>

  <script src="js/foundation/foundation.reveal.js"></script>

  <script src="js/foundation/foundation.section.js"></script>

  <script src="js/foundation/foundation.tooltips.js"></script>

  <script src="js/foundation/foundation.topbar.js"></script>

  <script src="js/foundation/foundation.interchange.js"></script>

  <script src="js/foundation/foundation.placeholder.js"></script>

  <script src="js/foundation/foundation.abide.js"></script>

  -->

  <script>
    $(document).foundation();
  </script>
</body>
</html>
