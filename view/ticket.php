<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Booking - Mahabus</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/ticket.css">
</head>
<body>
    <?php include "./header.php"; ?>

     <!-- listing ticket section -->
     <div class="ticket-listing">
        <?php
            include "./../backend/connection.php";
            include "./../backend/getbus.php";

            if(isset($_GET['sourceAddress']) && isset($_GET['destinationAddress'])){
                $data=getBusData($connection, $_GET['sourceAddress'], $_GET['destinationAddress']);
            }

            if(gettype($data)=='array' && count($data)){  
                for($i=0; $i<count($data); $i++){
                    $bid=$data[$i]['bid'];
                    $bname=$data[$i]['bname'];
                    $ticketPrice=$data[$i]['ticketprice'];
                    $sourceAddress=$data[$i]['source'];
                    $destinationAddress=$data[$i]['destination'];
                    $hasWifi=$data[$i]['haswifi'];
                    $hasAc=$data[$i]['hasac'];

                    echo '<div class="ticket">
                        <div class="ticket-upper">
                            <h2>'. $sourceAddress .'</h2>
                            <p><span class="ticket-price"><i class="fa fa-ticket"></i> Rs '. $ticketPrice .'</span></p>
                            <h2>'. $destinationAddress .'</h2>
                        </div>
                        <div class="ticket-lower">
                            <div class="bus-name">'. $bname .'</div>
                            <div>
                                <span class="has-wifi">Wifi'. ($hasWifi ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-times"></i>') .'</span>
                                <span class="has-ac">AC'. ($hasAc ? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-times"></i>') .'</span>
                            </div>
                        </div>
                        <button class="view-seats-btn">View Seats</button>
                        <hr>
                        <div class="bus-container hide"></div>
                    </div>';
                }
            }
            else echo "Sorry, no tickets found!";
        ?>
    </div>

    <script src="./js/ticket.js"></script>
</body>
</html>