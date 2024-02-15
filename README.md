Prerequisites:
*install PHP on your system
*install Composer
*install XAMPP

First start Apache web server in XAMPP, along with MySQL. Create a new database named 'test'. Then open a Command Prompt in folder "librarie" and run the command 'php artisan migrate' to create the necessary tables in your database. Run 'php artisan db:seed' to populate the books table. After that run 'php artisan serve' to start the app.

