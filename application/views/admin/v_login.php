<div class="container">
	<div class="row" style="margin-top: 20%; margin-bottom: 20%">
	    <div class="col s11 offset-s3">
	    	<form action="<?= base_url('login_page/login'); ?>" class="col s12 m6" method="post">
		    	<h5 class="center font-pompadour">Login to manage your site</h5>
		      	<div class="col s12">
			        <div class="input-field">
			          <input name="username" class="icon-box" placeholder="Username" type="text" class="validate" required>
			          <i class="material-icons prefix">account_circle</i>
			        </div>
			        <div class="input-field">
			          <input name="password" class="icon-box" placeholder="Password" type="password" class="validate" required>
			          <i class="material-icons prefix">https</i>
			        </div>
			        <button class="col m12 btn waves-effect waves-light">Sign In</button>
			    </div>
		    </form>
	    </div>
  </div>
</div>