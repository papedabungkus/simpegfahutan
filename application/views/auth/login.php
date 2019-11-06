<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script src="<?php echo base_url('assets/template/js/jquery/jquery-1.8.2.min.js');?>" type="text/javascript" ></script>
<link href="<?php echo base_url('assets/template/css/customize-template.css');?>" type="text/css" media="screen, projection" rel="stylesheet" />
<div id="body-container">
  <div id="body-content">
              <div class='container'>
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            <legend>Please Login</legend>
                            <form action="<?php echo base_url('auth/login'); ?>" method="POST" id="loginForm" class="form-signin" autocomplete="off">
                                <div class="form-inner">
                                    <div class="input-prepend">
                                        
                                        <span class="add-on" rel="tooltip" title="Username atau NIP" data-placement="top"><i class="icon-user"></i></span>
                                        <input type='text' class='span4' id='username' name='identity'/>
                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' class='span4' id='password' name='password'/>
                                    </div>
                                    <label class="checkbox" for='remember_me'>Remember me
                                        <input type='checkbox' id='remember_me'
                                               />
                                    </label>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" name='submit' type='submit' id="submit" value='Login'/>
                                </footer>
                            </form>
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>
            </div>
            </div>
        </div>
