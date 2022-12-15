<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gpsoffres Controller
 *
 * @property \App\Model\Table\GpsoffresTable $Gpsoffres
 *
 * @method \App\Model\Entity\Gpsoffre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GpsoffresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $gpsoffres = $this->paginate($this->Gpsoffres);

        $this->set(compact('gpsoffres'));
    }

    /**
     * View method
     *
     * @param string|null $id Gpsoffre id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gpsoffre = $this->Gpsoffres->get($id, [
            'contain' => ['Gpspayments', 'Gpsretourpaiements'],
        ]);

        $this->set('gpsoffre', $gpsoffre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gpsoffre = $this->Gpsoffres->newEntity();
        if ($this->request->is('post')) {
            $gpsoffre = $this->Gpsoffres->patchEntity($gpsoffre, $this->request->getData());
            if ($this->Gpsoffres->save($gpsoffre)) {
                $this->Flash->success(__('The gpsoffre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gpsoffre could not be saved. Please, try again.'));
        }
        $this->set(compact('gpsoffre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gpsoffre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gpsoffre = $this->Gpsoffres->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gpsoffre = $this->Gpsoffres->patchEntity($gpsoffre, $this->request->getData());
            if ($this->Gpsoffres->save($gpsoffre)) {
                $this->Flash->success(__('The gpsoffre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gpsoffre could not be saved. Please, try again.'));
        }
        $this->set(compact('gpsoffre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gpsoffre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gpsoffre = $this->Gpsoffres->get($id);
        if ($this->Gpsoffres->delete($gpsoffre)) {
            $this->Flash->success(__('The gpsoffre has been deleted.'));
        } else {
            $this->Flash->error(__('The gpsoffre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
