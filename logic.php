<?php

$conn = mysqli_connect("Localhost", "root", "", "packetcode-test");


if(!$conn){
  echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able to establish Database Connection</h3>";
}

if(isset($_REQUEST["new post"])){
  $title = $_REQUEST["title"];
  $content = $_REQUEST["content"];

  $sql = "INSERT INTO data (title, content) VALUES('$title', '$content')";
  mysqli_query($conn, $sql);
}




?>
