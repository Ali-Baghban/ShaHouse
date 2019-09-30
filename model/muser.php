<?php
include_once 'model/xmain.php';
class user extends xmain
{
    private $db;
    private $tbl = "user_tbl";

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function select_user($field,$value)
    {
        try{
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE $field='$value'");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
        }catch (exception $e){

        }

    }
    public function user_edit($data, $id)
    {
        $stmt = $this->db->prepare("UPDATE {$this->tbl} SET name='$data[name]', phone='$data[phone]', id_number='$data[id_number]',
                                    email='$data[email]', status='$data[status]', user_type='$data[level]' WHERE id='$id'");
        if ($stmt->execute()) return true;
    }
    public function user_get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        } else {
            return false;
        }
    }
    public function user_list(){
        // Security vulnerability !!!
        $stmt = $this->db->prepare("SELECT * FROM {$this->tbl} ORDER BY id DESC");
        if ($stmt->execute()){
            $row = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $row;
        }
    }
    public function user_delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->tbl} WHERE id='$id'");
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function get_user_level(){
        if ($this->sec_check()){
            $data = $this->select_user('username',$_SESSION['login']);
            return $data->user_type;
        }
    }
    public function register_user($data){
        try{
            $stmt2 = $this->db->prepare("INSERT INTO image_tbl (`id`, `url`, `chid`) VALUES
                        (NULL ,'public/default/image/avatar.png', '0' )");
            $stmt = $this->db->prepare("INSERT INTO {$this->tbl} (`id`, `user_type`, `status`, `username`, `password`, `email`, `phone`, `name`, `id_number`, `img_id`)
      VALUES (NULL, '$data[type]', '1', '$data[username]', '$data[password]', '$data[email]', '$data[phone]', '$data[name]', '$data[id_number]', (SELECT MAX(id) FROM image_tbl))");

            if ($stmt2->execute() && $stmt->execute()){
                return true;
            }else{
                return false;
            }

        }catch (exception $e){

        }

    }
    public function reset_password($email){
        $tmp = $this->select_user('email',$email);
    }

}

?>
