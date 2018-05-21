<?php

class Migrate extends CI_Controller {

  public function index($version = null) {
    $this->load->library('migration');

    if ($version) {
      if ($this->migration->version($version)) {
        echo 'Migration ' . $version . ' executed successfully.';
      } else {
        show_error($this->migration->error_string());
      }
    } else {
      if ($this->migration->current()) {
        echo 'Migration executed successfully.';
      } else {
        show_error($this->migration->error_string());
      }
    }
  }

}
