<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Description</th> 
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
        </tr>
        <?php
        $conn = new mysqli("localhost", "root", "", "dbmodal");
        if (isset($_GET['Pasta']) and isset($_GET['Pizza'])) { 
            $code1 = uniqid();
            $code2 = uniqid();
            $amount1 = $_GET['pizzaQty'] * 500;
            $amount2 = $_GET['pastaQty'] * 200;
            $conn->query("INSERT INTO tblmodal (fldcode, flddesc, fldprice, fldquantity, fldamount) VALUES ('$code1', 'Pizza', '500', '$_GET[pizzaQty]', '$amount1')");     
            $conn->query("INSERT INTO tblmodal (fldcode, flddesc, fldprice, fldquantity, fldamount) VALUES ('$code2', 'Pasta', '200', '$_GET[pastaQty]', '$amount2')");     
        }elseif (isset($_GET['Pasta']) or isset($_GET['Pizza'])) {
            $description = "";
            $price = 0; 
            if (isset($_GET['Pizza'])) {
                $description = "Pizza";
                $quantity = $_GET['pizzaQty']; 
                $price = 500; 
                $amount = $quantity * $price; 
            } elseif (isset($_GET['Pasta'])) {
                $description = "Pasta";
                $quantity = $_GET['pastaQty'];
                $price = 200; 
                $amount = $quantity * $price; 
            } 
            $code = uniqid();
            $conn->query("INSERT INTO tblmodal (fldcode, flddesc, fldprice, fldquantity, fldamount) VALUES ('$code', '$description', '$price', '$quantity', '$amount')");     
        }
        $result = $conn->query("SELECT * FROM tblmodal"); 
        $totalAmount = 0; 
        while ($row = $result->fetch_assoc()) {
            $totalAmount += $row['fldamount'];
            echo "<tr>
            <td>{$row['fldcode']}</td>
            <td>{$row['flddesc']}</td>
            <td>{$row['fldquantity']}</td>
            <td>{$row['fldprice']}</td>
            <td>{$row['fldamount']}</td>
            </tr>";
        } 
        echo "<tr> 
        <td colspan='4'><strong>Total:</strong></td>
        <td>$totalAmount</td>
        </tr>";
        ?>
    </table>
</body>
</html>
