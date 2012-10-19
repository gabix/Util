<?php

class DB_Gateway_Table {

    private $table_name;
    private $mysql;
    private $structure = array();

    public function __construct($name, DB_Gateway_DB $db) {
        $this->table_name = $name;
        $this->mysql = $db->getRawConnection();
        $this->structure = $this->sniffStructure();
    }

    /**
     * Retrieves the table structure
     * @return array
     */
    private function sniffStructure() {
        $sql_create = "DESCRIBE " . $this->table_name;
        try {
            $create = $this->mysql->query($sql_create);
        } catch (Exception $e) {
            $create = false;
        }
        if ($create) {
            $fields = $create->fetch_all(MYSQLI_ASSOC);
            $actual_fields = array();
            foreach ($fields as $f) {
                $field = array();
                $field = array('type' => $f['Type']);
                if ($f['Null'] == 'YES') {
                    $field['nullable'] = true;
                } else {
                    $field['nullable'] = false;
                }
                $actual_fields[$f['Field']] = $field;
            }

            return $actual_fields;
        }
    }

    public function create(array $data) {
        foreach ($this->getMandatoryFields() as $f) {
            if (!isset($data[$f])) {
                throw new BadMethodCallException("Missing data: $f");
            }
        }
        $attributes = array();
        foreach ($data as $name => $value) {
            $value = $this->mysql->escape_string($value);
            if (is_string($value)) {
                $value = "'$value'";
            }
            $attributes[] = $value;
        }

        $sql_create_template = "INSERT INTO %s(%s) VALUES (%s)";
        $sql_create = sprintf($sql_create_template, $this->table_name, implode(',', $this->getColumnNames()), implode(',', $attributes)
        );
        try {
            $could = $this->mysql->query($sql_create);
        } catch (Exception $e) {
            $could = false;
        }

        if ($could) {
            $id = $this->mysql->insert_id;
        }
        else
            $id = false;

        return $id;
    }

    public function edit($id, array $new_data) {
        
    }

    public function delete($id) {
        
    }

    public function find(array $conditions = array(), array $fields = array()) {
        $table_name = $this->table_name;
        if(count($fields)==0){
            $fields = array('*');
        }
        $fields = implode(',',$fields);

        if(count($conditions)>0){
            $where = "WHERE ".implode(' AND ',$conditions);
        }
        else $where = '';
        $sql_find_template = "SELECT %s FROM %s %s;";
        $sql_find = sprintf($sql_find_template, $fields, $table_name, $where);
        
        $result = $this->mysql->query($sql_find);
        if($result){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return array();
    }

    /**
     * Get the fields that MUST be present. 
     * @return type 
     */
    private function getMandatoryFields() {
        $mandatory = array();
        foreach ($this->structure as $name => $f) {
            if ($f['nullable'] && strpos($name, '_id') === false) {
                $mandatory[] = $name;
            }
        }
        return $mandatory;
    }

    private function getColumnNames() {
        $names = array_keys($this->structure);
        foreach ($names as $pos => $name) {
            if (strpos($name, '_id') !== false) {
                unset($names[$pos]);
            }
        }
        return $names;
    }

}