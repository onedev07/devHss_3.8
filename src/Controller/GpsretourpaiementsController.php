<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gpsretourpaiements Controller
 *
 * @property \App\Model\Table\GpsretourpaiementsTable $Gpsretourpaiements
 *
 * @method \App\Model\Entity\Gpsretourpaiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GpsretourpaiementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Gpsoffres', 'Clients'],
        ];
        $gpsretourpaiements = $this->paginate($this->Gpsretourpaiements);

        $this->set(compact('gpsretourpaiements'));
    }

    /**
     * View method
     *
     * @param string|null $id Gpsretourpaiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gpsretourpaiement = $this->Gpsretourpaiements->get($id, [
            'contain' => ['Gpsoffres', 'Clients'],
        ]);

        $this->set('gpsretourpaiement', $gpsretourpaiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gpsretourpaiement = $this->Gpsretourpaiements->newEntity();
        if ($this->request->is('post')) {
            $gpsretourpaiement = $this->Gpsretourpaiements->patchEntity($gpsretourpaiement, $this->request->getData());
            if ($this->Gpsretourpaiements->save($gpsretourpaiement)) {
                $this->Flash->success(__('The gpsretourpaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gpsretourpaiement could not be saved. Please, try again.'));
        }
        $gpsoffres = $this->Gpsretourpaiements->Gpsoffres->find('list', ['limit' => 200]);
        $clients = $this->Gpsretourpaiements->Clients->find('list', ['limit' => 200]);
        $this->set(compact('gpsretourpaiement', 'gpsoffres', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gpsretourpaiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gpsretourpaiement = $this->Gpsretourpaiements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gpsretourpaiement = $this->Gpsretourpaiements->patchEntity($gpsretourpaiement, $this->request->getData());
            if ($this->Gpsretourpaiements->save($gpsretourpaiement)) {
                $this->Flash->success(__('The gpsretourpaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gpsretourpaiement could not be saved. Please, try again.'));
        }
        $gpsoffres = $this->Gpsretourpaiements->Gpsoffres->find('list', ['limit' => 200]);
        $clients = $this->Gpsretourpaiements->Clients->find('list', ['limit' => 200]);
        $this->set(compact('gpsretourpaiement', 'gpsoffres', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gpsretourpaiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gpsretourpaiement = $this->Gpsretourpaiements->get($id);
        if ($this->Gpsretourpaiements->delete($gpsretourpaiement)) {
            $this->Flash->success(__('The gpsretourpaiement has been deleted.'));
        } else {
            $this->Flash->error(__('The gpsretourpaiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
