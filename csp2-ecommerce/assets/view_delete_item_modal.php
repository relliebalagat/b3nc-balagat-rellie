<?php

$id = $_GET['id'];

echo '<input type="hidden" name="book_id" value="'.$id.'">';
echo "Are you sure you want to delete this item?";