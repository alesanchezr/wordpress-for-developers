# Wordpress Bootstraper

This is the sexiest developer starting theme for The WordPress CMS, it has all you need to start coding right away and feeling like a real developer, here are some of the perks:
- Bootstrap 3: Extend the [_tk parent theme](https://github.com/Themekraft/_tk) (one of the most recomended base themes).
- Using [Composer](https://wpackagist.org/) as package manager for everything (including plugins).
- Using the command line to install and manage wordpress ([WP-CLI](http://wp-cli.org/)).
- The perfect .gitignore to only upload the minimum files.
- Laravel Eloquent ORM [Eloquent ORM](https://github.com/tareq1988/wp-eloquent) for any database extend (use the WP_Query or any other WordPress function if your are working on your own tables).
- A few plugins already suggested on composer.json based on my experience.
- A lot of examples on how to do stuff inside your wordpress.

## Installing Wordpress

0) **Clone this repository and then change the remote to your own repository**
```sh
$ git clone git@github.com:alesanchezr/wordpress-for-developers.git

$ git remote set-url origin {your repository url here}
```

1) **Install WP-CLI by going to the following website: [http://wp-cli.org](http://wp-cli.org/#installing)**

    Note: Here you can find [all wp commands](https://developer.wordpress.org/cli/commands/)

2) **Dowload wordpress latest version**
```sh
$ wp core download
```

3) **Generate configuration file (wp-config.php)
```sh
$ wp core config --dbname={yourdatabase} --dbuser={yourusername} --dbpass={YOUR DATABASE PASSWORD}
```

4) **Create database for your installation**
```sh
$ wp db create
```

5) **Install wordpress**
```sh
$ wp core install --url={domain.com} --title="First Attempt" --admin_user={yourusername} --admin_password={yourpassword} --admin_email={your@email.com}
```

6) **Test your wordpress instalation (login) by going to /wp-admin**

7) **[Install composer](https://getcomposer.org/download/) (if needed)**

8) **If everything is ok, check your composer.json remove or add any plugins based on your taste and run:**
```sh
$ composer install
```

## Author

**Alejandro Sanchez**
- Repository website: [Wordpress For Developers](https://github.com/alesanchezr/wordpress-for-developers)
- About me: [alesanchezr.com](alesanchezr.com)

## License

This project is licensed under the MIT License
    
## More WordPress plugins?

From now on, you should only install plugins available in the WPackagist project, there are thousands of plugins and basicall all the professional plugins are available:
https://wpackagist.org/search

If your plugin is no available, you can still install your own plugins if you want and nothing will break (unless you install crapy plugins) :)