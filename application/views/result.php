//sample html

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
				<td>Name</td>
	            <td><input type="text" name="stname"></td>
	        </tr>
	        <tr>
				<td>Email</td>
	            <td><input type="email" name="stemail"></td>
	        </tr>
	        <tr>
				<td>Date</td>
	            <td><input type="date" name="stdate"></td>
	        </tr>
	        <tr>
				<td>Address</td>
	            <td><input type="textarea" name="staddress"></td>
	        </tr>
	        <tr>
				<td>Department</td>
				<td><select name="stdept">
					<option>IT
					<option>CSE
					<option>B.Sc
					<option>M.Sc
					<option>B.COM
					<option>EEE
					</select>
	        </tr>
	        <tr>
				<td>Mobile</td>
	            <td><input type="number" name="stmobile"></td>
	        </tr>
	        <tr>
				<td>Gender </td>
	            <td><input type="radio" name="Male"   /><label>Male</label></td>
	            <td><input type="radio" name="Female"   /><label>Female</label></td>
	            <td><input type=" "  name="stgender"></td>
	        </tr>
	        <tr>
				<td>Blood Group</td>
	            <td><select name="stblood">
	            	<option>A+
	            	<option>AB+
	            	<option>B+
	            	<option>O+
	            	<option>AB-
	            	<option>O-
	            </select>
	        </tr>
	        <tr>
				<td></td>
	            <td>
	            	<input type="submit" value="Confim"></td>
	        </tr>
	        <?php
	    }
	    ?>
	    </table>
	</form>
</body>
</html>

