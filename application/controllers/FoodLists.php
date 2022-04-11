<!-- Without Ajax -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class FoodLists extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model("FoodList");
  }
  public function index()
  {
    //  $result["quotes"] = $this->Quote->fetch_all();
    //  echo "<pre>";
    //  var_dump($result["quotes"]);
    //  echo "</pre>";
     // remove the logging above once you confirmed it successfully fetched

     $result["foodlists"] = $this->FoodList->fetch_all();
     $this->load->view('index2', $result);
  }
  public function create()
  {
    $order = $this->input->post();
    $this->FoodList->create($order);
    redirect("/");
  }
}