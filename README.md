# Wordpress for Developers

**Disclaimer**: this is not a "customization" of the wordpress core. Not a single core file was harmed nor changed for this toolset. We follow the cardinal rule of Wordpress [**don't change the core**](https://getflywheel.com/layout/wp-core/). And we encourage you to do so.

This is the sexiest toolset built on top of Wordpress, it has all you need to start coding right away.

This is what makes it sexy:
- **Beautifully looking out-of-the-box**: extends the [_tk parent theme](https://github.com/Themekraft/_tk), one of the most recomended base themes with Bootstrap 3.
- **Organized package manager**: use [Composer](https://wpackagist.org/) as package manager for everything, including plugins. That means no need for admin screens.
- **Command and conquer**: use the command line to install and manage wordpress ([WP-CLI](http://wp-cli.org/)). That means no need for admin screens.
- **Ignore the noise**: it comes with the perfect .gitignore to only upload the necessary files. 
- **Database evolved**: Laravel Eloquent ORM [Eloquent ORM](https://github.com/tareq1988/wp-eloquent) (use the WP_Query or any other WordPress function if your are working on your own tables).
- **Plus, some tech swag**: it includes a few recommended plugins on composer.json; and a lot of examples on how to do stuff inside your wordpress.

## Step by step usage

0. **Clone this repository and change the remote to your own repository**
    ```sh
    $ git clone git@github.com:alesanchezr/wordpress-for-developers.git
    
    $ git remote set-url origin {your repository url here}
    ```

1. **Install WP-CLI: [http://wp-cli.org](http://wp-cli.org/#installing)**

    ```sh
    $ curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    
    $ php wp-cli.phar --info
    ```
    You should see something like this:
    ```sh
    PHP binary:    /usr/bin/php5
    PHP version:    5.5.9-1ubuntu4.14
    php.ini used:   /etc/php5/cli/php.ini
    WP-CLI root dir:        /home/wp-cli/.wp-cli
    WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
    WP-CLI global config:   /home/wp-cli/.wp-cli/config.yml
    WP-CLI project config:
    WP-CLI version: 1.2.1
    ```
    Now move it to the PATH
    ```sh
    $ chmod +x wp-cli.phar
    
    $ sudo mv wp-cli.phar /usr/local/bin/wp
    
    $ wp --info
    ```
    Again, you should see something like this:
    ```sh
    PHP binary:    /usr/bin/php5
    PHP version:    5.5.9-1ubuntu4.14
    php.ini used:   /etc/php5/cli/php.ini
    WP-CLI root dir:        /home/wp-cli/.wp-cli
    WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
    WP-CLI global config:   /home/wp-cli/.wp-cli/config.yml
    WP-CLI project config:
    WP-CLI version: 1.2.1
    ```
    Note: Here you can find [all wp commands](https://developer.wordpress.org/cli/commands/)

2. **Dowload wordpress latest version**

    ```sh
    $ wp core download
    ```

3. **Generate configuration file (wp-config.php)**

    ```sh
    $ wp core config --dbname={yourdatabase} --dbuser={yourusername} --dbpass={YOUR DATABASE PASSWORD}
    ```

      * (Optional)**Create database for your installation** 
    
        ```sh
        $ wp db create
        ```

4. **Install wordpress**

   You will need the domain, title and admin information at hand.
   
    ```sh
    $ wp core install --url={domain.com} --title="First Attempt" --admin_user={yourusername} --admin_password={yourpassword} --admin_email={your@email.com}
    ```
    Test your wordpress instalation (login) by going to */wp-admin*

* (Optional) **[Install composer](https://getcomposer.org/download/)**

7. **If everything is ok, check your composer.json remove or add any plugins based on your taste and run:**

```sh
$ composer install
```

## Author

**Alejandro Sanchez**
- Repository website: [Wordpress For Developers](https://github.com/alesanchezr/wordpress-for-developers)
- About me: [alesanchezr.com](alesanchezr.com)

## Contributors

**Ignacio Cordoba**
- About me: [Nachovz](https://github.com/nachovz)

## License

This project is licensed under the MIT License

## Do's and dont's of this installation
* **Do** change the composer.json, and adjust it to your needs.
* **Don't** [change the Wordpress core](https://getflywheel.com/layout/wp-core/)
* **Do** follow Wordpress' best practices.
    
## More WordPress plugins?

From now on you should only install plugins available in the WPackagist project, don't worry, there are thousands of plugins in it. They are all validated.

[https://wpackagist.org/search](https://wpackagist.org/search)

If a plugin is no available, you can still install your own plugins if you want and nothing will break (unless you install crapy plugins) :)