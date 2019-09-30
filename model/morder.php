<?php

class order
{
    private $db;
    private $tbl = "orderlist_tbl";

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function order_list($data)
    {
        try {
            $tbl2 = 'house_tbl';
            $tbl3 = 'user_tbl';
            $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE {$this->tbl}.chid
                                      IN(SELECT id FROM $tbl3 WHERE username='$data[customer_username]')
                                      ");

            $stmt->execute();

            $row = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $row;
        } catch (exception $e) {

        }

    }

    public function order_add($data)
    {
        try {
            $tbl2 = 'user_tbl';
            $tbl3 = 'house_tbl';
            $stmt = $this->db->prepare("INSERT INTO {$this->tbl} (`id`, `chid`, `h_id`,`time`,`status`) VALUES
                                  (NULL,(SELECT id FROM $tbl2 WHERE username='$data[customer_username]'),
                                    '$data[house_id]','$data[time]',1)");
            $stmt2 = $this->db->prepare("UPDATE house_tbl SET status='3' WHERE 
                                                    id IN (SELECT h_id FROM orderlist_tbl)");
            if ($stmt->execute() && $stmt2->execute()) {
                return true;
            }
        } catch (exception $e) {

        }
    }
}