# About Sandwich Shop

This application is served [here](https://sandwichshop.herokuapp.com/)

This is a simple web application that calculates the price of a sandwich based on the toppings chosen by the user. The questions section of the assignment can be accessed [here](https://github.com/anjumfarah/sandwichshop/blob/master/Q%26A.md)
The application was built using Laravel and developed in php. Please follow the instructions mentioned below if you want to replicate this application locally.

## System Requirements
- <b>Composer</b> 
: Composer is a tool that helps manage dependencies that are required for PHP

	- Instructions  to download composer can be found [here](https://getcomposer.org/doc/00-intro.md)
- <b>Laravel</b> 
: Laravel is a PHP framework that can be used develop web applications
 	- Type this command using CMD on your desktop once composer is installed

```composer global require laravel/installer```

## How to build this application

Before you start, ensure you have Composer and laravel setup on your local machine

- Start off by creating a new laravel project by typing the below command in your CMD  
``` laravel new <project-name> ```
- You can also clone this project from the repository on [my github](https://github.com/anjumfarah/sandwichshop/tree/master)
- More instructions on how to clone a remote repository to local can be found [here](https://docs.github.com/en/free-pro-team@latest/github/creating-cloning-and-archiving-repositories/cloning-a-repository)
- cd into your project folder
- You can serve the project locally by typing this command on your CMD 
``` php artisan serve```
- Copy and paste the link(usually - http://127.0.0.1:8000 ) in the browser

### Serving your laravel project using Heroku app
**Heroku app**
	: Heroku is a cloud-based PaaS - Platform as a service . It helps deploy , build and manage web applications.
I used Heroku to serve my application because of its ease of access to host PHP applications. All the information required to host a laravel project using heroku can be accessed using [this](https://devcenter.heroku.com/articles/getting-started-with-laravel) .

# Thank you
