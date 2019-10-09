<!DOCTYPE html>

<html>

<head>
</head>

<body>
    <table width="270px" cellspacing="0px" cellpadding="0px" border="0px">
        <?php

        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $i; $j++) {
                echo "<td height=30px width=30px bgcolor=black></td>";
            }
            echo "<tr>";
        }
        ?>
    </table>

</body>

</html>