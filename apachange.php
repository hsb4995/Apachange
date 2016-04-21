<?php

$num=shell_exec('tput cols');

for($i=0;$i<$num;++$i)
{
echo"_";
}

for($i=0;$i<$num;++$i)
{
echo" ";
}

for($i=0;$i<$num/2-5;++$i)
{
echo" ";
}
echo" Apachange \n";

for($i=0;$i<$num;++$i)
{
echo"_";
}
if(isset($argv[1])){
$arguement1=$argv[1];
}else{
$arguement1='a';}

if($arguement1=='-c')
{
   $path=system('pwd');
   echo"Setting ".$path." as new Root for Apache \n";
}
else
{
    $path=readline("Enter the directory to change Root for Apache  \n");
}
  if($path=='~')
  {
     echo "Username: \n";
     $user=system('echo $USER');
     $path='/home/'.$user;
   }
  $str='No Such Path';
  $op=shell_exec("if [ ! -d '".$path."' ]; then echo '".$str."'; fi");
  echo $op;
  if(strcmp($op,"No Such Path\n")==0)
  {
    die();
  }
  else
  {
    $apache='//etc/apache2/sites-available/000-default.conf';
    $file=file_get_contents($apache);
    $pattern='/DocumentRoot/';
    //preg_match($pattern,$file,$matches,PREG_OFFSET_CAPTURE);
    $patt='DocumentRoot';
    $pos=strpos($file,$patt);
    $pathy=$pos+13;
    for($y=0;$y<50;++$y)
    {
       $string=$file[$pathy+$y];
       if(strstr($file[$pathy+$y], PHP_EOL))
       {
         $posi=$pathy+$y;
       }
    }
    echo "Current root for Apache: \n";
    $string='';
    for($i=$pathy;$i<$posi;++$i)
    {
      echo $file[$i];
      $string.=$file[$i];
    }
    $file1=str_replace($string,$path,$file);
    file_put_contents($apache,$file1);
    echo "\n";
    $cmd=shell_exec('sudo service apache2 reload 2>&1');
    echo "\n";
	
  }
?>

