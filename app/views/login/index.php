<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>LOG IN!</h1>
            </div>
        </div>
    </div>
	<?php
	// Display error messages if they exist
	if (isset($_SESSION['failedAuth']) && !empty($_SESSION['failedAuth'])) {
		 echo "<p style='color: red;'>" . $_SESSION['failedAuth'] . "</p>";
	}
		if (isset($_SESSION['lastFailedAuthTime']) && 		 
     				!empty($_SESSION['lastFailedAuthTime'])) {
			echo "<p style='color: red;'>" . $_SESSION['error_message'] . $_SESSION['lastFailedAuthTime'] . "</p>";
		}
		if ($_SESSION['failedAuth'] > 3){
			echo "<p style='color: red;'>" . $_SESSION['error_message'] . "</p>";
			
		}
	?>
		

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">					
			</div>
            <br>
		    <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
		</form> 
			<a href="/create">Create an account</a>
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
