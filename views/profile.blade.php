@include('layouts.template_start')
@include('layouts.page_head')


 <!-- Page content -->
                    <div id="page-content">

                    	

                        <!-- Forms Components Header -->
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>Profile settings</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li></li>
                                            <li><a href="">Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Forms Components Header -->

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

                    @if($errors->has('password'))
                       <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><strong>Information</strong></h4>
                                        <p>{{{  $errors->first('password') }}} </p>
                                </div>
                            </div>
                        </div>
                    @endif




                    <!-- end of alerts -->


                        <!-- Form Components Row -->
                        <div class="row">


                        	<!-- Channel settings -->
                            <div class="col-md-6">
                                <!-- Horizontal Form Block -->
                                <div class="block">
                                    <!-- Horizontal Form Title -->
                                    <div class="block-title">
                                        
                                        <h2>CHANNEL SETTINGS</h2>
                                    </div>
                                    <!-- END Horizontal Form Title -->

                                    <!-- Horizontal Form Content -->
                                    <form action=" {{ URL::route('dashboard-profile-post') }} " method="post" class="form-horizontal form-bordered">
 <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-hf-password">Channel type</label>
                                            <div class="col-md-9">

                                                <input type="text" id="example-hf-password" name="example-hf-password" class="form-control">

                                                <span class="help-block">Please enter your channel category</span>
                                            </div>
                                        </div>

 

                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                                            </div>
                                        </div>
                                        {{Form::token()}}
                                    </form>
                                    <!-- END Horizontal Form Content -->
                                </div>
                                <!-- END Horizontal Form Block -->
                            </div>




<!-- Channel settings -->














                        	<!-- Personal settings -->


                            <div class="col-md-6">
                                <!-- Horizontal Form Block -->
                                <div class="block">
                                    <!-- Horizontal Form Title -->
                                    <div class="block-title">
                                        
                                        <h2>PERSONAL SETTINGS</h2>
                                    </div>
                                    <!-- END Horizontal Form Title -->

                                    <!-- Horizontal Form Content -->
                                    <form action=" {{ URL::route('dashboard-profile-post') }} " method="post" class="form-horizontal form-bordered">
 <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-password">First Name</label>
                                            <div class="col-md-9">
                                                <input type="password" id="example-hf-password" name="example-hf-password" class="form-control">
                                                <span class="help-block">Please enter your first name</span>
                                            </div>
                                        </div>

 <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-password">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="password" id="example-hf-password" name="example-hf-password" class="form-control">
                                                <span class="help-block">Please enter your last name</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-email">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" id="example-hf-email" name="example-hf-email" class="form-control">
                                                <span class="help-block">Please enter your youtube email</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-email">Paypal Email</label>
                                            <div class="col-md-9">
                                                <input type="email" id="example-hf-email" name="example-hf-email" class="form-control">
                                                <span class="help-block">Please enter your email</span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-password">Old Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="example-hf-password" name="old_password" class="form-control">
                                                <span class="help-block">Please enter your password</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-hf-password">New Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="example-hf-password" name="password" class="form-control">
                                                <span class="help-block">Please enter a new password</span>
                                            </div>
                                        </div>

                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                                            </div>
                                        </div>
                                        {{Form::token()}}
                                    </form>
                                    <!-- END Horizontal Form Content -->
                                </div>
                                <!-- END Horizontal Form Block -->



@include('layouts.page_footer')
@include('layouts.template_scripts')
<!-- Load and execute javascript code used only in this page -->
<script src="{{ asset('js/pages/readyDashboard.js') }}"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>
@include('layouts.template_end')

