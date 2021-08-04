<?php

/* INCLUSAO DB */
    include 'db/db.php';

/* INCLUSAO HEADER*/
    include 'estrutura/header.php';

        if(isset($_GET['page'])){
            $page = $_GET['page'];
}
        else{
            $page = 'home';
}

        switch($page){

            case 'home': include 'estrutura/home.php'; break;

            default: include 'home.php'; break;



};

/* INCLUSAO FOOTER */

    include 'estrutura/footer.php';
?>
