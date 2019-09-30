<?php
/**
 * Created by PhpStorm.
 * User: Raha
 * Date: 12/15/2018
 * Time: 11:43 AM
 */

class verify
{
    private $db;
    private $tbl = "orderlist_tbl";

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function verify_list()
    {
        try {
            $tbl2 = 'house_tbl';
            $tbl3 = 'user_tbl';
            $stmt = $this->db->prepare("SELECT * FROM {$this->tbl},$tbl3 WHERE status = 0 AND  {$this->tbl}.chid = $tbl3.id");
            $stmt->execute();

            $row = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $row;
        } catch (exception $e) {
            return null;
        }

    }

}