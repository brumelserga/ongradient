<?php

class Block_Lessons extends Block_Abstract
{
    public function __construct(Model_Topic_Entity $topic)
    {
        $this->setView('lessons');

        $service = new Service_Lessons();
        $lessons = $service->getItems(
            array('topic_id' => $topic->id, 'order' => 'position ASC'),
            array('title', 'description'));

        $this->_addData(array('lessons' => $lessons, 'topic' => $topic));
    }
}