# RSCE: Image.

Создание картинок с использованием RockSolid Custom Elements. 

Для добавления изображение следует обратить внимание где будут и для чего будут использованы данные изображения.
Этот могут быть контент изображения или иконки и логотипы на сайте. Для первых будет полезным использовать теги
**figure** и **picture**. Во втором случае можно будет обойтись только img-тегом. 

## Изображение с использованием figure и picture:

В данном случае использование тегов figure и picture необходимо для обрезки изображения под разные экраны устройства. 

    #############
    ### Image ###
    #############

    ### group ###
    'image_text_col_group' => array(
      'label' => array('SPALTE MIT BILD ', 'Hier können Sie ein Bild hinzufügen'),
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

    ### image size checkbox ###
    'image_size_checkbox' => array(
      'label' => array(
        'de' => array('Bildgröße', 'Bildgröße selbst festlegen'),
      ),
      'inputType' => 'checkbox',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image size ###
    'image_size' => array(
      'label' => array(
        'de' => array('Bildgröße', 'Hier können Sie die Abmessungen des Bildes und den Skalierungsmodus festlegen.'),
      ),
      'inputType' => 'imageSize',
      'options' => \System::getImageSizes(),
      'eval' => array('tl_class' => 'w50 clr'),
      'dependsOn' => [
        'field' => 'image_size_checkbox',
      ],
    ),



- group: - Позволяет сгруппировать все объявленные ниже поля для изображения,
- image: - Объявление самого изображения. Можно ограничить изображения по формату, и сделать поле выбора изображения 
  обязательным,
- image alt и image title: обычные текстовые поля для добавления аттрибутов title и alt,
- image size checkbox: чекбокс поле которое позволяет переопределить используемый размер изображения, 
- image size: поле выбора размера изображения. Оно зависит от того, стоит ли галочка в предыдущем чекбокс.

## Векторные изображения, иконки, и декоративные изображения (без использования figure и picture):

Данный вариант идеально подходит для отображения логотипов, иконок социальных сетей и декоративных элементов и для 
всех изображений в которых нет необходимости в обрезке изображений. 

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


    <?php if ( $icon= $this->arrData['getImageObject']($this -> image )): ?>
        <img
                class="rsce_dev__icon"
                src="<?php echo $icon->src ?>"
                alt="<?php echo $icon->alt ?: $this->image_alt ?>"
                title="<?= $this->image_title ?>"
            <?php echo $icon->imgSize ?>
        >
    <?php endif; ?>

