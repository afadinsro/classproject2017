
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Course registration</title>
        <link rel="stylesheet" type="text/css" href="../css/header_style.css">
    </head>
    <body>
        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        require_once dirname(__FILE__) . '/../settings/core.php';
        verify_login();
        require_once dirname(__FILE__) . '/../classes/User.php';
        $user = unserializeUser($_SESSION['suser']);
        getHeader($user->per_id);

        echo 'Course registration page';
        ?>
    </body>
</html>