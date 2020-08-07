<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\SalarieRepository;

class ClientSalarieController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/
     */

    public function index(){

        return $this->view->load("clientSalarie/add");
    }

    public function getList(){

        return $this->view->load("clientSalarie/liste");
    }
    /*public function add(){

        return $this->view->load("clientSalarie/add");
    }*/
    public function add(){
        $tdb = new SalarieRepository();
        if(isset($_POST['envoyer']))
        {
            
            extract($_POST);
            //$id_client = 1;
            //var_dump($_POST);
            //die();
            $data['ok'] = 0;
            if(!empty($nom) && !empty($prenom) && !empty($Adresse) && !empty($telephone) && !empty($email) ) {
                
            //var_dump($_POST);
            //die();
                $Clients = new Client();
                $Clients->setNom(addslashes($nom));
                $Clients->setAdresse(addslashes($Adresse));
                $Clients->setTelephone(addslashes($telephone));
                $Clients->setEmail(addslashes($email));

                $Salarie = new ClientSalarie();
                $Salarie->setPrenom(addslashes($prenom));
                $Salarie->setProfession(addslashes($profession));
                $Salarie->setSalaire($salaire_client);
                $Salarie->setNomEntreprise(addslashes($nom_entreprise));
                $Salarie->setAdresseEntreprise(addslashes($adresse_entreprise));
                $Salarie->setIdEmployeur($identifiant_employeur); 
                $Salarie->setCarteIdentite(addslashes($identite));
                $Salarie->setValiditeCIN(addslashes($validite));
                $Salarie->setClient($Clients);

                $Compte = new Compte();
                $Compte->setNumero_Compte(addslashes($numero_compte));
                $Compte->setNumero_Agence(addslashes($numero_agence));
                $Compte->setCle_Rib(addslashes($cle_rib));
                $Compte->setDate_Ouverture(addslashes($date_ouverture));
                $Compte->setSolde(addslashes($solde));
                $Compte->setClient($Clients);

                $CompteCourant = new CompteCourant();
                $CompteCourant->setnomEmployeur(addslashes($nom_Employeur));
                $CompteCourant->setadresseEmployeur(addslashes($Adresse_employeur));
                $CompteCourant->setraisonSociale(addslashes($raison_sociale));
                $CompteCourant->setCompte($Compte);

                $ok = $tdb->addClient($Salarie);
                $data['ok'] = $ok;
                $ok = $tdb->addCompte($CompteCourant);
                $data['ok'] = $ok;

                

                /*
                //$CompteCourant->setAgios($Agios);

                $ok = $tdb->addCompte($Compte);
                $data['ok'] = $ok;*/

                /*$Agios = new Agios();
                $Agios->setmontantAgios(addslashes($MontantRenumeration));
                $Agios->settauxAgios(addslashes($agios_compte_courant));*/
                
                
                
            }
            return $this->view->load("clientSalarie/add", $data);
        }else{
            return $this->view->load("clientSalarie/add");
        }
    }
}
