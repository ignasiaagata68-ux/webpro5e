<?php
//create connection
include 'connect.php';

//read one recoard by id
// $sql ="SELECT * FROM products WHERE id=1";
// $result = $conn->query($sql);

//read one recoard by name
// $sql ="SELECT * FROM products WHERE name='keyboard'";
// $result = $conn->query($sql);

//read one recoard by price
$sql ="SELECT * FROM products WHERE price='150000'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//View data
echo "ID:" . $row['id'] . "<br>";
echo "Name:". $row['name'] . "<br>";
echo "Description:" . $row['description'] . "<br>";
echo "Price:" . $row['price'] . "<br>";
echo "Created:" . $row['created'] . "<br><br>";

echo "<strong>ID:</strong>" . $row['id'] . " Name:". $row['name'] . " Description:" . $row['description'] . " Price:" . $row['price'] . " Created:" . $row['created'] . "<br><br>";

echo "<a href='form_input_product.php'>Add product";
echo "<table border=1>
    <tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Created</th></tr>
    <tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['price'] . "</td><td>" . $row['created'] . "</td></tr>
</table>";

//close connection
$conn->close();
?>