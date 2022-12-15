<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Devis Controller
 *
 * @property \App\Model\Table\DevisTable $Devis
 *
 * @method \App\Model\Entity\Devi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DevisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Clients', 'Offres', 'Materielincluses', 'Serviceincluses', 'Periodes', 'Etats'],
        ];
        $devis = $this->paginate($this->Devis);

        $this->set(compact('devis'));
    }

    /**
     * View method
     *
     * @param string|null $id Devi id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $devi = $this->Devis->get($id, [
            'contain' => ['Users', 'Clients', 'Offres', 'Materielincluses', 'Serviceincluses', 'Periodes', 'Etats'],
        ]);

        $this->set('devi', $devi);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $devi = $this->Devis->newEntity();
        if ($this->request->is('post')) {
            $devi = $this->Devis->patchEntity($devi, $this->request->getData());
            if ($this->Devis->save($devi)) {
                $this->Flash->success(__('The devi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devi could not be saved. Please, try again.'));
        }
        $users = $this->Devis->Users->find('list', ['limit' => 200]);
        $clients = $this->Devis->Clients->find('list', ['limit' => 200]);
        $offres = $this->Devis->Offres->find('list', ['limit' => 200]);
        $materielincluses = $this->Devis->Materielincluses->find('list', ['limit' => 200]);
        $serviceincluses = $this->Devis->Serviceincluses->find('list', ['limit' => 200]);
        $periodes = $this->Devis->Periodes->find('list', ['limit' => 200]);
        $etats = $this->Devis->Etats->find('list', ['limit' => 200]);
        $this->set(compact('devi', 'users', 'clients', 'offres', 'materielincluses', 'serviceincluses', 'periodes', 'etats'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Devi id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $devi = $this->Devis->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $devi = $this->Devis->patchEntity($devi, $this->request->getData());
            if ($this->Devis->save($devi)) {
                $this->Flash->success(__('The devi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devi could not be saved. Please, try again.'));
        }
        $users = $this->Devis->Users->find('list', ['limit' => 200]);
        $clients = $this->Devis->Clients->find('list', ['limit' => 200]);
        $offres = $this->Devis->Offres->find('list', ['limit' => 200]);
        $materielincluses = $this->Devis->Materielincluses->find('list', ['limit' => 200]);
        $serviceincluses = $this->Devis->Serviceincluses->find('list', ['limit' => 200]);
        $periodes = $this->Devis->Periodes->find('list', ['limit' => 200]);
        $etats = $this->Devis->Etats->find('list', ['limit' => 200]);
        $this->set(compact('devi', 'users', 'clients', 'offres', 'materielincluses', 'serviceincluses', 'periodes', 'etats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Devi id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $devi = $this->Devis->get($id);
        if ($this->Devis->delete($devi)) {
            $this->Flash->success(__('The devi has been deleted.'));
        } else {
            $this->Flash->error(__('The devi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
