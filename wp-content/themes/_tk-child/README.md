#How to use this child theme

This theme was built thinking only on junior developers, coming from laravel coding in wordpress did not feel right for me until I built this theme because I know how happy my life is when I use:
- Bootstrap
- Composer for packages and also for wordpress plugins.
- The Eloquen ORM (from laravel) to extend the database.
- WP-CLI (because using the wordpress administration interface feels wrong when you are a developer).

##Examples
I have created an "examples" folder with some examples of what can you do with wordpress inside the functions.php file. Open any of those files to understand them, the names are preatty explicit on what they do.
You can uncomment any of the 'requier' functions on the ~30th line of the functions.pp to see the live examples working.

##Styles

You need to install Sass if you want to use the Sass features (strongly recomended).

All styles should be coded in Sass and imported into styles.scss using the sass @import command by using the following command
```sh
sass --watch wp-content/themes/_tk-child/src/scss/style.scss:wp-content/themes/_tk-child/style.css --style compressed
```

If by any chance you have external CSS minified files (strongly not recommended) you can drop them in the SRC/CSS/ folder.

##Javascripts
Just drop all your JS in the src/inc/ folder no minification for now.

## Author

* **Alejandro Sanchez** - *Initial work* - [Wordpress For Developers](https://github.com/alesanchezr/wordpress-for-developers)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details