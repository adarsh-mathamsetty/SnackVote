# SnackVote

VOTESNACK

**** After creating the laravel project you can replace the folders shown in the FILES section of this document to run the app. To make it simple, I have created a folder called required which contains the folders that you must use or replace with the same named folders in the created new project.
*** Second way is to copy paste the folder “FOODLOVE” present in laravel project folder to htdocs after installation of xampp and laravel .

REQUIREMENTS:

1)	LARAVEL 5
2)	XAMPP
3)	Any text editor.

How to install XAMPP:

•	Go to https://www.apachefriends.org/download.html and download the file. Double click to begin installation process. You will find XAMPP folders in your system applications folder.

How to install LARAVEL 5:

•	COMPOSER Installation -
1)	To install Composer run the below commands:
a.	 curl -sS https://getcomposer.org/installer | php
b.	 mv composer.phar /usr/local/bin/composer
2)	To verify composer installation , run the command : composer.

•	XAMPP Configuration -
1)	Vim ~/.bash_profile
2)	export PATH=”/Applications/XAMPP/xamppfiles/bin:$PATH”
3)	Save the file by pressing ESC and then : and type wq and press enter.
4)	Reload bash by running: source ~/.bash_profile.

•	LARAVEL INSTALLATION – 
         *Go to directory /APPLICATIONS/XAMPP/htdocs.  
Method 1 -> a) run the command: composer global require “laravel/installer”
b)	Create a project by running the command: laravel new project-name.

Method 2 -> run the command: composer create-project –prefer-dist laravel/laravel project-name

FILES: 
•	The models developed were mymodule in app.js for client side. Model fruits.php and model user.php for server side.
•	Views are in the directory foodlove/resources/views.
•	Controllers are in the directory foodlove/app/Http/controllers.
•	Angular js controllers are in the folder public/app/controllers and the model app.js in public/app.
•	Database tables are in the directory /database/migrations.

How to RUN:
1)	After creating the project in the directory /APPLICATIONS/XAMPP/htdocs, replace the folders in the folder named required with the same named folder that gets created while creating the project.  Please look at the paths above for convenience.  
2)	Alternative, as mentioned in the beginning, once laravel is installed you can copy paste the FoodLove folder in the directory /htdocs and continue.
1)	Open the project in the editor to skim through the code. Codes written are the php files in the views, php files in the controllers, models app.js, fruits.php and user.php and database table creation files in migrations folder.
2)	Open the terminal, go to directory /APPLICATIONS/XAMPP/htdocs/FoodLove and type the following commands: 
a)	Php artisan migrate -> Creates required tables in the database.
b)	 Php artisan serve -> This will start Laravel development server at http://127.0.0.1:8000
3)	Now you can access the app in localhost:8000. Happy Voting!
**Note: You have to install XAMPP, Laravel on your system and the files should be in htdocs for it to work.


MVC Flow:  
1)	The default route “ / ” takes the user to a view called welcome.blade.php [welcome page of the app].
2)	On clicking the register button it takes you to /register path displaying register.blade.php view.
3)	On clicking the login button it takes you to /login path displaying login.blade.php view.  
4)	As soon as your credentials are verified you go to the /home path which has the home page displaying the fruits and the buttons to vote and view the vote.
5)	On clicking submit button it takes you to the store function of fruitscontroller which has the code to insert data(like fruit id, fruit name, number of votes, user id) into database. Once the task is finished it redirects back to the same page.
6)	On clicking the view votes button it navigates to index.blade.php view displaying the votes. Since the code is written in angular js, the angular js controller “food.js” is called which does a get request to 'http://localhost:8000/display'. The route is then navigated to displaydata controller which has the code to retrieve data as per the requirements. The controller responds with the results in json format.
7)	This json formatted data is then stored in a variable called query which is used in the view index.blade.php to show the data on the web page.
This is how the app operates giving you a perfect result.



