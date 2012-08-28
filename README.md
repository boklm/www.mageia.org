www.mageia.org source
=====================

 * Code is licensed under: GNU GPL-2.0+, authored/managed by the Web team.
 * Content is licensed under CC-By-SA, primarily authored in English, then
   translated/ported by many translators in the i18n team.
 * See http://wiki.mageia.org/en/Web_team

How to install
==============

You'll need a basic Apache/PHP setup, with some modules (mod_geoip).


Configuration
=============

* http://svnweb.mageia.org/adm/puppet/deployment/websites/manifests/init.pp?view=markup
* http://svnweb.mageia.org/adm/puppet/deployment/websites/templates/vhost_www.conf?view=markup
* http://svnweb.mageia.org/adm/puppet/deployment/websites/templates/vhost_static.conf?view=markup

Note that all contents under g/ are served from http://static.mageia.org/g/ (different server
config to better serve and cache static, non-text contents.

TODO
====

* Permissions in var/tmp/cache/ (rw)
* short_open_tags = false
* error_log directives
* rewrite language tags (and URLs) in "zh-CN" format (and not "zh-cn")


Translators
===========
Most frequent translators for website:

 - en (English) - pivot language
    Editors: Romain d'Alverny (rda), Damien Lallement (damsweb)
    Proofreaders: Ahmad Samir (ahmad)

 - fr (French) - second pivot language
    Marianne Lombard
 
 - de (German):
    Wolfgang Bornath, Sigrid Carrera, Sebastian Schröer (sebixmag),
    Thorsten van Lil

 - el (Greek):
    Dimitrios Glentadakis

 - es (Spanish):
    Diego Bello

 - et ():
    Marek Laane

 - fi (Finnish):
 - it (Italian):
    Diego Righetto (daygo)

 - lv (Latvian):

 - nb (Norwegian):

 - nl (Dutch):

 - pl (Polish):

 - pt (Portuguese):
    Adjamilton Júnior

 - ro (Romanian):
    Catalin Florin Russen

 - ru (Russian):

 - sl (Slovenian):
    Filip Komar (filip)

 - tr (Turkish):
    Numan Dermidögen, Attila Ontas (tarakbumba)

 - zh-cn (Chinese - PRC):

 - zh-tw (Chinese - traditional):

Next?
 - ? (Persian): Siavash Ghiasvand