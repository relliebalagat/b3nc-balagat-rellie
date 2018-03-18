<?php

session_start();

$page_title = 'Admin Page';

include 'partials/header.php';

// if($_SESSION['roles'] != "1") {
//     header('index.php');
// }

?>
    <link rel="stylesheet" type="text/css" href="assets/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">

</head>
<body>

	
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Book Repository</h3>
                    <strong>BR</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="loadOrders()">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Orders
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Items
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#" onclick="loadItems()">All</a></li>
                            <li><a href="#" onclick="loadItems('fiction')">Fiction</a></li>
                            <li><a href="#" onclick="loadItems('nonfiction')">Non Fiction</a></li>
                            <li><a href="#" onclick="loadItems('childrensbook')">Children's Book</a></li>
                            <li><a href="#" onclick="loadItems('textbook')">Textbook</a></li>
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
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="home.php">Home</a></li>
                                <li><a href="registration.php">Register a User</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#addItemModal">Add Item</a></li>
                                <li><a href="assets/logout.php">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
               
                <!-- items are viewed on this document -->
                <div id="document"></div>

                <!-- EDIT BOOK Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <form method="POST" action="assets/update_item.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                                </div>
                                <div class="modal-body" id="editItemModalBody">
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- Delete BOOK Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <form method="POST" action="assets/delete_item.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Delete Item</h4>
                                </div>
                                <div class="modal-body" id="deleteItemModalBody">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                 <!-- ADD ITEM BOOK Modal -->
                <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                       
                        <form method="POST" action="assets/add_item.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add an Item</h4>
                                </div>
                                <div class="modal-body" id="addItemModalBody">
                                    
                                    <div class="form-group">
                                        
                                        <label>Book Title</label>
                                        <input type="text" name="booktitle" class="form-control">

                                        <label>Author First Name</label>
                                        <input type="text" name="autfirstname" class="form-control">

                                        <label>Author Last Name</label>
                                        <input type="text" name="autlastname" class="form-control">

                                        <label>Book Description</label>
                                        <textarea name="description"></textarea>

                                        <label>Quantity</label>
                                        <input type="number" name="quantity" class="form-control">

                                        <label>Genre</label>
                                        <select name="genre" class="form-control">
                                            <option value="1">Fiction</option>
                                            <option value="2">Non Fiction</option>
                                            <option value="3">Children Book</option>
                                            <option value="4">Textbook</option>
                                        </select>

                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" step="0.01" placeholder="0.00">

                                        <label>Image</label>
                                        <input type="file" id="file" name="imagefile" multiple>
                                    </div>      
                                        
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add Item</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                

                <!-- Edit User Modal -->
                <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <form method="POST" action="assets/update_user.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                                </div>
                                <div class="modal-body" id="editUserModalBody">
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                 <!-- Delete User Modal -->
                <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <form method="POST" action="assets/delete_user.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Delete Item</h4>
                                </div>
                                <div class="modal-body" id="deleteUserModalBody">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- Edit Order Modal -->
                <div class="modal fade" id="editOrderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <form method="POST" action="assets/update_order.php">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Order</h4>
                                </div>
                                <div class="modal-body" id="editOrderModalBody">
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- View Order Details Modal -->
                <div class="modal fade" id="viewOrderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Order Complete Details</h4>
                            </div>
                            <div class="modal-body" id="orderItemModalBody">
                            
                            </div>
                            <div class="modal-footer">
            
                            </div>
                        </div>
                    </div>
                </div>


            


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

            function loadItems(genre) {
                var xhttp = new XMLHttpRequest()
                var url = "";
                
                if(genre === undefined) {
                    url = "assets/view_items.php";
                } else {
                    url = "assets/view_genre.php?genre=" + genre;
                }

                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("document").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", url, true);
                xhttp.send();
            }

            function editItem(number) {
                var xhttp = new XMLHttpRequest()

                url = "assets/edit_item.php?id=" + number;
                xhttp.open("GET", url, true);
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("editItemModalBody").innerHTML = this.responseText;
                    }
                };
                
                xhttp.send();
            }


            function deleteItem(number) {
                var xhttp = new XMLHttpRequest()

                var url = "assets/view_delete_item_modal.php?id=" + number;
                xhttp.open("GET", url, true);
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("deleteItemModalBody").innerHTML = this.responseText;
                    }
                };
                
                xhttp.send();
            }


            function editUser(number) {
                var xhttp = new XMLHttpRequest()

                url = "assets/edit_user.php?userid=" + number;
                xhttp.open("GET", url, true);
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("editUserModalBody").innerHTML = this.responseText;
                    }
                };
                
                xhttp.send();
            }


            function deleteUser(number) {
                var xhttp = new XMLHttpRequest()

                var url = "assets/view_delete_user_modal.php?userid=" + number;
                xhttp.open("GET", url, true);
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("deleteUserModalBody").innerHTML = this.responseText;
                    }
                };
                
                xhttp.send();
            }


            function loadOrders() {
                var xhttp = new XMLHttpRequest()
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("document").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "assets/view_orders.php", true);
                xhttp.send();
            }


             function editOrder(number) {
                var xhttp = new XMLHttpRequest()

                url = "assets/edit_order.php?orderid=" + number;
                xhttp.open("GET", url, true);
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("editOrderModalBody").innerHTML = this.responseText;
                    }
                };
                
                xhttp.send();
            }


            function loadOrderDetails(number) {
                var xhttp = new XMLHttpRequest()
                xhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("orderItemModalBody").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "assets/view_orders_items.php?order=" + number, true);
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


