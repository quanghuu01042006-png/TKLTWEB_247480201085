
<?php
$x = $_POST['x'] ?? '';
$y = $_POST['y'] ?? '';
$kq = '';

if (isset($_POST['pt']) && $x !== '' && $y !== '') {
    $a = (float)$x;
    $b = (float)$y;

    switch ($_POST['pt']) {
        case '+': $kq = $a + $b; break;
        case '-': $kq = $a - $b; break;
        case '*': $kq = $a * $b; break;
        case '/': $kq = $b != 0 ? $a / $b : 'Khong chia duoc cho 0'; break;
        case '%': $kq = $b != 0 ? fmod($a, $b) : 'Khong chia duoc cho 0'; break;
    }
}

echo '<form method="post"><table border="1" align="center" cellpadding="8">';
echo '<tr><th colspan="2">TINH TOAN SO HOC</th></tr>';
echo '<tr><td>So thu 1</td><td><input name="x" type="number" step="any" value="'.htmlspecialchars((string)$x).'" required></td></tr>';
echo '<tr><td>So thu 2</td><td><input name="y" type="number" step="any" value="'.htmlspecialchars((string)$y).'" required></td></tr>';
echo '<tr><td>Ket qua</td><td><input value="'.htmlspecialchars((string)$kq).'" readonly></td></tr>';
echo '<tr><td colspan="2" align="center">';
foreach (['+'=>'Cong','-'=>'Tru','*'=>'Nhan','/'=>'Chia','%'=>'Mod'] as $pt=>$ten)
    echo '<button name="pt" value="'.$pt.'">'.$ten.'</button> ';
echo '</td></tr></table></form>';
?>
