@include('layouts.template_start')
@include('layouts.page_head')

      <!-- Page content -->
                    <div id="page-content">

                        <!-- alerts -->
                         @if(Session::has('global'))
                      <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="alert alert-{{Session::get('global_tag')}} alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><strong>Information</strong></h4>
                                        <p>{{{ Session::get('global') }}} </p>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- end of alerts -->
                        <!-- First Row -->
                        <div class="row">
                            <!-- Simple Stats Widgets -->
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini themed-background-success text-light-op">
                                        <i class="fa fa-clock-o"></i> <strong>Today</strong>
                                    </div>
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="gi gi-user text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
                                            <i class="fa fa-plus"></i> <strong><span data-toggle="counter" data-to="2862"></span></strong>
                                        </h2>
                                        <span class="text-muted">VIEWS</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini themed-background-warning text-light-op">
                                        <i class="fa fa-clock-o"></i> <strong>Today</strong>
                                    </div>
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="gi gi-briefcase text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-warning">
                                            <i class="fa fa-plus"></i> <strong><span data-toggle="counter" data-to="75"></span></strong>
                                        </h2>
                                        <span class="text-muted">VIEWS</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini themed-background-danger text-light-op">
                                        <i class="fa fa-clock-o"></i> <strong>Last Month</strong>
                                    </div>
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="gi gi-wallet text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-danger">
                                            <i class="fa fa-dollar"></i> <strong><span data-toggle="counter" data-to="5820"></span></strong>
                                        </h2>
                                        <span class="text-muted">EARNINGS</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini themed-background text-light-op">
                                        <i class="fa fa-clock-o"></i> <strong>Last Month</strong>
                                    </div>
                                    <div class="widget-content text-right clearfix">
                                        <div class="widget-icon pull-left">
                                            <i class="gi gi-cardio text-muted"></i>
                                        </div>
                                        <h2 class="widget-heading h3">
                                            <strong><span data-toggle="counter" data-to="6000000"></span></strong>
                                        </h2>
                                        <span class="text-muted">VIEWS</span>
                                    </div>
                                </a>
                            </div>
                            <!-- END Simple Stats Widgets -->
                        </div>
                        <!-- END First Row -->

                        <!-- Second Row -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-8">
                                <!-- Chart Widget -->
                                <div class="widget">
                                    <div class="widget-content widget-content-mini themed-background-dark text-light-op">
                                        <span class="pull-right text-muted">2014</span>
                                        <i class="fa fa-fw fa-database"></i> <strong>Admin Notifications</strong>
                                    </div>
                                    <div class="widget-content themed-background-muted">
                                        <!-- nofication --> 
                                        <div class="alert alert-info alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><strong>Information</strong></h4>
                                        <p>{{{$notification['notification']}}} by {{{$notification['user']}}}</p>
                                   		 </div>

                                    </div>
                                    
                                </div>
                                <!-- END Chart Widget -->
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <!-- Stats User Widget -->
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini themed-background-dark text-light-op">
                                        <i class="fa fa-fw fa-trophy"></i> <strong>Creator of the day</strong>
                                    </div>
                                    <div class="widget-content text-center">
                                        <img src="img/placeholders/avatars/avatar13@2x.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                                        <h2 class="widget-heading h3 text-muted">CreativeGamerz</h2>
                                    </div>
                                    <div class="widget-content themed-background-muted text-dark text-center">
                                        <strong>Logo Designer</strong>, Sweden
                                    </div>
                                    <div class="widget-content">
                                        <div class="row text-center">
                                            <div class="col-xs-6
                                                <h3 class="widget-heading"><i class="gi gi-charts text-primary"></i> <br><small>58k Subscribers</small></h3>
                                            </div>
                                            <div class="col-xs-6
                                                <h3 class="widget-heading"><i class="gi gi-heart_empty text-danger push-bit"></i> <br><small>19mill views</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Stats User Widget -->

                                <!-- Mini Widgets Row -->
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="javascript:void(0)" class="widget text-center">
                                            <div class="widget-content themed-background-info text-light-op text-center">
                                                <div class="widget-icon center-block push">
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                                <strong>6k Likes</strong>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="javascript:void(0)" class="widget">
                                            <div class="widget-content themed-background-danger text-light-op text-center">
                                                <div class="widget-icon center-block push">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <strong>3k Followers</strong>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- END Mini Widgets Row -->
                            </div>
                        </div>
                        <!-- END Second Row -->

                        <!-- Third Row -->
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                                                    </div>
                            </div>
                        </div>
                        <!-- END Third Row -->
                    </div>
                    <!-- END Page Content -->


@include('layouts.page_footer')
@include('layouts.template_scripts')
<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>
@include('layouts.template_end')



