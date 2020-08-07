<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    use Doctrine\ORM\Annotation as ORM;
	use Doctrine\Common\Collections\ArrayCollection;
	//use libs\system\Controlller;
	//use Doctrine\ORM\Mapping as ORM;
    /**
     * @Entity @Table(name="agios")
     **/
    class Agios 
	{
		/** 
		 * @Id 
		 * @Column(type="integer") 
		 * @GeneratedValue 
		**/
		private $id;
		/** @Column(type="decimal") **/
		private $montantAgios;
		/** @Column(type="decimal") **/
		private $tauxAgios;
		/**
	    * Many Agios have one CompteCourant. This is the owning side.
	    * @OneToMany(targetEntity="CompteCourant", mappedBy="Agios")
	    */
		private $CompteCourant;

		public function __construct(){}
		public function getIdAgios()
		{
			return $this->id;
		}
		public function getmontantAgios()
		{
			return $this->montantAgios;
		}
		public function setmontantAgios()
		{
			$this->montantAgios = $montantAgios;
		}
		public function gettauxAgios()
		{
			return $this->tauxAgios;
		}
		public function settauxAgios()
		{
			$this->tauxAgios = $tauxAgios;
		}
		public function getCompteCourant()
		{
			return $this->CompteCourant;
		}
		public function setCompteCourant()
		{
			$this->CompteCourant = $CompteCourant;
		}
	}
?>