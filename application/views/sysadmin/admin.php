
<style>
	body{padding:0px; margin:0px; width:100%; height:100%; font-family:trebuchet Ms;}
	ul{padding:0px; margin:0px;}
	a{text-decoration:none; color:inherit;}
	li{list-style:none;}
	
	.head_menu{padding:10px 22px 10px 22px; background:#255; color:#fff; margin:0px;}
	
	.head_menu li{list-style:none; display:inline-block; text-decoration:none; margin:5px;}
	.head_menu li:first-child{padding:0px 40px 0px 40px; font-weight:bold;}
	.head_menu li:nth-child(3){padding:0px 40px 0px 40px; }
	
	input[type='search']{border-radius:10px; background:#eee; border:none; outline:none; padding:5px; margin:0px; width:300px;}
	.vertical_menu{ height:100%; color:#333; padding:0px; background:#fff;}
	.vertical_menu li{display:block; padding:10px 15px 10px 15px; font-size:14px; font-weight:bold;}
	.vertical_menu li:hover{color:#fff; background:#255; border-left:2px solid #dc134c;}
	.response_div{padding:10px; margin:10px; overflow-Y:scroll; height:97%;  pbox-shadow:0px 0px 2px 0px rgba(0,0,0,0.2); }
	.head_boxes{height:100px; margin:5px; padding:20px; background:#fff; box-shadow:0px 0px 2px 0px rgba(0,0,0,0.2); border-radius:3px;}
	section{height:50; width:50; text-align:center; border-radius:50%; background:#eee;}
</style>

<body>
	<div class='head_menu'>
		<ul>
			<li>HingiCredit</li>
			<li><button style='background:none; border:none; color:#fff; font-weight:bold;' id='togle_side_menu'><i class="fa fa-bars" aria-hidden="true"></i></button> </li>
			
		</ul>
	</div>

	<div>
		<table cellpadding=0 cellspacing=0 border=0 width=100% height=86.4%>
			<tr>
				<td  width='15%' valign='top' id='side_menu'>
					<div class='vertical_menu'>
						<ul>
							<a href='<?php echo base_url();?>index.php/admin/index'><li><i class='fa fa-tachometer'></i> &nbsp; Dashboard</li></a>
							<a href='<?php echo base_url();?>index.php/admin/users'><li><i class='fa fa-user-o'></i> &nbsp; Users</li></a>
							<a href='<?php echo base_url();?>index.php/admin/financial'><li><i class='fa fa-bank'></i> &nbsp; Financial insititutions</li></a>
							
							<a href='<?php echo base_url();?>index.php/admin/report'><li><i class='fa fa-file-o'></i> &nbsp; Report</li></a>
							
							<a href='<?php echo base_url();?>index.php/admin/profile'><li><i class='fa fa-user-circle'></i> &nbsp; Profile</li></a>
							<a href='<?php echo base_url();?>index.php/admin/logout'><li><i class='fa fa-sign-out'></i> &nbsp; Logout</li></a>
							
						</ul>
					</div>
				</td>
				<td valign='top' style='background:#eee;'>
					<br><b style='padding-left:30px; opacity:0.5;'><?php echo $this->session->userdata('username'); ?> | Dashboard</b>
					<div class='response_div'>
						
						<?php
							if($view && $page_data){
								$this->load->view('sysadmin/'.$view,$page_data);
							} else {
								$this->load->view('sysadmin/dashboard');
							}
							
							/*
								url = 'https://ussouthcentral.services.azureml.net/workspaces/3e1515433b9d477f8bd02b659428cddc/services/cb1b14b17422435984943d51b5957ec7/execute?api-version=2.0&details=true'
								api_key = 'abc123'
								headers = {'Content-Type':'application/json', 'Authorization':('Bearer '+ api_key)}

							*/
						?>
							
						
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>

//https://github.com/donbrians/HingiCredit.git
<script>
	
	$("#togle_side_menu").click(function(){
		$("#side_menu").toggle();
		
	});
</script>
<footer  style='padding:10px 22px 10px 22px; background:#255; color:#fff; margin:0px; font-size:14px;'>
			<ul>
				<li>A product of HingiCredit Plc. &nbsp;&nbsp;&nbsp; Terms and conditions apply</li>
				<li></li>
			</li>
</footer>