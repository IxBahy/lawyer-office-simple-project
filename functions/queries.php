<?php
//variables



//database table
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'ocd_fourth_task';
$connection = mysqli_connect($host, $user, $password, $dbName);


//functions

function auth($num1 = "", $num2 = "", $num3 = "")
{
    if ($_SESSION['admin']) {
        if (
            $_SESSION['role'] == $num1 || $_SESSION['role'] == $num2
            || $_SESSION['role'] == $num3

        ) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
};



// database general use :

function connectionToDatabase($query, $message)
{
    $preformedQuery = mysqli_query($GLOBALS['connection'], $query);
    testMessage($preformedQuery, $message);
}

function testMessage($conditions, $message)
{
    // if ($conditions) {
    //     echo "<div class='alert text-white col-4 mx-auto' style='z-index: 100' role='alert'>

    //     </div>";
    // } else {
    //     echo "<div class='alert .text-white col-4 mx-auto' style='z-index: 100' role='alert'>
    //         $message Failed 
    //     </div>";
    // }
}


function searchById($database, $id)
{
    $search = "SELECT * FROM `$database` WHERE id = '$id'";
    $oneEmployee = mysqli_query($GLOBALS['connection'], $search);
    $row = mysqli_fetch_assoc($oneEmployee);
    return $row;
}

function deleteById($database, $id)
{
    $delete = "DELETE FROM `$database` where id = $id ";
    connectionToDatabase($delete, 'delete row in DataBase');
}

function selectAll($database)
{
    $select = "SELECT * FROM `$database`";
    $row = mysqli_query($GLOBALS['connection'], $select);
    return $row;
}

function selectAllIds($database)
{
    $select = "SELECT id FROM `$database`";
    $departments = mysqli_query($GLOBALS['connection'], $select);
    return $departments;
}

function selectNameById($database, $id)
{
    $select = "SELECT `name` FROM `$database` WHERE id =$id";
    $row = mysqli_fetch_assoc(mysqli_query($GLOBALS['connection'], $select));
    return $row['name'];
}

function updateQuery($dataBase, $id, $params)
{
    $update = "UPDATE $dataBase SET $params WHERE id=$id";
    connectionToDatabase($update, 'update row in DataBase');
}

function addQuery($dataBase, $params)
{
    $insert = "INSERT INTO $dataBase VALUES $params";
    connectionToDatabase($insert, 'Insert to DataBase');
}
