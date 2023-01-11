# PHP Filter Persons Array
Mikro-Projekt als einfaches Beispiel, wie aus einer Liste von Personendaten
nach gewissen Kriterien bestimmte Personen herausgefiltert und in einer
einfachen Tabelle dargestellt werden können.

## Vorbereitung
v1: Rohfassung des Projektes ab ZIP auf die lokale Festplatte entpacken.

v2: Mit dieser Rohfassung ein neues Projekt "php-filter-persons" anlegen
    und sofort auch in GitHub sichern.

v3: tools.php im Ordner "includes" anlegen. Als Entwicklerhilfe im tools.php 
    die Funktion prettyPrint($a) erstellen (aus früherem Projekt kopieren),
    welche einen mehrdimensionalen Array einigermassen lesbar in eine HTML-Seite
    schreibt. Dies auch als Verbesserung gegenüber print_r(PERSONS).

## list-all.php
l1: In list-all.php das File includes/tools.php referenzieren.

l2: In list-all.php die Tabelle inklusive Beschriftung so anpassen, dass Vorname, 
    Nachname, Alter und Land pro Zeile und in dieser Reihenfolge angezeigt werden.

## persons.php
p1: In persons.php die Konstate "PERSONS" fertig mit den darin vorgegebenen
    Personendaten abfüllen.

p2: function writeAllPersons() deklarieren und folgende Aktionen einbauen:

- for-Schleife über alle Personendaten

- innerhalb der for-Schleife: Für jede $person eine Tabellenzeile mit den korrekten Daten generieren.

- writeAllPersons() in list-all.php aktivieren (ist auskommentiert)
und testen. Sobald es funktioniert, die Zeile mit John Doe löschen.

## Liste nur diejenigen Personen auf, welche jünger oder gleich 40 Jahre alt sind.
Lege die PHP-Datei list-younger-than-40.php an, wobei du list-all.php als Vorlage kopieren kannst.
Deklariere in persons.php die Funktion writeYoungerThan40() und rufe diese Funktion in list-younger-than-40.php auf. Testen und verfeinern :-)

## Liste diejenigen Personen auf, welche nicht in der Schweiz geboren wurden und jünger als 30 sind.
Lege die PHP-Datei list-young-non-suisse.php an, wobei du list-all.php als Vorlage kopieren kannst.
Deklariere in persons.php die Funktion writeYoungNonSuisse() und rufe diese Funktion in list-young-non-suisse.php auf. Testen und verfeinern :-)

