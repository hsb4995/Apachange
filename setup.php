<?php
echo "Setting up Files\n";
exec("sudo chmod +x apachange");
exec("sudo chmod +x apachange.php");
exec("sudo cp -n apachange /usr/bin");
exec("sudo cp -n apachange.php /usr/bin");
echo "You are Ready to Use the Command\n";
?>
