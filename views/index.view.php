<?php
$title = "Home"; 
require('partials/header.php');?>
    <table id="table1">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
          </tr>
        <?php 
            $total = 0;
            foreach ($productsDB as $product){
                $subtotal = (float)$product->get_amount()*(float)$product->get_price();
                echo "<tr>";
                echo "<td>" . $product->get_name() . "</td>";
                echo "<td>" . $product->get_price() . "</td>";
                echo "<td>" . $product->get_amount() . "</td>";
                echo "<td>" . $subtotal . "</td>";
                echo "</tr>";
                $total = $total + $subtotal;
            }
        ?>
        <tr>
            <td colspan="3">Totaal</td>
            <td class="totalCost"><?php echo $total ?></td>
        </tr>
    </table>
    <script src="script.js"></script>
</body>
</html>