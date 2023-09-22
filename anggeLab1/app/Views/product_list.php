<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products by Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        body{
            background-color: grey;
        }
        /* .container{
            display: flex;
            flex-direction: column;
            height: 70vh;
            width: 300vh;
            justify-content: center;
            border: 1px solid black;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: inset -5px -5px rgba(0, 0, 0, 0.5);
            border-radius: 25px;
        }
         */
        .card-header{
            color: black;
            font-size: 2rem;
            border-bottom: 4px solid rgba(255, 255, 255, 0.5);
            text-align: center;
            background-color: whitesmoke ;
        }
        .label{
            color: white;
        }
        .row{
            padding: 10px 20px;
            margin-top: 5px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 1rem;
        }
        .card{
            padding: 10px 20px;
            margin-top: 5px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 20px;
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 1rem;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Products with Category: <?= $category ?></h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['ProductName'] ?></td>
                    <td><?= $p['ProductDescription'] ?></td>
                    <td><?= $p['ProductQuantity'] ?></td>
                    <td><?= $p['ProductPrice'] ?></td>
                </tr>
             <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-4j+3s1Pj8w6t4+XW3UvI3/5XpGy9Gg5xKv+Z6a7u8z5w+qQ9zJQzUew+0R6wXpG" crossorigin="anonymous"></script>
</body>
</html>
