<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET YOUR TICKET!</title>
    <link rel="stylesheet" href="css/h.css">
</head>
<body>
    <div class="background">
        <div class="booking-form">
            <h2>Travel booking</h2>
            <?php
            include("php/conn.php");

            if(isset($_POST['submit'])){
                $source = $_POST['source'];
                $destination = $_POST['destination'];
                $departure = $_POST['departure'];

                $result = mysqli_query($con, "SELECT * FROM flight WHERE Source='$source' AND Destination='$destination' AND Departure='$departure' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);
                
                if (mysqli_num_rows($result) > 0) {
                    echo "<div class='message'><p>Available flights:</p></div><br>";
                    echo "<form method='POST' action='conn.php'>"; // Assuming 'booking.php' is the action file
                    echo "<ul>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li><label><input type='checkbox' name='selected_flights[]' value='{$row['flight_id']}' required>";
                        echo " Flight from {$row['source']} to {$row['Destination']} on {$row['departure']} at {$row['Time']}</label></li>";
                    }
                    
                    echo "</ul>";
                    echo "<button type='submit'>Book Selected Flight</button>";
                    echo "</form>";}
                    
                else{
                    echo "<div class='message'>
                              <p>No available flights</p>
                          </div> <br>";
                    
                }
            }
            else{
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>

                <label for="destination">Destination</label>
                <input type="text" name="destination" id="destination" required>

                <label for="source">Source</label>
                <input type="text" name="source" id="source" required>

                <label for="date">Departure</label>
                <input type="date" name="departure" id="date" required>

                <button type="submit" name="submit">Search</button>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
