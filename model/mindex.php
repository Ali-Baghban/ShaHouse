<?php

class mindex{
    private $db;
    public function __construct()
    {
        global $db;

        $this->db = $db;
    }

    public function list_news(){
        $tbl = 'news_tbl';
        $stmt = $this->db->prepare("SELECT * FROM $tbl WHERE status='1' AND recently='1'");
        if ($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function get_slider(){
        $tbl = 'slider_tbl';
        $stmt = $this->db->prepare("SELECT * FROM $tbl WHERE status='1' ORDER BY arrange ASC " );
        if ($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function get_related_links(){
        $tbl = 'relink_tbl';
        $stmt = $this->db->prepare("SELECT * FROM $tbl WHERE status='1' ORDER BY arrange ASC" );
        if ($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }
    }
}
?>