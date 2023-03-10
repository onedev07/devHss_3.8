<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\I18n\Time;
use SoapClient;

/**
 * Demandes Controller
 *
 * @property \App\Model\Table\DemandesTable $Demandes
 *
 * @method \App\Model\Entity\Demande[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Offres', 'Periodes'],
        ];
        $demandes = $this->paginate($this->Demandes);

        $this->set(compact('demandes'));
    }

    /**
     * View method
     *
     * @param string|null $id Demande id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demande = $this->Demandes->get($id, [
            'contain' => ['Clients', 'Offres', 'Periodes'],
        ]);

        $this->set('demande', $demande);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demande = $this->Demandes->newEntity();
        if ($this->request->is('post')) {
            $demande = $this->Demandes->patchEntity($demande, $this->request->getData());
            if ($this->Demandes->save($demande)) {
                $this->Flash->success(__('The demande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande could not be saved. Please, try again.'));
        }
        $clients = $this->Demandes->Clients->find('list', ['limit' => 200]);
        $offres = $this->Demandes->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Demandes->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('demande', 'clients', 'offres', 'periodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demande id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demande = $this->Demandes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demande = $this->Demandes->patchEntity($demande, $this->request->getData());
            if ($this->Demandes->save($demande)) {
                $this->Flash->success(__('The demande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande could not be saved. Please, try again.'));
        }
        $clients = $this->Demandes->Clients->find('list', ['limit' => 200]);
        $offres = $this->Demandes->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Demandes->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('demande', 'clients', 'offres', 'periodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demande id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demande = $this->Demandes->get($id);
        if ($this->Demandes->delete($demande)) {
            $this->Flash->success(__('The demande has been deleted.'));
        } else {
            $this->Flash->error(__('The demande could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }




    //Compte Client
    public function compte($id = null)
    {
        

        $this->viewBuilder()->setLayout('default');
        //Chargement de modeles suppl??mentaires
        $this->loadModel('Demandes');
        $this->loadModel('Clients');

        //V??rifier si le client est connect??
        if ($this->Auth->user('id')) {
            // Redirection  vers la envoi apres choix de l'offre

        } else {
            //le client n'est pas connect??
            // return $this->redirect(['action' => 'client']);

            //Afficher les infos de l'offre
            $this->loadModel('Offres');
            $offre = $this->Offres->get($id);
            $this->set('offre', $offre);

            //enr??gistrement du client
            $this->loadModel('Clients');
            $client = $this->Clients->newEntity();
            if ($this->request->is('post')) {

                //Reccuperation de l'ID de l'offre
                /* $this->loadModel('Offres');
                $offre = $this->Offres->get($id);
                $client->offre_id =  $offre->id; */

                $client = $this->Clients->patchEntity($client, $this->request->getData());
                // debug($client);
                // exit;
                if ($this->Clients->save($client)) {
					// Connexion du client apr??s enr??gistrement
					$this->Auth->setUser($client->toArray());
                    // $this->Flash->success(__('Votre compte a ??t?? bien enr??gistr??.'));

                    return $this->redirect(['action' => 'envoi', $offre->id]);
                }
                $this->Flash->error(__('Echec de l\'enr??gistrement du compte.'));
            }
            $offres = $this->Clients->Offres->find('list', ['limit' => 200]);
            $this->set(compact('client', 'offres'));
        }

    }




    //Envoi de la demande
    public function envoi($id = null){

        $this->loadModel('Clients');
		 
		if(empty($this->Auth->user('id'))){
			$this->viewBuilder()->setLayout('default');
			//Afficher les infos du client
			$this->loadModel('Clients');
			$client = $this->Clients->get($id, [
				'contain' => ['Commentaires', 'Offres', 'Demandes'],
			]);
			$this->set('client', $client);
			
			// Infos Offre
			$this->loadModel('Offres');
			// $offre = $this->Offres->get($id);
			// $this->set('offre', $offre);

			//envoi de la souscription avec la periode
			$demande = $this->Demandes->newEntity();
			if ($this->request->is('post')) {

				//Reccuperation de l'ID de l'offre associ??e ?? la souscription
				$this->loadModel('Offres');
				// $offre = $this->Offres->get($id);
				// $offreid = $this->request->getData('offreid');
				// $souscription->offre_id =  $offreid;

				//Reccuperation de l'ID de l'offre associ??e au client
				// $this->loadModel('Clients');
				// $client = $this->Clients->get($id);
				// $souscription->client_id =  $client->id;

				$demande = $this->Demandes->patchEntity($demande, $this->request->getData());
				// debug($this->request->getData());
				// exit;
				if ($this->Demandes->save($demande)) {
					$this->Flash->success(__('Succ??s de l\'envoi.'));

					return $this->redirect(['action' => 'payment', $demande->id]);
				}
				$this->Flash->error(__('Echec d\'envoi.'));
			}
			$clients = $this->Demandes->Clients->find('list', ['limit' => 200]);
			$offres = $this->Demandes->Offres->find('list', ['limit' => 200]);
			$periodes = $this->Demandes->Periodes->find('list', ['limit' => 200]);
			$this->set(compact('souscription', 'clients', 'offres', 'periodes'));
        }else{
			/* si le client est connect?? */
			$this->viewBuilder()->setLayout('default');
			
			//Afficher les infos du client
			$this->loadModel('Clients');
			$client = $this->Clients->get($this->request->getSession()->read('Auth.User.id'));
			$this->set('client', $client);

			
			// Infos Offre
			$this->loadModel('Offres');
			$offre = $this->Offres->get($id);
			$this->set('offre', $offre);


			//D??termination de la debut de souscription
			//$datedebut = Time::now();
			//$datedebut->timezone = 'Africa/Abidjan';

			//D??terminiation du nombre de mois			
			//$nmois = $this->request->getData('nmois');
			
			//Calcul de la date de fin d'abonnement
			// $date = Time::now();
			// $datefin = $date->addMonth($nmois);	
			// $datefin->timezone = 'Africa/Abidjan';

			//envoi de la souscription avec la periode
			$demande = $this->Demandes->newEntity();
			if ($this->request->is('post')) {

				//Reccuperation de l'ID de l'offre associ??e ?? la souscription
				$this->loadModel('Offres');
				$offre = $this->Offres->get($id);
				$offreid = $this->request->getData('offreid');
				$demande->offre_id =  $offre->id;

				$demande = $this->Demandes->patchEntity($demande, $this->request->getData());

				//D??finition des differentes dates
				// $demande->datedebut = $datedebut;
				// $demande->datefin = $datefin;
                
				if ($this->Demandes->save($demande)) {
					$this->Flash->success(__('Succ??s de l\'envoi.'));
                    

					return $this->redirect(['controller' => 'Offres', 'action' => 'index']);
				}
				$this->Flash->error(__('Echec d\'envoi.'));
			}
			$clients = $this->Demandes->Clients->find('list', ['limit' => 200]);
            $offres = $this->Demandes->Offres->find('list', ['limit' => 200]);
            $periodes = $this->Demandes->Periodes->find('list', ['limit' => 200]);
            $this->set(compact('demande', 'clients', 'offres', 'periodes'));
			
			
		}

     }













}
