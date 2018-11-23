  <?php $page_status=$this->uri->segment(2); ?>
  <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('site_assets/'); ?>img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="<?php if (empty($page_status)) echo "active" ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
				          <li class="<?php if($page_status=='about') echo "active" ?>"><a href="<?php echo base_url('site/about'); ?>">About</a></li>
				          <li class="<?php if($page_status=='clients') echo "active" ?>"><a href="<?php echo base_url('site/clients'); ?>">Clients</a></li>
				          <li class="<?php if($page_status=='products') echo "active" ?>"><a href="<?php echo base_url('site/products'); ?>">Products</a></li>
				     				          
				          <li class="<?php if($page_status=='contact') echo "active" ?>"><a href="<?php echo base_url('site/contact'); ?>">Contact</a></li>
			             
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->