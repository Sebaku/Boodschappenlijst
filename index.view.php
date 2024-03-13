<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boodschappenlijst</title>
</head>
<body>
    <table id="table1">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
          </tr>
        <tr>
            <td>Brood <? echo $product1?></td>
            <td class="productPrice">1.00</td>
            <td><input type="number" value="0" class="productQuantity"></td>
            <td class="productTotalCost">0.00</td>
        </tr>
        <tr>
            <td>Broccoli</td>
            <td class="productPrice">0.99</td>
            <td><input type="number" value="0" class="productQuantity"></td>
            <td class="productTotalCost">0.00</td>
        </tr>
        <tr>
            <td>Krentebollen</td>
            <td class="productPrice">1.20</td>
            <td><input type="number" value="0" class="productQuantity"></td>
            <td class="productTotalCost">0.00</td>
        </tr>
        <tr>
            <td>Noten</td>
            <td class="productPrice">2.99</td>
            <td><input type="number" value="0" class="productQuantity"></td>
            <td class="productTotalCost">0.00</td>
        </tr>
        <?php 
            foreach ($productsDB as $product){
                echo "<tr>";
                echo "<td>" . $product->get_name() . "</td>";
                echo "<td>" . $product->get_amount() . "</td>";
                echo "<td>" . $product->get_price() . "</td>";
                echo "<td>" . (float)$product->get_amount()*(float)$product->get_price() . "</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td colspan="3">Totaal</td>
            <td class="totalCost">0.00</td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>
</html>