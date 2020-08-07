<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//use libs\system\Controlller;


/**
 * @Entity @Table(name="client")
 **/
class Client 
	{
		/** 
         * @Id 
         * @Column(type="integer") 
         * @GeneratedValue 
        **/
		private $id;
		/** @Column(type="string") **/
		private $Nom;
		/** @Column(type="string") **/
		private $Adresse;
		/** @Column(type="string") **/
		private $Telephone;
		/** @Column(type="string") **/
		private $Email;
		/**
	     * One Client have many Comptes. This is the owning side.
	     * @OneToMany(targetEntity="Compte", mappedBy="Client")
	     */
		private $Comptes;
		/**
	    * One Client have many ClientSalaries. This is the owning side.
	    * @OneToMany(targetEntity="ClientSalarie", mappedBy="Client")
	    */
		private $ClientSalaries;

		public function __construct()
		{
			
		}

	    public function getId() 
	    {
	        return $this->id;
		}
		public function setId($id)
        {
            $this->id = $id;
        }
	    /**
	     * : string définit le type chaine qu'on va retourné, disponible à partir de php7 
	     * @return [type] [description]
	     */
	    public function getNom(): string 
	    {
	        return $this->Nom;
	    }
		public function setNom($Nom) {
	    	$this->Nom = $Nom;	
	    }
	    public function getAdresse() {
	        return $this->Adresse;
	    }
		public function setAdresse($Adresse) {
	        $this->Adresse = $Adresse;
	    }
	    public function getTelephone() {
	        return $this->Telephone;
	    }
		public function setTelephone($Telephone) {
	        $this->Telephone = $Telephone;
	    }
	    public function getEmail() {
	        return $this->Email;
		}
		public function setEmail($Email) {
	        $this->Email = $Email;
	    }
	    public function getCompte() {
	        return $this->Compte;
	    }
	    public function setCompte($Compte) {
	        $this->Compte = $Compte;
	    }
	}

?>