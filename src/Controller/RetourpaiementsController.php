<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Retourpaiements Controller
 *
 * @property \App\Model\Table\RetourpaiementsTable $Retourpaiements
 *
 * @method \App\Model\Entity\Retourpaiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RetourpaiementsController extends AppController
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
        $retourpaiements = $this->paginate($this->Retourpaiements);

        $this->set(compact('retourpaiements'));
    }

    /**
     * View method
     *
     * @param string|null $id Retourpaiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $retourpaiement = $this->Retourpaiements->get($id, [
            'contain' => ['Devis', 'Clients'],
        ]);

        $this->set('retourpaiement', $retourpaiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $retourpaiement = $this->Retourpaiements->newEntity();
        if ($this->request->is('post')) {
            $retourpaiement = $this->Retourpaiements->patchEntity($retourpaiement, $this->request->getData());
            if ($this->Retourpaiements->save($retourpaiement)) {
                $this->Flash->success(__('The retourpaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The retourpaiement could not be saved. Please, try again.'));
        }
        $devis = $this->Retourpaiements->Devis->find('list', ['limit' => 200]);
        $clients = $this->Retourpaiements->Clients->find('list', ['limit' => 200]);
        $this->set(compact('retourpaiement', 'devis', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Retourpaiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $retourpaiement = $this->Retourpaiements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $retourpaiement = $this->Retourpaiements->patchEntity($retourpaiement, $this->request->getData());
            if ($this->Retourpaiements->save($retourpaiement)) {
                $this->Flash->success(__('The retourpaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The retourpaiement could not be saved. Please, try again.'));
        }
        $devis = $this->Retourpaiements->Devis->find('list', ['limit' => 200]);
        $clients = $this->Retourpaiements->Clients->find('list', ['limit' => 200]);
        $this->set(compact('retourpaiement', 'devis', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Retourpaiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $retourpaiement = $this->Retourpaiements->get($id);
        if ($this->Retourpaiements->delete($retourpaiement)) {
            $this->Flash->success(__('The retourpaiement has been deleted.'));
        } else {
            $this->Flash->error(__('The retourpaiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
