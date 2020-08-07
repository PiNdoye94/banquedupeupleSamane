<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use libs\system\Controlller;

/**
 * @Entity @Table(name="comptecourant")
 **/
class CompteCourant 
	{
		/** 
         * @Id 
         * @Column(type="integer") 
         * @GeneratedValue 
        **/
		private $id;
		/** @Column(type="string") **/
		private $nomEmployeur;
		/** @Column(type="string") **/
		private $adresseEmployeur;
		/** @Column(type="string") **/
		private $raisonSociale;
		/**
	    * Many CompteCourants have one Compte. This is the owning side.
	    * @ManyToOne(targetEntity="Compte", inversedBy="CompteCourants", cascade={"persist"})
	    * @JoinColumn(name="Id_Compte", referencedColumnName="id")
	    */
		private $Compte;
		/**
	    * One CompteCourant have many Agios. This is the owning side.
	    * @ManyToOne(targetEntity="Agios", inversedBy="CompteCourants")
	    * @JoinColumn(name="Id_agios", referencedColumnName="id")
	    */
		private $Agios;
		
		public function __construct()
		{
			
		}
		public function getIdcompteCourant()
		{
			return $this->id;
		}
		public function getnomEmployeur()
		{
			return $this->nomEmployeur;
		}
		public function setnomEmployeur($nomEmployeur)
		{
			$this->nomEmployeur = $nomEmployeur;
		}
		public function getadresseEmployeur()
		{
			return $this->adresseEmployeur;
		}
		public function setadresseEmployeur($adresseEmployeur)
		{
			$this->adresseEmployeur = $adresseEmployeur;
		}
		public function getraisonSociale()
		{
			return $this->raisonSociale;
		}
		public function setraisonSociale($raisonSociale)
		{
			$this->raisonSociale = $raisonSociale;
		}
		public function getCompte()
		{
			return $this->Compte;
		}
		public function setCompte($Compte)
		{
			$this->Compte = $Compte;
		}
		public function getAgios()
		{
			return $this->Agios;
		}
		public function setAgios($Agios)
		{
			$this->Agios = $Agios;
		}
	}


?>