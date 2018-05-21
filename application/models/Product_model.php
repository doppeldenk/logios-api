<?php

class Product_model extends CI_Model {

  private $ci;
  private $table = 'products';
  private $select_fields = '*';

  function __construct() {
    parent::__construct();
    $this->ci = & get_instance();
    $this->ci->load->model('logios_model');
  }

  /**
   * Get products
   * @param array $filters
   * @return array
   */
  public function get_products($filters = []) {
    $this->db->select($this->select_fields);
    $this->db->from($this->table);
    foreach ($filters as $attribute => $value) {
      $this->db->where($attribute, $value);
    }

    $query = $this->db->get();
    $output = $this->logios_model->process_query($query);
    return $output;
  }

}
