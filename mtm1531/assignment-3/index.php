<?php

$preferredLang = array(
	'Work inquiries'
	, 'General information'
	,'language'
);
	
	

require_once 'includes/form-processor.php'

?>	<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Fields Assignment</title>
	<link href="css/general.css" rel="stylesheet">
</head>

    <body>
	<form method="post" action="index.php">
	
		<div>
			<label for="name">Name 
				<?php if (isset($errors['name'])) : ?> 
					<strong class="error">is required</strong>
				<?php endif; ?>
			</label>
				
			<input id="name" name="name" required value="<?php echo $name; ?>">
		</div>
		
		<div>
			<label for="email">E-mail Address
				<?php if (isset($errors['email'])) : ?> 
					<strong class="error">is required</strong>
				<?php endif; ?>
			</label>
			<input type="email" id="email" name="email" required value="<?php echo $email; ?>" >
		</div>
        
        <div>
			<label for="username">Username 
				<?php if (isset($errors['username'])) : ?> 
					<strong class="error">is required</strong>
				<?php endif; ?>
			</label>				
			<input id="username" name="username" required value="<?php echo $name; ?>">
            <p>25 characters long</p>
		</div> 
        
        <div>
			<label for="password">Password 
				<?php if (isset($errors['password'])) : ?> 
					<strong class="error">is required</strong>
				<?php endif; ?>
			</label>
				
			<input id="password" name="password" required value="<?php echo $name; ?>">
            
		</div>
		
		</div>
		
		<fieldset>
			<legend>Language:</legend>
			
			<input type="radio" id="english" name="language" value="english">
			<label for="english">English</label> 
			
			<input type="radio" id="french" name="language" value="french">
			<label for="french">French</label> 
			
			<input type="radio" id="spanish" name="language" value="spanish">
			<label for="spanish">Spanish</label> 
		</fieldset>	
		
		
		</div>
				
		<div>
			<label for="notes">Notes
				<?php if (isset($errors['notes'])) : ?> 
					<strong class="error">is required</strong>
				<?php endif; ?>

			</label>
			<textarea id="notes" name="notes"><?php echo $notes; ?></textarea>
			<p>5 to 100 characters long</p>
		</div>
		
		<div>
			<input type="checkbox" id="terms" name="terms" value"1">
			<label for="terms">Accepts terms? <?php if (isset($errors['terms'])) : ?><strong class="error">you Must comply!!</strong> <?php endif; ?></label>   
				
		</div>
		<button type="submit">send</button>
		
	</form>							
    
           
    </body>
</html>