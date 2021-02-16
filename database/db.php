<?php

session_start();
require('connect.php');



function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions =[])   
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($conditions))              //SELECT * FROM $table
    {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        
        $i =0;
        foreach ($conditions as $key => $value) {       //SELECT * FROM $table WHERE uAddress=? AND email=? like conditions
            if($i === 0){
                $sql = $sql . " WHERE $key=?";
            }else {
                $sql = $sql . " AND $key=?";    
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    
}

function selectOne($table, $conditions) //SELECT * FROM $table WHERE regNo=? AND email=? LIMIT 1
{
    global $conn;
    $sql = "SELECT * FROM $table";

    $i =0;
    foreach ($conditions as $key => $value) {
        if($i === 0){
            $sql = $sql . " WHERE $key=?";
        }else {
            $sql = $sql . " AND $key=?";    
        }
        $i++;
    }

    $sql =$sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;  
}

function create($table, $data)      //INSERT INTO $table SET regNo=? , email=?  like conditions
{
    global $conn;
    $sql = "INSERT INTO $table SET ";

    $i =0;
    foreach ($data as $key => $value) {
        if($i === 0){
            $sql = $sql . " $key=?";
        }else {
            $sql = $sql . ", $key=?";    
        }
        $i++;
    }
    
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data)         //UPDATE $table SET fname=?, lname=? WHERE regNo=?
{
    global $conn;
    $sql = "UPDATE $table SET ";

    $i =0;
    foreach ($data as $key => $value) {
        if($i === 0){
            $sql = $sql . " $key=?";
        }else {
            $sql = $sql . ", $key=?";    
        }
        $i++;
    }

    $sql = $sql . " WHERE regNo=?";
    $data['regNo'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

function delete($table, $id)        //DELETE FROM $table WHERE regNo=?
{
    global $conn;
    $sql = "DELETE FROM $table WHERE regNo=?";
    $stmt = executeQuery($sql, ['regNo' => $id]);
    return $stmt->affected_rows;
}

function deleteStudent($table, $id)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE stdNo=?";
    $stmt = executeQuery($sql, ['stdNo' => $id]);
    return $stmt->affected_rows;
}

?>