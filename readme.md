InterSales GoogleFonts
===================
Select GoogleFont for theme from Magento backend

Website: https://www.intersales.de/magento-extensions/uebersicht-extensions.html

Documentation: https://www.intersales.de/fileadmin/usr/website/magento-extensions/googlefonts-doku_de.pdf

Requirements
------------
- Magento >= 1.3
- PHP >= 5.5.0

Installation
------------

Upload the complete directory to your Magento server.
In order to install it you have two options:
1) modman
2) manual

If you use modman move the folder to the directory 

.modman 

Then issue this command from the root directory of your Magento installation:

$ modman deploy GoogleFonts

If you prefer to install the extension manually just move the folder into the Magento root directory.
Note: no Magento files will be overwritten.
Note: please set the correct file and directory permissions.

Usage
-------

The extension is configured inSystem → Configuration → interSales Modules → Google Fonts

After enabling the extension the appropriate code for the selected Google Font will automatically be included in your frontend template.
Example:
<link href='http://fonts.googleapis.com/css?family=Eater' rel='stylesheet' type='text/css'>

In order to use this font you have to access it via CSS. Use the name of the font you selected in the extension configuration, e.g. „Eater“:
font-family: 'Eater', cursive;

You can find further information on GoogleFonts on the Google website
http://www.google.com/fonts#

Support
-------
If you have any issues with this extension, open an issue on GitHub (see URL above)


Contribution
------------
Any contributions are highly appreciated. The best way to contribute code is to open a
[pull request on GitHub](https://help.github.com/articles/using-pull-requests).


Developer
---------
InterSales Team
* Website: [https://www.intersales.de](http://www.intersales.de)
* Twitter: [@intersales](https://twitter.com/intersales)


Copyright
---------
(c) 2014 - 2018 interSales AG Internet Commerce, Köln