<?php
$conn=new mysqli("localhost","root","","cyber guardians");
if($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
}