<?php
    include("config.php");
    @$mdnm = $_POST['mdnm'];
    @$comnm = $_POST['comnm'];
    @$mdprc = $_POST['mdprc'];
    @$mdqty = $_POST['mdqty'];
    @$des = $_POST['mddes'];

    $sql = "insert into items values (0,'$mdnm','$comnm','$mdprc','$mdqty','$des')";

    if ($conn->query($sql) === TRUE) 
    {
        header("location:additems.html");
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    

?>