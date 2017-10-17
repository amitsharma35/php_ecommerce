<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					
					
					<div class="col-md-3 footer-grid">
					<h4>My Account</h4>
					<ul>
                                    <?php
                                    if(!empty($this->session->userdata('userid')))
                                    {?>
                                    <li><a style="cursor: pointer; text-transform: capitalize;"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $this->session->userdata('firstname');?></a></li>
                                        <li><a href="<?=base_url();?>login/logout" ><i class="fa fa-arrow-right" aria-hidden="true"></i> Logout</a></li>
                                    <?php }
                                    else {?>
                                        <li><a href="<?=base_url();?>login" ><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                                        <li><a href="<?=base_url();?>register" ><i class="fa fa-arrow-right" aria-hidden="true"></i> Register</a></li>
                                   <?php }
                                    
                                    ?>
			</ul>
					</div>
					<div class="col-md-3 footer-grid1">
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
					<p>Copyright &copy; 2017 </p>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>