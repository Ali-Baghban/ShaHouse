<?php

class news
{
    private $db;
    private $tbl = "news_tbl";

    public function __construct()
    {
        global $db;
        $this->db = $db;

    }

    public function news_add($data)
    {
        $stmt = $this->db->prepare("INSERT INTO {$this->tbl} (`id`, `title`, `body`, `importance`, `sort`) VALUES
                                  (NULL,'$data[title]','$data[body]','$data[importance]','$data[sort]')");
        if ($stmt->execute()) {
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return true;
        } else {
            return false;
        }
    }

    public function list_news()
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->tbl");
        if ($stmt->execute()) {
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }
    }

    public function news_delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function news_edit($data, $id)
    {
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET title='$data[title]', body='$data[body]', importance='$data[importance]',
                                    sort='$data[sort]'WHERE id='$id'");
        if ($stmt->execute()) return true;
    }
    public function news_get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        } else {
            return false;
        }
    }
    public function show_news($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->tbl WHERE id='$id'");
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }
    }
}

?>