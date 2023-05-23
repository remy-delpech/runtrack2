<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = array('voyelles' => 0, 'consonnes' => 0);

$vowels = "aeiouAEIOUàâäéèêëïîôùûüÿç";
$letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZàâäéèêëïîôùûüÿç";

for ($i = 0; $i < mb_strlen($str); $i++) {
    if (mb_strpos($vowels, $str[$i]) !== false) {
        $dic['voyelles']++;
    } else if (mb_strpos($letters, $str[$i]) !== false) {
        $dic['consonnes']++;
    }
}
?>

<table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic['voyelles']; ?></td>
            <td><?php echo $dic['consonnes']; ?></td>
        </tr>
    </tbody>
</table>