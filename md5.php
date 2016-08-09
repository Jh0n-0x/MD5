<?php

  /*
    coded by Pablo Santhus
    09/08/2016
  */

	error_reporting(0);
	echo menu();

	function menu(){

print"\n";
echo"		 (                         (                                 \n";     
echo" )\ )          )  (        )\ )                 )    )            	 \n";
echo"(()/(    )  ( /(  )\      (()/(    )         ( /( ( /(    (       	 \n";
echo"/(_))( /(  )\())((_) (    /(_))( /(   (     )\()))\())  ))\  (      \n";
echo"(_))  )(_))((_)\  _   )\  (_))  )(_))  )\ ) (_))/((_)\  /((_) )\    \n";
echo"| _ \((_)_ | |(_)| | ((_) / __|((_)_  _(_/( | |_ | |(_)(_))( ((_) 	 \n";
echo"|  _// _` || '_ \| |/ _ \ \__ \/ _` || ' \))|  _|| ' \ | || |(_-< 	 \n";
echo"|_|  \__,_||_.__/|_|\___/ |___/\__,_||_||_|  \__||_||_| \_,_|/__/	 \n";
print"\n";
echo "Encriptar MD5 \n";
echo "Coded By Pablo Santhus \n";
echo "exemplo: php md5.php suasenha \n";
}

	function encriptar(){
		$encrypt = md5($argv[1]);
		print "MD5 Encrypted: " . $encrypt;
	}

	if(isset($argv[1])){
		print "\n";
		print "\n";
		print "--------------------------------------------------------- \n";
		echo encriptar();
		print "\n";
		print "---------------------------------------------------------\n";
		print "\n";
	}
?>
