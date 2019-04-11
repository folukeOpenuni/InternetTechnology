<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $hostname= "localhost";
    $username= "faagbede";
    $dbname = "faagbede";
    $password= "177Middlesex";
    $mysqli = new mysqli($hostname, $username, $password, $dbname);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }