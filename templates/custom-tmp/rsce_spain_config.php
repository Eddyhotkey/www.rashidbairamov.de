<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
  'label' => array(
    'Überschrift für Unterseiten: eine Überschrift, ein Teaser',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Inhalt',
  //'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    ### GROUP ###
    'title_group' => array(
      'label' => array('Die Überschrift', 'Hier könnten Sie eine Überschrift und ein Symbol hinzufügen'),
      'inputType' => 'group',
    ),

    ### TEXT ###
    'symbol' => array(
      'label' => array(
        'de' => array('Das Symbol', 'Hier können Sie ein Symbol hinzufügen'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50'),
    ),

    ### TITLE ###
    'title' => array(
      'label' => array(
        'de' => array('Überschrift', 'Hier können Sie die Überschrift hinzufügen'),
      ),
      'inputType' => 'inputUnit',
      'options' => array('h1','h2','h3', 'h4', 'h5', 'h6'),
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### GROUP ###
    'teaser_group' => array(
      'label' => array('Teaser-Text', 'Hier könnten Sie eine Beschreibung hinzufügen'),
      'inputType' => 'group',
    ),

    ### TEXT ###
    'teaser' => array(
      'label' => array(
        'de' => array('Die Beschreibung', 'Hier können Sie eine kleine Beschreibung hinzufügen'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);