<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
  'label' => array(
    'Teaser-Liste: Teasers, ein Bild',
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
        'de' => array('Teaser-Liste', 'Hier können Sie Beschreibungen hinzufügen'),
      ),
      'elementLabel' => array(
        'de' => 'Teaser %s',
      ),
      'inputType' => 'list',
      'fields' => array(
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
    ### GROUP ###
    'image_group' => array(
      'label' => array('Das Bild', 'Hier könnten Sie das Bild hinzufügen'),
      'inputType' => 'group',
    ),

    ### IMAGE ###
    'image' => array(
      'label' => array(
        'de' => array('Bild', 'Hier können Sie das Bild auswählen'),
      ),
      'inputType' => 'fileTree',
      'eval' => array(
        'fieldType' => 'radio',
        'filesOnly' => true,
        'extensions' => 'jpg,jpeg,png,gif,svg',
        'tl_class'=>'clr',
        'mandatory' => true,
      ),
    ),

    ### IMAGE ALT ###
    'image_alt' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### IMAGE TITLE ###
    'image_title' => array(
      'label' => array(
        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);
