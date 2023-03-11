# PHP_Final_Project
1. Start Apache app on XAMPP Control Panel. 
2. Open PHP Storm.
3. Download PHP_Final_Project (further - project) from https://github.com/Akvile-gc/PHP_Final_Project.git. 
4. Download composer from https://getcomposer.org/.
5. Upload Composer to the project.
6. Set up Composer. Do these steps:
   6.1. Enter this command in terminal: php composer.phar init
   6.2. Enter the project owner and name, ex. name/project.
   6.3. Indicate type of work. The type of this work is project.
   6.4. PSR-4 autoload mapping - choose yes.
   6.5. It is not mandatory to enter the further details.
   6.6. If you are satisfied with the information you have entered proceed with completing initial setup.
   6.7. Enter this command in terminal: php composer.phar install
   6.8. Navigate to composer.json file and, if needed, edit PSR-4 path in your PC.
   6.9. If you have edited PSR-4 path, you will need to enter this command in terminal: php composer.phar dumpautoload
7. Navigate to the main project directory.
8. Run local server by entering this command in terminal: php -S localhost:8080
9. You can now access the project through your browser. 
10. The project has 3 main pages, a bit about them bellow.
11. In order to start working with the project, you have to navigate to initial page /knyga
   From this page you can enter the new books. 
12. /visos_knygos page allows you to see the full list of the books.
   You can also edit and delete books from this page.
13. /paieska page allows you to search for a specific book based on it's name.
14. Browse around the pages, enter the details, delete and edit them and, most importantly, enjoy the project!
