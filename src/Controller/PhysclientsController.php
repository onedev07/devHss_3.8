<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Physclients Controller
 *
 * @property \App\Model\Table\PhysclientsTable $Physclients
 *
 * @method \App\Model\Entity\Physclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhysclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $physclients = $this->paginate($this->Physclients);

        $this->set(compact('physclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Physclient id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $physclient = $this->Physclients->get($id, [
            'contain' => ['Paiementphysiques'],
        ]);

        $this->set('physclient', $physclient);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $physclient = $this->Physclients->newEntity();
        if ($this->request->is('post')) {
            $physclient = $this->Physclients->patchEntity($physclient, $this->request->getData());
            if ($this->Physclients->save($physclient)) {
                $this->Flash->success(__('The physclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The physclient could not be saved. Please, try again.'));
        }
        $this->set(compact('physclient'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Physclient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $physclient = $this->Physclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $physclient = $this->Physclients->patchEntity($physclient, $this->request->getData());
            if ($this->Physclients->save($physclient)) {
                $this->Flash->success(__('The physclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The physclient could not be saved. Please, try again.'));
        }
        $this->set(compact('physclient'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Physclient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $physclient = $this->Physclients->get($id);
        if ($this->Physclients->delete($physclient)) {
            $this->Flash->success(__('The physclient has been deleted.'));
        } else {
            $this->Flash->error(__('The physclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
