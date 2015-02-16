<?php
echo $_POST['csrPath'];
$pfad = $_POST['csrPath'];
system('openssl ca  -in '.$pfad.'  -batch -config C:/Users/Administrator/Documents/root/root.cnf -extensions v3_ca -out C:/Users/Administrator/Documents/Projekt/Customers/Maxtest/CSRs/zert.crt');
?> 