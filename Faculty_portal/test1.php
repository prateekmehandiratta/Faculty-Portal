<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="test-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
<br>
<br>
	<div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div>
        				<h2>EDIT <br>PROFILE</h2>
                        <p>Please Only Fill the Columns that you want to change</p>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	<form role="form" action="profileedit.php" method ="post" id="profileform">
			<h2>Edit your profile.<small>It's always easy</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="Name" id="Name" class="form-control input-lg" placeholder="Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="Age" id="Age" class="form-control input-lg" placeholder="Age" tabindex="2" >
					</div>
				</div>
			</div>
            <div class="form-group">
                        <input type="text" name="Department" id="Department" class="form-control input-lg" placeholder="Department" tabindex="1" >
					</div>
			<div class="form-group">
				<input type="email" name="Email" id="Email" class="form-control input-lg" placeholder="Email Address" tabindex="1" >
			</div>
			<div class="form-group">
				<input type="text" name="Rarea" id="Rarea" class="form-control input-lg" placeholder="Research Area" tabindex="1" >
			</div>
			<div class="form-group">
						<input type="text" name="Projects" id="Projects" class="form-control input-lg" placeholder="Projects" tabindex="1">
					</div>
			<div class="form-group">
				<input type="text" name="Routput" id="Routput" class="form-control input-lg" placeholder="Research Output" tabindex="1">
			</div>
			<div class="form-group">
						<input type="text" name="Prizes" id="Prizes" class="form-control input-lg" placeholder="Prizes" tabindex="1">
					</div>
            <div class="form-group">
                        <input type="text" name="Publications" id="Publications" class="form-control input-lg" placeholder="Publications" tabindex="1">
					</div>
			<div class="form-group">
                        <input type="text" name="Biography" id="Biography" class="form-control input-lg" placeholder="Biography" tabindex="1">
					</div>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"></div>
				<input type="submit" class="btn btn-primary" value="Submit">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
        </div>
     </div>       
</div>