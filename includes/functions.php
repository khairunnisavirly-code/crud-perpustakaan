<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function flash($type,$msg){ $_SESSION['flash']=['type'=>$type,'msg'=>$msg]; }
function redirect($url){ header('Location: '.$url); exit; }
function show_flash(){ if(!empty($_SESSION['flash'])){ $f=$_SESSION['flash']; unset($_SESSION['flash']); echo '<div class="alert alert-'.e($f['type']).'">'.e($f['msg']).'</div>'; } }
