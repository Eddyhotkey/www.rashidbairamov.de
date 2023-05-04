# RSCE: Text.

Создание текстовых полей с помощью Rocksolid Custom Elements (tinyMCE, text, textarea).

В данной статье я рассмотрю варианты создания текстовых блоков с помощью Rocksolid Custom Element. Как и в посте о 
заголовках есть 3 возможных варианта по созданию текстовых блоков. 

## Вариант 1: Текстовый блок с использованием редактора tinyMCE.

Данный пример отлично подходит для описания больших текстов с применением заголовков, ссылок, курсива и так далее.
tinyMCE это плагин текстового редактора который встроен в Contao и обновляется автоматически вместе с системой. Более 
подробно о данном расширении можно узнать тут (https://www.tiny.cloud). 

### Код конфигурации:

    // rsce_tinyMCE_config.php
    ### TINYMCE ###
    'text_tiyMCE' => array(
        'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
        'eval' => array(
            'rte' => 'tinyMCE',
            'tl_class' => 'clr'
        ),
        'inputType' => 'textarea',
    ),

### Код вывода данных:
    
    // rsce_tinyMCE.html5
    <?php if ( $this->text_tinyMCE ): ?>
      <div class="rsce_tinyMCE">
        <?= $this->text_tiyMCE ?>
      </div>
    <?php endif; ?>

## Вариант 2: Textarea.

Это широкое текстовое поле которое в последствии может быть вставлено в тэг p. Хорошо подходит для коротких тезисных 
описаний.

### Файл конфигурации

    // rsce_textarea_config.php
    ### TEXTAREA ###
    'textarea' => array(
        'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
        'eval' => array(
            'tl_class' => 'clr'
        ),
        'inputType' => 'textarea',
    ),

### Код вывода данных:

    // rsce_textarea.html5
    <?php if ( $this->textarea ): ?>
      <p class="rsce_textarea">
        <?= $this->textarea ?>
      </p>
    <?php endif; ?>

## Вариант 3: Text. 

Данный вариант хорошо использовать для ссылок и различных атрибутов HTML-Элементов (alt, title, aria-label...).

### Файл конфигурации

    // rsce_text_config.php
    ### TEXT ###
    'text' => array(
        'label' => array(
          'de' => array('Text', ''),
        ),
        'inputType' => 'text',
        'eval' => array('tl_class' => 'w50 clr'),
    ),

### Код вывода данных:

    // rsce_textarea.html5
    <?php if ( $this-> ): ?>
      <p class="rsce_text">
        <?= $this->text ?>
      </p>
    <?php endif; ?>


# RSCE: Text.

Erstellung von Textfeldern mit Rocksolid Custom Elements (tinyMCE, text, textarea).

In diesem Artikel möchte ich die Möglichkeiten zur Erstellung von Textblöcken mit Rocksolid Custom Elements 
vorstellen. Wie in dem Beitrag über
Überschriften gibt es 3 Möglichkeiten, Textblöcke zu erstellen. 

## Option 1: Textfeld mit dem tinyMCE-Editor.

Dieses Beispiel eignet sich hervorragend für die Beschreibung umfangreicher Texte mit Überschriften, Links, Kursivschrift und so weiter.
Der tinyMCE ist ein Texteditor-Plugin, das in Contao integriert ist und sich automatisch mit dem System aktualisiert.
Mehr über diese Erweiterung erfahren Sie hier (https://www.tiny.cloud). 

### Konfiguration-Code:
### Code für die Datenausgabe:

## Option 2: Textarea.

Dies ist ein breites Textfeld, das später in ein p-Tag eingefügt werden kann. Gut für kurze zusammenfassende Beschreibungen.

## Option 3: Text.

Diese Option ist besonders geeignet für Links und verschiedene HTML-Element-Attribute (alt, title, aria-label...).



