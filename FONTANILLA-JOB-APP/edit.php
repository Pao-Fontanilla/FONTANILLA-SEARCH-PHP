<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getUserByID = getUserByID($pdo, $_GET['id']); ?>
	<h1>Edit the Applicant!</h1>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getUserByID['first_name']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getUserByID['last_name']; ?>">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email" value="<?php echo $getUserByID['email']; ?>">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getUserByID['gender']; ?>">
		</p>
		<p>
			<label for="firstName">Address</label> 
			<input type="text" name="address" value="<?php echo $getUserByID['address']; ?>">
		</p>
		<p>
			<label for="firstName">State</label> 
			<input type="text" name="state" value="<?php echo $getUserByID['state']; ?>">
		</p>
		<p>
			<label for="firstName">Nationality</label> 
			<input type="text" name="nationality" value="<?php echo $getUserByID['nationality']; ?>">
		</p>
		<p>
		<label for="ac_specialty">AC Specialty</label>
		<select name="ac_specialty">
			<option value="Window-Type" <?php echo ($getUserByID['ac_specialty'] == 'Window-Type') ? 'selected' : ''; ?>>Window-Type</option>
			<option value="Split-Type" <?php echo ($getUserByID['ac_specialty'] == 'Split-Type') ? 'selected' : ''; ?>>Split-Type</option>
			<option value="Central Air-Type" <?php echo ($getUserByID['ac_specialty'] == 'Central Air-Type') ? 'selected' : ''; ?>>Central Air-Type</option>
			<option value="Portable-Type" <?php echo ($getUserByID['ac_specialty'] == 'Portable-Type') ? 'selected' : ''; ?>>Portable-Type</option>
		</select>
		<p><input type="submit" value="Save" name="editUserBtn"></p>
		</p>
	</form>
</body>
</html>