<?php


$employees = [
    ["name" => "Ahmed", "job" => "developer"],
    ["name" => "Halah", "job" => "developer"]
];

$products = [
    ["name" => "IPhone 11", "price" => "15,000 EGP"],
    ["name" => "IPhone 12", "price" => "18,000 EGP"]
];

$formatted_data = json_encode(
    ["employees" => $employees, "products" => $products]
);


file_put_contents("data.json", $formatted_data);

echo "done";