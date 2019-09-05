## Sample Test Project

This is a sample test project build on top of Laravel framework to show my skills in building a basic solution using MVC architecture.
I used a free version of Admin LTE
This project has a dummy Dashboard
User CRUD Section
Address CRUD Section

The whole project is dockerized inside a docker container.

## Run this project

- To run this project you need to have docker installed, [Docker](https://docs.docker.com/) 
- After installing docker you need to install docker-compoose [Docker compose](https://docs.docker.com/compose/install/)
- Clone this project from this repository
- Open the project directory in Terminal
- Run `docker-compose up -d`
- Docker will download all the needed images and will handle the setup of the environment. Once done you will be able to access the project from your browser.
- Migrate the database using the following command `docker-compose exec app php artisan migrate`
- Seed the database with fake data with the following command `docker-compose exec app php artisan db:seed`


## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
