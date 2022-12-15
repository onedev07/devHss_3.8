<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Devispaiements Controller
 *
 * @property \App\Model\Table\DevispaiementsTable $Devispaiements
 *
 * @method \App\Model\Entity\Devispaiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DevispaiementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Devis', 'Clients'],
        ];
        $devispaiements = $this->paginate($this->Devispaiements);

        $this->set(compact('devispaiements'));
    }

    /**
     * View method
     *
     * @param string|null $id Devispaiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $devispaiement = $this->Devispaiements->get($id, [
            'contain' => ['Devis', 'Clients'],
        ]);

        $this->set('devispaiement', $devispaiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $devispaiement = $this->Devispaiements->newEntity();
        if ($this->request->is('post')) {
            $devispaiement = $this->Devispaiements->patchEntity($devispaiement, $this->request->getData());
            if ($this->Devispaiements->save($devispaiement)) {
                $this->Flash->success(__('The devispaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devispaiement could not be saved. Please, try again.'));
        }
        $devis = $this->Devispaiements->Devis->find('list', ['limit' => 200]);
        $clients = $this->Devispaiements->Clients->find('list', ['limit' => 200]);
        $this->set(compact('devispaiement', 'devis', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Devispaiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $devispaiement = $this->Devispaiements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $devispaiement = $this->Devispaiements->patchEntity($devispaiement, $this->request->getData());
            if ($this->Devispaiements->save($devispaiement)) {
                $this->Flash->success(__('The devispaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devispaiement could not be saved. Please, try again.'));
        }
        $devis = $this->Devispaiements->Devis->find('list', ['limit' => 200]);
        $clients = $this->Devispaiements->Clients->find('list', ['limit' => 200]);
        $this->set(compact('devispaiement', 'devis', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Devispaiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $devispaiement = $this->Devispaiements->get($id);
        if ($this->Devispaiements->delete($devispaiement)) {
            $this->Flash->success(__('The devispaiement has been deleted.'));
        } else {
            $this->Flash->error(__('The devispaiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
