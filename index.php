<!-- copyright moi... -->


<?php

	class communication
	{

		private $host, $dbname, $table, $user, $password, $connexion, $ecrire;

		/*  Donner une valeur au variable et de se connecter à la base de donnée  */
		public function launch($hote, $database, $utilisateur, $pass, $tb, $tableau)
		{
			$this->host = $hote;
			$this->dbname = $database;
			$this->user = $utilisateur;
			$this->password = $pass;
			$this->table = $tb;


			$this->connect();
			$this->write($tableau);
		}

		/*  Se connecter à n'importe quelle base de donnée en fonction des arguments  */
		private function connect()
		{
			try
			{
				$this->connexion = new PDO("mysql:host=$this->host; dbname=$this->dbname",$this->user, $this->password);
			}

			catch(PDOExecption $e)
			{
				echo "Erreur de connexion : " . $e -> getMessage() . "<br/>";
			}
		}

		/*  Ecrire dans une base de données  */
		private function write($valeurs)
		{

			$colonnes = $this->connexion->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$this->dbname' AND TABLE_NAME='$this->table'");
			$colonnes->execute();
			$donnees = $colonnes->fetchAll();

			echo $donnees[2][0];

			/*foreach ($valeurs as $valeur)
			{
				$this->ecrire = $this->connexion -> prepare("INSERT INTO $this->table () VALUES (:valeur)");
				$ecrire -> bindParam(":$valeur", $valeur);
			}

			$ecrire -> execute();*/
		}

	}

	$tab = array("kiwi","hello","hello world");
	$test = new communication();
	$test -> launch("localhost", "miniblog", "root", "", "articles", $tab);
	$test -> connect();

?>