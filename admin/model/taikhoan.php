<?php
function insert_taikhoan($email,$user,$pass){
    $sql="insert into taikhoan (email, user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function check_user($user, $pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$email,$pass,$address,$tel){

    $sql="update taikhoan set user='".$user."',email='".$email."',pass='".$pass."',address='".$address."',tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}
function check_email($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadAll_taikhoan(){
    $sql= "select * from taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function delete_tk($id){
    $sql= "delete from taikhoan where id=".$id;
    pdo_execute($sql);
}
?>