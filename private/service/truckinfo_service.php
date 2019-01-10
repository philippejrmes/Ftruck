
    <?php 

    include_once ('private/config/Mysql.php');

    function getTruckInfo()
    {
        $database = new Database();
        $truckID = $_GET['page2'];
        if ($truckID == NULL) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
        $database->query("SELECT name, imageName, smallDescription FROM truck WHERE idtruck = '$truckID'");
        $rows = $database->single();
        return $rows;
    }
    ?>