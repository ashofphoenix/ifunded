NanoBlog based on Symfony Standard Edition along with FOSUserBundle
===================================================================

Requirements?
--------------
PHP>5.3, MySql, Composer
If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php


Steps to install the nanoblog?
--------------
1) Fetch the repository using below command
	`git clone https://github.com/ashofphoenix/ifunded.git`

2) navigate into the project directory
	`cd ifunded`

3) To install the dependency run below command
	`composer install`

Fill in the details for database connection, make sure that the database exist (or create one using PhpMyAdmin or any GUI tool for navigating MySql)

4) Run the below command to make database table from entities
	`php app/console doctrine:schema:update --force`

5) Create an admin user using below command
	`php app/console fos:user:create admin --super-admin`
	This will create an admin user with privilegas to add/edit the articles

6) Run the below command to run the built-in server
	`php app/console server:run`

7) Browse the application at  http://127.0.0.1:8000 from a browser
   You can now login using the admin user created in step5.After login succesfully you can create new articles.

Additional Notes
----------------

To create a normal user you can issue the below command
	`php app/console fos:user:create testuser test@example.com 123456`
When one login with the above created normal user one can only see the listing and details of articles, without add/edit previlages.

