<?php
include_once 'xmain.php';
class mcat extends xmain
{
    private $db;
    private $tbl = 'house_tbl';
    public function __construct()
    {
        global $db;

        $this->db = $db;
    }
    public function get_cat($type){
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE type IN ('$type') AND status = 1");
        try{
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }catch (e $exception){
            return false;
        }

    }
    public function get_image($id){
        $tbl = 'image_tbl';
        $stmt = $this->db->prepare("SELECT url FROM $tbl WHERE chid='$id'");
        try{
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }catch (e $exception){
            return false;
        }
    }
    public function get_house_gallery($id){
        $tbl = 'image_tbl';
        $stmt = $this->db->prepare("SELECT * FROM $tbl WHERE chid='$id'");
        try{
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }catch (e $exception){
            return false;
        }
    }
    public function get_house_information($id){
        $tbl = 'address_tbl';
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl},$tbl WHERE {$this->tbl}.id='$id' AND $tbl.chid='$id';");
        try{
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }catch (e $exception){
            return false;
        }
    }
    public function get_hh_info($id){
        $tbl = 'user_tbl';
        $tbl_2 = 'house_tbl';
        $tbl_3 = 'image_tbl';
        $stmt = $this->db->prepare("SELECT * FROM $tbl,$tbl_3 WHERE $tbl.id IN (
                                    SELECT chid FROM $tbl_2 WHERE id='$id') and $tbl_3.id = $tbl.img_id") ;
        try{
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }catch (e $exception){
            return false;
        }
    }
    public function get_house_address($id){
        $tbl = 'address_tbl';
        $stmt = $this->db->prepare("SELECT * FROM $tbl WHERE chid='$id'");
        try{
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }catch (e $exception){
            return false;
        }
    }
}