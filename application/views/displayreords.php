</html>
<head>
	<title>Display record</title>
	<style>
		.result,.result td, .result th{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 7px;
			margin: auto;
			background-color: yellow;
		}
		.result th{
			background-color: lightskyblue;
		}
	</style>
</head>
<body>
	<a href="<?=base_url('collage/staff')?>">Go to Register</a>

	<?php
	if(isset($data)){
		
		?>
		<table cellspacing="20">
		<form action="<?=base_url('collage/update/')?>"method="post">
				<tr>
					<td>ID</td>
					<td><input name="id" value="<?=$data[0]->id?>" readonly=""></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input name="stname" value="<?=$data[0]->name?>"></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input name="stemail" value="<?=$data[0]->email?>"></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input name="stdate" value="<?=$data[0]->date?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input name="staddress" value="<?=$data[0]->address?>"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><select name="stdept">
								<option default><?=$data[0]->department;?>
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
					<td><input name="stmobile" value="<?=$data[0]->mobile?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="text" name="stgender" value="<?=$data[0]->gender?>"></td>
				</tr>
				<tr>
					<td>Bloodgroup</td>
					<td><select name="stblood">
						<option default><?=$data[0]->bloodgroup;?>
	            	<option>A+
	            	<option>AB+
	            	<option>B+
	            	<option>O+
	            	<option>AB-
	            	<option>O-
	            </select>
				</tr>
				<tr>
					<td><button>Update</button></td>
					<td></td>
				</tr>
			</table>
		</form>
		<?php
	}else{
		?>
		<a href="<?=base_url("collage/staff_details");?>"></a><--<br/>
		<table class="result">
		<tr>
			<th>Action</th>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Date</th>
			<th>Address</th>
			<th>Department</th>
			<th>Mobile</th>
			<th>Gender</th>
			<th>Bloodgroup</th>
		</tr>
		<?php
		if (isset ($table)){
			foreach ($table as $row){
				?>
				<tr>
					<td><a href="<?=base_url('collage/edit/'.$row->id)?>">Edit     
					</td>
					<td><?=$row->id?></td>
					<td><?=$row->name?></td>
					<td><?=$row->email?></td>
					<td><?=$row->date?></td>
					<td><?=$row->address?></td>
					<td><?=$row->department?></td>
					<td><?=$row->mobile?></td>
					<td><?=$row->gender?></td>
					<td><?=$row->bloodgroup?></td>
					<td>
					<a href="<?=base_url('collage/delete/'.$row->id)?>">Delete</td>
				</tr>
				<?php
			}
		}
		?>
	</table>
		<?php
	}
	?>
	

</body>
</html>