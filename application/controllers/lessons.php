<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lessons extends MY_Controller
{

    public function lesson($alias)
    {
        try {
            $page = new Page_Lesson(array('alias' => $alias));
            $page->render();
        } catch (Exception $e) {
            $this->error($e);
        }
    }
}