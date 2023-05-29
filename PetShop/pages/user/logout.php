<?php
# Author: Erick Ruh Cardozo (https://github.com/erickruhcardozo)
# Date: May 26, 2023 - 17:00
require __DIR__ . '../../../models/User.php';
\Models\User::logout();
header('Location: /petshop/login');
exit;
