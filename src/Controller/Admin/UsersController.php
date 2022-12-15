<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

//use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
use Cake\View\Helper\SessionHelper;

//use App\Controller\Admin\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
        //$this->Auth->allow(['login', 'index', 'add']);
        //  $this->Auth->allow(['login', 'logout']);
    }

    //Login
    public function login(){
        $this->viewBuilder()->setLayout('adminlogin');

        //Vérification si user tjoujours connecté
        if($this->Auth->user('id')){
            //Utiliateur connecté
            return $this->redirect($this->Auth->redirectUrl());
        }else{
            $login = $this->Users->newEntity();
        
        if ($this->request->is('post') AND !empty($this->request->getData())) {
            $check_login = $this->Users->patchEntity($login, $this->request->getData(), [
                'validate' => 'login'
            ]);

            if($check_login->getErrors())
            {
                //Form validation TRUE
                $this->Flash->error(__("Veuillez renseigner les champs svp."));
            }else
            {
                //User Auth
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
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
        $this->viewBuilder()->setLayout('adminlogin');

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
            'contain' => ['Usergroups'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Usergroups', 'Articles'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $usergroups = $this->Users->Usergroups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'usergroups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $usergroups = $this->Users->Usergroups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'usergroups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    //Profile User
    public function profile($id = null){
        $this->viewBuilder()->setLayout('admin');
        $user = $this->Users->get($id, [
            'contain' => ['Usergroups', 'Articles'],
        ]);

        $this->set('user', $user);
    }
}
