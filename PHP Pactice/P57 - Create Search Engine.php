<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From - Data Show</title>
    <!-- Bootstrap 5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Style.css" type="text/css">

    <style>
        .col-sm-7{
            margin: auto;
            margin-top: 20px;
        }
        table{
            width: 400px;
        }
        form{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                    Search Here: <input type="search" name="search_text" id="">
                    <input type="submit" value="Search" name="submit">
                </form>

                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'jahid');
                    if(isset($_GET['search_text'])){
                        $search_text = $_GET['search_text'];
                        $sql = "SELECT * FROM product WHERE product_name LIKE '$search_text'";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query)){
                            echo "<table class='table table-dark table-hover'>
                                    <tr>
                                        <th>Product Id - </th>
                                        <th>Product Name - </th>
                                        <th>Product Code - </th>
                                    </tr>";
                            while($data = mysqli_fetch_assoc($query)){
                                $product_id = $data['product_id'];
                                $product_name = $data['product_name'];
                                $product_code = $data['product_code'];
                                echo "<tr>
                                        <td>$product_id</td>
                                        <td>$product_name</td>
                                        <td>$product_code</td>
                                    </tr>";
                            }
                            echo "</table>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>
</html>

