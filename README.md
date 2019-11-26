<p align="center">
  <img align="center" src="/public/img/apollo_logo.png" width="40" height="40"></img> 
</p> 
<p align="center">Real Estate Web Application - manage, rent, sell and buy properties.</p>

### Stack
![alt text](https://img.shields.io/badge/frontend-Vue.js-41b883?logo=vue.js&style=for-the-badge)
![alt text](https://img.shields.io/badge/backend-Laravel-red?logo=laravel&style=for-the-badge)
![alt text](https://img.shields.io/badge/frontend-Bootstrap-563D7C?logo=bootstrap&style=for-the-badge)
![alt text](https://img.shields.io/badge/stylesheets-Sass-cc6699?logo=sass&style=for-the-badge)

### Assets and State management
![alt text](https://img.shields.io/badge/Asset_management-Webpack-b3c6ff?logo=webpack&style=for-the-badge)
![alt text](https://img.shields.io/badge/State_management-Vuex-41b883?logo=vue.js&style=for-the-badge)

### Documentation
![alt text](https://img.shields.io/badge/API_Documentation-Swagger-85ea2d?logo=swagger&style=for-the-badge)

To observe API documentation, please refer to swagger.yaml file in the root directory.

### Installation of the project (locally)

1.1. First of all, this or newer version of PHP is needed: PHP 7.3.3 (cli) (built: Mar  6 2019 21:53:23)<br>
1.2. After installing PHP, feel free to test if it's installed by calling <i>php -v</i> in terminal/command line.<br>
1.3. If you get output mentioned in the first step, you did the step 1.(1.) successfully.<br>
1.4. Refer to: https://www.php.net/manual/en/install.php<br>

2.1. Install Composer for dependency injection.<br>
2.2. It is neccessary to have composer installed locally so all the dependencies get downloaded for further use.<br>
2.3. After installed, call command <i>composer -V</i> in terminal to see if it's installed.<br>
2.4. If <i>Composer version 1.8.6 2019-06-11 15:03:05</i> gets outputted, you installed Composer successfully.<br>
2.5. Refer to: https://getcomposer.org/<br>

3.1. Install Node.js with Node Package Manager (NPM)<br>
3.2. Refer to: https://nodejs.org/en/download/<br>
3.3. After installing, try inputting <i>npm -v</i> in terminal. You should see output of 6.9.0 or higher.<br>

4.1. Clone or fork the repository: <i>git clone https://github.com/bashovski/apollo</i><br>
4.2. In terminal, execute command: <i>cd apollo</i><br>
4.3. Execute command: <i>composer install</i><br>
4.4. Execute command: <i>php artisan key:generate</i><br>
4.5. Copy .env-example and paste it as a new file with name of .env - Insert manually sensitive credentials and save the file.
4.6. Create local database 'apollo' before migrating.
4.7. Execute command: <i>php artisan migrate</i> to migrate migrations to the database<br>
4.8. Execute command: <i>php artisan serve</i> to run the server.<br>


