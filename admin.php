

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashtech</title>
    <link rel="stylesheet" href="admin.css" />
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
    </ul>
    </div>

    <div class="home_content">
        <div class="text">
            <header id="showcase" class="container">
                <h1>Welcome to my website</h1>
            </header>
            <div id="content" class="container">
                <h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit natus sed neque? Nostrum
                    praesentium inventore sit soluta, voluptates officia in repellendus, laudantium cupiditate
                    itaque officiis culpa corporis at veritatis dignissimos? Placeat, iure cum beatae doloremque
                    molestiae possimus, explicabo, accusantium minus consequatur aperiam culpa deleniti fugit
                    reprehenderit odio animi laboriosam aut.
                </h5>
                <a href="#" class="btn">Read More</a>

            </div>
        </div>
    </div>



    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>

</body>

<body>


</body>

</html>