<!DOCTYPE html>
<html>

<head>

    <style>
        html {
            margin: 0px;
            padding: 0px;
            line-height: 100%;
        }

        h2,
        p {
            margin: 0px;
            padding: 0px;
        }

        body {
            /* font-family: Helvetica, sans-serif; */
            font-size: 14px;
            font-weight: 500;
            margin: 5mm;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        td {
            padding: 3px;
        }
    </style>
</head>

<body>
    <div style="text-align:center;">
        <h2>Bajaj Point</h2>
        <p style="margin:5px 0px;">Daily Sale (VAT)</p>
    </div>


    <table>
        <tr>
            <th>Sl</th>
            <th>Model</th>
            <th>Sale Date</th>
            <th>Chassis</th>
            <th>Engine</th>
            <th>M.Sl</th>
            <th>Customer Name</th>
            <th>Basic Price</th>
            <th>VAT</th>
            <th>MRP</th>
        </tr>
        @for ($i = 0; $i < 100; $i++) <tr>
            <td class="center">{{$i+1}}</td>
            <td>AVENGER STREET 160</td>
            <td class="center">01-10-2021</td>
            <td class="center">80514</td>
            <td class="center">61054</td>
            <td class="center">269</td>
            <td>TASKIN IBNA ALI</td>
            <td class="right">2,00,435</td>
            <td class="right">30,065</td>
            <td class="right">2,30,500</td>
            </tr>
            @endfor
    </table>

</body>

</html>