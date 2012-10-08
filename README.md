# Repository of moztw.org

This is the git repository of moztw.org web service, including static pages, forum and wiki. If you are willing to contribute, feel free to fork, modify, and send pull request.

## Static Pages Local Installation

It's easy to set up static pages including home page, event pages, contribution pages...,etc. 

Only one requirement: 
* SSI (Server Side Include)-support web server with Virtual Hosts enabled

### Apache 2

To enable SSI on Apache is very easy on most OSes. 
Take Ubuntu for example, just execute `a2enmod include`. Then you have a SSI-ready Aapche.

The 2nd step is adding virtual host configs to your Apache configuration:

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

Restart Apache and open your browser, open *http://moztw.yourdomain.name*. You should now see the MozTW homepage.

### Nginx

## Forum Installation

## Wiki Installation

## Folder Structure & Production Environment

Please refer to [old README][old] file.

[old]:https://github.com/moztw/central/blob/master/README


