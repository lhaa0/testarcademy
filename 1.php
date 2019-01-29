<html>
    <head>
        <title>1</title>
    </head>
</html>
<?php

getBio();

function getBio() {
    $data = array("name" => "Fadila Rizki Ramadan", 
    "address" => "Jl. Parangargo no.37 Wagir Malang", 
    "hobies" => array("coding", "cycling", "fishing"),
    "is_maried" => false, 
    "school" => array("highSchool" => "SMK PGRI 3 Malang", "university" => null), 
    "skills" => array(
        "WEB Back-End" => array("PHP", "Node JS", "Python"), 
        "Desktop" => array("Java Net-Beans", "VB.NET"), 
        "Mobile" => array("Java Android")));
    echo json_encode($data);
}
   
?>