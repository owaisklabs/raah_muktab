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
    <h2>Store Name</h2>
    <h3>Invoice</h3>


    <p class="small">Date: 01/12/2025<br>
        Invoice #: 000123<br>
        Customer: John Doe</p>

    <table>
        <thead>
        <tr>
            <th>Item</th>
            <th class="center">Qty</th>
            <th class="right">Price</th>
            <th class="right">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Product 1</td>
            <td class="center">2</td>
            <td class="right">10.00</td>
            <td class="right">20.00</td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td class="center">1</td>
            <td class="right">15.00</td>
            <td class="right">15.00</td>
        </tr>
        </tbody>
    </table>

    <table class="totals">
        <tr>
            <td>Subtotal</td>
            <td class="right">35.00</td>
        </tr>
        <tr>
            <td>Discount</td>
            <td class="right">0.00</td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td class="right"><strong>35.00</strong></td>
        </tr>
    </table>

    <p class="center small">Thank you for your purchase!</p>
</div>


</body>
</html>
