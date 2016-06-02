<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->load->model('Country');

  }
  public function getFormData(){
    $formData = [];
    $formData['budgets'] = $this->getBudgets();
    $formData['countries'] = $this->Country->allCountries();

    return $formData;
    // var_dump($budgets);

  }
  public function getBudgets(){
    $query = "Select * from budgets order by low asc";

    $data = $this->db->query($query)->result_array();

    if (null != $data )
    {
      return $data;
    }
    else
    {
      return false;
    }

  }

}
