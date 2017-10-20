<?php $this->load->view('part/_brain'); ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Setup C</title>
		
		<?php $this->load->view('part/_header'); ?>
		
	</head>
    <body>
		<section class="background-section">
			
			<?php $this->load->view('part/_navi'); ?>
			
			<div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="input-group">
                            <input type="text" class="form-control" /> 
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Search</button>
                            </span>
                        </div><!-- /input-group -->
                        <div class="text-center">
                            <i><small>(search possible answers)</small></i>
                        </div>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                
                <div class="prostor-top">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  mail
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Mail client</a>
                                <a href="#" class="list-group-item list-group-item-action">Black list</a>
                                <a href="#" class="list-group-item list-group-item-action">Spam</a>
                                <a href="#" class="list-group-item list-group-item-action">SMTP</a>
                                <a href="#" class="list-group-item list-group-item-action">...</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  hosting
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
                                <a href="#" class="list-group-item list-group-item-action">...</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  domain
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
                                <a href="#" class="list-group-item list-group-item-action">...</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  billing
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
                                <a href="#" class="list-group-item list-group-item-action">...</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  seo
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
                                <a href="#" class="list-group-item list-group-item-action">...</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  website
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
                                <a href="#" class="list-group-item list-group-item-action">...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
        <?php $this->load->view('part/_modal'); ?>
		
        <div class="vertical-space">&nbsp;</div>
		
		<?php $this->load->view('part/_footer'); ?>
		
    </body>
</html>