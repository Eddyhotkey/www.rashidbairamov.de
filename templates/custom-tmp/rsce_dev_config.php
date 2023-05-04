<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
  'label' => array(
    'DEVELOPER',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: DEV',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(
    #############
    ### Image ###
    #############

    ### group ###
    'image_group' => array(
      'label' => array('BILD ', 'Hier können Sie ein Bild hinzufügen'),
      'inputType' => 'group',
    ),

    ### image ###
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

    ### image alt ###
    'image_alt' => array(
      'label' => array(
        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image title ###
    'image_title' => array(
      'label' => array(
        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);