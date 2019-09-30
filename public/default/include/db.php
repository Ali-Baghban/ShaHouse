<?php
session_start();
class db
{
    protected $pdo;
    private $server;
    private $db;
    private $username;
    private $password;

    private $tbl;
    private $rows_name;
    private $data;

    public function __construct($server = 'localhost', $db = 'phonebook', $username = 'root', $password = '')
    {
        $this->server = $server;
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;
        $this->connection();
    }

    public function connection()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->server};dbname={$this->db}", $this->username, $this->password);
            $this->pdo->exec("set names utf8");
        } catch (Exception $e) {
            //$x = strpos($e->getMessage(), "]");
            die($e->getMessage());
        }
    }

    public function setTbl($tbl)
    {
        $this->tbl = $tbl;
    }

    public function selectData($rows_name, $id)
    {
        $rows_name = "'" . implode("','", $rows_name) . "'";
        if (!$rows_name = "'*'") {
            $this->rows_name = $rows_name;
        } else {
            $this->rows_name = "*";
        }
        if (empty($id)) {
            $stmt = $this->pdo->prepare("SELECT {$this->rows_name} FROM {$this->tbl} ORDER BY id DESC ");
        } else {

            $stmt = $this->pdo->prepare("SELECT {$this->rows_name} FROM {$this->tbl} WHERE {$id[0]}='$id[1]' ORDER BY id DESC ");
        }
        //$stmt = $this->pdo->prepare("SELECT {$this->rows_name} from {$this->tbl}");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_OBJ);
        //var_dump($row);
        return $row;
    }

    public function insertData($fields, $data)
    {
        $data = "'" . implode("','", $data) . "'";
        $fields = implode(",", $fields);
        $stmt = $this->pdo->prepare("INSERT INTO {$this->tbl} ($fields) VALUES ($data)");
        $stmt->execute();
        //var_dump($stmt);
    }

    public function editData($fields, $data, $id)
    {
        foreach ($data as $temp_val) {

            $temp[] = $temp_val;
        }
        foreach ($fields as $key => $val) {
            //var_dump($key);
            $txt[] = $val . "='" . $temp[$key] . "'";
        }
        $query = implode(",", $txt);
        $stmt = $this->pdo->prepare("UPDATE {$this->tbl} SET $query WHERE id=id");
        //var_dump($query);
        //$stmt->bindParam('id',$id);
        $stmt->execute();
    }

    public function deleteData($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->tbl} WHERE id='$id'");
        $stmt->execute();
    }

    public function findData($field, $value)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->tbl} WHERE $field='$value'");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
    }

    public function searchData($fields, $value)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->tbl} WHERE $fields LIKE '%$value%'");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }

    public function uploadFile($destination, $file, $ex)
    {
        $from = $file['tmp_name'];
        $current_filename = $file['name'];
        $break_to_ex = explode(".", $current_filename);
        $current_ex = end($break_to_ex);
        $file_name = uniqid() . '.' . $ex[0];
        $to = $destination . "/" . $file_name;
        if ($current_ex == $ex[0] || $current_ex == $ex[1]) {
            if (move_uploaded_file($from, $to)) {
                return $to;

            }
        }

    }

    public function downloadFile($fullPath)
    {
        {
            if (headers_sent())
                die('Headers Sent');


            if (ini_get('zlib.output_compression'))
                ini_set('zlib.output_compression', 'Off');


            if (file_exists($fullPath)) {

                $fsize = filesize($fullPath);
                $path_parts = pathinfo($fullPath);
                $ext = strtolower($path_parts["extension"]);

                switch ($ext) {
                    case "pdf":
                        $ctype = "application/pdf";
                        break;
                    case "exe":
                        $ctype = "application/octet-stream";
                        break;
                    case "zip":
                        $ctype = "application/zip";
                        break;
                    case "doc":
                        $ctype = "application/msword";
                        break;
                    case "xls":
                        $ctype = "application/vnd.ms-excel";
                        break;
                    case "ppt":
                        $ctype = "application/vnd.ms-powerpoint";
                        break;
                    case "gif":
                        $ctype = "image/gif";
                        break;
                    case "png":
                        $ctype = "image/png";
                        break;
                    case "jpeg":
                    case "jpg":
                        $ctype = "image/jpg";
                        break;
                    default:
                        $ctype = "application/force-download";
                }

                header("Pragma: public");
                header("Expires: 0");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Cache-Control: private", false);
                header("Content-Type: $ctype");
                header("Content-Disposition: attachment; filename=\"" . basename($fullPath) . "\";");
                header("Content-Transfer-Encoding: binary");
                header("Content-Length: " . $fsize);
                ob_clean();
                flush();
                readfile($fullPath);

            } else
                die('Not Founded');

        }
    }


}


//$obj->selectData(['*']);
//$obj->insertData(['forename', 'surname', 'phone', 'phone2', 'email', 'password', 'age', 'image', 'city'],
//   ['Hossein', 'Gheysari', '09153056619', '05632753306', 'H.GH@gmail.com', '1234567890', '43', '', 'Mashhad']);
//$obj->editData(['forename', 'surname', 'phone'], ['Hossein','Gheysari', '09153056619'], 1);
//$obj->deleteData(5);

//$obj->findData('forename','Ali');
//$obj->searchData('forename','Al');

