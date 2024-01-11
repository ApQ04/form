<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            margin: 0;
            padding: 20px;
        }

        .table-container {
            height: 500px;
            overflow: auto;
            width: 400px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        table {
            width: 100%;
            margin: 0;
            padding: 0;
            border-spacing: 0;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            background-color: #f2f2f2;
        }

        h1 {
            margin: 0;
            padding: 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px 5px 0 0;
        }
    </style>
    <title>Multiplication Tables</title>
</head>

<body>
    <div class="table-container">
        <?php $multi_x = $inputNumber; ?>
        <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        <table>
            <thead>
                <tr>
                    <th>Multiplier</th>
                    <th>x</th>
                    <th>Multiplier</th>
                    <th>=</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 12; $i++) : ?>
                    <tr>
                        <td><?php echo $multi_x ?></td>
                        <td>x</td>
                        <td><?php echo $i ?></td>
                        <td>=</td>
                        <td><?php echo $multi_x * $i ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
