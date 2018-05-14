<?php

class fauli_models extends CI_Model {
    
    public $title;
    public $content;
    public $date;
    
    public function get_fauli()
    {
        $query = $this->db->query('SELECT *from fauli ORDER BY wron_id DESC');
        return $query->result();
    }
    
    public function get_fa()
    {
        $query = $this->db->query('SELECT *from category ORDER BY per DESC');
        return $query->result();
    }
    
    
    
    
    
    
    
    
    
    
    public function get_category()
    {
        $query = $this->db->query('SELECT *from category ORDER BY ca DESC');
        return $query->result();
    }
    
    public function get_base()
    {
        $query = $this->db->query('SELECT *from base ORDER BY base DESC');
        return $query->result();
    }
    
    
    public function insert_entry()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();
        
        $this->db->insert('entries', $this);
    }
    
    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();
        
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    
}
