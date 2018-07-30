<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PDF Created</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 /*font-family: Lucida Grande, Verdana, Sans-serif;*/
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 /*font-family: Monaco, Verdana, Sans-serif;*/
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}
table {
	border-collapse: collapse;
	padding:4px;
}
table, th, td {
	border: 1px solid #d0d0d0;	
}
th{
	padding: 5px;
}

</style>
</head>
<body>

<h1>Master user</h1>

<p>The PDF you are looking at is being generated dynamically by HTML2PDF.</p>

<!-- <code>message</code> -->
<table align="center">
	<thead>
		<tr>
			<th style="width: 25px;">No.</th>
			<th style="width: 80px;">Username</th>
			<th style="width: 150px;">Full Name</th>
			<th style="width: 150px;">Email</th>
			<th style="width: 100px;">Status</th>
			<th style="width: 100px;">Images</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if( ! empty($admin)){
			    $no = 1;
			    foreach($admin as $data){
			        echo "<tr>";
			        echo "<td>".$no."</td>";
			        echo "<td>".$data->username."</td>";
			        echo "<td>".$data->full_name."</td>";
			        echo "<td>".$data->email."</td>";
			        echo "<td>".$data->status."</td>";
			        echo "<td>".$data->img."</td>";
			        echo "</tr>";
			        $no++;
			    }
		   	}
		?>
	</tbody>
</table>
</body>
</html>