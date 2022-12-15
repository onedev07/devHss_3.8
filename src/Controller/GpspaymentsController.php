<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gpspayments Controller
 *
 * @property \App\Model\Table\GpspaymentsTable $Gpspayments
 *
 * @method \App\Model\Entity\Gpspayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GpspaymentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Gpsoffres', 'Clients', 'Periodes'],
        ];
        $gpspayments = $this->paginate($this->Gpspayments);

        $this->set(compact('gpspayments'));
    }

    /**
     * View method
     *
     * @param string|null $id Gpspayment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gpspayment = $this->Gpspayments->get($id, [
            'contain' => ['Gpsoffres', 'Clients', 'Periodes'],
        ]);

        $this->set('gpspayment', $gpspayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gpspayment = $this->Gpspayments->newEntity();
        if ($this->request->is('post')) {
            $gpspayment = $this->Gpspayments->patchEntity($gpspayment, $this->request->getData());
            if ($this->Gpspayments->save($gpspayment)) {
                $this->Flash->success(__('The gpspayment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gpspayment could not be saved. Please, try again.'));
        }
        $gpsoffres = $this->Gpspayments->Gpsoffres->find('list', ['limit' => 200]);
        $clients = $this->Gpspayments->Clients->find('list', ['limit' => 200]);
        $periodes = $this->Gpspayments->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('gpspayment', 'gpsoffres', 'clients', 'periodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gpspayment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gpspayment = $this->Gpspayments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gpspayment = $this->Gpspayments->patchEntity($gpspayment, $this->request->getData());
            if ($this->Gpspayments->save($gpspayment)) {
                $this->Flash->success(__('The gpspayment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gpspayment could not be saved. Please, try again.'));
        }
        $gpsoffres = $this->Gpspayments->Gpsoffres->find('list', ['limit' => 200]);
        $clients = $this->Gpspayments->Clients->find('list', ['limit' => 200]);
        $periodes = $this->Gpspayments->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('gpspayment', 'gpsoffres', 'clients', 'periodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gpspayment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gpspayment = $this->Gpspayments->get($id);
        if ($this->Gpspayments->delete($gpspayment)) {
            $this->Flash->success(__('The gpspayment has been deleted.'));
        } else {
            $this->Flash->error(__('The gpspayment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
