<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Event\EventInterface;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Flash');
        // $this->loadComponent('Auth');

        // Authentification utilisateurs
        if(!empty($this->request->getParam(['prefix']))){
            if($this->request->getParam(['prefix']) == 'admin'){
                $this->loadComponent('Auth', [
                    'loginAction' => [
                        'controller' => 'Users',
                        'action' => 'login',
                    ],
					'loginRedirect' => [
						'controller' => 'Dashboards',
						'action' => 'index'
					],
					'logoutRedirect' => [
						'controller' => 'Users',
						'action' => 'login'
					],
                    'authError' => 'Accès interdit.',
                    'authenticate' => [
                        'Form' => [
                            'fields' => ['username' => 'email', 'password' => 'password']
                        ]
                    ],
                    'storage' => [
                        'className' => 'Session',
                        'key' => 'Auth.Admin',
                    ]
                ]);
                // $this->Auth->getConfig('authenticate', ['Form']);

                // $this->Auth->getConfig('authenticate', [
                //     'Form' => ['userModel' => 'Users'],
                // ]);
                $this->viewBuilder()->setLayout('admin');
                $this->Auth->allow(['login', 'logout']);
            }
        }else if(empty($this->request->getParam(['prefix']))){
            //Authentification pour le frontend
            $this->loadComponent('Auth', [
				'authenticate' => [
					'Form' => [
					'fields' => ['username' => 'email', 'password' => 'password'],
					'userModel' => 'Clients'
					],
                ],
                'loginAction' => [
                    'controller' => 'Clients',
                    'action' => 'login',
                ],
                'loginRedirect' => [
                    'controller' => 'Offres',
                    'action' => 'index'
                ],
                'logoutRedirect' => [
                    'controller' => 'Clients',
                    'action' => 'login'
                ],
                'authError' => 'Accès interdit.',
                
                /* ], */
                /* 'storage' => 'Session' */
            ]);
            // $this->Auth->getConfig('authenticate', ['Form']);

            /* $this->Auth->getConfig('authenticate', [
                'Form' => ['Clients' => 'Clients'],
            ]); */
            $this->Auth->allow([ 'index', 'add','subscribe', 'payment', 'prestation', 'contact', 'reference', 'contrat', 'client', 'validation', 'notification', 'infopayment.php', 'compte']);
			
			//afficher le nom du client connecté
			$this->set('name', $this->Auth->user('name'));
        }

        


        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

    }

    /* public function beforeFilter(EventInterface $event)
    { */
		//afficher le nom du client connecté
		/* $this->set('name', $this->Auth->user('name')); */
    /* } */

	
}
