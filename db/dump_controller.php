<?php
class DumpController
{
public $dump_limit;
public $name_dump;
    function __construct()
    {
        $this->dump_limit = 4;
        $this->name_dump= 'dump-' . date('Y-m-d__H_i') . '.sql';
    }

    function read_credentials()
    {

        $string = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . '../wp-config.php', true);
        if ($string == false) {
            die("file wp-config.php does not found");
        }
        echo "File wp-config received";
        echo "\r\n";
        $pattern = '/(DB_USER|DB_NAME|DB_PASSWORD|DB_HOST).*\'(.*)\'/';
        preg_match_all($pattern, $string, $matches, PREG_UNMATCHED_AS_NULL);
        for ($i = 0; $i < count($matches[1]); $i++) {
            $credentials_array[$matches[1][$i]] = $matches[2][$i];
        }
        if (count($credentials_array) === 4) {
            echo "Credentials array is ready";
            echo "\r\n";
            return $credentials_array;
        } else {
            echo "Some problem with credentials array!";
        }

    }

    function get_dumps_array()
    {
        $existing_dumps = scandir(__DIR__ . DIRECTORY_SEPARATOR . 'dumps');
        $dumps_time_creating = array();
        foreach ($existing_dumps as $key => $dump) {
            if ($dump === '.' or $dump === '..') {
                continue;
            }
            $dumps_time_creating[strtotime(str_replace(array('dump-', '.sql', '__', '_'), array('', '', ' ', ':'), $dump))] = $dump;
        }
        echo "Array of dumps is ready";
        echo "\r\n";
        return $dumps_time_creating;
    }

    function removeTables($credentials_array)
    {
        $mysqli = new mysqli($credentials_array['DB_HOST'], $credentials_array['DB_USER'], $credentials_array['DB_PASSWORD'], $credentials_array['DB_NAME']);
        $mysqli->query('SET foreign_key_checks = 0');
        $result = $mysqli->query("SHOW TABLES");
        if ($result) {
            while ($row = $result->fetch_array(MYSQLI_NUM)) {
                $mysqli->query('DROP TABLE IF EXISTS ' . $row[0]);
            }
        }
        $mysqli->query('SET foreign_key_checks = 1');
        $mysqli->close();
        echo "The database has been cleared";
        echo "\r\n";
    }

    function oldest_newest_dump($func_nameMaxMin, $existing_dumps)
    {
        $array_keys = array_keys($existing_dumps);
        $result = $func_nameMaxMin($array_keys);
        return $result;
    }

    function get_dump()
    {
       $dump_limit=$this->dump_limit;
       $name_dump=$this->name_dump;

        $credentials_array = $this->read_credentials();
        $existing_dumps = $this->get_dumps_array();
        if (count($existing_dumps) >= $dump_limit) {
            $oldest_dump = $this->oldest_newest_dump('min', $existing_dumps);
            $unlink = unlink(__DIR__ . DIRECTORY_SEPARATOR . 'dumps' . DIRECTORY_SEPARATOR . $existing_dumps[$oldest_dump]);
            if ($unlink === true) {
                echo 'Oldest dump "' . $existing_dumps[$oldest_dump] . '" has been deleted';
                echo "\r\n";
            }
        }
        exec('mysqldump -u ' . $credentials_array['DB_USER'] . ' -h ' . $credentials_array['DB_HOST'] . ' -p ' . $credentials_array['DB_PASSWORD'] . ' ' . $credentials_array['DB_NAME'] . ' > db\dumps\\' . $name_dump);
        $existing_dumps = $this->get_dumps_array();
        if (in_array($name_dump, $existing_dumps)) {
            echo "new damp was saved successfully in path: " . __DIR__ . DIRECTORY_SEPARATOR . 'dumps' . DIRECTORY_SEPARATOR . $name_dump;
        } else {
            echo 'something wrong with last dump' . $name_dump;
        }
    }

    function build_base()
    {
        $credentials_array = $this->read_credentials();
        $existing_dumps = $this->get_dumps_array();
        $newest_dump = $this->oldest_newest_dump('max', $existing_dumps);
        if ((count($credentials_array) === 4) && (count($existing_dumps) >= 1) && $newest_dump) {
            $this->removeTables($credentials_array);
            exec('mysql -u ' . $credentials_array['DB_USER'] . ' -h ' . $credentials_array['DB_HOST'] . ' -p ' . $credentials_array['DB_PASSWORD'] . ' ' . $credentials_array['DB_NAME'] . ' <db\dumps' . DIRECTORY_SEPARATOR . $existing_dumps[$newest_dump]);
            echo 'Database "' . $credentials_array["DB_NAME"] . '" builded using dump "' . $existing_dumps[$newest_dump] . '"';
        }
    }
}

function get_dump(){
    $get_dump=new DumpController();
    $get_dump->get_dump();
}
function build_base(){
    $get_dump=new DumpController();
    $get_dump->build_base();
}

//mysqldump -uroot -h 127.0.0.1 -p docker > 1111.sql



//mysqldump -u root -h localhost -p test > 2.sql get dump


//mysql -u root -p -h localhost 188_db < daikichi3_wp1.sql
