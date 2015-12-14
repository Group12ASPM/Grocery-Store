<?php
/**
 * Template Name: Admin Login Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	
	
	<div id="frm3"></div>
	
<div class="container">     
    <div class="row">
        <div class="col-md-12">
        
            <div id="right" style="">
				<div class="login-block">
					<form id="frm1" action="adminlogin.php" method="post" >
						<h1>Login</h1>
						<input type="text" placeholder="Username" id="username" name="username" />
						<input type="password" placeholder="Password" id="pwd" name="pwd" />
						<input type="submit" name="sub" value="submit" style="">
					</form>
				</div>
			</div>
            
        </div>
    </div>
</div>

<?php
get_footer();