<?php
/**
 * Created by PhpStorm.
 * User: Raha
 * Date: 11/28/2018
 * Time: 8:07 AM
 */

class mtemplate
{
    private $db;
    public function __construct()
    {
        global $db;

        $this->db = $db;
    }
    public function menu_list(){
        $tbl = 'menu_tbl';
        $stmt = $this->db->prepare("SELECT * FROM $tbl WHERE status='1' ORDER BY sort ASC");
        if ($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }
    }
}