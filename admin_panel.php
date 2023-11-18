<?php

$conn = new  mysqli('localhost', 'root', '', 'product');

$sql_featured = "SELECT * FROM all_products";
$item  = $conn->query($sql_featured);

$sql_cart = "SELECT * FROM cart";
$cartItem  = $conn->query($sql_cart);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashtech</title>
    <link rel="stylesheet" href="admin_product.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" />
</head>

<body>
    <div class="sidebar active">
        <div class="logo_content">
            <a href="index.php">
                <div class="logo">
                    <div class="logo_name"><img src="img/logo.png" /></div>
                </div>
            </a>
            <i class="fa-solid fa-ellipsis" id="btn"></i>
        </div>

        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class="fa-solid fa-box"></i>
                    <span class="links_name">Products</span>
                </a>
                <span class="tooltip">Products</span>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-users"></i>
                    <span class="links_name">Customers</span>
                </a>
                <span class="tooltip">Customers</span>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <span class="links_name">Orders</span>
                </a>
                <span class="tooltip">Orders</span>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-message"></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-user-check"></i>
                    <span class="links_name">Employees</span>
                </a>
                <span class="tooltip">Employees</span>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-file-invoice"></i>
                    <span class="links_name">Accounts</span>
                </a>
                <span class="tooltip">Accounts</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="links_name">Sign Out</span>
                </a>
                <span class="tooltip">Sign Out</span>
            </li>

            <li>
                <div>
                    <a href="#">
                        <img src="img/people/1.png" width="50px" alt="">
                        <span class="links_name">Mahfuj</span>
                    </a>
                    <span class="tooltip">Mahfuj</span>
                </div>
            </li>
        </ul>
    </div>


    <div class="home_content">
        <section class="display-product-table">

            <table>
                <thead>
                    <th>product image</th>
                    <th>product brand</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>product rating</th>
                    <th>action</th>
                </thead>

                <tbody>
                    <?php

                    if (mysqli_num_rows($item) > 0) {
                        while ($row = mysqli_fetch_assoc($item)) { ?>
                            <tr>
                                <td>
                                    <img src="img/products/<?php echo $row["image"] ?>" alt="">
                                </td>
                                <td><?php echo $row["brand"] ?></td>
                                <td><?php echo $row["name"] ?></td>
                                <td>৳<?php echo $row["price"] ?></td>
                                <td><?php echo $row["rating"] ?></td>
                                <td>
                                    <button name="edit" class="edit_db">
                                        <i data-id="<?php echo $row["id"] ?>" class="fas fa-edit"></i>
                                    </button>
                                    <button class="dlt_db">
                                        <i data-id="<?php echo $row["id"] ?>" class="fa-regular fa-trash-can"></i>
                                    </button>

                                </td>

                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="7"> <span>No item in Database</span></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            
            <?php
            if (isset($_POST['edit'])) {
                echo "colsol.log('button clicked')";
            }
            ?>

        </section>


    </div>



    <!-- <script src="updateproduct.js"></script> -->
    <script src="dlt_pro_db.js"></script>
    <script src="cart.js"></script>
</body>



</html>