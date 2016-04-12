<?php
class Page_Lesson extends Page_Base
{
    public function __construct($alias)
    {
        $this->_setLayout('main');

        $service = new Service_Lessons();
        $lesson = $service->getItem(array('alias' => $alias));

        $blockLesson = new Block_Lesson($lesson);
        $this->addBlock($blockLesson, 'left');

        $blockConspect = new Block_Lesson_Conspect($lesson);
        $this->addBlock($blockConspect, 'left');

        $serviceTopics = new Service_Topics();
        $topic = $serviceTopics->getItem(array('id' => $lesson->topic_id));

        $blockLessons = new Block_Lessons($topic);
        $this->addBlock($blockLessons, 'right');

        $serviceChapters = new Service_Chapters();
        $chapter = $serviceChapters->getItem(array('id' => $topic->chapter_id));

        $this->addBlock(new Block_Menu_Lesson($lesson, $chapter, $topic), 'menu');

        $this->_addMetadata($lesson);

        parent::__construct();
    }

    /**
     * Add page head data
     *
     * @param Model_Lesson_Entity
     * @return void
     */
    protected function _addMetadata($lesson)
    {
        $this->_addData(array('metadata' => array(
            'title' => $lesson->i18n('title'),
            'description' =>  $lesson->i18n('description'),
            'keywords' =>  $lesson->i18n('keywords'),
            'hint' =>  $lesson->i18n('hint'),
        )));
    }
}
