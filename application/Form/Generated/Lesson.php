<?php
class Form_Generated_Lesson extends Zend_Form
{
    public function __construct()
    {
        $this->setMethod('post');
        $this->setView(new Zend_View());


        $this->addElement('hidden', 'id', array(
            'validators' => array(
                'int',
                array('GreaterThan', false,  array('min' => 0)),
            ),
        ));

        $this->addElement('text', 'topic_id', array(
            'validators' => array(
                'int',
                array('GreaterThan', false,  array('min' => 0)),
            ),
            'label' => 'Topic Id',
        ));

        $this->addElement('text', 'gallery_id', array(
            'validators' => array(
                'int',
                array('GreaterThan', false,  array('min' => 0)),
            ),
            'label' => 'Gallery Id',
        ));

        $this->addElement('text', 'alias', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Alias',
        ));

        $this->addElement('text', 'pic', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Pic',
        ));

        $this->addElement('text', 'position', array(
            'validators' => array(
                'int',
            ),
            'label' => 'Position',
        ));

        $this->addElement('hidden', 'i18n_id_ru', array(
            'validators' => array(
                'int',
                array('GreaterThan', false,  array('min' => 0)),
            ),
        ));

        $this->addElement('hidden', 'i18n_id_ua', array(
            'validators' => array(
                'int',
                array('GreaterThan', false,  array('min' => 0)),
            ),
        ));

        $this->addElement('hidden', 'i18n_id_en', array(
            'validators' => array(
                'int',
                array('GreaterThan', false,  array('min' => 0)),
            ),
        ));

        $this->addElement('hidden', 'i18n_lesson_id', array(
            'validators' => array(
                'int',
                array('GreaterThan', false,  array('min' => 0)),
            ),
        ));

        $this->addElement('text', 'i18n_lang_ru', array(
            'label' => 'Lang Ru',
        ));

        $this->addElement('text', 'i18n_lang_ua', array(
            'label' => 'Lang Ua',
        ));

        $this->addElement('text', 'i18n_lang_en', array(
            'label' => 'Lang En',
        ));

        $this->addElement('textarea', 'i18n_content_ru', array(
            'label' => 'Content Ru',
            'attribs' => array('rows' => 6),
        ));

        $this->addElement('textarea', 'i18n_content_ua', array(
            'label' => 'Content Ua',
            'attribs' => array('rows' => 6),
        ));

        $this->addElement('textarea', 'i18n_content_en', array(
            'label' => 'Content En',
            'attribs' => array('rows' => 6),
        ));

        $this->addElement('text', 'i18n_title_ru', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Title Ru',
        ));

        $this->addElement('text', 'i18n_title_ua', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Title Ua',
        ));

        $this->addElement('text', 'i18n_title_en', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Title En',
        ));

        $this->addElement('text', 'i18n_description_ru', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Description Ru',
        ));

        $this->addElement('text', 'i18n_description_ua', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Description Ua',
        ));

        $this->addElement('text', 'i18n_description_en', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Description En',
        ));

        $this->addElement('text', 'i18n_hint_ru', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Hint Ru',
        ));

        $this->addElement('text', 'i18n_hint_ua', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Hint Ua',
        ));

        $this->addElement('text', 'i18n_hint_en', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Hint En',
        ));

        $this->addElement('text', 'i18n_keywords_ru', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Keywords Ru',
        ));

        $this->addElement('text', 'i18n_keywords_ua', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Keywords Ua',
        ));

        $this->addElement('text', 'i18n_keywords_en', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Keywords En',
        ));

        $this->addElement('text', 'i18n_block_title_ru', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Block Title Ru',
        ));

        $this->addElement('text', 'i18n_block_title_ua', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Block Title Ua',
        ));

        $this->addElement('text', 'i18n_block_title_en', array(
            'validators' => array(
                array('StringLength', false, array('max' => 255)),
            ),
            'label' => 'Block Title En',
        ));
        $this->addElement('submit', 'submit');
        foreach ($this->getElements() as $el) {
            if ($el->getType() == 'Zend_Form_Element_Hidden') {
                $el->removeDecorator('Label');
            }
        }
        parent::__construct();
    }
}
