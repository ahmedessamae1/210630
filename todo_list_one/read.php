<?php

$data = file_get_contents("data.json");
$decoded_data = json_decode($data, true);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Employees</h2>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Employee Job</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($decoded_data['employees'] as $data) {
                        echo "
                            <tr>
                                <td>".$data['name']."</td>
                                <td>".$data['job']."</td>
                            </tr>
                        ";
                    }
                ?>
                <?php
                    foreach($decoded_data['products'] as $data) {
                        echo "
                            <tr>
                                <td>".$data['name']."</td>
                                <td>".$data['price']."</td>
                            </tr>
                        ";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
