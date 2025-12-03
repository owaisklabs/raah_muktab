<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>A5 Height Invoice</title>

    <style>
        @page  {
            size: A4 portrait;
            margin: 5mm;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
        }

        .receipt-wrapper {
            width: 100%;
            height: 148mm; /* Half A4 height */
            border: 1px dashed #000; /* optional – cut line */
            padding: 10px;
            box-sizing: border-box;
        }

        img.logo {
            max-height: 60px;
            display: block;
            margin: 0 auto 10px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }

        td, th {
            border: 1px solid #000;
            padding: 4px;
            text-align: center;
        }

        .no-border td {
            border: none !important;
        }

        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="receipt-wrapper">

    <img src="<?php echo e(asset('assets/images/logo/logo_receipt.png')); ?>" class="logo">

    <table class="no-border">
        <tr>
            <td><strong>Invoice:</strong> #<?php echo e($sale->invoice_no); ?></td>
            <td><strong>Date:</strong> <?php echo e($sale->created_at->format('d/m/Y | H:i')); ?></td>
            <td><strong>Customer:</strong> <?php echo e($sale->customer_name ?? "-"); ?></td>
        </tr>
    </table>

    <table>
        <thead>
        <tr>
            <th>Product</th><th>Qty</th><th>Price</th><th>Discount %</th><th>Total</th>
        </tr>
        </thead>

        <tbody>
        <?php
            $discountTotal = 0;
            $lineTotal = 0;
        ?>

        <?php $__currentLoopData = $sale->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->book->title ?? "-"); ?></td>
                <td><?php echo e($item->quantity); ?></td>
                <td><?php echo e(number_format($item->unit_price,2)); ?></td>
                <td><?php echo e($item->discount); ?>%</td>
                <td><?php echo e(number_format($item->total,2)); ?></td>
            </tr>

            <?php
                $discount = $item->line_total - $item->total;
                $discountTotal += $discount;
                $lineTotal += $item->line_total;
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <tr><td colspan="4"><strong>Total</strong></td><td><?php echo e(number_format($lineTotal,2)); ?></td></tr>
        <tr><td colspan="4"><strong>Discount</strong></td><td><?php echo e(number_format($discountTotal,2)); ?></td></tr>
        <tr><td colspan="4"><strong>Grand Total</strong></td><td><?php echo e(number_format($sale->total_amount,2)); ?></td></tr>
        </tbody>
    </table>

    <div class="footer">
        The Project of <strong>Raah Welfare Foundation Trust</strong><br>
        <strong>Address:</strong> Shama Plaza, Kharadar, Karachi
    </div>

</div>

<script>
    window.print();
</script>

</body>
</html>
<?php /**PATH C:\laragon\www\raah_muktab\resources\views/reports/sale-receipt-a5.blade.php ENDPATH**/ ?>