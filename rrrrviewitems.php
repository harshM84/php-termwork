<?php

include("config.php");

    $sql = "select * from items";
    $result = $conn->query($sql);
?>

<html>

    <table style="border:3px;">
        <tr>
            <td>ITEM ID</td>
            <td>ITEM NAME</td>
            <td>COMPANY NAME</td>
            <td>PRICE</td>
            <td>QUANTITY</td>
            <td>DESCRIPTION</td>
        </tr>
        <tr>
            <?php
               if($result->num_rows > 0)
               {
                   
                   while($rows = $result->fetch_assoc())
                {
                    echo "<tr><td>".$rows['item_id']."</td>
                            <td>".$rows['item_name']."</td>
                            <td>".$rows['company_name']."</td>
                            <td>".$rows['price']."</td>
                            <td>".$rows['qty']."</td>
                            <td>".$rows['description']."</td>";
                }
            }
            ?>
        </tr>
    </table>

</html>