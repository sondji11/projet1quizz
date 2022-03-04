<?php
function find_users(string $role):array{
$users=find_data("users");
$result=[];
foreach ($users as $user) {
if( $user['role']==$role)
$result[]= $user;
}
return
$result;
}