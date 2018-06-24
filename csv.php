<?php 
class csv extends mysqli
{
    public function __construct()
    {
        parent:: __construct("localhost", "root" , "", "cashtrack");
        if($this->connect_error)
        {
            echo "failed to connect ot database: " . $this->connect_error;
        }
    }
    public function import($file)
    {
        $file = fopen($file, 'r');
        $row = fgetcsv($file);
        while($row)
        {
          var_dump($row);
          $row = fgetcsv($file);
        }
    }
}
?>