<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Titel für interne Blöcke: die Überschrift und ein Link',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Inhalt',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array( 'headline', 'cssID' ),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(

        ### GROUP ###
        'link_group' => array(
            'label' => array('Der Link', 'Hier könnten Sie einen Link hinzufügen'),
            'inputType' => 'group',
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

        ### LINK TEXT ###
        'link_text' => array(
            'label' => array(
                'de' => array('Link-Text', 'Hier können Sie einen Text für den Link eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),
    ),
);