<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
  'label' => array(
    'Cards with hover effect ( title, text, image )',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: CSS',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(

    ### LIST ###
    'list' => array(
      'label' => array(
        'de' => array('Card list', 'Here you can add the image, title and text'),
      ),
      'elementLabel' => array(
        'de' => 'Card %s',
      ),
      'inputType' => 'list',
      'minItems' => 1,
      'maxItems' => 6,
      'fields' => array(

        ### image ###
        'image' => array(
          'label' => array(
            'de' => array('Image', 'Here you can select the image'),
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
        ### image size checkbox ###
        'image_size_checkbox' => array(
          'label' => array(
            'de' => array('Image size', 'Set image size itself'),
          ),
          'inputType' => 'checkbox',
          'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### image size ###
        'image_size' => array(
          'label' => array(
            'de' => array('Image size', "Here you can set the picture's dimensions and the scaling mode" ),
          ),
          'inputType' => 'imageSize',
          'options' => \System::getImageSizes(),
          'eval' => array('tl_class' => 'w50 clr'),
          'dependsOn' => [
            'field' => 'image_size_checkbox',
          ],
        ),

        ### image alt ###
        'image_alt' => array(
          'label' => array(
            'de' => array('Alt-attribute', 'Here you can enter an alt-attribute for the image'),
          ),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### image title ###
        'image_title' => array(
          'label' => array(
            'de' => array('Image-title', 'Here you can add the title for the image (title-Attribut)'),
          ),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### title ###
        'title' => array(
          'label' => array(
            'de' => array('Title', 'Here you can add the title'),
          ),
          'inputType' => 'inputUnit',
          'options' => array('h2', 'h3', 'h4', 'h5', 'h6'),
          'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### textarea ###
        'textarea' => array(
          'label' => array('Description', 'Here you can add the description'),
          'eval' => array(
            'tl_class' => 'w50 clr'
          ),
          'inputType' => 'textarea',
        ),
      ),
    ),
  ),
);