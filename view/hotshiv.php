<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<meta name="keywords" content="HTML,CSS,XML,JavaScript, PHP"> 
		<meta name="description" content="Welcome from Africa's social security">
		<meta name="author" content="Hotshi">
		<title>Bienvenu  dans la gestion des utilisateurs</title>
		<link rel="stylesheet" type="text/css" href="<?=css_url('hotshicss'); ?>">
		<link rel="stylesheet" type="text/css" href="<?=css_url('style'); ?>">		
	</head>
	<body>
		<div class="container">
			<div class="row ">
				<div class=" col-md-8 m-auto">
					<form class=" cen-div ">
						<fieldset class="form_fildset bg-light">
							<legend class="fildset_legend"> 
								<div class="logo">
									<?php echo img('logo-landing-2.png', 'hotshi', 'img-hotshi');?>
								</div>		
							</legend>

							<div class="button_set">
								<div class="col-md-9 col-sm-12  m-auto">
								  <div class="input-group mb-3">
								     <input type="text" class="form-control" placeholder="Your code, please..." aria-label="Recipient's username" aria-describedby="basic-addon2" style="width: 70%">
								     <div class="input-group-append">
								       <button class="btn btn-primary btn-lg button_width" type="button" style="font-weight: 900;">Start</button>
								     </div>
								  </div>
								</div>
								<div class="col-8 m-auto" style="display: none">
										<button class="btn btn-lg btn-danger button_width"style="font-weight: 900;"  style="font-weight: 900;" >Check-out</button>
								</div>
								</div>
								
								<span class="lang"><?php echo date("F j, Y, g:i a");      ?></span>
							</div>
								
						</fieldset>

					</form>
				</div>
			</div>
		</div>
	</body>
</html>