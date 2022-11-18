<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice PDF Download</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    



    <!-- invoice -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Billing Address</h4>
                <hr style="background-color: gray;">
                <p>Customer Name: {{ $userInfo->name }}</p>
                <p class="">Customer Address</p>
                <p>Customer Phone</p>
                <p>Customer Email</p>
            </div>
        </div>
        <div class="row">
            <table align="center" style="width:100%">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Amount</th>
                </tr>
                @php
                    $total=0;
                @endphp
                
                @foreach ($userCart as $item)
                    
                
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $qty=$item->qty }}</td>
                    <td>{{ $price=$item->price }}</td>
                    <td>{{ $amount=$qty*$price }}</td>
                </tr>

                @php
                
                $subTotal=$amount+$total;
                $total=$subTotal+10;
                @endphp

                @endforeach
                
                
                <tr>
                    <th colspan="3">Sub-Total</th>
                    <td>{{ $subTotal }}</td>
                </tr>
                <tr>
                    <th colspan="3">Bkash Charge</th>
                    <td>10</td>
                </tr>
                <tr>
                    <th colspan="3">Payment Method</th>
                    <td>Bkash</td>
                </tr>
                <tr>
                    <th colspan="3">Total Price</th>
                    <td>1210</td>
                </tr>

            </table>
        </div>
        
    </div>


</body>
</html>