# SlopeCast

Updated ski resort app that displays current data about selected resorts. Data includes current weather conditions and resort status. Users can choose their own personal selection of resorts to save and have info for.

## Technologies 

Laravel, PHP, HTML, CSS, JavaScript, Bootstrap


## API Used

1. Weather Unlocked
2. Google Maps 
3. Open Weather 

## Installion Instructions

1. $ git clone https://github.com/chenggavin/slopeCast.git

2. cd into folder

3. $ composer install

4. Create owner, password and database in psql

5. $ touch .env

6. Paste in code from .env.example into .env

7. Update DB_CONNECTION, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD in .env

8. $ php artisan key:generate to give you an APP_KEY

9. $ php artisan migrate (may have to add '--seed' to the end of this if there is seed data)

10. $ php artisan serve

You're ready to go!