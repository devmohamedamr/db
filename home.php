<?php

require "db.php";

// $calc1 = new calc(10,20);
// echo $calc1->add()->result();
// res = 30
// echo $calc1->result();


$db = new db();
$data = [
    'name' => "ahmed",
    "email" => "a@A.com",
    "password" =>123
];
$db->edit("user",$data)->where("id","=","12")->excu();

// echo "<pre>";
// print_r($db->select('user',"`name`")->where("email","=","mina@admin.com")->WhereAnd("name","=","mina saed")->GetRow());


// $db->insert("user",$data);


// calling by value 
// $x = 10;

// function increment($num){
//     $num+=20;
//     echo $num;
// }

// increment($x);
// echo "<hr>";

// echo $x;

// calling by reference
// $x = 10;

// function increment(&$num){
//     $num+=20;
//     echo $num;
// }

// increment($x);
// echo "<hr>";

// echo $x;











