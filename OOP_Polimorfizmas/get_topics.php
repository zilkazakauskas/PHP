<?php

function printTopicsSelection() {
    require 'sql_connection.php';

    $sql = 'SELECT pavadinimas FROM temos';
    $result = mysqli_query($link, $sql);

    $count = 1;

    while ($row = mysqli_fetch_assoc($result)) {
//        echo '<input type="hidden" name="topic' . $count . '" value="">';
        echo '<input type="checkbox" name="topic' . $count . '" value="' . $row['pavadinimas'] . '">';
        echo '<label for="topic' . $count . '">' . $row['pavadinimas'] . '</label><br>';
        $count++;
    }
}

function setTopicsVariables() {
    require 'sql_connection.php';

    $sql = 'SELECT pavadinimas FROM temos';
    $result = mysqli_query($link, $sql);

    $count = 1;
    
    while ($row = mysqli_fetch_assoc($result)) {
        if (array_key_exists("topic$count",$_POST)) {
            $topics["topic$count"] = $_POST["topic$count"];
        }
        $count++;
        
    }
     if(isset($topics)){
        return $topics;
    }
//    echo '<pre>';
//    print_r($topics);
//    echo'</pre>';
}

//setTopicsVariables();