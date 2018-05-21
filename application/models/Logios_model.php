<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logios_Model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function process_query($query) {
    $error = $this->db->error();
    if (isset($error['message']) && $error['message']) {
      throw new Exception($error['message'], $error['code']);
    }
    return $query->result();
  }

}
