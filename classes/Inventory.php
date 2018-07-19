<?php

class Inventory {
    
    public function select($id) {
        $sql = "SELECT m.id AS id, m.name AS model_name, 
                        mf.name AS manufacturer_name,
                        m.count AS count 
                        FROM manufacturer mf LEFT JOIN model m ON mf.id = m.manufacturer_id 
                        WHERE m.id = $id";
        $result = DB::select_sql($sql);
        return $result;
    }

    public function selectAll(){
        $sql = "SELECT m.id AS id, m.name AS model_name, 
                        mf.name AS manufacturer_name, 
                        IF(m.count = NULL OR m.count = '0', 'Sold Out', m.count) AS count 
                        FROM model m INNER JOIN manufacturer mf ON mf.id = m.manufacturer_id";
        $result = DB::select_sql($sql);
        return $result;
    }

    public function insert($columns = []) {

        $result = DB::insert($this->table, $columns);
        if($result) {
            return "success";
        } else {
            return "failure";
        }
    }
}
