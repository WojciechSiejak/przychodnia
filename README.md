W ramach ćwiczeń starałem się rozbudować projekt.

Możliwości: 

    Widok Lekarzy
        wyświetlanie listy lekarzy
        formularz dodawania nowego lekarza
        usuwanie lekarza *
        edycja lekarza  **


    Widok specjalizacji
        wyświetlenie listy specjalizacji
        formularz dodawania nowej specjalizacji

    Widok wizyty
            lista umówionych wizyt
            formularz dodawnia nowej wizyty - lista rozwijalna pobiera dostępnych lekarzy i pacjentów

    Widok pacjentów 
        wyświetla listę pacjentów

    
    * usuwanie lekarza - niestety pojawiły się komplikację - gdzies popełniłem błąd w migracji z kluczem foreign i onDelete('cascade')przychodnia\database\migrations\2021_09_27_114323_add_foreign_doctors_to_visits.php

    ** edycja lekarza - powoduje dodanie wiersza w bazie danych z nowym id - nie zdążyłem zdebugować problemu i utknąłem.

