#Wordpress Bootstraper

This is the sexiest developer bootstraping theme for WordPress CMS, it is the perfect starting theme and it has all you need to start coding right away, here are some of the perks:
- Using the _tk parent theme (one of the most recomended base themes).
- Using composer as package manager for everything (including plugins).
- Using the command line to install and manage wordpress (WP-CLI).
- The perfect .gitignore to only upload the minimum files.
- Laravel Eloquent ORM for any database operation.
- A few plugins already suggested on composer.json based on my experience.

##Installing Wordpress

0) Clone this repository and then change the remote to your own repository
> git clone git@github.com:alesanchezr/wordpress-for-developers.git
> git remote set-url origin {your repository url here}

1) Install WP-CLI by following: 
> http://wp-cli.org

Here you can find [all wp commands](https://developer.wordpress.org/cli/commands/)

2) Dowload wordpress latest version
> wp core download

3) Generate configuration file (wp-config.php)
> wp core config --dbname={yourdatabase} --dbuser={yourusername} --dbpass={YOUR DATABASE PASSWORD}

4) Create database for your installation
> wp db create

5) Install wordpress
> wp core install --url={domain.com} --title="First Attempt" --admin_user={yourusername} --admin_password={yourpassword} --admin_email={your@email.com}

6) Test your wordpress instalation (login) by going to /wp-admin

7) If everything is ok, check your composer.json remove or add any plugins based on your taste and run:
> composer install

## Author

* **Alejandro Sanchez** - *Initial work* - [Wordpress For Developers](https://github.com/alesanchezr/wordpress-for-developers)

## License

This project is licensed under the MIT License
    
## More plugins
https://wpackagist.org/search