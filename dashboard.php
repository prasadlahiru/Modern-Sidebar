<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>dashboard</title>
</head>

<body>
    <div class="sidebar">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="appstore"></ion-icon>
                        </span>
                        <span class="text">My sidebar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-home'></i></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-cube-alt'></i></span>
                        <span class="text">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-truck'></i></span>
                        <span class="text">Deliveries</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-bar-chart-alt-2'></i></span>
                        <span class="text">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-message-square-detail'></i></span>
                        <span class="text">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings"></ion-icon>
                        </span>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-right-arrow-circle'></i></span>
                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--main-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class='bx bx-menu-alt-left'></i>
                </div>
            </div>
            <!--cards-->
            <div class="cardBox">
                <div class="card">
                    <div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="dashboard.js"></script>
</body>

</html>