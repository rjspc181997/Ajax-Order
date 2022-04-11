<!-- Without Ajax -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class FoodList extends CI_Model {
    public function fetch_all()
    {
      return $this->db->query("SELECT * FROM orders")->result_array();
    }
    public function create($order)
    {
      $query = "INSERT INTO orders (foods) VALUES (?)";
      $values = array($order['foods']);
      return $this->db->query($query, $values);
    }
}