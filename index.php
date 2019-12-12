<?php

if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = 'Upload';
}

$page = ucfirst($page);

include('Controllers/'.$page.'Controller.php');