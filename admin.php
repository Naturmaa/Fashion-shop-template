
<?php
    require_once("../crud/php/component.php");
    require_once("../crud/php/operation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion shop admin page</title>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded">ONLINE FASHION SHOP</h1>


            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="pt-2">
                        <?php inputElement("ID","","book_id");?>
                    </div>
                    <div class="pt-2">
                        <?php inputElement("Product Name","","book_name"); ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php inputElement("Product size", "", "book_publisher"); ?>
                        </div>
                        <div class="col">
                            <?php inputElement("Price", "", "book_price"); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create", "btn btn-success", "Create", "create", "data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read", "btn btn-primary", "Read", "read", "data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update", "btn btn-light border", "Update", "update", "data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete", "btn btn-danger border", "Delete", "delete", "data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <a href="index.php" style="text-decoration:none; padding:8px 30px; background-color: pink; color: black; border: 1px solid #fff; height: 50%; margin-top: 24px; border-radius: 3px;
                        ">SHOP</a>
                    </div>
                </form>
            </div>

            <!-- Bootstrap table -->

            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Size</th>
                            <th>Product Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php
                            $result = NULL;
                            if(isset($_POST['read'])){
                                $result = getData();
                            }
                            if($result){

                                while($row = mysqli_fetch_assoc($result)){?>

                                    <tr>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id'];?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_name'];?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_publisher'];?></td>
                                        <td data-id="<?php echo $row['id']; ?>"><?php echo '$'.$row['book_price'];?></td>
                                        <td ><button class="btnedit" data-id="<?php echo $row['id']; ?>">Edit</button></td>
                                    </tr>

                                    <?php
                                }

                            }
                        ?>
                    </tbody>
                </table>
            </div>



        </div>
    </main>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../crud/php/main.js"></script>

</body>
</html>