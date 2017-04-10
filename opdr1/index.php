<form method="post">
    <input type="text" name="fruit"><br>
    <input type="submit" name="submit" value="Go!">
</form>
<?php
$favdrink = $_POST['fruit'];
switch ($favdrink) {
    case 'pear':
        echo 'fruit is pear';
        echo '<img src="images/peer.jpg" alt="pear" />';
        break;
    case 'apple':
        echo 'fruit is apple';
        echo '<img src="images/appel.jpg" alt="appel" />';
        break;
    case 'orange':
        echo 'fruit is orange';
        echo '<img src="images/orange.jpg" alt="orange" />';
        break;
    default:
        echo 'Don\'t know what fruit that is, try apple, orange or pear';

}
?>
