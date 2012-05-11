# mognase - mageia.org global navigation service

This service is available so that each mageia.org Web service/site can have
a same, consistent looking, synchronized navigation bar.

You have two ways to use this service:

* using a Javascript snippet;
* using directly CSS and HTML and placing them at the right place.


## Use a Javascript snippet (preferred, less work)

Place this at the end of your HTML document:

> ```<script src="//www.mageia.org/_nav/js/"></script>
> ```

It will:

* load the stylesheet rules
* detect some of your document features;
* build a ```<div id="nav" />``` node just after the <body> of your doc;
* call and inject the HTML.


## Use directly HTML & CSS

Get, and _cache_ those two document and insert them in your HTML.

* ```//www.mageia.org/_nav/css/```
* ```//www.mageia.org/_nav/html/?l={html[lang]}&b={body[class]}&w=1```


## Update your documents HTML & CSS

You need to change your CSS rules so that they match:

> ```
> html, body { margin: 0; padding: 0; }
> ```

If you want to see the navigation bar sections activated for your site/app,
you need to update your documents' body[class] too, to match either:

* ```map``` (global "home" element, mageia logo)
* ```about``` (about section)
* ```downloads``` (downloads & products section)
* ```community``` (community tools & resources section)
* ```support``` (support section)
* ```contribute``` (contributors section)
* ```you``` (identity, personal data & services)

Finally, to have an integrated h1 title with the top navigation, put it just
at the top of your HTML document:

> ```<body>
> <h1 id="mgnavt">your title</h1>```


## Features

The detected and used features are:

* ```html[lang]``` is used to translate the menu in the said language,
  when available
* ```body[class]``` is not used yet.
* ```head > meta[name="context"] value``` is not used yet.
* ```document.location.href``` is used for stats purpose (logs).



## Code & license

* code is in [svn://svn.mageia.org/svn/web/www/trunk/_nav/](http://svn.mageia.org/web/www/trunk/_nav/)
* written by [Romain d'Alverny](http://twitter.com/rdalverny) in April 2012
* licensed under GNU GPL-2+.
* patches and discussions welcome in [Mageia Web team](https://wiki.mageia.org/en/Web_team)

----