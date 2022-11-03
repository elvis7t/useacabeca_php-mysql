<?php
session_start();
    if (!isset($_SESSION['user_id'])){
        if (isset($_COOKIE['user_id']) && isset($_COOKIE['user_name'])){
            $_SESSION['user_id'] = $_COOKIE['user_id'];
            $_SESSION['user_name'] = $_COOKIE['user_name'];
        }
    }