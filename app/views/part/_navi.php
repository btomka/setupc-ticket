<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- START NAVI -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>          
            <div class="navbar-header">
                <p class="navbar-text">SETUP CORRECTLY YOUR TIME</p>
            </div>
        </div>
        
        <?php
            if(isset($this->session->email)){
        ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                
                <?php
                    $query = $this->db->query('SELECT admin FROM user WHERE id = "'.$this->session->id.'" LIMIT 1');
                    $row = $query->row();
                    if($row->admin == 1){
                        $query = $this->db->query('SELECT COUNT(waiting) AS wait FROM ticket WHERE status = 0 AND waiting = 0 LIMIT 1');
						$row = $query->row();
                ?>
                
                <li><a href="<?php echo base_url() ?>admin-interface">Profile</a></li>
                <li><a href="<?php echo base_url() ?>admin-list">List <?php echo "(".$row->wait.")"; ?></a></li>
                <li><a href="<?php echo base_url() ?>admin-history">History</a></li>
                <li><a href="?logout">Logout</a></li>
                
                <?php
                        
                    }elseif($row->admin == 0){
                        $query = $this->db->query('SELECT COUNT(waiting) AS wait FROM ticket WHERE user = '.$this->session->id.' AND status = 0 AND waiting = 1 LIMIT 1');
						$row = $query->row();
                ?>
                
                <li><a href="<?php echo base_url() ?>user-interface">Create</a></li>
                <li><a href="<?php echo base_url() ?>user-history">History</a></li>
                <li><a href="?logout">Logout</a></li>
                <li><a>answer <?php echo "(".$row->wait.")"; ?></a></li>
                <?php
                        
                    }
                    
                ?>

            </ul>
        </div>
        <?php        
            }else{
        ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                <li><a href="#" data-toggle="modal" data-target="#register">Register</a></li>
            </ul>
        </div>
        <?php
            }
        ?>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <?php
                    
                    $parts = parse_url($_SERVER['REQUEST_URI']);
                    $path = explode('/', $parts['path']);
                    $url = $path[1];
                    
                    switch($url){
                        // Users
                        case 'user-interface':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>create</li>';
                            break;
                        case 'user-ticket':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>ticket</li>';
                            break;
                        case 'user-history':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>history</li>';
                            break;
                        case 'user-history-view':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>history</li>';
                            break;
                        
                        // Admin
                        case 'admin-history':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>history</li>';
                            break;
                        case 'admin-history-view':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>history</li>';
                            break;
                        case 'admin-ticket':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>ticket</li>';
                            break;
                        case 'admin-list':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>list</li>';
                            break;
                        case 'admin-interface':
                            echo '<li><a href="'.base_url().'" >home</a></li>';
                            echo '<li>profile</li>';
                            break;
                        
                        
                        default:
                            echo '<form name="text_Marquee"><input name="text" class="form-control" value="This is a fresh info show!!! This is a fresh info show!!! This is a fresh info show!!! This is a fresh info show!!! This is a fresh info show!!! This is a fresh info show!!! This is a fresh info show!!!"  disabled /></form>';
                    }
                ?>
            </ol>
        </div>
    </div>
</div>
<!-- END NAVI -->

<script>
    /*
    Text box marquee, 
    You can used/modified if credit 
    line is retained
    */
    speed_Scrolling = 150
    characters_Scroll = 1
 
    function scrolling_Text() {
        window.setTimeout('scrolling_Text()', speed_Scrolling);
 
        var msg = document.text_Marquee.text.value;
        document.text_Marquee.text.value =
            msg.substring(characters_Scroll) +
            msg.substring(0, characters_Scroll);
    }
    scrolling_Text()
</script>