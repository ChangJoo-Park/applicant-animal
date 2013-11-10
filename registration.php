<html>
  <head>
<?php
  include "./metadata.php";
  include "./styles.php";
?>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  </head>
  <body>
<form id="applicant-form" method="post" action"validation_applicant.php">
  <fieldset>
    <legend>Applicant - Please complete the following information</legend>

    <div class="row">
      <div class="large-12 columns">
        <label>Owner Name</label>
        <input type="text" id="name">
      </div>
    </div>

    <div class="row">
      <div class="large-8 columns ">
        <label>Onwer Address</label>
        <input type="text" id="address">
      </div>
      <div class="large-4 columns">
        <label>Phone</label>
        <input type="text" id="phone" placeholder="Input only numbers without - (dash)">
      </div>
    </div>

    <div class="row">
      <div class="large-4 columns">
        <label>Pet Type</label>
        <div class="switch">
          <input id="pettype" name="switch-pettype" type="radio" checked>
          <label for="pettype" onclick="">Dog</label>
          <input id="pettype1" name="switch-pettype" type="radio">
          <label for="pettype1" onclick="">Cat</label>
          <span></span>
        </div>
      </div>
      <div class="large-4 columns">
        <label>Pet Name</label>
        <input type="text" id="petname">
      </div>
      <div class="large-4 columns">
        <label>Color</label>
        <input type="text" id="petcolor">
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label>Breed</label>
        <div class="switch">
          <input id="breed" name="switch-breed" type="radio" checked>
          <label for="breed" onclick="">No</label>
          <input id="breed1" name="switch-breed" type="radio">
          <label for="breed1" onclick="">Yes</label>
          <span></span>
        </div>

      </div>
      <div class="large-6 columns">
        <label>Pet Age</label>
        <input type="number" min="0" step="1" value="0" pattern="\d+"/ id="petage">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <label>Date of last rabies vaccination</label>
        <input type="text"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label>Gender</label>
        <div class="switch">
          <input id="gender" name="switch-gender" type="radio" checked>
          <label for="gender" onclick="">Male</label>
          <input id="gender1" name="switch-gender" type="radio">
          <label for="gender1" onclick="">Female</label>
          <span></span>
        </div>

      </div>
      <div class="large-6 columns">
        <label>Neutered or Fertile</label>
        <div class="switch">
          <input id="neutered" name="switch-nf" type="radio" checked>
          <label for="neutered" onclick="">Neutered</label>
          <input id="fertile" name="switch-nf" type="radio">
          <label for="fertile" onclick="">Fertile</label>
          <span></span>
        </div>
      </div>
    </div>

    <div class="row catsonly" style="display:none;">
      <div class="large-12 columns">
        <label>Cats Only - date of last feline leukemia vaccination</label>
        <input type="text">
      </div>
    </div>
  <div class="row">
    <div class="large-12 columns">
      <input type="button" class="small button expand">
    </div>
  </div>
  </fieldset>
</form>




<script>
  $(function(){
    // Select Dog to Cat
    $("#pettype").click(function(){
      console.log("dog");
      $(".catsonly  input").val('');
      $(".catsonly").slideUp();
    });
    // Select Cat to Dog
    $("#pettype1").click(function(){
      console.log("cat");
      $(".catsonly").slideDown();
    });
  });

  // Click Button call fnCheck
  $('#applicant-form input[type=button]').click(function(){
    console.log('start submit');
    $.fnCheck();

  });

  // All input form check
  $.fnCheck = function(){
    console.log('start check');
    // Input Text should not blank
    $("#applicant-form input[type='text']").map(function(){
      console.log('inside check');
      if( $(this).val().length == 0 ){
        $.fnAddError($(this));
      }else{
        $.fnRemoveError($(this));
      }
    });

    // Input phone, Pet's Age sholud only numbers
    $("#phone, #petage").map(function(){
      if(!$.isNumeric($(this).val())){
        $.fnAddError($(this));
      }else{
       $.fnRemoveError($(this));
      }
    });

  }


  // Add error class for not validated input
  $.fnAddError = function(input){
    input.addClass('error');
  }
  $.fnRemoveError = function(input){
    input.removeClass('error');
  }
</script>


<?php
  include "./footer.php";
  include "./scripts.php";
?>
  </body>
</html>
