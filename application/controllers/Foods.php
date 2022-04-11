<!-- With Ajax -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Foods extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Food");
  }
  public function index_html()
  {
    $result["foods"] = $this->Food->fetch_all();
    $this->load->view("partials/foods", $result);
  }
  public function create()
  {
    $order = $this->input->post();
    $this->Food->create($order);
    $result["foods"] = $this->Food->fetch_all();
    $this->load->view("partials/foods", $result);

  }
  public function index()
  {
    $this->load->view('index');
  }
  public function delete($id)
  {
    $this->Food->delete($id);
    $result["foods"] = $this->Food->fetch_all();
    redirect("/", $result);


  }
  public function update($id)
  {
    $this->Food->update($id,$this->input->post());
    $result["foods"] = $this->Food->fetch_all();
    redirect("/", $result);
  }
}