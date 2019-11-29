<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 3px solid black;
}
.zwart {
    background-color:black;
}
.wit {
    background-color:white;
}
</style>
</head>
<body>

<table>
<?php
function zwartvakje(){
    echo "<td class='zwart'></td>";
}
function witvakje() {
    echo "<td class='wit'></td>";
}


for ($x = 1; $x <= 8; $x++) {
    echo "<tr>";
    for ($y = 1; $y <= 8; $y++) {
        if (($y%2 == 1 && $x%2==0)||($y % 2 == 0 && $x%2 == 1)) {
            zwartvakje();
        } else {
            witvakje();
        }
    }
    echo "</tr>";
    
}
?>
</table>

</body>
</html>