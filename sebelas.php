<?php
require_once 'App/Admin/Dosen.php';
require_once 'App/Admin/TenagaKependidikan.php';

$dian = new \App\Admin\Dosen(198411132015041001, "Dian Prawira", 62111111, "Jln Purnama", "0013118405");
$dian->mengajar(); 