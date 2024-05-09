<?php
	require_once  'conn.php' ;
 
	if ( ISSET ( $_POST [ 'submit' ] ) ) {
		try {
			$disci  =  $_POST [ 'disci' ] ;
			$lastname  =  $_POST [ 'lastname' ] ;
			$firstname  =  $_POST [ 'firstname' ] ;
			$lastparent  =  $_POST [ 'lastparent' ] ;
			$birthday  =  $_POST [ 'birthday' ] ;
			$adress  =  $_POST [ 'adress' ] ;
			$codepost  =  $_POST [ 'codepost' ] ;
			$ville  =  $_POST [ 'ville' ] ;
			$mobile  =  $_POST [ 'mobile' ] ;
			$email  =  $_POST [ 'email' ] ;
			$prevent  =  $_POST [ 'prevent' ] ;
			$conn -> setAttribute ( PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION ) ;
			$sql  =  "INSERT INTO `inscri` (`disci`, `lastname`, `firstname`, `lastparent`, `birthday`, `adress`, `codepost`, `ville`, `mobile`, `email`, `prevent` ) VALUES ('$disci', '$lastname', '$firstname', '$lastparent', '$birthday', '$adress', '$codepost', '$ville', '$mobile', '$email', '$prevent' )";
			$conn -> exec ( $sql );
		} catch ( PDOException $e ) {
			echo  $e -> getMessage ( ) ;
		}
 
		$conn  =  null;
 
		echo  "<script>alert('Données insérées avec succès !')</script>" ;
		echo  "<script>window.location='index.php'</script>";
	}
    ?>








<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['insert'])){
		try{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `user` (`firstname`, `lastname`, `username`, `password`) VALUES ('$firstname', '$lastname', '$username', '$password')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
 
		$conn = null;
 
		echo "<script>alert('Successfully inserted data!')</script>";
		echo "<script>window.location='index.php'</script>";
	}