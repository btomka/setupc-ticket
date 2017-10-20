<?php

    if(!isset($this->session->email)){
        header('Location: '.base_url());
    }

?>