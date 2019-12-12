# login-php-app
Simple login system app made with php 7 and mariadb 10.4. It doesn't use frameworks. In the index page I used a UI preset from another project, you can see this project [here](https://github.com/Firespindash/index-html-ui-preset).

![login-app](login-app(800x600).png)

## Usability
You can navigate with Enter key on login and signup pages. \
This simple web app has options to login, logout, create and delete user, and a content management.

## Set Up
I made this app with php server utilizing the command `php -S localhost:9090` at terminal. \
You have to make the database using the **login-php-app.sql**. The database already has a user named 'admin' with the password 'test1'. Passwords are stored in the database with md5. And also have to change the user name and the password for connection with database in the **connection-manager.php** file.
