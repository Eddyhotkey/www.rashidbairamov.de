<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Navigation: Mobile-Navigation Inhalt',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Module',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        ### GROUP ###
        'logo_group' => array(
            'label' => array('Logo', 'Hier könnten Sie ein Bild hinzufügen'),
            'inputType' => 'group',
        ),
        ### IMAGE ###
        'logo' => array(
            'label' => array(
                'de' => array('Logo', 'Hier können Sie das Bild auswählen'),
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
        'logo_alt' => array(
            'label' => array(
                'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### IMAGE TITLE ###
        'logo_title' => array(
            'label' => array(
                'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),
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
