<?php
/**
*
*/
class Office
{

  var $licensenumber;
  var $country;
  var $issue;
  var $expiration;
  var $feepaid;
  var $senior;
  var $guide;

  function __construct($licensenumber, $country, $issue, $expiration,
                       $feepaid, $senior, $guide)
  {
    # code...
    $this->licensenumber  = $licensenumber;
    $this->country        = $country;
    $this->issue          = $issue;
    $this->expiration     = $expiration;
    $this->feepaid        = $feepaid;
    $this->senior         = $senior;
    $this->guide          = $guide;
  }
}
