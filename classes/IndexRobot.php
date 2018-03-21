<!DOCTYPE html>

<html>
<head>
    <title>Robot Wars</title>
    <?php
        include "Robot.php";
    ?>
</head>
<body>
    <?php
    /**
     * Created by PhpStorm.
     * User: steve
     * Date: 21-3-2018
     * Time: 19:59
     */
        $Robot1 = new \RobotWar\Robot("Alex",500);

        $Robot1->maakZichtbaar();
    ?>
</body>
</html>
