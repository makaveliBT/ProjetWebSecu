<?php


	class administrateur extends Controller {
		
		function index(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getclients();
			$d= array();
			$d['produit'] = $k;
			$this->set($d);

			$this->render('index');
		}
		function message(){
			$this->load_model('Administrateurs');
		
			$this->render('message');
		}
		function client(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getclients();
			$d= array();
			$d['produit'] = $k;
			$this->set($d);
			$datetime = date("Y-m-d H:i:s");
			
			$this->set($d);
			$this->render('client');
		}
		function commande(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getcommandes();
			$d= array();
			
			$d['commandes'] = $k;
			
			$this->set($d);
			$this->render('commande');
		}
		function employe(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getemployes();
			$d= array();
			
			$d['employes'] = $k;
			
			$this->set($d);
			$this->render('employe');
		}
			function stock(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getstock();
			$d= array();
			
			$d['stock'] = $k;
			$this->set($d);
			$this->render('stock');
		}
		function models(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getmodels();
			$d= array();
			
			$d['models'] = $k;
			
			$this->set($d);
			$this->render('models');
		}
		function marque(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getmarque();
			$d= array();
			
			$d['marques'] = $k;
			
			$this->set($d);
			$this->render('marque');
		}
		function type(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->gettype();
			$d= array();
			
			$d['types'] = $k;
			
			$this->set($d);
			$this->render('type');
		}
		function ajoutertype(){
			$this->load_model('Administrateurs');
			
			$this->render('ajoutertype');
		}
		function modifierlestock(){
			$this->load_model('Administrateurs');
			
			$this->render('modifierlestock');
		}
		function gerercommande(){
			$this->load_model('Administrateurs');
			
			$this->render('gerercommande');
		}
		function ajouterunemploye(){
			$this->load_model('Administrateurs');
			
			$this->render('ajouterunemploye');
		}	
		
		function deletestock(){
			$this->load_model('Administrateurs');
			
			$this->render('deletestock');
		}
		function deletetype(){
			$this->load_model('Administrateurs');
			
			$this->render('deletetype');
		}
		function deletemarque(){
			$this->load_model('Administrateurs');
			
			$this->render('deletemarque');
		}
		function deletemodel(){
			$this->load_model('Administrateurs');
			
			$this->render('deletemodel');
		}
		function ajouterunmodel(){
			$this->load_model('Administrateurs');
			
			$this->render('ajouterunmodel');
		}
			function ajouterstock(){
			$this->load_model('Administrateurs');
			
			$this->render('ajouterstock');
		}
		function messagerie(){
			$this->load_model('Administrateurs');
			$k=$this->Administrateurs->getmessagerie();
			$l=$this->Administrateurs->getmessagerieenvoye();
			$m=$this->Administrateurs->getmessagesclient();
			$d['messages'] = $k;
			$H['messagesenvoyer'] = $l;
			$k['messagesclient'] = $m;

			$this->set($d);
			$this->set($H);
			$this->set($k);
			$this->render('messagerie');
		}
				
		function addMessagerie(){
			$this->load_model('Administrateurs');
			 $this->Administrateurs->ajouterunmessage();
		}
		function addType(){
			$this->load_model('Administrateurs');
			 $this->Administrateurs->ajoutertype();
		}

		function addmarque(){
			$this->load_model('Administrateurs');
			$this->Administrateurs->ajoutermarque();

		}

		function addmodel(){
			$this->load_model('Administrateurs');
			
			$d=$this->Administrateurs->getidMarque();
			$d1=$this->Administrateurs->getidType();
			$this->Administrateurs->ajoutermodel($d['idMarque'],$d1['idType']);
		}

				function addstock(){
			$this->load_model('Administrateurs');
			$d2=$this->Administrateurs->getidModel();
			$this->Administrateurs->ajouterstock($d2['idModel']);
		}

		function deletstock(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deletestock();
		}
			function gerecommande(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->gerercommande();
		}
		function addemplye(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->addemploye();
		}
		function delettype(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deletetype();
		}
		function deletmarque(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deletemarque();
		}
		function deletmodel(){
					$this->load_model('Administrateurs');
			
			$this->Administrateurs->deletemodel();
		}
		function deletclient(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deleteclient();
		}
		function deletmessages(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deletemessages();
		}
			function deletcommandes(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deletecomandes();
		}
		function deletemployes(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deleteemploye();
		}
		
			function deletstocks(){
			$this->load_model('Administrateurs');
			
			$this->Administrateurs->deletestocks();
		}


	}
	
$admin = new administrateur();
$admin->addmarque();
$admin->addType();
$admin->addmodel();
$admin->addstock();
$admin->deletstock();
$admin->delettype();
$admin->deletmarque();
$admin->deletmodel();
$admin->addMessagerie();
$admin->deletclient();
$admin->deletmessages();
$admin->deletcommandes();
$admin->deletstocks();
$admin->gerecommande();
$admin->addemplye();
$admin->deletemployes();
?>