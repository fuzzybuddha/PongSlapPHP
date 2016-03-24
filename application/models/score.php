<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Score extends CI_Model {
     function get_all_scores()
     {
         return $this->db->query("SELECT * FROM score")->result_array();
     }
    //  function get_product_by_id($product_id)
    //  {
    //      return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
    //  }
     function add_score($user, $score)
     {
         $query = "INSERT INTO scoreboard (user, score, created_at) VALUES (?,?,?)";
         $values = array($user, $score, date("Y-m-d, H:i:s"));
         return $this->db->query($query, $values);
     }
    //  function remove_product($product)
    //  {
    //     $query = "DELETE FROM products WHERE id = ?";
    //     $values = array($product['id']);
    //     return $this->db->query($query, $values);
    //  }
}
