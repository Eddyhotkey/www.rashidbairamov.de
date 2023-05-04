<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
  'label' => array(
    'Beschreibung für die Unterseiten: eine Beschreibung, ein Bild mit Dekorationen',
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
    'text_group' => array(
      'label' => array('Die Beschreibung', 'Hier könnten Sie eine Beschreibung hinzufügen'),
      'inputType' => 'group',
    ),
    ### TEXTAREA ###
    'description' => array(
      'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
      'eval' => array(
        'rte' => 'tinyMCE',
        'tl_class' => 'clr'
      ),
      'inputType' => 'textarea',
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

    ### IMAGE ###
    'image_deco' => array(
      'label' => array(
        'de' => array('Dekoration-Bild 1', 'Hier können Sie das Bild auswählen'),
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
    'image_deco_alt' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### IMAGE TITLE ###
    'image_deco_title' => array(
      'label' => array(
        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### IMAGE ###
    'image_deco_1' => array(
      'label' => array(
        'de' => array('Dekoration-Bild 2', 'Hier können Sie das Bild auswählen'),
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
    'image_deco_alt_1' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### IMAGE TITLE ###
    'image_deco_title_1' => array(
      'label' => array(
        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);