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
					<?php
						$ticketid = '';
						if(isset($_POST['trigerTicket'])){
							$query = $this->db->query('SELECT ticket.num AS num, ticket.createdate AS date, ticket.description AS description, user.username AS user, ticket.id AS ticket, ticket.image AS img FROM ticket INNER JOIN user ON ticket.user = user.id WHERE ticket.id = '.$_POST['ticketTriger'].' LIMIT 1');
							$row = $query->row();
					?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ticket-number">
                        <h3><?php echo $row->num; ?></h3>
                        <i><small>(ticket number)</small></i>
                    </div>
                </div>
            </div>
			<div class="vertical-space">&nbsp;</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ticketing-box">
					
                        <div class="question-ticket">
                            <i><?php echo $row->description; ?></i>
							<br>
							<i class="date-time"><?php echo $row->date; ?></i>
                            <h4><?php echo $row->user; ?></h4>
							<?php
								if($row->img != ''){
									echo '<span class="pull-right"><small><a href="img/users/'.$row->img.'" target="_blank">image.jpg</a></small></span><br>';
								}else{
							?>
                        </div>
                    <?php
								}
							$ticketid = $row->ticket;
						
							$query = $this->db->query('SELECT description.description AS description, description.date AS date, description.image AS image, user.username AS user FROM description INNER JOIN user ON description.user = user.id WHERE ticket = '.$ticketid.'');
	
							foreach ($query->result() as $row)
							{
					?>
						<hr>
                        <div class="answer-ticket">
                            <i><?php echo $row->description; ?></i>
							<br>
							<i class="date-time"><?php echo $row->date; ?></i>
                            <h4 class="text-right"><?php echo $row->user; ?></h4>
							<?php
								if($row->image != ''){
									echo '<span class="pull-right"><small><a href="img/users/'.$row->image.'" target="_blank">image.jpg</a></small></span><br>';
								}
							?>
                        </div>
					<?php
							}
						}
					?>						
                    </div>
                
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <label for="descriptionAnswer">Description</label>
							<input type="text" name="ticketid" value="<?php echo $ticketid; ?>" hidden="hidden">
                            <textarea class="form-control" id="descriptionAnswer" name="descriptionAnswer" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" id="imageDesc" name="imageDesc">
                            <p class="help-block">If you have image of issues, please input them.</p>
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" name="sendAnswer" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
		
		<?php $this->load->view('part/_modal'); ?>
        
        <div class="vertical-space">&nbsp;</div>
		
		<?php $this->load->view('part/_footer'); ?>
		
    </body>
</html>