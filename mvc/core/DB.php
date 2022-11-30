<?php
require_once "config.php";
class DB {
    // SQL: insert, update, delete
    function execute($sql) {
        //open connection
        $conn = pg_connect("host=localhost port=5432 dbname=bkstore user=postgres password=local");
	    pg_set_client_encoding($conn, "utf8");

        //query
        pg_query($conn, $sql);

        //close connection
        pg_close($conn);
    }

    // SQL: select -> lay du lieu dau ra (select danh sach ban ghi, lay 1 ban ghi)
    function executeResult($sql, $isSingle = false) {
        $data = null;

        //open connection
        $conn = pg_connect("host=localhost port=5432 dbname=bkstore user=postgres password=local");
	    pg_set_client_encoding($conn, "utf8");

        //query
        $resultset = pg_query($conn, $sql);
        if($resultset){
            if($isSingle) {
                $data = pg_fetch_array($resultset, NULL, PGSQL_BOTH);
            } else {
                $data = [];
                while(($row = pg_fetch_array($resultset, NULL, PGSQL_BOTH)) != null) {
                    $data[] = $row;
                }
            }
            //close connection
            pg_close($conn);
        }
        return $data;
    }
}

