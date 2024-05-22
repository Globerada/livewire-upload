# Image Upload Service

This project is an image upload service built with Laravel and Livewire. It allows users to upload images to a server and provides a URL for each uploaded image.

## Features

-   Real-time image upload with preview
-   URL generation for uploaded images
-   File type and size validation
-   Support for multiple image formats (configurable)

## Technologies Used

-   Laravel: A PHP framework for building web applications following the MVC pattern.
-   Livewire: A Laravel library for building dynamic server-side components.
-   (Other libraries listed in `composer.json`)

## Installation

1. Clone this repository to your local machine
2. Navigate to the project folder in your terminal
3. Run `composer install` to install the project dependencies
4. Run `npm install` to install the necessary Node.js packages
5. Copy `.env.example` to `.env` and configure your environment variables
6. Run `php artisan key:generate` to generate an application key
7. Run `php artisan migrate` to set up the database
8. Run `php artisan storage:link`. On shared hosting, you may need to use `php artisan storage:link --relative` if you get a 403 when loading images
9. Run `npm run build` to compile your assets

## Configuration

You can configure the allowed file types and maximum file size in the `config/filesystems.php` configuration file under the `upload.allowed_file_types` and `upload.max_file_size` keys respectively.

## Usage

Navigate to your application's URL in your web browser to see the image upload interface. Select a file to upload and click the upload button. Once the image has been uploaded, you will be provided with a URL that you can use to access the image.

## Contribution

Contributions are welcome. Please open an issue or a pull request if you have something you would like to add or change.

## License

This project is licensed under the MIT license.
