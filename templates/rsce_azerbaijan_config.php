<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Header: 2 Spalte, eine Überschrift, eine Beschreibung, Links, ein Bild',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Inhalt',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        ### GROUP ###
        'title_group' => array(
            'label' => array('Dekorative Teile der Überschrift', 'Hier könnten Sie dekorative Teile der Überschrift hinzufügen'),
            'inputType' => 'group',
        ),

        ### TEXT ###
        'title_deco' => array(
            'label' => array(
                'de' => array('Dekorative-Teile 1:', 'Hier können Sie einen Text eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### TEXT ###
        'title_deco_1' => array(
            'label' => array(
                'de' => array('Dekorative-Teile 2:', 'Hier können Sie einen Text eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### TEXT ###
        'title_deco_2' => array(
            'label' => array(
                'de' => array('Dekorative-Teile 3:', 'Hier können Sie einen Text eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        ### GROUP ###
        'description_group' => array(
            'label' => array('Die Beschreibung', 'Hier könnten Sie die Beschreibung hinzufügen'),
            'inputType' => 'group',
        ),

        ### TEXTAREA ###
        'text' => array(
            'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
            'eval' => array(
                'rte' => 'tinyMCE',
                'tl_class' => 'clr'
            ),
            'inputType' => 'textarea',
        ),

        ### GROUP ###
        'links_group' => array(
            'label' => array('Der Link', 'Hier könnten Sie den Link hinzufügen'),
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

        ### TEXTAREA ###
        'image_description' => array(
            'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
            'eval' => array(
                'rte' => 'tinyMCE',
                'tl_class' => 'w50 clr'
            ),
            'inputType' => 'textarea',
        ),
    ),
);