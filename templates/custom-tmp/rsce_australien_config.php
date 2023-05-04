<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
  'label' => array(
    'Liste der Kästchen: eine Beschreibung und eine Überschrift',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Inhalt',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    ### LIST ###
    'list' => array(
      'label' => array(
        'de' => array('Liste von Kästchen', 'Hier können Sie Beschreibungen und Überschriften hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Item %s',
      ),
      'inputType' => 'list',
        'fields' => array(

          ### TITLE ###
          'title' => array(
            'label' => array(
              'de' => array('Überschrift', 'Hier können Sie die Überschrift hinzufügen'),
            ),
            'inputType' => 'inputUnit',
            'options' => array('h3', 'h4', 'h5', 'h6'),
            'eval' => array('tl_class' => 'w50 clr'),
          ),

          ### TEXT ###
          'text' => array(
            'label' => array(
              'de' => array('Die Beschreibung', 'Hier können Sie eine kleine Beschreibung hinzufügen'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
          ),
        ),
      ),
    ),
);