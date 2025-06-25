<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class PostsController extends AppController {
    public function initialize(): void
    {
        parent::initialize();
        $this->loadHelper('Html');
        $this->loadHelper('Form');
    }
    
    public function index() {
        $posts = $this->Posts->find()->all();
        $this->set(compact('posts'));
    }

}