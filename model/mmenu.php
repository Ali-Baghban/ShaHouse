<?php

class menu{
    private $db;
    private $tbl = 'menu_tbl';
    public function __construct()
    {
        global $db;

        $this->db = $db;
    }
    public function menu_list(){

        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} ORDER BY sort DESC");
        if ($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function menu_add($data){
        $tbl = 'menu_tbl';
        $stmt = $this->db->prepare("INSERT INTO {$this->tbl} (`id`, `title`, `url`, `status`, `sort`) VALUES
                                  (NULL,'$data[title]','$data[url]','$data[status]','$data[sort]')");
        if ($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return true;
        }else{
            return false;
        }
    }
    public function menu_delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function menu_edit($data, $id)
    {
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET title='$data[title]', url='$data[url]', status='$data[status]',
                                    sort='$data[sort]'WHERE id='$id'");
        if ($stmt->execute()) return true;
    }
    public function menu_get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        } else {
            return false;
        }
    }
}
?>