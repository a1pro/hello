    <?php
    class PostsController extends AppController
	 {
    	var $name = 'Posts';
    	var $components = array('Session','Auth','Acl');
		var $helpers = array('Access'); 
		
		
    function index()
	 {
    	$this->set('posts', $this->Post->find('all'));
		 
    }
    function view($id)
	 {
    	$this->Post->id = $id;
   		$this->set('post', $this->Post->read());
    }
    function add()
	{
   		 if (!empty($this->data))
		  {
    		if ($this->Post->save($this->data)) 
			{
    		  $this->Session->setFlash('Your post has been saved.');
    		  $this->redirect(array('action' => 'index'));
   			}
   		 }
   }
   
    function delete($id)
	{
   
       if ($this->Post->delete($id))
	   {
         $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
          $this->redirect(array('action' => 'index'));
       }
    }
	 function edit($id = null) 
	 {
	     $user = $this->Auth->user();  
    if(!$this->Acl->check('User::'.$user['User']['id'], 'Post', 'update')) die('you are not authorized');   
       $this->Post->id = $id;
       if (empty($this->data))
	   {
          $this->data = $this->Post->read();
       } 
	   else
	   {
       if ($this->Post->save($this->data))
	   {
       $this->Session->setFlash('Your post has been updated.');
       $this->redirect(array('action' => 'index'));
      }
   }
  }


   
   
   }
    ?>
