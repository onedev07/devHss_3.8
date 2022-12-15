<?php
namespace App\Controller;

use App\Controller\AppController;

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
        $paiementphysique = $this->Paiementphysiques->newEntity();
        if ($this->request->is('post')) {
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
}
