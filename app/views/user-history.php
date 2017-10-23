<?php $this->load->view('part/_brain'); ?>
<?php $this->load->view('part/_session'); ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Setupc Ticket Sysetm</title>
		
		<?php $this->load->view('part/_header'); ?>
		
	</head>
    <body>
        
		<?php $this->load->view('part/_navi'); ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>History</h3>
					<div class="table-responsive">
						<table class="table table-striped table-sm" id="userHistory">
							<thead>
								<tr>
									<th>#</th>
									<th class="hidden-xs">create</th>
									<th class="hidden-xs">closed</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query('SELECT id, num, createdate, lastlog, id FROM ticket WHERE status = 3 AND user = '.$this->session->id.'');
									foreach ($query->result() as $row)
									{
								?>
								<tr>
									<th scope="row"><?php echo $row->num; ?></th>
									<td class="hidden-xs"><?php echo $row->createdate; ?></td>
									<td class="hidden-xs"><?php echo $row->lastlog; ?></td>
									<td>
										<form method="post" action="<?php echo base_url() ?>user-history-view">
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