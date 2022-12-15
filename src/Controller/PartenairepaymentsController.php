<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Partenairepayments Controller
 *
 * @property \App\Model\Table\PartenairepaymentsTable $Partenairepayments
 *
 * @method \App\Model\Entity\Partenairepayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PartenairepaymentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offres', 'Clients', 'Partenaires', 'Perioeds'],
        ];
        $partenairepayments = $this->paginate($this->Partenairepayments);

        $this->set(compact('partenairepayments'));
    }

    /**
     * View method
     *
     * @param string|null $id Partenairepayment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partenairepayment = $this->Partenairepayments->get($id, [
            'contain' => ['Offres', 'Clients', 'Partenaires', 'Perioeds'],
        ]);

        $this->set('partenairepayment', $partenairepayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partenairepayment = $this->Partenairepayments->newEntity();
        if ($this->request->is('post')) {
            $partenairepayment = $this->Partenairepayments->patchEntity($partenairepayment, $this->request->getData());
            if ($this->Partenairepayments->save($partenairepayment)) {
                $this->Flash->success(__('The partenairepayment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partenairepayment could not be saved. Please, try again.'));
        }
        $offres = $this->Partenairepayments->Offres->find('list', ['limit' => 200]);
        $clients = $this->Partenairepayments->Clients->find('list', ['limit' => 200]);
        $partenaires = $this->Partenairepayments->Partenaires->find('list', ['limit' => 200]);
        $perioeds = $this->Partenairepayments->Perioeds->find('list', ['limit' => 200]);
        $this->set(compact('partenairepayment', 'offres', 'clients', 'partenaires', 'perioeds'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Partenairepayment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partenairepayment = $this->Partenairepayments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partenairepayment = $this->Partenairepayments->patchEntity($partenairepayment, $this->request->getData());
            if ($this->Partenairepayments->save($partenairepayment)) {
                $this->Flash->success(__('The partenairepayment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partenairepayment could not be saved. Please, try again.'));
        }
        $offres = $this->Partenairepayments->Offres->find('list', ['limit' => 200]);
        $clients = $this->Partenairepayments->Clients->find('list', ['limit' => 200]);
        $partenaires = $this->Partenairepayments->Partenaires->find('list', ['limit' => 200]);
        $perioeds = $this->Partenairepayments->Perioeds->find('list', ['limit' => 200]);
        $this->set(compact('partenairepayment', 'offres', 'clients', 'partenaires', 'perioeds'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Partenairepayment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partenairepayment = $this->Partenairepayments->get($id);
        if ($this->Partenairepayments->delete($partenairepayment)) {
            $this->Flash->success(__('The partenairepayment has been deleted.'));
        } else {
            $this->Flash->error(__('The partenairepayment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
