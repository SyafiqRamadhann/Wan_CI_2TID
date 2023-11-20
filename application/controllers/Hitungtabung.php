<?php
defined ('BASEPATH') or exit ('No direct script access allowed');
class Hitungtabung extends CI_Controller
{
    public function __construct()
        {
            parent :: __construct();
            $this->load->library('tabung');
        }
        function index()
        {
          $this->tabung->volume('10','5');
          echo "<br>";
          $this->tabung->luas('5','7');
          echo "<br>";
          $this->tabung->lselimut('9','5');
          
          
        }
    }

?>