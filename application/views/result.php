<html>
<head>
	<title>Result</title>
</head>
<body>
	<h1>Confirmation</h1>
	<?php
	if (isset($details)){
	?>
	<form action="<?=base_url('collage/editForm/')?>" method="post">
		<table cellspacing="20">
			<tr>
					<td>ID</td>
					<td><input name="id" value="<?=$data[0]->id?>" readonly=""></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="stname" value="<?=$details["name"];?>"/></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="text" name="stemail" value="<?=$details["email"];?>"/>
					</td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="stdate" value="<?=$details["date"];?>"/></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="staddress" value="<?=$details["address"];?>"/></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><select name="stdept">
								<option default><?=$details["department"];?>
					<option>IT
					<option>CSE
					<option>B.COM
					<option>EEE
					</select>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><input type="number" name="stmobile" value="<?=$details["mobile"];?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="gender" name="stgender" value="<?=$details["gender"];?>"></td>
				</tr>
				<tr>
					<td>Bloodgroup</td>
					<td><select name="stblood">
						<option default><?=$details["bloodgroup"];?>
	            	<option>A+
	            	<option>AB+
	            	<option>B+
	            	<option>O+
	            	<option>AB-
	            	<option>O-
	            </select>
				</tr>
				<tr>
	            	<input type="submit" value="Confim"/>
	            	</td>
	        </tr>
	        <?php
	    }
	    ?>
	    </table>
	</form>
</body>
</html>

