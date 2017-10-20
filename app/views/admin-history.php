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
                <div class="col-md-12">
                    <h3>History</h3>
					<div class="table-responsive">
						<table class="table table-striped table-sm" id="adminHistory">
							<thead>
								<tr>
									<th>#</th>
									<th>User</th>
									<th class="hidden-xs">create</th>
									<th class="hidden-xs">closed</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query('SELECT ticket.id AS id, ticket.num AS num, ticket.createdate AS createdate, ticket.lastlog AS lastlog, user.username AS username FROM ticket INNER JOIN user ON ticket.user = user.id WHERE ticket.status = 3');
									foreach ($query->result() as $row)
									{
								?>
								<tr>
									<th scope="row"><?php echo $row->num; ?></th>
									<th><?php echo $row->username; ?></th>
									<td class="hidden-xs"><?php echo $row->createdate; ?></td>
									<td class="hidden-xs"><?php echo $row->lastlog; ?></td>
									<td>
										<form method="post" action="<?php echo base_url() ?>admin-history-view">
											<input type="text" name="ticketHistory" hidden="hidden" value="<?php echo $row->id; ?>">
											<input type="submit" name="historyTicket" class="btn btn-warning btn-xs" value="view">
										</form>
									</td>
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