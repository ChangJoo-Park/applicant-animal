<?php include "./queries.php" ?>
<?php
$id =  $_GET['id'];
# 체크부분 넣어야함
$result = getApplicant_with_id($id);


#print_r($result);
?>


<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
<?php include "./styles.php"  ?>
</head>
<body>
<?php
  include "./navigation.php"
?>
<?php foreach ($result as $v1 ) { ?>
<div class="row">
  <div class="large-12 columns">
    <fieldset>
      <legend>Applicant</legend>
      <div class="row">
        <div class="large-12 columns">
          <label for=""><strong>Owner Name</strong></label>
          <span><?= $v1[1]; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="large-8 columns">
          <label for=""><strong>Owner Address</strong></label>
          <span><?= $v1[2]; ?></span>
        </div>
        <div class="large-4 columns">
          <label for=""><strong>Phone</strong></label>
          <span><?= $v1[3]; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="large-4 columns">
          <label for=""><strong>Pet Type</strong></label>
          <span><?= $v1[4]; ?></span>
        </div>
        <div class="large-4 columns">
          <label for=""><strong>Pet Name</strong></label>
          <span><?= $v1[5]; ?></span>
        </div>
        <div class="large-4 columns">
          <label for=""><strong>Color</strong></label>
          <span><?= $v1[6]; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="large-6 columns">
          <label for=""><strong>Breed</strong></label>
          <span><?= $v1[7]; ?></span>
        </div>
        <div class="large-6 columns">
          <label for=""><strong>Pet Age</strong></label>
          <span><?= $v1[8]; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label for=""><strong>Date of last rabies vaccination</strong></label>
          <span><?= $v1[9]; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="large-6 columns">
          <label for=""><strong>Gender</strong></label>
          <span><?= $v1[10]; ?></span>
        </div>
        <div class="large-6 columns">
          <label for=""><strong>Neutered or Fertile</strong></label>
          <span><?= $v1[11]; ?></span>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <label for=""><strong>Cats Only - date of last feline leukemia vaccination</strong></label>
          <span><?= $v1[12]; ?></span>
        </div>
      </div>
    </fieldset>


    <form id="applicant-form" method="POST" action="acceptance_office.php">
      <fieldset>
        <legend>For Office use Only</legend>
        <div class="row">
          <div class="large-6 columns">
            <label for="">License Number</label>
            <input type="text" id="licensenumber" name="licensenumber" readonly  value="<?= $v1[0];?>">
          </div>
          <div class="large-6 columns">
            <label for="">Country</label>
            <input type="text" id="country" name="country">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns">
            <label for="">Issue Date</label>
            <input type="text" id="issuedate" name="issuedate">
          </div>
          <div class="large-6 columns">
            <label for="">Expiration Date</label>
            <input type="text" id="expirationdate" name="expirationdate">
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns">
            <label for="">Fee Paid</label>
            <input type="number" id="fee" name="fee" value="5000" readonly >
          </div>
          <div class="large-3 columns">
            <label>Senior</label>
            <div class="switch">
              <input id="senior" name="switch-senior" type="radio" checked value="no" >
              <label for="senior" onclick="">No</label>
              <input id="senior1" name="switch-senior" type="radio" value="yes">
              <label for="senior1" onclick="">Yes</label>
              <span></span>
            </div>
          </div>
          <div class="large-3 columns">
            <label>Guide Dog</label>
            <div class="switch">
              <input id="guidedog" name="switch-guidedog" type="radio" checked value="no" >
              <label for="guidedog" onclick="">No</label>
              <input id="guidedog1" name="switch-guidedog" type="radio" value="yes">
              <label for="guidedog1" onclick="">Yes</label>
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
          <input type="submit" class="small button expand"/>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php  } ?>
  <script src="js/vendor/custom.modernizr.js"></script>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation-datepicker.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.abide.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script>
  // implementation of disabled form fields
    console.log('test');
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);


    var checkin = $('#issuedate').fdatepicker({
        onRender: function (date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        $('#expirationdate')[0].focus();
    }).data('datepicker');

    var checkout = $('#expirationdate').fdatepicker({
        onRender: function (date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        checkout.hide();
    }).data('datepicker');
  </script>
  <script>
    // 할인은 1000원 씩 해주는걸로
    $("#senior, #guidedog").click(function(){
      $.changePrice(true);
    });
    $("#senior1, #guidedog1").click(function(){
      $.changePrice(false);
    });
   $.extend({
    changePrice : function(state) {
      fee = parseInt($("#fee").val());
      if(state){
        fee = fee + 1000;
      }else{
        fee = fee - 1000;
      }
      $("#fee").val(fee);
    }
   });


  </script>
</body>
</html>
