<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
        $this->set('title_for_layout', '記事一覧');
    }

    public function test() {
        // このアクションでは何もしなくてOK
        $this->set('title_for_layout', 'テストページ');
    }
}