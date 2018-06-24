<?php 
class csv extends mysqli
{
    private $state_csv = false;
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
            $value  = "'".implode("','",$row)."'"; 
            $query = "INSERT INTO investments(date,category,sub_category,name,raised,area,round,investors,link) VALUES(". $value .")";
            if($this->query($query))
            {
               $this->state_csv = true;
                echo "Imported File Successfully";
            }
            else
            {
               $this->state_csv = false;
                echo $this->error;
            }
            
            $row = fgetcsv($file);
        }
    }
}
?>