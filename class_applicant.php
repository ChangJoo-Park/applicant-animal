<?php
/**
*
*/
class Applicant
{

  var $ownername;
  var $address;
  var $phone;
  var $pettype;
  var $petname;
  var $petcolor;
  var $breed;
  var $petage;
  var $rabies;
  var $gender;
  var $norf;
  var $leukemia;

  function __construct($name, $address, $phone, $pettype, $petname, $petcolor,
                       $breed, $petage, $rabies, $gender, $nf, $catsonly)
  {
    # code...
    $this->ownername     = $name;
    $this->address  = $address;
    $this->phone    = $phone;
    $this->pettype  = $pettype;
    $this->petname  = $petname;
    $this->petcolor  = $petcolor;
    $this->breed    = $breed;
    $this->petage   = $petage;
    $this->rabies   = $rabies;
    $this->gender   = $gender;
    $this->norf       = $nf;
    $this->leukemia = $catsonly;
  }
}
