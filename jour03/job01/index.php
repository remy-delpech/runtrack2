<?php
$numbers = array(200, 204, 173, 98, 171, 404, 459);
?>

<table>
    <?php foreach ($numbers as $number): ?>
    <tr>
        <td>
            <?php echo $number; ?>
        </td>
        <td>
            <?php echo ($number % 2 == 0) ? 'est paire' : 'est impaire'; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>