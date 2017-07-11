###Installing Wordpress

1) Install WP-CLI by following: 
> http://wp-cli.org/

2) Install wordpress
> wp core download

3) Generate DB
> wp core config --dbname=c9 --dbuser=alesanchezr --dbpass={YOUR DATABASE PASSWORD}

4) Create database
> wp db create

5) Install wordpress
> wp core install --url=domain.com --title="First Attempt" --admin_user=alesanchezr --admin_password=1234 --admin_email=a@4geeksacademy.com

6) Test your wordpress instalation (login)


7) Create the .gitignore


8) Install composer

    {
        "repositories": [
            {
                "type": "composer",
                "url": "http://wpackagist.org"
            }
        ],
        "require": {
            "tareq1988/wp-eloquent": "dev-master",
            "wpackagist-theme/_tk": "*",
            "wpackagist-plugin/akismet": "3.1.1",
            "wpackagist-plugin/w3-total-cache": "*",
            "wpackagist-plugin/duplicator": "*",
            "wpackagist-plugin/wordpress-seo": "*"
        }
    }
    
###Installing composer with wordpress
https://developer.wordpress.org/cli/commands/

###More plugins
https://wpackagist.org/search