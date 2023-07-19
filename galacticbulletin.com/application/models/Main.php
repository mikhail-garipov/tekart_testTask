<?php 

namespace application\models;

use application\core\Model;

class Main extends Model {
    public function getNews() {
        $news = $this->database->row('SELECT * FROM `news` ORDER BY `date` DESC');
        return $news;
    }

    public function getPost($id) {
        $post = $this->database->row('SELECT * FROM `news` WHERE `id` = '.$id);
        return $post[0];
    }

    public function getNewsOffset($limit = 4, $offset) {
        $news = $this->database->row('SELECT * FROM `news` ORDER BY `date` DESC LIMIT '.$limit. ' OFFSET ' .$offset);
        return $news;
    }

    public function getCount() {
        $count = $this->database->row('SELECT COUNT(*) FROM `news`');
        return $count[0]['COUNT(*)'];
    }

}
?>