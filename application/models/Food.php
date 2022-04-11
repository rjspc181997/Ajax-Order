<!-- With Ajax -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Food extends CI_Model {
  public function fetch_all()
  {
    return $this->db->query("SELECT * FROM orders")->result_array();
  }
  public function create($order)
  {
    $query = "INSERT INTO orders (foods, created_at) VALUES (?, NOW())";
    $values = array($order['foods']);
    return $this->db->query($query, $values);
  }
  public function delete($id)
  {
    $query = "DELETE FROM orders where id=".$id;
    return $this->db->query($query);
  }
  public function update($id,$update)
  {
    $query = "UPDATE orders SET foods = ?, updated_at = NOW() WHERE id = ?";
    $values = array($update['foods'],$id);
    return $this->db->query($query, $values);
  }
}