<?php

include("config.php");

    $sql = "select * from comp";
    $result = $conn->query($sql);
?>

<html>

    <table style="border:3px;">
        <tr>
            <td>COMPID</td>
            <td>COMPNM</td>
            <td>DATE</td>
        </tr>
        <tr>
            <?php
               if($result->num_rows > 0)
               {
                   
                   while($rows = $result->fetch_assoc())
                {
                    echo "<tr><td>".$rows['compid']."</td>
                            <td>".$rows['compnm']."</td>
                            <td>".$rows['date']."</td>";
                }
            }
            ?>
        </tr>
    </table>

</html>