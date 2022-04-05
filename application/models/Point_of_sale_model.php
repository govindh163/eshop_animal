<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Point_of_sale_model extends CI_Model
{
    function get_users($search_term = "")
    {
        // Fetch users
        $this->db->select('*');
        $this->db->where("mobile like '%" . $search_term . "%'");
        $fetched_records = $this->db->get('users');
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach ($users as $user) {
            $data[] = array("id" => $user['id'], "text" => $user['mobile'], "number" => $user['username']);
        }
        return $data;
    }
}
