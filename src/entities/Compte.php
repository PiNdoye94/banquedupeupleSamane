<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use libs\system\Controlller;
/**
 * @Entity @Table(name="compte")
 **/
class Compte 
	{
		/** 
         * @Id 
         * @Column(type="integer") 
         * @GeneratedValue 
        **/
		private $id;
		/** @Column(type="integer") **/
		private $Numero_Compte;
		/** @Column(type="integer") **/
		private $Numero_Agence;
		/** @Column(type="integer") **/
		private $Cle_Rib;
		/**
	    * Many Comptes have one Client. This is the owning side.
	    * @ManyToOne(targetEntity="Client", inversedBy="Comptes", cascade={"persist"})
	    * @JoinColumn(name="Id_Client", referencedColumnName="id")
	    */
		private $Client;
		/**
	     * One Compte have many CompteCourants. This is the owning side.
	     * @OneToMany(targetEntity="CompteCourant", mappedBy="Compte")
	     */
		private $CompteCourants;
		/** @Column(type="datetime") **/
		private $Date_Ouverture;
		/** @Column(type="decimal") **/
		private $Solde;

		public function __construct()
		{
			
		}
		public function getIdCompte(){
			return $this->id;
		}
		public function getNumero_Compte(){
			return $this->Numero_Compte;
		}
		public function setNumero_Compte($Numero_Compte) {
	        $this->Numero_Compte = $Numero_Compte;
	    }
		public function getNumero_Agence(){
			return $this->Numero_Agence;
		}
	    public function setNumero_Agence($Numero_Agence) {
	        $this->Numero_Agence = $Numero_Agence;
	    }
		public function getCle_Rib(){
			return $this->Cle_Rib;
		}
		public function setCle_Rib($Cle_Rib) {
	        $this->Cle_Rib = $Cle_Rib;
	    }
		public function getDate_Ouverture(){
			return $this->Date_Ouverture;
		}
		public function setDate_Ouverture($Date_Ouverture) {
	        $this->Date_Ouverture = new \DateTime($Date_Ouverture);
	    }
		public function getSolde(){
			return $this->Solde;
		}
		public function setSolde($Solde) {
	        $this->Solde = $Solde;
		}
		public function getClient(){
			return $this->Client;
		}
		public function setClient($Client){
			$this->Client = $Client;
		}
	}


?>