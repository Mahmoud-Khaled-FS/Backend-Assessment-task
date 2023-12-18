# Backend Assessment Task

## Installation

Here is how you can run the project locally:

1. Clone this repo
    ```sh
      git clone https://github.com/Mahmoud-Khaled-FS/Backend-Assessment-task
    ```
1. Go into the project root directory
    ```sh
      cd Backend-Assessment-task
    ```
1. Copy .env.example file to `.env` file
    ```sh
      cp .env.example .env
    ```
1. Create the database
1. Go to `.env` file
    - set database credentials (`DB_DATABASE`, `DB_USERNAME=root`, `DB_PASSWORD=`)
    - Change `APP_URL` to `APP_URL=http://localhost:8000`
        > Make sure to follow your database username and password
1. Install dependencies
    ```sh
      composer install
    ```
1. Generate key

    ```sh
      php artisan key:generate
    ```

1. Install front-end dependencies

    ```sh
      npm install && npm run build
    ```

1. Run migration
    ```sh
      php artisan migrate
    ```
1. Run seeder
    ```sh
      php artisan db:seed
    ```
    this command will create 1 user:
    > username: user
    > password: test
1. Run server
    ```sh
      php artisan serve
    ```
1. Test the code with Dusk
    ```sh
      php artisan dusk:install
      php artisan dusk
    ```

[![Watch the video]](https://github.com/Mahmoud-Khaled-FS/Backend-Assessment-task/blob/main/screenshots/task.mp4)
