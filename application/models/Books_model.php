<?php

class Books_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

function get($id){
	return $query=$this->db->query("select * from books where id = ?",array($id))->row();
}

   


}
