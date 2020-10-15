<?php
$hamburger          = 4.95;
$totalHamburger     = $hamburger * 2;
$chocolateMilkshake = 1.95;
$cola               = 0.85;
$taxRate            = 7.5;
$preTax             = 16;

$subTotal = $totalHamburger + $chocolateMilkshake + $cola;

$cutTax = ($subTotal * $taxRate) / 100;

$cutPreTax = ($cutTax * $preTax) / 100;

$totalCost = $subTotal + $cutTax + $cutPreTax;

?>
<!doctype html>
<html lang="en">
<head>
    <title>hw-1</title>
</head>
<body>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <th>No</th>
                <th>Items</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </thead>
            <tbody>
               <tr>
                   <td>1.</td>
                   <td><?php echo "Hamburger"; ?></td>
                   <td>$ <?php echo $hamburger; ?></td>
                   <td>2</td>
                   <td>$ <?php echo $totalHamburger; ?></td>
               </tr>
               <tr>
                   <td>2.</td>
                   <td><?php echo "Chocolate milkshake"; ?></td>
                   <td>$ <?php echo $chocolateMilkshake; ?></td>
                   <td>1</td>
                   <td>$ <?php echo $chocolateMilkshake; ?></td>
               </tr>
               <tr>
                   <td>3.</td>
                   <td><?php echo "Cola"; ?></td>
                   <td>$ <?php echo $cola; ?></td>
                   <td>1</td>
                   <td>$ <?php echo $cola; ?></td>
               </tr>
                <tr>
                    <td colspan="4">Total Price</td>
                    <td>$ <?php echo $subTotal; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Tax (7.5%)</td>
                    <td>$ <?php echo $cutTax; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Pre-tax (16%)</td>
                    <td>$ <?php echo $cutPreTax; ?></td>
                </tr>
                <tr>
                    <td colspan="4">Total Cost</td>
                    <td>$ <?php echo $totalCost; ?></td>
                </tr>
            </tbody>
        </table>

</body>
</html>