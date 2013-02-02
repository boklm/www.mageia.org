# mognase - mageia.org global navigation service

This service is available so that each mageia.org Web service/site can have
a same, consistent looking, synchronized navigation bar.

You have two ways to use this service:

1. using a Javascript snippet;
1. using directly CSS and HTML and placing them at the right place.

---
## 1. Use a Javascript snippet (preferred, less work)

Place this at the end of your HTML document:

> ```<script src="//nav.mageia.org/js/"></script>
> ```

It will:

* load the stylesheet rules
* detect some of your document features;
* build a ```<div id="nav" />``` node just after the ```<body>``` of your doc;
* call and inject the HTML.

---
## 2. Use directly HTML & CSS

Get, and _cache_ those two document and insert them in your HTML.

* ```//nav.mageia.org/css/```
* ```//nav.mageia.org/html/?l={html[lang]}&b={body[class]}&w=1```

and:

* publish CSS in your documents.
* put HTML in ```<div id="nav" />``` just after the ```<body>```
  of your doc

---
## Update your documents HTML & CSS

In both cases, you need to change your CSS rules so that they match:

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

---
## Features

The detected and used features are:

* ```html[lang]``` is used to translate the menu in the said language,
  when available
* ```body[class]``` is not used yet.
* ```head > meta[name="context"] value``` is not used yet.
* ```document.location.href``` is used for stats purpose (logs).

---
## Code & license

* code is in [svn://svn.mageia.org/svn/web/nav/](http://svn.mageia.org/web/nav/)
* licensed under GNU GPL-3+, 2012, rda
* issues on [bugs.mageia.org](https://bugs.mageia.org/buglist.cgi?query_format=advanced&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&component=nav.mageia.org&product=Websites)
* patches and discussions welcome in [Mageia Web team](https://wiki.mageia.org/en/Web_team)

---
## TODO

* [FIXED, 2012/06/11] no cache on the service (speeding up delivery)
* [PARTIAL] jumping page when the bar is loaded:
  - fixed for: forum, wiki/Vector;
  - the bar still slides, but the page is already at the right place, with a fixed position from top; quick example:

    html, body { margin: 0; padding: 0; }
    #wrap { margin-top: 80px; }
    #hmgn { position: absolute; top: 0; left: 0; width: 100%; }

* navbar still to deploy on: planet, mailing-lists
* needs some work: blog, wiki (switch to Vector)
* nav bar won't fix/resize depending on screen resolution => use CSS media queries
* no cache wrapper/library available for client apps
* [?] nav bar design and branding ugly
* [?] nav bar too big

* analytics for forum

* wiki media queries

### Issues

 * [WONTFIX] when using the JS service, no fallback for browsers with no Javascript
 *

----
