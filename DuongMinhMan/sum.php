<?php
    $heSoA = "";
    $heSoB = "";
    if(isset($_POST['heSoA']))
        $heSoA = $_POST['heSoA'];
    if(isset($_POST['heSoB']))
        $heSoB = $_POST['heSoB'];
    function sum( $a, $b){
        if($a == "")
            $a = 0;
        if($b == "")
            $b = 0;
        echo 'Sum: '. $a . ' + ' . $b .' = ' . ($a + $b);
        echo "<br>";
        
    }
?>

<form action="#" method="post">
    <table>
        <tr>
            <td>Nhập hệ số a: </td>
            <td><input type="text" name="heSoA" require></td>
        </tr>
        <tr>
            <td>Nhập hệ số b: </td>
            <td><input type="text" name="heSoB" require></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Kết quả</button></td>
        </tr>
    </table>
</form>
<?php
    if(is_numeric($GLOBALS['heSoA']) && is_numeric($GLOBALS['heSoB']))
        sum($GLOBALS['heSoA'],$GLOBALS['heSoB']);
    else if ($GLOBALS ['heSoA'] == '' || $GLOBALS ['heSoB'] == '' ) {
        echo ("Vui lòng nhập giá trị để tính!");
    }else {
        echo ("Giá trị input không hợp lệ!");
    }
?>
