<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>



        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->



        <?php include("includes/top_nav.php") ?>

        



            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           

    
        <?php include("includes/side_nav.php"); ?>




            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Users sdj
                             
                        
                        </h1>
                          <p class="bg-success">
                            <?php echo $message; ?>
                        </p>

                        <a href="add_user.php" class="btn btn-primary">Add User</a>


                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name </th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php //foreach($users as $user): ?>

                                    <tr>

                                    	<td><?php echo $user_name->id; ?> </td>
                                        <td><img class="admin-user-thumbnail user_image" src="<?php echo $user_name->image_path_and_placeholder(); ?>" alt=""></td>
                                        
                                        <td><?php echo $user_name->username; ?>
                                        	  <div class="action_links">

                                                <a href="delete_user.php?id=<?php echo $user_name->id; ?>">Delete</a>
                                                <a href="edit_user.php?id=<?php echo $user_name->id; ?>">Edit</a>
                    
                                                
                                            </div>
                                        </td>
                                        
                                        
                                        <td><?php echo $user_name->first_name; ?></td>
                                       <td><?php echo $user_name->last_name; ?></td>
                                    </tr>


                                <?php //endforeach; ?>


                                    
                                    
                                </tbody>
                            </table> <!--End of Table-->
                        

                        </div>










                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>