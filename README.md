# Apachange
Apache DocumentRoot Changer

Apachange is a Script that makes the Process of changing Apache root easier.

#Requirements
PHP 5 or newer version are required to run this script

#Setup

After Cloning the files run the following command to setup up the script and command

    $ php setup.php
    
The script might ask for Password if the user is not root

#Usage

Pass arguement -c to set Current Directory as Apache Root

    $ apachange -c
   
Passing no arguement will result in the script asking for path to set the root

    $ apachange   //This will ask for path
   
The command will also Restart the Apache server

#Feedback
Have I missed something ? Feel free to make a pull request.
