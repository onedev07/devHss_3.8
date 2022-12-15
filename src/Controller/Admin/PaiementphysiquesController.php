<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\I18n\Date;

/**
 * Paiementphysiques Controller
 *
 * @property \App\Model\Table\PaiementphysiquesTable $Paiementphysiques
 *
 * @method \App\Model\Entity\Paiementphysique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaiementphysiquesController extends AppController
{
	
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Physclients', 'Offres', 'Periodes'],
        ];
        $paiementphysiques = $this->paginate($this->Paiementphysiques);

        $this->set(compact('paiementphysiques'));
		
		
		//Recherche
		$firstDate = $this->request->getQuery('firstDate');
		$lastDate = $this->request->getQuery('lastDate');
			
			/* debug($firstDate);
			exit; */
			if($firstDate & $lastDate){
				$query = $this->Paiementphysiques->find('all')
						->where(function ($exp, $q) {
					return $exp->between('Paiementphysiques.date_debut', $this->request->getQuery('firstDate'), $this->request->getQuery('lastDate'));
				});
				/* $query = $this->Paiementphysiques->find('all')
					->where([
						'Paiementphysiques.date_debut >=' => $this->request->getQuery('firstDate'),
						'Paiementphysiques.date_debut <=' => $this->request->getQuery('lastDate'),
						//'OR' => [['view_count' => 2], ['view_count' => 3]],
				]); */
			}else{
				$query = $this->Paiementphysiques;
			}		
		$paiementphysiques = $this->paginate($query);
		$this->set(compact('paiementphysiques'));
		
		
		//afficher le nombre total de paiements
		$paiementphysiques = $this->Paiementphysiques->find('all', [
			'contain' => ['Physclients', 'Offres', 'Periodes'],			
		]);
        $number = $paiementphysiques->count();
		
		
    }

    /**
     * View method
     *
     * @param string|null $id Paiementphysique id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		
        $paiementphysique = $this->Paiementphysiques->get($id, [
            'contain' => ['Physclients', 'Offres', 'Periodes'],
        ]);

        $this->set('paiementphysique', $paiementphysique);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {		
		$nmois = $this->request->getData('nbmois');		
			
		// Determiniation de date de d'enregistrement (debut d'abonnement)
		//$date = new Time();
		$datedebut = Time::now();
		$datedebut->timezone = 'Africa/Abidjan';
		/* $date_debut = $datedebut; */

		/* debug($date_debut);
		die(); */
		
		//Calcul de la fin d'abonnement		
		//$date = new Time();
		$date = Time::now();
		$datefin = $date->addMonth($nmois);	
		$datefin->timezone = 'Africa/Abidjan';
		/* $date_fin = $datefin; */
		/* debug($date_fin);
		die(); */	
		
		/* $datedebut = $this->request->getData('date_debut');
		$datefin = $this->request->getData('date_fin'); */	
		
        $paiementphysique = $this->Paiementphysiques->newEntity();		
        if ($this->request->is('post')) {
			
			/* $date_debut = $this->request->getData('date_debut');
			$date_fin = $this->request->getData('date_fin'); */
			
            $paiementphysique = $this->Paiementphysiques->patchEntity($paiementphysique, $this->request->getData());
			/* debug($paiementphysique);
			exit; */
			$paiementphysique->date_debut = $datedebut;
			$paiementphysique->date_fin = $datefin;
			
			/* debug($datefin);
			die(); */
			
            if ($this->Paiementphysiques->save($paiementphysique)) {				
				
                $this->Flash->success(__('Succès.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec.'));
        }
        $physclients = $this->Paiementphysiques->Physclients->find('list', ['limit' => 200]);
        $offres = $this->Paiementphysiques->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Paiementphysiques->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('paiementphysique', 'physclients', 'offres', 'periodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paiementphysique id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paiementphysique = $this->Paiementphysiques->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paiementphysique = $this->Paiementphysiques->patchEntity($paiementphysique, $this->request->getData());
            if ($this->Paiementphysiques->save($paiementphysique)) {
                $this->Flash->success(__('The paiementphysique has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiementphysique could not be saved. Please, try again.'));
        }
        $physclients = $this->Paiementphysiques->Physclients->find('list', ['limit' => 200]);
        $offres = $this->Paiementphysiques->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Paiementphysiques->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('paiementphysique', 'physclients', 'offres', 'periodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paiementphysique id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paiementphysique = $this->Paiementphysiques->get($id);
        if ($this->Paiementphysiques->delete($paiementphysique)) {
            $this->Flash->success(__('The paiementphysique has been deleted.'));
        } else {
            $this->Flash->error(__('The paiementphysique could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function etape1($id=null){
		$this->viewBuilder()->setLayout('admin');
		
		//Enrégistrement du client
		$this->loadModel('Physclients');
		$physclient = $this->Physclients->newEntity();
        if ($this->request->is('post')) {
            $physclient = $this->Physclients->patchEntity($physclient, $this->request->getData());
            if ($this->Physclients->save($physclient)) {
                //$this->Flash->success(__('The physclient has been saved.'));

                return $this->redirect(['action' => 'etape2', $physclient->id]);
            }
            $this->Flash->error(__('Echec de l\'enrégistrement du client.'));
        }
        $this->set(compact('physclient'));		
		
	}
	
	public function etape2($id=null){
		$this->viewBuilder()->setLayout('admin');
		
		//Chargement modele Paiementphysiques
		$this->loadModel('Paiementphysiques');
		$this->loadModel('Physclients');
		
		//Enrégistrement du paiement physique
		$nmois = $this->request->getData('nbmois');		
			
		// Determiniation de date de d'enregistrement (debut d'abonnement)
		$datedebut = Time::now();
		$datedebut->timezone = 'Africa/Abidjan';
		
		
		//Calcul de la fin d'abonnement
		$date = Time::now();
		$datefin = $date->addMonth($nmois);	
		$datefin->timezone = 'Africa/Abidjan';		
		
        $paiementphysique = $this->Paiementphysiques->newEntity();
		
		//Recupération de l'ID du client physique
		$this->loadModel('Physclients');			
		$physclient = $this->Physclients->get($id);
		$physclientid = $this->request->getData('physclient_id');
		$paiementphysique->physclient_id = $physclient->id;	
		$idClient = $physclient->id;
		//$this->set('physclient', $physclient);
		
		
        if ($this->request->is('post')) {
			
            $paiementphysique = $this->Paiementphysiques->patchEntity($paiementphysique, $this->request->getData());
						
			$paiementphysique->date_debut = $datedebut;
			$paiementphysique->date_fin = $datefin;	

			$paiementphysique->physclient_id = $idClient;
			
            if ($this->Paiementphysiques->save($paiementphysique)) {				
				
                $this->Flash->success(__('Succès.'));

                return $this->redirect(['action' => 'view', $paiementphysique->id]);
            }
            $this->Flash->error(__('Echec.'));
        }
        $physclients = $this->Paiementphysiques->Physclients->find('list', ['limit' => 200]);
        $offres = $this->Paiementphysiques->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Paiementphysiques->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('paiementphysique', 'physclients', 'offres', 'periodes'));
		
	}
	
	
	public function imprimer($id = null){
		$this->viewBuilder()->setLayout('admin');
		
		/* $this->viewBuilder()
			->className('Dompdf.Pdf')
			->layout('Dompdf.default')
			->options(['config' => [
			  'filename' => $name,
			  'render' => 'browser',
		]]);	 */	
		
		/* $this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		// increase memory limit in PHP 
		ini_set('memory_limit', '512M');
		$this->set('post', $this->Post->read(null, $id)); */
		
		
	}
	
	
	
}
