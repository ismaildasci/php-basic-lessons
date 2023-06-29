# PHP Basic Lessons

PHP Basic Lessons is a project containing examples and lessons for those who want to learn web development with PHP. With this project, you can learn the basic concepts of PHP and database operations.

## Getting Started


### Installation

1. Clone the project to your local machine:
   ```sh
   git clone https://github.com/ismaildasci/php-basic-lessons.git
   cd php-basic-lessons
   ```
1. Open the config.php file and configure the database settings:
   ```sh
        'database' => [
        'host' => 'localhost',
        'port' => '3306',
        'dbname' => 'myapp',
        'charset' => 'utf8mb4',
    ],
   ```
   Create three tables named users, notes, and posts in your database. Use SQL schemas to set up the required structure.

1. To run your project locally on your machine, use the following command from the terminal:

   ```sh
   php -S localhost:8888 -t public

   ```

   This will run your application on localhost on port 8888. Access the application by opening http://localhost:8888 in your browser.

