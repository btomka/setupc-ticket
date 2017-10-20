<?php $this->load->view('part/_brain'); ?>
<?php $this->load->view('part/_session'); ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Setup C</title>
		
		<?php $this->load->view('part/_header'); ?>
		
	</head>
    <body>
        
		<?php $this->load->view('part/_navi'); ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Admin edit</h3>
                    <form method="post">
						<?php
							$query = $this->db->query('SELECT email, password FROM user WHERE id = '.$this->session->id.' LIMIT 1');
							$row = $query->row();
						?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="emailRegistereditadmin">Email address</label>
                                <input type="email" class="form-control" id="emailRegistereditadmin" name="emailRegistereditadmin" placeholder="Email" value="<?php echo $row->email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="passwordRegistereditadmin">Password</label>
                                <input type="password" class="form-control" id="passwordRegistereditadmin" name="passwordRegistereditadmin" placeholder="Password" value="<?php echo $row->password; ?>">
                            </div>
                            <i><small>After edit profile, you will receive activation mail which you need confirm.</small></i>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="adminEdit">Edit profile</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>Add Admin</h3>
                    <form method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="fullName">Full Name / Company</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="emailRegisteradmin">Email address</label>
                                <input type="email" class="form-control" id="emailRegisteradmin" name="emailRegisteradmin" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="passwordRegister">Password</label>
                                <input type="password" class="form-control" id="passwordRegister" name="passwordRegisteradmin" placeholder="Password">
                            </div>
                            <i><small>After creating profile, you will receive activation mail which you need confirm.</small></i>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="adminAdd">Create profile</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
					<h3>Admin</h3>
					<div class="table-responsive">
						<table class="table table-striped table-sm"  id="admins">
							<thead>
								<tr>
									<th>Username</th>
									<th class="hidden-xs">Create</th>
									<th>Email</th>
									<th>Suspend</th>
									<th class="hidden-xs">Last log</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query('SELECT id, username, createdate, status, email, lastlog FROM user WHERE admin = 1');
									foreach ($query->result() as $row)
									{
								?>
								<tr>
									<th scope="row"><?php echo $row->username; ?></th>
									<td class="hidden-xs"><?php echo $row->createdate; ?></td>
									<td><a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a></td>
									<?php
										if($row->status == 0){ echo '<td><a href="?unsuspend='.$row->id.'">unsuspend</a></td>'; }elseif($row->status == 1){ echo '<td><a style="color: red" href="?suspend='.$row->id.'">suspend</a></td>'; }
									?>
									<td class="hidden-xs"><?php echo $row->lastlog; ?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<hr>
                    <h3>Users</h3>
					<div class="table-responsive">
						<table class="table table-striped table-sm" id="users">
							<thead>
								<tr>
									<th>Username</th>
									<th class="hidden-xs">Create</th>
									<th>Email</th>
									<th>Suspend</th>
									<th class="hidden-xs">Last log</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query('SELECT id, username, createdate, status, email, lastlog FROM user WHERE admin = 0');
									foreach ($query->result() as $row)
									{
								?>
								<tr>
									<th scope="row"><?php echo $row->username; ?></th>
									<td class="hidden-xs"><?php echo $row->createdate; ?></td>
									<td><a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a></td>
									<?php
										if($row->status == 0){ echo '<td><a href="?unsuspend='.$row->id.'">unsuspend</a></td>'; }elseif($row->status == 1){ echo '<td><a style="color: red" href="?suspend='.$row->id.'">suspend</a></td>'; }
									?>
									<td class="hidden-xs"><?php echo $row->lastlog; ?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
                </div>
            </div>
        </div>
        
        <div class="vertical-space">&nbsp;</div>
		
		<?php $this->load->view('part/_footer'); ?>
		
    </body>
</html>