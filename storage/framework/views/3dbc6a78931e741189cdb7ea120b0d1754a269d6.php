<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>58mm Invoice</title>
    <style>
        /* Thermal printer settings */
        body {
            width: 58mm;
            font-family: Arial, sans-serif;
            font-size: 10px;
            margin: 0;
            padding: 0;
        }


        .invoice {
            padding: 2mm;
        }

        h2, h3 {
            text-align: center;
            margin: 2px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 2px 0;
        }

        th, td {
            text-align: left;
            padding: 2px 0;
        }

        th {
            border-bottom: 1px dashed #000;
        }

        .totals td {
            border-top: 1px dashed #000;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .small {
            font-size: 8px;
        }
    </style>

</head>
<body>
<div class="invoice">
    <h2>Maktaba Muslehuddin </h2>
    <p class="small">Date: <?php echo e($sale->created_at->format('d/m/Y | H:i')); ?><br>
        Invoice #: <?php echo e($sale->invoice_no); ?><br>
        Customer: <?php echo e($sale->customer_name ?? "-"); ?></p>
    <table>
        <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Dis%</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $discountTotal=0;
            $lineTotal=0;
        ?>
        <?php if(isset($sale->items)): ?>
            <?php $__currentLoopData = $sale->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->book->title ?? "-"); ?></td>
                <td ><?php echo e($item->quantity); ?></td>
                <td ><?php echo e(number_format($item->unit_price,2)); ?></td>
                <td ><?php echo e($item->discount); ?>%</td>
                <td ><?php echo e(number_format($item->total,2)); ?></td>
                <?php
                    $discount = $item->line_total - $item->total;
                    $discountTotal += $discount;
                    $lineTotal += $item->line_total;
                ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>


        </tbody>
    </table>

    <table class="totals">
        <tr>
            <td>Subtotal</td>
            <td class="right"><?php echo e(number_format($lineTotal,2)); ?></td>
        </tr>
        <tr>
            <td>Discount</td>
            <td class="right"><?php echo e(number_format($discountTotal,2)); ?></td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td class="right"><strong><?php echo e(number_format($sale->total_amount,2)); ?></strong></td>
        </tr>
    </table>

    <p style="text-align:center; margin-top:10px;">The Project of <strong>Raah Welfare Foundation Trust</strong></p>
    <p style="text-align:center;"><strong>Address</strong>: Shama Plaza Near Musalla Muslehuddin, G Allana Road, Kharadar Karachi</p>
</div>


</body>
</html>
<?php /**PATH C:\laragon\www\raah_muktab\resources\views/reports/sale-receipt-thermal.blade.php ENDPATH**/ ?>