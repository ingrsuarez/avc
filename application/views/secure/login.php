

<body>
	
	
<form action="<?php echo site_url('home/login'); ?>" method="POST">
	<div class="login">
		
		<div class="input-container" >
			
			<h2>Login</h2>
			
		</div>
		<div class="input-container" >
			<p>Por favor ingrese su nombre de usuario y contraseña:</p>
		</div>
		<div class="input-container">
			<i class="fa-solid fa-user icon"></i>
			<input type="text" name="username" value="" placeholder="usuario" autofocus/>
		</div>
		<div class="input-container">
			<i class="fa-solid fa-key icon"></i>
			<input type="password" name="password" value="" placeholder="Clave"/>
		</div>
		<div><input class="submit" type="submit" value="Ingresar" /></div>
		
	</div>
</form>
<!-- <img src="<?php //echo base_url(); ?>images/favico/android-icon-72x72.png"> -->