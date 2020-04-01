<?php include_once('./includes/header.php'); ?>
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">

<?php include_once('./includes/admin_panel.php'); ?>

<div class="clearfix"> </div><div class="page-container">

<?php include_once('./includes/sidebar.php'); ?>
<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height: 567px;">
            <div class="page-head margin-bottom-5">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Dashboard
                        <small>activities &amp; statistics</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- BEGIN PAGE BASE CONTENT -->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="javascript:;">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup">21</span>
                                    </div>
                                    <div class="desc"> Total users </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="javascript:;">
                                <div class="visual">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup">11</span></div>
                                    <div class="desc"> Active users </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="javascript:;">
                                <div class="visual">
                                    <i class="fa fa-user-times"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup">10</span>
                                    </div>
                                    <div class="desc"> Inactive User </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="portlet light bordered" style="padding-bottom: 3.5em;">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <span class="caption-subject font-green bold uppercase">Recent Signups</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered table-hover" id="userTable">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
                                                                                    <tbody><tr class="" id="row1">


                                                <td>Demo User</td>
                                                <td>demo</td>
                                                <td>demo@demo.com</td>
                                            </tr>
                                                                                    <tr class="" id="row2">


                                                <td>Keagan Ernser</td>
                                                <td>christop</td>
                                                <td>zoila46@yahoo.com</td>
                                            </tr>
                                                                                    <tr class="" id="row3">


                                                <td>Lee Koch III</td>
                                                <td>veronica</td>
                                                <td>oliver.turcotte@gmail.com</td>
                                            </tr>
                                                                                    <tr class="" id="row4">


                                                <td>Orlando Upton</td>
                                                <td>herbert</td>
                                                <td>qvolkman@gmail.com</td>
                                            </tr>
                                                                                    <tr class="" id="row5">


                                                <td>Mrs. Justine Kirlin V</td>
                                                <td>mustafa</td>
                                                <td>rahsaan97@collins.com</td>
                                            </tr>

                                    </tbody></table>

                                </div> <!-- /.table-responsive -->
                                <a href="./users.php">
                                <span class="pull-right btn btn-circle green btn-outline">
                                View More...
                            </span>
                                </a>
                            </div>

                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include_once('./includes/footer.php'); ?>
