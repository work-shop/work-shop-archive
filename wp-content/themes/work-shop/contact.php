
<section id="contact" class="contact block min padded-more">

	<div class="block-body">
		<div class="container">
			<div class="row centered">
			
				<div class="col-sm-8 col-sm-offset-2">
					<h1 class="centered m2">We want to work with you.</h1>
				</div>
			
				<div class="col-sm-4">
					<address>
						<h2>Contact</h2>
						<div class="dash centered margined"></div>
						<h3><a href="mailto:info@workshopri.com" target="_blank">info@workshopri.com</a></h3>
						<h3>p. 440-915-2393</h3>
						<h3>f. 401-274-1913</h3>						
					</address>	
				</div>
			
				<div class="col-sm-4">
					<address>
						<h2>Office</h2>
						<div class="dash centered margined"></div>						
						<h3>204 Westminster Street, Floor 3</h3>
						<h3>Providence, RI 02903</h3>						
					</address>				
				</div>	
				
				<div class="col-sm-4">
					<address>
						<h2>Shop</h2>
						<div class="dash centered margined"></div>						
						<h3>610 Manton Avenue</h3>
						<h3>Providence, RI 02909</h3>						
					</address>					
				</div>			
								
	
			</div>
		</div>
	</div>
	
	<div class="block-body actions">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-4 col-sm-offset-2 col-xs-6 col-lg-3 col-lg-offset-3">
					<div class="contact-button-broken">
						<h2 class="centered"><a href="#contact" data-toggle="modal" data-target="#contactModal" class="button">Contact Us</a></h2>
					</div>
				
				</div>
			
				<div class="col-sm-4 col-lg-3 col-xs-6">
					<div class="contact-button-broken">
						<h2 class="centered"><a href="#subscribe" data-toggle="modal" data-target="#subscribeModal" class="button">Subscribe to our Newsletter</a></h2>
					</div>				
				</div>
				
			</div>
		</div>
	</div>	

</section>

<div class="modal fade" id="contactModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close icon" data-dismiss="modal" aria-hidden="true" data-icon="x"></button>
          <h3 class="modal-title centered">We'd love to hear from you.</h3>
        </div>
        <div class="modal-body">
			<?php  gravity_form( 2, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true,$tabindex=1000); ?>	 
		</div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <div class="modal fade" id="subscribeModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close icon" data-dismiss="modal" aria-hidden="true" data-icon="x"></button>
          <h3 class="modal-title centered">We'll keep you up to date</h3>
        </div>
        <div class="modal-body">
			<?php  gravity_form( 3, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true,$tabindex=2000); ?>	        
		</div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->