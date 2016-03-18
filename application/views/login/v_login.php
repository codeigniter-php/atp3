<div class="container">
    <div class="row">
    
    <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to MakeUp class portal</h1>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url();?>assets/img/aiub.png?sz=120"
                    alt="">
                <form class="form-signin" id="configform" method="post" action="<?php echo base_url();?>Login/check_login">
                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
                <div class="error1"><?php echo form_error('email'); ?></div>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="error1"><?php echo form_error('password'); ?></div>
                <span class="error1"><?php  echo $error; ?></span>
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                    Sign in</button>
                
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
                
            </div>
            
        </div>
    </div>
</div>
