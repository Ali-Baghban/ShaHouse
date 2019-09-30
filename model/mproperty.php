<?php

class property
{
    private $db;
    private $tbl = "house_tbl";

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function property_get_chid($username)
    {
        try {
            $stmt = $this->db->prepare("SELECT id FROM user_tbl WHERE username='$username'");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        } catch (exception $e) {

        }

    }

    public function property_list($username)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE chid IN(SELECT id FROM user_tbl WHERE username='$username')");
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        } catch (exception $e) {

        }

    }

    public function property_add($data)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO {$this->tbl} (`id`, `name`, `type`, `options`, `time`,
                                    `price`, `status`, `chid`) VALUES
                                  (NULL,'$data[name]','$data[type]','$data[options]','$data[time]','$data[price]',
                                  '$data[status]','$data[chid]')");
            $stmt2 = $this->db->prepare("INSERT INTO `address_tbl` (`id`, `city`, `details`, `private`, `chid`) VALUES 
              (NULL, '$data[city]', '$data[details]', '$data[private]', (SELECT MAX(id) FROM house_tbl))");
            #######################################################
            $stmt3 = $this->db->prepare("INSERT INTO `image_tbl` (`id`,`url`,`chid`) VALUES 
              (NULL,  '$data[img1]', (SELECT MAX(id) FROM house_tbl))");
            $stmt4 = $this->db->prepare("INSERT INTO `image_tbl` (`id`,`url`,`chid`) VALUES 
              (NULL,  '$data[img2]', (SELECT MAX(id) FROM house_tbl))");
            $stmt5 = $this->db->prepare("INSERT INTO `image_tbl` (`id`,`url`,`chid`) VALUES 
              (NULL,  '$data[img3]', (SELECT MAX(id) FROM house_tbl))");
            #######################################################
            if ($stmt->execute() &&
                $stmt2->execute() &&
                ##############################
                $stmt3->execute() &&
                $stmt4->execute() &&
                $stmt5->execute()
            ##############################
            ){
                return true;
            }
        } catch (exception $e) {

        }
    }

    public function property_edit($data, $id)
    {
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET name='$data[name]', type='$data[type]',
                                              options='$data[options]',price='$data[price]' WHERE id='$id'");
        $stmt2 = $this->db->prepare("UPDATE address_tbl SET city='$data[city]', details='$data[details]',
                                              private='$data[private]'WHERE chid='$id'");
        //$stmt3 = $this->db->prepare("UPDATE image_tbl SET url='$data[name]', type='$data[type]',
          //                                    options='$data[options]',price='$data[price] WHERE id='$id'");

        if ($stmt->execute() && $stmt2->execute()) return true;
    }

    public function property_get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE id='$id'");
        $stmt2 = $this->db->prepare("SELECT * FROM address_tbl WHERE chid=$id");
        $stmt3 = $this->db->prepare("SELECT * FROM image_tbl WHERE chid=$id");
        if ($stmt->execute() && $stmt2->execute() && $stmt3->execute()) {
            $res = $stmt->fetch(PDO::FETCH_OBJ);
            $res2 = $stmt2->fetch(PDO::FETCH_OBJ);
            $res3 = $stmt3->fetchAll(PDO::FETCH_OBJ);
            $row = $res;
            foreach ($res3 as $item){
                $row->img[] = $item->url;
            }

            $row->city = $res2->city;
            $row->private = $res2->private;
            $row->details = $res2->details;

            return $row;
        } else {
            return false;
        }
    }

    public function property_delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}