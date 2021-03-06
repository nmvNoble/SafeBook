<?php
$logged_user = $_SESSION['logged_user'];
    if (is_null($logged_user)){
        header("Location: http://localhost/SafebookBeta/signin");
        die();
    }
$unanswered = $logged_user->unanswered_invites + $logged_user->unanswered_requests;
?>
<?php 
   if (!isset($_SESSION)) {
         header("Location:http://localhost/SafebookBeta/signin/logout"); /* Redirect browser */
   }
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

<!-- Nav Bar -->



    <nav class = "navbar navbar-default navbar-font navbar-fixed-top" style = "box-shadow: 0px 1px 2px #ccc;">
        <div class = "container-fluid"  style="margin:0.5%;">
            <div class = "navbar-header" style = "margin-left: 50px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a id ="logom" class = "draggable navbar-brand" href = "<?php echo base_url('topic') ?>" style="font-weight: bold;color: white;font-size: 24px !important;">Safebook</a>
            </div>
            <div class = "collapse navbar-collapse" id = "nav-collapse">
                <div class = "nav-left-end">
                    <form action = "<?php echo base_url('search'); ?>" class="navbar-left" role = "search" method = "GET" style="width:30%; margin-top:0.555%; margin-left:1%; margin-right:4%;">
                        <span class="input-group">
                            <div class="input-group-btn" style="display: inline-block;">
                                <input required type="text" name = "search-key" class="form-control" placeholder="Search for ebooks" id="search" style="width: 400px; font-size: 22px">
                                <button class="btn btn-default search-btn tooltip1" type="submit">
                                    <i class="glyphicon glyphicon-search buttonsgo" style="cursor: pointer"></i><span class="tooltiptext1" style="width:150px;">Start search</span>
                                </button>
                            </div>
                        </span>
                    </form>
                </div>

                <div class="navbaricons2">
                    <a onclick="window.speechSynthesis.cancel();" id="logout-btn" class="navbaricons" href="<?php echo base_url('signin/logout'); ?>" style="margin-right:4%;"><i class = "glyphicon glyphicon-log-out iconin"></i>Logout
                        </a>
                            </a>
                    <div class="vl"  style="margin-right:0.3%;"></div>
                        <a class="navbaricons" href="<?php echo base_url('topic') ?>"><strong class="iconin"><i class = "glyphicon glyphicon-list iconin"></i>ebooks</strong></a>
                        <?php if ($logged_user->role_id==='1') {?>
                        <a class="navbaricons" href="<?php echo base_url('home') ?>"><strong class="iconin"><i id="home2" class = "glyphicon glyphicon-home iconin"></i></i>Home</strong></a>
                        <?php }  ?>
                       
                        <div class="navbarprofileicon">
                        <a class="text1color" style="color: white" href = "<?php echo base_url('user/profile/' . $logged_user->user_id); ?>">
                            <img class = "img-circle nav-prof-pic iconin" src = "<?php echo $logged_user->profile_url ? base_url($logged_user->profile_url) : base_url('images/default.jpg') ?>"/> 
                            <?php echo $logged_user->first_name; ?></div>
                        </a>

                </div>
            </div>
        </div>
    </nav>
<!-- Nav Bar Script -->
<script type="text/javascript" src="<?php echo base_url("/js/nav_bar.js"); ?>"></script>

<!-- End Nav Bar -->



<?php // include(APPPATH . 'views/modals/notifications_modal.php'); ?>
<?php // include(APPPATH . 'views/modals/customize_modal.php'); ?>