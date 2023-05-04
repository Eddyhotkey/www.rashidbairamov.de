# #JS: Variablen const, let und var

## Teaser:

Variablen in JavaScript speichern die Werte, mit denen der Code arbeitet. Die Schlüsselwörter var, let und const werden verwendet, um Variablen zu erstellen.

## Was sind die Variablen?

Variablen sind benannte Container zum Speichern von Daten.

Um eine Variable zu erstellen, wird das Schlüsselwort let, const oder var verwendet, gefolgt von dem Namen der Variable oder einer durch Komma getrennten Liste von Variablen. Die Erstellung einer Variablen wird auch als Variablendeklaration bezeichnet. Zum Beispiel:

    var singleVariable
    let firstVariable, secondVariable, thirdVariable

Die häufigste Art, eine Variable zu deklarieren, besteht darin, ihren Anfangswert mit dem Zuweisungsoperator = festzulegen. Der Wert kann von beliebigem Typ sein - String, Number, Object, Array, usw.

    // Deklaration und Zuweisung von Variablen
    let string = 'foo'
    const array = ['foo', 'bar', 'baz']
    var number = 10

    // Mehrfache Deklaration und Zuordnung
    let firstNumber = 5,
        secondNumber = 10

Die Variable kann dann als Ersatz für den Wert im Code verwendet werden:

    let name = 'Walter'
    let surname = 'Wkhite'
    let fullName = name + ' ' + surname

    console.log(fullName)
    // Walter White

## Benennung-regeln für Variablen.

Die folgenden Zeichen können für den Variablennamen verwendet werden:

- Buchstaben des lateinischen Alphabets;
- Zahlen;
- Die Symbole $ und _.

Das erste Zeichen darf keine Zahl sein:

    let letters, &ampersand, _underscore

    let 1number
    // SyntaxError: Invalid or unexpected token

Reservierte Wörter der Sprache können nicht als Variablennamen verwendet werden. Zum Beispiel: class, super, throw, 
yield, var, let, const und so weiter. Eine vollständige Liste dieser Wörter finden Sie hier. https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Lexical_grammar#keywords

## Variablen let und const

Die let- und const-Variablen wurden in der Version 2015 von EcmaScript (ES6) eingeführt und werden jetzt viel häufiger verwendet als var.

## Ankündigung

Mit dem Schlüsselwort let können Sie eine Variable deklarieren, ohne ihr einen ursprünglichen Wert zu geben. In diesem Fall wird er auf "undefiniert" gesetzt:

    let a
    console.log(a)
    // undefined
    
    a = 5
    console.log(a)
    // 5

Mit const kann man keine Variablen ohne Wert deklarieren:

    const a
    // SyntaxError: Missing initializer in const declaration
    
    // Richtig
    const b = 5

Auf Let- und Const-Variablen kann nicht zugegriffen werden, bevor sie im Code deklariert sind:

    console.log(a)
    // ReferenceError: Cannot access 'a' before initialization
    console.log(b)
    // ReferenceError: Cannot access 'b' before initialization
    
    let a = 5
    const a = 5

## Одинаковые имена переменных

