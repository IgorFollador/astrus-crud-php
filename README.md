<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)![mysql](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)


## 💻 Requirements

First, verify if you have:

* MySQL `MySQL@8.0` or latest;
* PHP `PHP@7.4`

## 🚀 Install

#### Steps:

* Install application with  ``composer install``;
* Create and configurate env file ``cp .env.example .env``;
* Generate your key with ``php artisan key:generate``;
* Create database with name  ``dbCadastroProdutos`` or db name configured by you;
* Run command to execute migrates and seeders ``php artisan migrate --seed``

## ☕ How to start

#### Run command:

``php artisan serve``

Open your browser with adress [localhost:8000](http://localhost:8000)

## 📚 More

#### ER-Diagram

![ER-Diagram](/resources/project/dbCadastroProdutos.png)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
