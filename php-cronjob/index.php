<!DOCTYPE html>
<html>
<head>
</head>
<body>
<br>
<h4>Tampil Orang</h4>
<table>
    <thead>
      <tr>
        <th>No</th>
		<th>User ID 	</th>
        <th>Username	</th>
		<th>Email		</th>
		<th>kode		</th>
		<th>Created On	</th>
      </tr>
    </thead>
    <?php 
	include "koneksi.php";
	$sql="select * from accounts order by user_id asc";
	
	$result = pg_query($connection, $sql) or die('Query failed: ' . pg_last_error());
	$no=0;
	while ($data = pg_fetch_array($result, null, PGSQL_ASSOC)) {
	$no++;

	?>
	<tbody>
           <tr> 
		<td><?php echo $no;?></td> 
		<td><?php echo $data["user_id"]; ?>		</td> 
		<td><?php echo $data["username"]; ?>	</td> 
		<td><?php echo $data["email"]; ?>		</td> 
		<td><?php echo $data["kode"]; ?>		</td> 
		<td><?php echo $data["created_on"]; ?>	</td> 
           </tr>
       </tbody>  
	<?php 
	}
	?>		    
</table>
</div>
</body>
</html>
