<header id="header" class="navbar-fixed-top header2" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand">
					    <a href="index.html">
					    	<img class="img-responsive" src="http://abstractcreation4you.com/img/logo3.png" alt="logo" style="
    height: 50px;
    width: 80px;
">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown <?php if($this->uri->segment(1) == "" || $this->uri->segment(1) == "home")echo 'active'; ?>">
                       		<a href="<?php echo base_url();?>">Home </a>
                       		
	                    </li>
						<li class="dropdown <?php if($this->uri->segment(1) == "aboutus")echo 'active'; ?>">
                       		<a href="<?php echo base_url('aboutus');?>" >About Us</a>
                       		
	                    </li>
						<li class="dropdown <?php if($this->uri->segment(1) == "services")echo 'active'; ?>">
                       		<a href="<?php echo base_url('services');?>">Services  </i></a>
                       		
	                    </li>
	                    <li class="dropdown <?php if($this->uri->segment(1) == "portfolio")echo 'active'; ?>">
                       		<a href="<?php echo base_url('portfolio');?>" >Portfolio </a>
                       		
	                    </li>
	                    <li class="dropdown <?php if($this->uri->segment(1) == "contact")echo 'active'; ?>">
                       		<a href="<?php echo base_url('contact');?>" >Contact </a>
                       		
	                    </li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->