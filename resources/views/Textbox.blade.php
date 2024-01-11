<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: rgb(37, 37, 113);
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: rgb(37, 37, 113);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: rgb(26, 26, 98);
        }
    </style>
    </head>
    <body>
    <h1 style="color:rgb(37, 37, 113) ;"> ตารางแม่สูตรตูณ  </h1>
     <p> กรอกตัวเลข </p>
     <form action="{{ route('pageInput') }}"method="get">
        <input type="text"id = "number" name="number"><br>
        <br>
        กด Enter เพื่อยืนยันตัวเลข
        
     </form>
        
    </body>
</html>