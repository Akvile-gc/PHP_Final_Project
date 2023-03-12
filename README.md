# PHP_Final_Project
1. Start Apache app on XAMPP Control Panel. 
2. Open PHP Storm.
3. Navigate to https://github.com/Akvile-gc/PHP_Final_Project.git
4. Open Code tab and Clone Local HTTPS link code for PHP_Final_Project (further - project).
5. You can also copy this link instead https://github.com/Akvile-gc/PHP_Final_Project.git 
6. Upload project to PHP Storm:
   6.1 Open the directory the project will be located
   6.2 Enter this command in terminal: git clone https://github.com/Akvile-gc/PHP_Final_Project.git
   6.3 The project should be cloned to your local directory
7. Download composer from https://getcomposer.org/
8. Upload Composer to the project in PHP Storm.
9. Set up Composer. Do these steps:
   9.1. Enter this command in terminal: php composer.phar init
   9.2. Enter the project owner and name, ex. name/project.
   9.3. Indicate type of work. The type of this work is project.
   9.4. PSR-4 autoload mapping - choose yes.
   9.5. It is not mandatory to enter the further details.
   9.6. If you are satisfied with the information you have entered proceed with completing initial setup.
   9.7. Enter this command in terminal: php composer.phar install
   9.8. Navigate to composer.json file and, if needed, edit PSR-4 path in your PC.
   9.9. If you have edited PSR-4 path, you will need to enter this command in terminal: php composer.phar dumpautoload
10. Navigate to the main project directory.
11. Run local server by entering this command in terminal: php -S localhost:8080
12. You can now access the project through your browser. 
13. The project has 4 main pages, a bit about them bellow.
14. In order to start working with the project, you have to navigate to initial page /biblioteka
   It works as a landings page and helps you navigate to the other pages.
15. /knyga page allows you to enter the new books. 
16. /visos_knygos page allows you to see the full list of the books.
   You can also edit and delete books from this page.
17. /paieska page allows you to search for a specific book based on it's name or author.
18. Browse around the pages, enter the details, delete and edit them and, most importantly, enjoy the project!
