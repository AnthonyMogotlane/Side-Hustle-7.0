<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Voting System</title>
</head>

<body>
    <style>
        .success {
            color: green;
        }

        .danger {
            color: red;
        }
    </style>
    <?php
    // Array of voters
    $voters = array(
        "Maja" => array("age" => "15", "pvc" => false, "ward" => 020),
        "Lolo" => array("age" => "23", "pvc" => false, "ward" => 020),
        "William" => array("age" => "25", "pvc" => true, "ward" => 040),
        "Anthony" => array("age" => "45", "pvc" => true, "ward" => 020)
    );
    // Check if a voter is eligible to vote
    foreach ($voters as $key => $value) {
        if ($value["age"] > 18 && $value["pvc"] == true && $value["ward"] == 020) {
            echo "<b>" . $key . "</b>" . ":<span class='success'> Is eligible to vote.</span>";
        } else {
            if ($value["age"] < 18) {
                echo "<b>" . $key . "</b>" . ":<span class='danger'> Is not eligible to vote, under age.</span>";
            } elseif ($value["pvc"] == false) {
                echo "<b>" . $key . "</b>" . ":<span class='danger'> Is not eligible to vote, doesn't have PVC.</span>";
            } elseif ($value["ward"] != 020) {
                echo "<b>" . $key . "</b>" . ":<span class='danger'> Is not eligible to vote, ward not 020.</span>";
            }
        }
        echo "<br />";
    }
    ?>
</body>

</html>