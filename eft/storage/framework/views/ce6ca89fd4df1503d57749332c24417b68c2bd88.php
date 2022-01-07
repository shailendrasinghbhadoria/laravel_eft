<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>EFT</title>
<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/app.css')); ?>" />
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background:#f3f3f3 url(<?php echo e(url('images/bg_login_top.jpg')); ?>)no-repeat top center;">
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger ml-4 mb-4"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>			
				<form action="<?php echo e(route('userAuthenticate')); ?>" method="POST">
                    <?php echo csrf_field(); ?>                   
					<label for="login">Username:</label>
					<input id="login" name="email" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" name="btn" class="ok">Login</button> 
				</form>
			</div>
			
		</div>
	</div>
</div>
<?php /**PATH E:\xampp\htdocs\laravel_project\eft\resources\views/login.blade.php ENDPATH**/ ?>