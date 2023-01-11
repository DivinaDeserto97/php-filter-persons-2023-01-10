<?php
/*  -----------------------------------------------------------------
    Definiere $PERSONS als multidimensionaler Array.
    -----------------------------------------------------------------

    !! Prüfen: Eine PHP-Konstante hat kein '$' Symbol am Anfang.
    !! die Personen aus dem JavaScript Array (unten) in PHP übernehmen
*/
define("PERSONS", array(
    array(
        "firstName" => "Peter",
        "lastName" => "Towers",
        "age"=> 86,
        "country"=> "USA"
    ),
    // TODO
));

print_r(PERSONS);





/*
Personen als JavaScript Array:
[
    {
        firstName: "Peter",
        lastName: "Towers",
        age: 86,
        country: "USA"
    },
    {
        firstName: "Paul",
        lastName: "Miller",
        age: 54,
        country: "USA"
    },
    {
        firstName: "Fritz",
        lastName: "Kleiner",
        age: 24,
        country: "Schweiz"
    },
    {
        firstName: "Hans",
        lastName: "Müller",
        age: 14,
        country: "Lichtenstein"
    },
    {
        firstName: "Jolanda",
        lastName: "Frankfurter",
        age: 36,
        country: "Deutschland"
    },
    {
        firstName: "Karl",
        lastName: "Keller",
        age: 30,
        country: "Deutschland"
    },
    {
        firstName: "Hanspeter",
        lastName: "Schröder",
        age: 42,
        country: "Deutschland"
    },
    {
        firstName: "Emilio",
        lastName: "Sottorno",
        age: 40,
        country: "Italien"
    },
    {
        firstName: "Robert",
        lastName: "Graveur",
        age: 54,
        country: "Frankreich"
    }
];

*/
?>