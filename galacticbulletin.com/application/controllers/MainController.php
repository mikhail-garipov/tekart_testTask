<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Database;
use application\core\View;

class MainController extends Controller {

    public function indexAction() {

        if (isset($this->route['page'])) {
            $currentPage = $this->route['page'];
        } 
        else {
            $currentPage = 1;
        }
        $count = $this->model->getCount();
        $limit = 4;

        $news = $this->model->getNews();
        $title = $news[0];
        $offset = $limit * ($currentPage - 1);
        $maxPage = ceil ($count/$limit);
        if ($currentPage > $maxPage or $currentPage <= 0) {
            View::errorCode(404);
        }
        
        $news = $this->model->getNewsOffset($limit, $offset);
        $vars = [
            'news' => $news,
            'title' => $title,
            'maxPage' => $maxPage,
            'currentPage' => $currentPage,
        ];
        $this->view->render('Галактический вестник', $vars);
    }

    public function postAction() {

        $count = $this->model->getCount();
        $limit = 4;
        $maxPage = ceil ($count/$limit);
        $id = $this->route['id'];
        if ($id > $count or $id <= 0) {
            View::errorCode(404);
        }

        $post = $this->model->getPost($this->route['id']);
        $vars = [
            'titlePage' => $post['title'],
            'post' => $post,
        ];
        $this->view->render('Вывод новости', $vars);
    }
}
?>