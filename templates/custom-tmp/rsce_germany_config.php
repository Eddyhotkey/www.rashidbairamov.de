<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Teaser-Element: das Zitat mit Autoren',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Inhalt',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array( 'cssID' ),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(

        ### GROUP ###
        'quote_group' => array(
            'label' => array('Das Zitat', 'Hier könnten Sie Texte mit Autoren hinzufügen'),
            'inputType' => 'group',
        ),

        ### TEXT ###
        'quote' => array(
            'label' => array(
                'de' => array('ein Zitat:', 'Hier können Sie einen Text eingeben'),
            ),
            'inputType' => 'textarea',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### TEXT ###
        'autor' => array(
            'label' => array(
                'de' => array('der Autor:', 'Hier können Sie einen Text eingeben'),
            ),
            'inputType' => 'textarea',
            'eval' => array('tl_class' => 'w50 clr'),
        ),
    ),
);