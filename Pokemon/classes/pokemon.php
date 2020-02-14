<?php

	class pokemon 
	{
		
		private $_degats; // dégats du personnage
		private $_vie; // vie du pokemon
		private $_image; // avatar du pokemon
		private $_nom; // nom du pokemon

		public function __construct($degats_po, $vie_po, $image_po, $nom_po)
		{
			$this->_degats = $degats_po;
			$this->_vie    = $vie_po;
			$this->_image  = $image_po;
			$this->_nom    = $nom_po;
		}

		public function setFrapper(pokemon $persoAFrapper)
  		{
    	    $persoAFrapper->recevoir_degats($this->_degats);
  		}
        
		public function recevoir_degats($_degats)
		{
			while ($this->_vie >= 0) {
				$this->_vie = $this->_vie - $_degats;

				if ($this->_vie > 0){

		        echo $this->_nom, " a survécu !";
		    	}
		    	else if ($this->_vie <= 0){

		        echo $this->_nom, " est mort !";
		    	}	 
				break;
			}
		}
		
		public function getImage()
		{
			return $this->_image;
		}

		public function getNom ()
		{
			return $this->_nom;
		}

		public function getVie()
		{
			return $this->_vie;
		}

		public function getDegats()
		{
			return $this->_degats;
		}
		        
	}	
?>