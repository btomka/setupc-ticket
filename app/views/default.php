<?php $this->load->view('part/_brain'); ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>setupc ticket sysetm</title>
		
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
                                <a href="#mail-recive-issue" class="list-group-item list-group-item-action">Why I can't receive mail?</a>
                                <a href="#mail-send-issue" class="list-group-item list-group-item-action">Why I can't send mail?</a>
                                <a href="#mail-spam-issue" class="list-group-item list-group-item-action">I get too much spam, why?</a>
                                <a href="#mail-forward-issue" class="list-group-item list-group-item-action">How to forward receiving mail?</a>
                                <a href="#mail-filter-issue" class="list-group-item list-group-item-action">How to filtring receiving mail?</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  hosting
                                </a>
                                <a href="#hosting-account-issue" class="list-group-item list-group-item-action">Why I can't access on my hosting account?</a>
                                <a href="#hosting-site-move-issue" class="list-group-item list-group-item-action">How to move site on my hosting account?</a>
                                <a href="#hosting-suspend-issue" class="list-group-item list-group-item-action">Why is my hosting account suspended?</a>
                                <a href="#hosting-backup-issue" class="list-group-item list-group-item-action">How to backup my hosting account?</a>
                                <a href="#hosting-subdomains-issue" class="list-group-item list-group-item-action">How to create subdomains?</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  domain
                                </a>
                                <a href="#domain-registration-issue" class="list-group-item list-group-item-action">How to register the domain name?</a>
                                <a href="#domain-extend-issue" class="list-group-item list-group-item-action">How to extend the domain name?</a>
                                <a href="#domain-pay-issue" class="list-group-item list-group-item-action">How to pay registration/extend domain name?</a>
                                <a href="#domain-choose-issue" class="list-group-item list-group-item-action">How to choose domain name?</a>
                                <a href="#domain-why-issue" class="list-group-item list-group-item-action">Why I need me domain name?</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  billing
                                </a>
                                <a href="#billing-pay-issue" class="list-group-item list-group-item-action">How I can pay accounting?</a>
                                <a href="#billing-not-extend-issue" class="list-group-item list-group-item-action">I paid, but my domain is not extend?</a>
                                <a href="#billing-price-domain-issue" class="list-group-item list-group-item-action">Where I can find price list of domain?</a>
                                <a href="#billing-price-hosting-issue" class="list-group-item list-group-item-action">Where I can find price list of hosting?</a>
                                <a href="#billing-price-website-issue" class="list-group-item list-group-item-action">Where I can find price list of website development?</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  seo
                                </a>
                                <a href="#seo-google-issue" class="list-group-item list-group-item-action">Why my site is not on first page of Google?</a>
                                <a href="#seo-check-issue" class="list-group-item list-group-item-action">How to check seo on my site?</a>
                                <a href="#seo-important-issue" class="list-group-item list-group-item-action">How much seo is important?</a>
                                <a href="#seo-googlead-issue" class="list-group-item list-group-item-action">Google AdWords?</a>
                                <a href="#seo-remarketing-issue" class="list-group-item list-group-item-action">Remarketing?</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <a href="" class="list-group-item active">
                                  website
                                </a>
                                <a href="#website-wordpres-issue" class="list-group-item list-group-item-action">How to install WordPress on hosting?</a>
                                <a href="#website-joomla-issue" class="list-group-item list-group-item-action">How to install Joomla on hosting?</a>
                                <a href="#website-drupal-issue" class="list-group-item list-group-item-action">How to install Drupal on hosting?</a>
                                <a href="#website-create-issue" class="list-group-item list-group-item-action">How to request create website?</a>
                                <a href="#website-ssl-issue" class="list-group-item list-group-item-action">How to install SSL on website through hosting account?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<section class="possible-answers">
			<div class="container">
				<!----------------- MAIL ------------------>
				<div class="text-right separate">
					<h4>MAIL</h4>
					<hr>
				</div>
                <div class="row">
					<div class="col-md-12">
						<div id="mail-recive-issue">
							<h3># Why I can't receive mail?</h3>
							<p>Mail</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="mail-send-issue">
							<h3># Why I can't send mail?</h3>
							<p>Mail</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="mail-spam-issue">
							<h3># Why I get too much spam?</h3>
							<p>Mail</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="mail-forward-issue">
							<h3># How to forward receiving mail?</h3>
							<p>Mail</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="mail-filter-issue">
							<h3># How to filtring mail</h3>
							<p>Mail</p>
						</div>
					</div>
				</div>
				
				<!----------------- HOSTING ------------------>				
				<div class="text-right separate">
					<h4>HOSTING</h4>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="hosting-account-issue">
							<h3># Why I can't access on my hosting account?</h3>
							<p>hosting</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="hosting-site-move-issue">
							<h3># How to move site on my hosting account?</h3>
							<p>hosting</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="hosting-suspend-issue">
							<h3># Why is my hosting account suspended?</h3>
							<p>hosting</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="hosting-backup-issue">
							<h3># How to backup my hosting account?</h3>
							<p>hosting</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="hosting-subdomains-issue">
							<h3># How to create subdomains of domain?</h3>
							<p>hosting</p>
						</div>
					</div>
				</div>
				
				<!----------------- DOMAIN ------------------>	
				<div class="text-right separate">
					<h4>DOMAIN</h4>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="domain-registration-issue">
							<h3># How to register the domain name?</h3>
							<p>domain</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="domain-extend-issue">
							<h3># How to extend the domain name?</h3>
							<p>domain</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="domain-pay-issue">
							<h3># How to pay registration/extend domain name?</h3>
							<p>domain</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="domain-choose-issue">
							<h3># How to choose domain name?</h3>
							<p>domain</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="domain-why-issue">
							<h3># Why I need me domain name?</h3>
							<p>domain</p>
						</div>
					</div>
				</div>
				
				<!----------------- BILLING ------------------>	
				<div class="text-right separate">
					<h4>BILLING</h4>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="billing-pay-issue">
							<h3># How I can pay accounting?</h3>
							<p>billing</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="billing-not-extend-issue">
							<h3># I paid, but my domain is not extend?</h3>
							<p>billing</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="billing-price-domain-issue">
							<h3># Where I can find price list of domain?</h3>
							<p>billing</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="billing-price-hosting-issue">
							<h3># Where I can find price list of hosting?</h3>
							<p>billing</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="billing-price-website-issue">
							<h3># Where I can find price list of website development?</h3>
							<p>billing</p>
						</div>
					</div>
				</div>
				
				<!----------------- SEO ------------------>
				<div class="text-right separate">
					<h4>SEO</h4>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="seo-google-issue">
							<h3># Why my site is not on first page of Google?</h3>
							<p>seo</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="seo-check-issue">
							<h3># How to check seo on my site?</h3>
							<p>seo</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="seo-important-issue">
							<h3># How much seo is important?</h3>
							<p>seo</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="seo-googlead-issue">
							<h3># Google AdWords?</h3>
							<p>seo</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="seo-remarketing-issue">
							<h3># Remarketing?</h3>
							<p>seo</p>
						</div>
					</div>
				</div>
				
				<!----------------- WEBSITE ------------------>
				<div class="text-right separate">
					<h4>WEBSITE</h4>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="website-wordpres-issue">
							<h3># How to install WordPress on hosting?</h3>
							<p>website</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="website-joomla-issue">
							<h3># How to install Joomla on hosting?</h3>
							<p>website</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="website-drupal-issue">
							<h3># How to install Drupal on hosting?</h3>
							<p>website</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="website-create-issue">
							<h3># How to request create website?</h3>
							<p>website</p>
						</div>
					</div>
					<div class="col-md-12">
						<div id="website-ssl-issue">
							<h3># How to install SSL on website through hosting account?</h3>
							<p>website</p>
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