# Repository of moztw.org

This is the new repository of moztw.org, including static page, forum and wiki. If you are willing to contribute. You can fork modify and send pull request.

## Static Page Local Installation

To install static pages including home page, event pages, contribution pages ...etc is very easy. Only two requirement:

* SSI, server side include
* Virtual Host

### Apache 2

To enable SSI on apache is very easy on some os. Take Ubuntu for example, just execute `a2enmod include`. Then you have a SSI ready Aapche.

The 2nd step is add the virtual host config to your apache's configuration:

    <VirtualHost *:80>
        ServerName moztw.yourdomain.name
        ServerAdmin admin@yourdomain.name

        DocumentRoot /path/to/moztw/central/htdocs/
        <Directory /path/to/moztw/central/htdocs>
            Options FollowSymLinks Includes
            AllowOverride All
            Order allow,deny
            allow from all
        </Directory>
    </VirtualHost>

Restart your apache and open your browser, link to *http://moztw.yourdomain.name*. You should see the homepage of moztw.

### Nginx

## Forum Installation

## Wiki Installation

## Folder Structure & Production Environment

Please refer to [old README][old] file.

[old]:https://github.com/moztw/central/blob/master/README


