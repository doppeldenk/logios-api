<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Products extends REST_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('product_model');
  }

  public function index_get() {
    try {
      $products = $this->product_model->get_products();
      $this->response($products, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    } catch (Exception $ex) {
      $this->response([
        'message' => $ex->getMessage(),
        ], REST_Controller::HTTP_OK);
    }
  }

}
