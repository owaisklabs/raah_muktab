<!DOCTYPE html>

<html>
<head>
    <title>A5 Receipt</title>


    <style>
        @page {
            size: A5 landscape;
            margin: 10mm;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .receipt {
            width: 100%;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        img.logo {
            max-height: 80px;
            margin-bottom: 10px;
        }

        td, th {
            padding: 4px;
        }
    </style>
    <script>
        window.print();
    </script>


</head>
<body>
<div class="receipt">
    <img src="https://raahwelfare.com/img/Logo%20Raah.png" alt="Raah Logo" class="logo">

    <table style="width:100%; border-collapse:collapse;">
        <tr style="border:none;">
            <td style="border:none; padding:4px;">
                <strong>Invoice:</strong> #{{ $sale->invoice_no }}
            </td>
            <td style="border:none; padding:4px;">
                <strong>Date:</strong> {{ $sale->created_at->format('d/m/Y | H:i') }}
            </td>
            <td style="border:none; padding:4px;">
                <strong>Customer:</strong> {{ $sale->customer_name ?? "-" }}
            </td>
        </tr>
    </table>

    <table border="1" cellpadding="6">
        <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Discount %</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @php
            $discountTotal=0;
            $lineTotal=0;
        @endphp
        @if(isset($sale->items))
            @foreach($sale->items as $item)
                <tr>
                    <td style="text-align:center">{{$item->book->title ?? "-"}}</td>
                    <td style="text-align:center">{{$item->quantity}}</td>
                    <td style="text-align:center">{{number_format($item->unit_price,2)}}</td>
                    <td style="text-align:center">{{$item->discount}}%</td>
                    <td style="text-align:center">{{number_format($item->total,2)}}</td>
                    @php
                        $discount = $item->line_total - $item->total;
                        $discountTotal += $discount;
                        $lineTotal += $item->line_total;
                    @endphp
                </tr>
            @endforeach
        @endif

        <tr>
            <td colspan="4"><strong>Total</strong></td>
            <td>{{number_format($lineTotal,2)}}/-</td>
        </tr>
        <tr>
            <td colspan="4"><strong>Discount</strong></td>
            <td>{{number_format($discountTotal,2)}}/-</td>
        </tr>
        <tr>
            <td colspan="4"><strong>Grand Total</strong></td>
            <td>{{number_format($sale->total_amount,2)}}/-</td>
        </tr>
        </tbody>
    </table>

    <p style="text-align:center; margin-top:10px;">Project of <strong>Raah Welfare Trust Foundation</strong></p>
    <p style="text-align:center;"><strong>Address</strong>: Shama Plaza D3, G Allana Road, Kharadar</p>


</div>

<script>
    window.print();
</script>

</body>
</html>
