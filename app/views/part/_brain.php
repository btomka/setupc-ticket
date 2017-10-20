<?php
    error_reporting(0);
    if(isset($_GET['logout'])){
        $this->session->unset_userdata('email');
        header('Location: '.base_url());
    }
    
    if(isset($_POST['login'])){
        $email = $_POST['emailLogin'];
        $passw = $_POST['passwordLogin'];
        
        $query = $this->db->query('SELECT id, username, email, admin FROM user WHERE email = "'.$email.'" AND password = "'.$passw.'" AND status = 0 LIMIT 1');
        $row = $query->row();
        
        if($this->db->affected_rows() == 1){
            $this->session->email = $row->email;
            $this->session->admin = $row->admin;
            $this->session->id = $row->id;
            if($row->admin == 0){
                $sql = "UPDATE user SET lastlog = NOW() WHERE id = ".$row->id."";
                $this->db->query($sql);
                header('Location: '.base_url().'user-interface');
            }
            if($row->admin == 1){
                $sql = "UPDATE user SET lastlog = NOW() WHERE id = ".$row->id."";
                $this->db->query($sql);
                header('Location: '.base_url().'admin-list');
            }
        }else{
            header('Location: '.base_url());
        }
    }
    
    if(isset($_POST['CreateUser'])){
        $sql = "INSERT INTO user (fullname, username, email, password, createdate, admin)
                VALUES ('".$_POST['fullName']."', '".$_POST['username']."', '".$_POST['emailRegister']."', '".$_POST['passwordRegister']."', NOW(), 0)";
        $this->db->query($sql);
        
        /* SEND CONFIRM MAIL */
        
        header('Location: '.base_url());       
    }
    
    if(isset($_POST['createTicket'])){
        $date = date('Ymd');
        $desc = $_POST['description'];
        $seme = $_POST['segment'];
        
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type  =$_FILES['image']['type'];
        $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
            
        $expensions= array("jpeg","jpg","png", "");
        
        if(in_array($file_ext,$expensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
            
        if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
        }
            
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"img/users/".$file_name);
        }else{
            print_r($errors);
        }
    
        
        $query = $this->db->query('SELECT COUNT(*) AS tic FROM ticket');
        $row = $query->row();
        
        $sql = "INSERT INTO ticket (num, user, image, segment, description, createdate, lastlog)
                VALUES ('#0".$row->tic.$date."', '".$this->session->id."', '".$file_name."', '".$seme."', '".$desc."', NOW(), NOW())";
        $this->db->query($sql);
        
        /* SEND MAIL TO ADMIN'S */
        
    }
    
    if(isset($_POST['closeTicket'])){
        $sql = "UPDATE ticket SET status = 3, lastlog = NOW() WHERE id = ".$_POST['ticketClose']."";
        $this->db->query($sql);
        
        /* SEND MAIL TO ADMIN AND USER */
        
    }
    
    if(isset($_POST['sendAnswer'])){
        
        $errors0 = array();
        $file_name0 = $_FILES['imageDesc']['name'];
        $file_size0 = $_FILES['imageDesc']['size'];
        $file_tmp0 = $_FILES['imageDesc']['tmp_name'];
        $file_type0  =$_FILES['imageDesc']['type'];
        $file_ext0 = strtolower(end(explode('.',$_FILES['imageDesc']['name'])));
            
        $expensions0 = array("jpeg","jpg","png");
        
        if(in_array($file_ext0,$expensions0)=== false){
            $errors0[]="extension not allowed, please choose a JPEG or PNG file.";
        }
            
        if($file_size0 > 2097152){
            $errors0[]='File size must be excately 2 MB';
        }
            
        if(empty($errors0)==true){
            move_uploaded_file($file_tmp0,"img/users/".$file_name0);
        }else{
            print_r($errors0);
        }
        
        $sql = "INSERT INTO description (ticket, user, description, image, date)
                VALUES (".$_POST['ticketid'].", '".$this->session->id."', '".$_POST['descriptionAnswer']."', '".$file_name0."', NOW())";
        $this->db->query($sql);
        if($this->session->admin == 0){
            $sql = "UPDATE ticket SET waiting = 0 WHERE id = ".$_POST['ticketid']."";
            $this->db->query($sql);
            header('Location: '.base_url().'user-interface');    
        }
        if($this->session->admin == 1){
            $sql = "UPDATE ticket SET waiting = 1 WHERE id = ".$_POST['ticketid']."";
            $this->db->query($sql);
            header('Location: '.base_url().'admin-list');
        }
        
    }
    
    if(isset($_POST['adminAdd'])){
        $sql = "INSERT INTO user (fullname, username, email, password, createdate, admin)
                VALUES ('".$_POST['fullName']."', '".$_POST['username']."', '".$_POST['emailRegisteradmin']."', '".$_POST['passwordRegisteradmin']."', NOW(), 1)";
        $this->db->query($sql);
        header('Location: '.base_url().'admin-interface');
        
        /* SEND CONFIRM MAIL */
        
    }
    
    if(isset($_POST['adminEdit'])){
        $sql = "UPDATE user SET email = '".$_POST['emailRegistereditadmin']."', password = '".$_POST['passwordRegistereditadmin']."', lastlog = NOW() WHERE id = ".$this->session->id."";
        $this->db->query($sql);
        header('Location: '.base_url().'admin-interface');
        
        /* SEND CONFIRM MAIL */
        
    }
    
    if(isset($_GET['unsuspend'])){
        $sql = "UPDATE user SET status = 1 WHERE id = ".$_GET['unsuspend']."";
        $this->db->query($sql);
        header('Location: '.base_url().'admin-interface');
        
        /* SEND SUSPEND MAIL TO USER */
        
    }
    
    if(isset($_GET['suspend'])){
        $sql = "UPDATE user SET status = 0 WHERE id = ".$_GET['suspend']."";
        $this->db->query($sql);
        header('Location: '.base_url().'admin-interface');
        
        /* SEND UNSUSPEND MAIL TO USER */
        
    }
?>