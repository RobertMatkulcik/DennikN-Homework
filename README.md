
## Dennik N - Uloha
Zadanie: Sprav jednoduchý systém na vedenie predplatiteľov.

Ku každému predplatiteľovi si chceme viesť 3 atribúty:
- email
- heslo
- dátum registrácie

Predplatné má atribúty:
- typ predplatného ("mini", "standard", "klub")
- dátum začiatku predplatného
- dátum konca predplatného

1 predplatiteľ môže mať 0 a viac predplatných.

Na hlavnej stránke systému bude tabuľka s vylistovanými predplatiteľmi (email + dátum registrácie) a ich aktuálne predplatné. Zoradení by mali byť podľa dátumu konca. Mal by som vedieť pridať predplatiteľa aj predplatné.

Dáta musia prežiť reload stránky, ukladajme ich do SQLite.

Vysledok (aj s SQlite suborom, aby sme mali DB uz predpripravenu) daj prosim na Github. Ak to bude privatny repozitar, pozvi prosim miroc, rootpd a markoph.


# HOW TO

Install:
```
composer install
```

Runnable with
```
./vendor/bin/sail up
```

Build CSS
Now when you run
npm run watch, npm run dev or npm run prod
, Tailwind CSS will be ready to use in your Laravel Mix project.
