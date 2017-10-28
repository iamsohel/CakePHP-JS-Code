 <div class="main_page_content" id="fpassword_login">
<div class="content">
 <!-- BEGIN FORGOT PASSWORD FORM -->
   <?php echo $this->Form->create('Users',array('url'=>'/users/forgot_password','id'=>'fpassword-form'));?>
        <h3 class="font-green">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase pull-center">Submit</button>
            <a href="/users/login"><button class="btn btn-success uppercase pull-right">Back</button></a>
        </div>
   <?php echo $this->Form->end();?>
<!-- END FORGOT PASSWORD FORM -->
 </div>
</div>