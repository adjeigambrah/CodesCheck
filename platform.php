
<?php
include 'controller.php';

    switch($option){

        //The route when the add button is clicked 
        case md5('add'):
            include 'views/add.php';
        break;

        case md5('details'):
            include 'views/details.php';
        break;

        case md5('listchats'):
            include 'views/listchats.php';
        break;

        case md5('add_capacity'):
            include 'views/add_capacity.php';
        break;

        case md5('others'):
            include 'views/others.php';
        break;

        case md5('edit'):
            include 'views/edit.php';
        break;

        //Default route 
        default:
            include 'views/list.php';
        break;
    }

    include 'model/js.php';