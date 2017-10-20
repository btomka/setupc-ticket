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
                    <h3>Open ticket</h3>
					<div class="table-responsive">
						<table class="table table-striped table-sm" id="adminList">
							<thead>
								<tr>
									<th>#</th>
									<th class="hidden-xs">create</th>
									<th class="hidden-xs">last check</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$query = $this->db->query('SELECT id, num, createdate, lastlog, id, waiting FROM ticket WHERE status = 0');
									foreach ($query->result() as $row)
									{
								?>
								<tr>
									<th scope="row"><?php echo $row->num; ?></th>
									<td class="hidden-xs"><?php echo $row->createdate; ?></td>
									<td class="hidden-xs"><?php echo $row->lastlog; ?></td>
									<td>
										<form method="post" action="<?php echo base_url() ?>admin-ticket">
											<input type="text" name="ticketTriger" hidden="hidden" value="<?php echo $row->id; ?>">
											<input type="submit" name="trigerTicket" class="btn btn-primary btn-xs" value="view">
										</form>
									</td>
									<td>
										<?php
											if($row->waiting == 1){ echo '<b style="color: orange">Old</b>'; }elseif($row->waiting == 0){ echo '<b style="color: green">Fresh</b>'; }
										?>
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