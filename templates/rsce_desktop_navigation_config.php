<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'de' => array('Header-Modul: Vorlage für die Kopfzeile', ''),
    ),
    'types' => array('module'),
    'moduleCategory' => 'RSCE_MODULE: Header mit Navigation',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        ### LIST ###
        'list' => array(
            'label' => array(
                'de' => array('Liste von Kontakte', 'Hier können Sie Kontakt-Elemente hinzufügen'),
            ),
            'elementLabel' => array(
                'de' => 'Kontakt %s',
            ),
            'inputType' => 'list',

            'fields' => array(
                ### IMAGE ###
                'slm_image' => array(
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
                'slm_image_alt' => array(
                    'label' => array(
                        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                ### IMAGE TITLE ###
                'slm_image_title' => array(
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
    ),
);