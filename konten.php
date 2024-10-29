<?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            
            switch ($page) {
                case 'home':
                    include "includes/home.php";
                    break;
                case 'about':
                    include "includes/about.php";
                    break;
                case 'contact':
                    include "includes/contact.php";
                    break;
                case 'datatables':
                    include "includes/datatables.php";
                    break;
                case 'form':
                    include "includes/form.php";
                    break;
            }
        } else {
            include "includes/home.php";
        }
        ?>