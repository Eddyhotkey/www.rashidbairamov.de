<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Übersichtkästchen: ein Bild, eine Beschreibung',
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
                'de' => array('Liste von Übersichtskästchen', 'Hier können Sie Elemente mit der Bilder, Beschreibungen hinzufügen'),
            ),
            'elementLabel' => array(
                'de' => 'Item %s',
            ),
            'inputType' => 'list',

            'fields' => array(

                ### GROUP ###
                'image_group' => array(
                    'label' => array('Das Bild', 'Hier könnten Sie ein Bild hinzufügen'),
                    'inputType' => 'group',
                ),

                ### IMAGE ###
                'image' => array(
                    'label' => array(
                        'de' => array('Das Bild', 'Hier können Sie das Bild auswählen'),
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

                ### GROUP ###
                'tools_group' => array(
                    'label' => array('Verwendete Tools', 'Hier könnten Sie verwendete Tools eingeben'),
                    'inputType' => 'group',
                ),

                ### TEXTAREA ###
                'tools_list' => array(
                    'label' => array(
                        'de' => array('Tools', 'Hier können Sie verwendete Tools eingeben'),
                    ),
                    'inputType' => 'textarea',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                ### GROUP ###
                'description_group' => array(
                    'label' => array('Die Beschreibung', 'Hier könnten Sie die Beschreibung hinzufügen'),
                    'inputType' => 'group',
                ),

                ### TEXTAREA_MCE ###
                'description' => array(
                    'label' => array('Die Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
                    'eval' => array(
                        'rte' => 'tinyMCE',
                        'tl_class' => 'clr'
                    ),
                    'inputType' => 'textarea',
                ),
            ),
        ),
    ),
);