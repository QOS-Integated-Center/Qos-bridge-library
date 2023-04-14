# Laravel QosApi Project

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

This is a Laravel project that provides RESTful APIs for various functionalities related to a QoS (Quality of Service) system.

## Routes

- `/`: 
  - Method: GET
  - Controller: `QosApiController@index`
  - Description: This route returns the main index page of the QosApi system.

- `/get_status`: 
  - Method: GET
  - Controller: `QosApiController@get_status`
  - Description: This route retrieves the status of the QosApi system, providing information about its current state.

- `/deposit`: 
  - Method: GET
  - Controller: `QosApiController@deposit`
  - Description: This route allows users to deposit funds into their QosApi account, which can be used for various QoS services.

- `/refund`: 
  - Method: GET
  - Controller: `QosApiController@refund`
  - Description: This route enables users to request a refund for any unused funds in their QosApi account.

- `/get_available_amount_to_withdraw`: 
  - Method: GET
  - Controller: `QosApiController@get_available_amount_to_withdraw`
  - Description: This route retrieves the available amount that a user can withdraw from their QosApi account.

- `/get_account_holder_info`: 
  - Method: GET
  - Controller: `QosApiController@get_account_holder_info`
  - Description: This route retrieves the account holder information associated with the QosApi account.

- `/get_account_holder_info_mv`: 
  - Method: GET
  - Controller: `QosApiController@get_account_holder_info_mv`
  - Description: This route retrieves the account holder information using the MV (Mobile Verification) method.

## Installation

To install and run this Laravel QosApi project, follow these steps:

1. Clone the repository to your local environment.
2. Install the dependencies using composer by running the command `composer install` in the project directory.
3. Create a `.env` file from the `.env.example` file and update the database and other configurations as needed.
4. Generate a new application key by running the command `php artisan key:generate`.
5. Run the migrations to create the necessary database tables by running the command `php artisan migrate`.
6. Serve the application locally using `php artisan serve` or configure a virtual host to run the application on a web server.
7. You can now access the QosApi system through the defined routes mentioned above.

## Contribution

Contributions to this Laravel QosApi project are welcome. You can contribute by submitting bug reports, feature requests, or by making pull requests. Please follow the standard GitHub workflow for contributing to this project.

## License

This Laravel QosApi project is open-source software released under the MIT License. You are free to use, modify, and distribute this software according to the terms of the MIT License.