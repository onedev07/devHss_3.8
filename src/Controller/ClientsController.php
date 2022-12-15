<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 *
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{

    //Login
    public function login(){
        // $this->viewBuilder()->setLayout('adminlogin');

        //Vérification si client toujours connecté
        if($this->Auth->user('id')){
            //Utiliateur connecté
            return $this->redirect($this->Auth->redirectUrl());
        }else{
            $login = $this->Clients->newEntity();
        
        if ($this->request->is('post') AND !empty($this->request->getData())) {
			/* debug($this->request->getData());
			exit; */
            $check_login = $this->Clients->patchEntity($login, $this->request->getData(), [
                'validate' => 'login'
            ]);

            if($check_login->getErrors())
            {
                //Form validation TRUE
                $this->Flash->error(__("Veuillez renseigner les champs svp."));
            }else
            {
                //User Auth
                $client = $this->Auth->identify();
                if ($client) {
                    $this->Auth->setUser($client);
                    return $this->redirect($this->Auth->redirectUrl());
                    //return $this->redirect(['controller' => 'Souscriptions', 'action' => 'index']);
                } else {
                    $this->Flash->error(__("Email ou mot de passe incorrect"));
                }
            }
            $this->set('login', $login);
        }
        
        }

    }

	//Logout
	public function logout(){
		$this->viewBuilder()->setLayout('default');

		// Destruction de la session
		$this->request->getSession()->destroy();

		$this->redirect($this->Auth->logout());        
	}


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offres'],
        ];
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => ['Offres', 'Commentaires', 'Paiements', 'Souscriptions'],
        ]);

        $this->set('client', $client);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $offres = $this->Clients->Offres->find('list', ['limit' => 200]);
        $this->set(compact('client', 'offres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $offres = $this->Clients->Offres->find('list', ['limit' => 200]);
        $this->set(compact('client', 'offres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
