<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Partenaires Controller
 *
 * @property \App\Model\Table\PartenairesTable $Partenaires
 *
 * @method \App\Model\Entity\Partenaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PartenairesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $partenaires = $this->paginate($this->Partenaires);

        $this->set(compact('partenaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Partenaire id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partenaire = $this->Partenaires->get($id, [
            'contain' => [],
        ]);

        $this->set('partenaire', $partenaire);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partenaire = $this->Partenaires->newEntity();
        if ($this->request->is('post')) {
            $partenaire = $this->Partenaires->patchEntity($partenaire, $this->request->getData());
            if ($this->Partenaires->save($partenaire)) {
                $this->Flash->success(__('The partenaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partenaire could not be saved. Please, try again.'));
        }
        $this->set(compact('partenaire'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Partenaire id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partenaire = $this->Partenaires->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partenaire = $this->Partenaires->patchEntity($partenaire, $this->request->getData());
            if ($this->Partenaires->save($partenaire)) {
                $this->Flash->success(__('The partenaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partenaire could not be saved. Please, try again.'));
        }
        $this->set(compact('partenaire'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Partenaire id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partenaire = $this->Partenaires->get($id);
        if ($this->Partenaires->delete($partenaire)) {
            $this->Flash->success(__('The partenaire has been deleted.'));
        } else {
            $this->Flash->error(__('The partenaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
