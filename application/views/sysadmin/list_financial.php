<style>
	.td_display td{font-size:13px; padding:5px;}
	.td_display td_display:first-child td{border-right:1px solid rgba(0,0,0,0.1);}
	.td_display td{font-size:13px;border-right:1px solid rgba(0,0,0,0.1);border-bottom:1px solid rgba(0,0,0,0.1);}
	.td_display td:first-child{border-left:1px solid rgba(0,0,0,0.1);}
	.td_display  tr:first-child th{border-top:1px solid rgba(0,0,0,0.1); background:#255; color:#fff; }
	.td_display  th{border-left:1px solid rgba(0,0,0,0.1);border-bottom:1px solid rgba(0,0,0,0.1);  }
	.td_display tr:first-child  th:last-child{border-right:1px solid rgba(0,0,0,0.1); }
</style>


<div class='container-fluid'>
	<div class='row'>
		<?php $i=1; ?>
		<table cellspacing=0 cellpadding=5 width=100% class='td_display'>
			<tr>
				<th>#</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>CONTACT</th>
				<th>LOCATION</th>
				<th>TIN</th>
				<th>BRANCHES</th>
				<th>USERS</th>
				<th>ACTION</th>
			</tr>
			<?php 
			
			$link=base_url();
			
			foreach($page_data as $acc){
				echo "
					<tr >
						<td>$i</td>
						<td>".$acc['name']."</td>
						<td>".$acc['email']."</td>
						<td>".$acc['Contact']."</td>
						<td>".$acc['Location']."</td>
						<td>".$acc['tin']."</td>
						<td>".$acc['branches']."</td>
						<td>".$acc['users']."</td>
						<td>
							";
							if($acc['status']==1){
								echo"<a href='$link/index.php/admin/accounts/block/".$acc['id']."'><button class='btn btn-danger' style='padding:1px;'><i class='fa fa-remove'></i> Block</button></a> &nbsp;&nbsp;&nbsp;";
							}else {
								echo"
									<a href='$link/index.php/admin/accounts/delete/".$acc['id']."'><button class='btn btn-danger' style='padding:1px;'><i class='fa fa-trash-o'></i> Delete</button></a> &nbsp;&nbsp;&nbsp;
									<a href='$link/index.php/admin/accounts/activate/".$acc['id']."'><button class='btn btn-success' style='padding:1px;'><i class='fa fa-check'></i> Activate</button></a>
								";
							}
					echo"
						</td>
					</tr>
				";
				
				$i++;
			} ?>
			
		</table>
	
		
	</div>