<html>
  <head>
  <?php include "./styles.php"  ?>
  </head>
  <body class="antialised">
  <?php
    include "./navigation.php"
  ?>
  <div class="row">
  <div class="large-12 columns">
  <form id="applicant-form" method="POST" action="validation_applicant.php" data-abide>
    <fieldset>
      <legend>Applicant - Please complete the following information</legend>
        <div class="row">
          <div class="large-12 columns name-field">
            <label>Owner Name</label>
            <input type="text" id="name" name="name" required/>
            <small class="error">Name is required and must be string.</small>
          </div>
        </div>
      <div class="row">
        <div class="large-8 columns address-field">
          <label>Onwer Address</label>
          <input type="text" id="address" name="address" required>
          <small class="error">Address is required. </small>
        </div>
        <div class="large-4 columns input-wrapper">
          <label>Phone</label>
          <input type="text" id="phone"  name="phone" pattern="integer" required>
          <small class="error">Phone Number is required and must be numeric.</small>
        </div>
      </div>
      <div class="row">
        <div class="large-4 columns">
          <label>Pet Type</label>
          <div class="switch">
            <input id="pettype" name="switch-pettype" type="radio" checked value="dog" >
            <label for="pettype" onclick="">Dog</label>
            <input id="pettype1" name="switch-pettype" type="radio" value="cat">
            <label for="pettype1" onclick="">Cat</label>
            <span></span>
          </div>
        </div>

        <div class="large-4 columns">
          <label>Pet Name</label>
          <input type="text" id="petname" name="petname" required>
          <small class="error">Pet name must be required</small>
        </div>
        <div class="large-4 columns">
          <label>Color</label>
          <input type="text" id="petcolor" name="petcolor" required>
          <small class="error">Pet's color is required and must be a string.</small>
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <label>Breed</label>
          <div class="switch">
            <input id="breed" name="switch-breed" type="radio" checked value="no">
            <label for="breed" onclick="">No</label>
            <input id="breed1" name="switch-breed" type="radio" value="yes">
            <label for="breed1" onclick="">Yes</label>
            <span></span>
          </div>

        </div>
        <div class="large-6 columns">
          <label>Pet Age</label>
          <input type="number" min="0" step="1" value="0" pattern="\d+"/ id="petage" name="petage" required>
          <small class="error">Pet's age must be required </small>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <label>Date of last rabies vaccination</label>
          <input type="text" id="rabies" name="rabies" required>
          <small class="error">Date of rabies vaccination must be required </small>
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <label>Gender</label>
          <div class="switch">
            <input id="gender" name="switch-gender" type="radio" checked value="male">
            <label for="gender" onclick="">Male</label>
            <input id="gender1" name="switch-gender" type="radio" value="female">
            <label for="gender1" onclick="">Female</label>
            <span></span>
          </div>

        </div>
        <div class="large-6 columns">
          <label>Neutered or Fertile</label>
          <div class="switch">
            <input id="neutered" name="switch-nf" type="radio" checked value="neutered">
            <label for="neutered" onclick="">Neutered</label>
            <input id="fertile" name="switch-nf" type="radio" value="fertile">
            <label for="fertile" onclick="">Fertile</label>
            <span></span>
          </div>
        </div>
      </div>

      <div class="row catsonly" style="display:none;">
        <div class="large-12 columns">
          <label>Cats Only - date of last feline leukemia vaccination</label>
          <input type="text" id="catsonly"  name="catsonly"value="None" required>
          <small class="error">Date of feline leukemia vaccination must be required </small>
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
    $(function(){
      // Select Dog to Cat
      $("#pettype").click(function(){
        $(".catsonly  input").val('None');
        $(".catsonly").slideUp('fast');
      });
      // Select Cat to Dog
      $("#pettype1").click(function(){
        $(".catsonly  input").val('');
        $(".catsonly").slideDown('fast');
      });
    });
    // Add Date Picker for rabies, catsonly vaccine
    $(function(){
      $("#rabies, #catsonly").fdatepicker();
    });
  </script>
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



  -->

  <script>
    $(document).foundation();
  </script>

  </body>
</html>
