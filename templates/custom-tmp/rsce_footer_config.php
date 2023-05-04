<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'de' => array('Footer-Modul: Vorlage für die Fußzeile', ''),
    ),
    'types' => array('module'),
    'moduleCategory' => 'RSCE_MODULE',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        ### GROUP ###
        'image_group' => array(
            'label' => array('Logo und Link', 'Hier könnten Sie das Bild und der Link hinzufügen'),
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

        ### LINK ###
        'link' => array(
            'label' => array(
                'de' => array('Link', 'Hier können Sie einen Link auswählen oder hinzufügen'),
            ),
            'inputType' => 'url',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### LINK TITLE ###
        'link_title' => array(
            'label' => array(
                'de' => array('Link-Title', 'Hier können Sie einen Titel für den Link eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### GROUP ###
        'text_group' => array(
            'label' => array('Die Beschreibung', 'Hier könnten Sie eine Beschreibung hinzufügen'),
            'inputType' => 'group',
        ),

        ### TEXTAREA ###
        'text' => array(
            'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
            'eval' => array(
                'rte' => 'tinyMCE',
                'tl_class' => 'w50 clr'
            ),
            'inputType' => 'textarea',
        ),

        ### GROUP ###
        'sml_group' => array(
          'label' => array('Social Medien', 'Hier könnten Sie social Medien hinzufügen'),
          'inputType' => 'group',
        ),

        ### TITLE ###
        'title' => array(
          'label' => array(
            'de' => array('Die Überschrift', 'Hier können Sie die Überschrift hinzufügen'),
          ),
          'inputType' => 'inputUnit',
          'options' => array('h2','h3', 'h4', 'h5', 'h6'),
          'eval' => array('tl_class' => 'w50 clr'),
        ),
      ### LIST ###
      'list' => array(
        'label' => array(
          'de' => array('Liste von social Medien', 'Hier können Sie SML-Links hinzufügen'),
        ),
        'elementLabel' => array(
          'de' => 'SML-Link %s',
        ),
        'inputType' => 'list',

        'fields' => array(
          ### IMAGE ###
          'image' => array(
            'label' => array(
              'de' => array('Icon', 'Hier können Sie das Bild auswählen'),
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

          ### LINK ###
          'link' => array(
            'label' => array(
              'de' => array('Link', 'Hier können Sie einen Link auswählen oder hinzufügen'),
            ),
            'inputType' => 'url',
            'eval' => array('tl_class' => 'w50 clr'),
          ),

          ### LINK TITLE ###
          'link_title' => array(
            'label' => array(
              'de' => array('Link-Title', 'Hier können Sie einen Titel für den Link eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
          ),
        ),
      ),
      ### GROUP ###
      'bottom_text_group' => array(
        'label' => array('Bottom Text', 'Hier könnten Sie den Text hinzufügen'),
        'inputType' => 'group',
      ),
      ### TEXT ###
      'bottom_text' => array(
        'label' => array(
          'de' => array('Die Beschreibung', 'Hier können Sie eine Beschreibung hinzufügen'),
        ),
        'inputType' => 'text',
        'eval' => array('tl_class' => 'w50 clr'),
      ),
    ),
);