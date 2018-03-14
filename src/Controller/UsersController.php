<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\ORM\TableRegistry;
   use Cake\Datasource\ConnectionManager;
   use Cake\Auth\DefaultPasswordHasher;

   class UsersController extends AppController{
      public function index(){
      	$users_table = TableRegistry::get('users');
      	$query = $users_table->find();
      	$this->set('results', $query);
      }

      public function add(){
      	if($this->request->is('post')){
      		$username = $this->request->data('username');
      		$hashPswdObj = new defaultPasswordHasher;
      		$password = $hashPswdObj->hash($this->request->data('password'));
      		$users_table = TableRegistry::get('users'); 
      		$users = $users_table->newEntity();
      		$users->username = $username;
      		$users->password = $password;

      		if($users_table->save($users))
      			echo "user is added";
      	}
      }

      public function edit($id){
      	if($this->request->is('post')){
            $username = $this->request->data('username');
            $hashPswdObj = new defaultPasswordHasher;
      		$old_password = $hashPswdObj->hash($this->request->data('old_password'));
            $new_password = $hashPswdObj->hash($this->request->data('new_password'));
            if($old_password != $new_password){
            	echo "wrong";
            	die;
            }
            $users_table = TableRegistry::get('users');
            $users = $users_table->get($id);
            $users->username = $username;
            $users->password = $password;
         
            if($users_table->save($users))
            echo "User is udpated";
            $this->setAction('index');
         } 
         else {
            $users_table = TableRegistry::get('users')->find();
            $users = $users_table->where(['id'=>$id])->first();
            $this->set('username',$users->username);
            $this->set('password',$users->password);
            $this->set('id',$id);
         }
      }

      public function delete(){

      }
   }
?>