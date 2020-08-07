<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use libs\system\Controlller;
/**
 * @Entity 
 * @Table(name="clientsalarie")
 **/
class ClientSalarie 
	{
		/** 
         * @Id 
         * @Column(type="integer") 
         * @GeneratedValue 
        **/
		private $id;
		/** @Column(type="string") **/
		private $prenom;
		/** @Column(type="string") **/
		private $profession;
		/** @Column(type="decimal") **/
		private $salaire;
		/** @Column(type="string") **/
		private $nomEntreprise;
		/** @Column(type="string") **/
		private $adresseEntreprise;
		/**
	    * Many ClientSalaries have one Client. This is the owning side.
	    * @ManyToOne(targetEntity="Client", inversedBy="ClientSalaries", cascade={"persist"})
	    * @JoinColumn(name="Id_Client", referencedColumnName="id")
	    */
		private $Client;
		/** @Column(type="integer") **/
		private $idEmployeur;
		/** @Column(type="string") **/
		private $carteIdentite;
		/** @Column(type="datetime") **/
		private $validiteCIN;

		public function __construct()
		{
			
		}
		public function getIdSalarie()
		{
			return $this->id;
		}
		public function getPrenom()
		{
			return $this->prenom;
		}
		public function setPrenom($prenom)
		{
			$this->prenom = $prenom;
		}
		public function getProfession()
		{
			return $this->profession;
		}
		public function setProfession($profession)
		{
			$this->profession = $profession;
		}
		public function getSalaire()
		{
			return $this->salaire;
		}
		public function setSalaire($salaire)
		{
			$this->salaire = $salaire;
		}
		public function getNomEntreprise()
		{
			return $this->nomEntreprise;
		}
		public function setNomEntreprise($nomEntreprise)
		{
			$this->nomEntreprise = $nomEntreprise;
		}
		public function getAdresseEntreprise()
		{
			return $this->adresseEntreprise;
		}
		public function setAdresseEntreprise($adresseEntreprise)
		{
			$this->adresseEntreprise = $adresseEntreprise;
		}
		public function getIdEmployeur()
		{
			return $this->idEmployeur;
		}
		public function setIdEmployeur($idEmployeur)
		{
			$this->idEmployeur = $idEmployeur;
		}
		public function getCarteIdentite()
		{
			return $this->carteIdentite;
		}
		public function setCarteIdentite($carteIdentite)
		{
			$this->carteIdentite = $carteIdentite;
		}
		public function getValiditeCIN()
		{
			return $this->validiteCIN;
		}
		public function setValiditeCIN($validiteCIN)
		{
			$this->validiteCIN = new \DateTime($validiteCIN);
		}
		public function getClient(){
			return $this->Client;
		}
		public function setClient($Client){
			$this->Client = $Client;
		}
	}

?>