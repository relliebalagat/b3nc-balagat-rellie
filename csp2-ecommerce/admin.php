<?php

$page_title = 'Admin Page';

include 'partials/header.php';

?>
    <link rel="stylesheet" type="text/css" href="assets/css/sidebar.css">

</head>
<body>

	
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Still no name for Project</h3>
                    <strong>BS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Orders
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Items
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#" onclick="loadItems()">All</a></li>
                            <li><a href="#">Fiction</a></li>
                            <li><a href="#">Non Fiction</a></li>
                            <li><a href="#">Children's Book</a></li>
                            <li><a href="#">Textbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onclick="loadUser()">
                            <i class="glyphicon glyphicon-user"></i>
                            Users
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-signal"></i>
                            Data
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-ok"></i>
                            Wishlist
                        </a>
                    </li>
                   <!--  <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-knight"></i>
                            Kickass
                        </a>
                    </li> -->
                </ul>

               <!--  <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul> -->
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2>Collapsible Sidebar Using Bootstrap 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div id="document"></div>

                
            </div> <!-- ./content -->
        </div>

        <script type="text/javascript">
        
            function loadUser() {
                var xhttp = new XMLHttpRequest()
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("document").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "assets/view_users.php", true);
                xhttp.send();
            }

            function loadItems() {
                var xhttp = new XMLHttpRequest()
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("document").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "assets/view_items.php", true);
                xhttp.send();
            }

        </script>

         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>

</body>
</html>
