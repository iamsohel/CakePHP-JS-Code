<div class="main_page_content" id="user_login">
<div class="content">
            <?php echo $this->Form->create('Users',array('url'=>'/users/login','id'=>'login-form'));?>
                <h3 class="form-title font-green">Sign In</h3>
                <?php echo $this->Flash->render();?>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <?php echo $this->Form->input('email',['class'=>'form-control form-control-solid placeholder-no-fix','div'=>false,'label'=>false,'placeholder'=>'Email','type'=>'email','autocomplete'=>'off']);?>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                     <?php echo $this->Form->input('password',['class'=>'form-control form-control-solid placeholder-no-fix','div'=>false,'label'=>false,'placeholder'=>'Password','type'=>'password','autocomplete'=>'off']);?>
                </div>
                <div class="form-actions">
                    <button type="submit" value="login" class="btn green uppercase">Login</button>
                    <!-- <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label> -->
                    <a href="/users/forgot_password" id="forget-password" class="forget-password">Forgot Password?</a>
                </div>
                <!-- <div class="login-options">
                    <h4>Or login with</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
                        </li>
                    </ul>
                </div> -->
                <div class="create-account">
                    <p>
                        <a href="/users/register" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div>
            <?php echo $this->Form->end();?>
            <!-- END LOGIN FORM -->
        </div>
</div>