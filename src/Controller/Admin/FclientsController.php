<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\I18n\Date;


class FclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
		$this->viewBuilder()->setLayout('admin');
		$this->loadModel('Paiements');
        
		$this->paginate = [
            'contain' => ['Souscriptions', 'Clients', 'Etatpaiements'],
        ];
        $paiements = $this->paginate($this->Paiements);

        $this->set(compact('paiements'));
		
		//afficher le nombre total de paiements
		$paiements = $this->Paiements->find('all', [
			'contain' => ['Souscriptions', 'Clients', 'Etatpaiements'],			
		]);
        $number = $paiements->count();
        
        // Afficher le nombre journalier de paiements
        //  $date = date::now();
        //  $time = new Time();
        // debug($date);
        // exit;
		
        $souscriptions = $this->Paiements->find('all', [
            'conditions' => ['Paiements.created >=' => Date::now()],
			'contain' => ['Souscriptions', 'Clients', 'Etatpaiements'],			
		]);
		$jnumber = $paiements->count();
    }

    /**
     * View method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => ['Souscriptions', 'Clients', 'Etatpaiements'],
        ]);

        $this->set('paiement', $paiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paiement = $this->Paiements->newEntity();
        if ($this->request->is('post')) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $souscriptions = $this->Paiements->Souscriptions->find('list', ['limit' => 200]);
        $clients = $this->Paiements->Clients->find('list', ['limit' => 200]);
        $etatpaiements = $this->Paiements->Etatpaiements->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'souscriptions', 'clients', 'etatpaiements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $souscriptions = $this->Paiements->Souscriptions->find('list', ['limit' => 200]);
        $clients = $this->Paiements->Clients->find('list', ['limit' => 200]);
        $etatpaiements = $this->Paiements->Etatpaiements->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'souscriptions', 'clients', 'etatpaiements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paiement = $this->Paiements->get($id);
        if ($this->Paiements->delete($paiement)) {
            $this->Flash->success(__('The paiement has been deleted.'));
        } else {
            $this->Flash->error(__('The paiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}



