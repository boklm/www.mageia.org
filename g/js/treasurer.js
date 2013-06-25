var treasurer_infos_url = '//treasurer.mageia.org/index.json';
var donations_who_url = '//treasurer.mageia.org/donations_who.json';

var previous_donors_url =  'http://treasurer.mageia.org/donations_p_4.html';
var previous_donors = [
        'Abel Rodríguez Reádigos',
        'ACL Consultans Corporation',
        'Adrien Guichard',
        'Åke Mellin',
        'Alain Déchamps',
        'Alain Graveline',
        'Alain Gudefin',
        'Alain Lamarche',
        'Alejandro Diaz Infante',
        'Alejandro Lopez',
        'Alexander Andreyev',
        'Alexander Butler',
        'Alexandre Lucazeau',
        'Alfred Lang',
        'Allan Gendelman',
        'Andreas Hiekel',
        'Andreas Michaelis',
        'Andrew Edwards',
        'Andrew Hill',
        'Andrew Toller',
        'Andrey Belyaev',
        'Angelika Furrer',
        'Ángel Jiménez Álvaro',
        'Antoine de Chambost',
        'Antonio Pessoa',
        'Antonio Pimentel',
        'Arnaud Gibert',
        'Arnaud Vacquier',
        'Attila Tóth',
        'Aymerich Munoz Jose Ignacio',
        'Barry Jackson',
        'Basilio Rosa',
        'B D Granger',
        'Bernard Siaud',
        'Bernd Deinzer',
        'Bert Aerts',
        'Bjarne Thomsen',
        'Bjørn Kvisli',
        'Björn Olsson',
        'Bob McCreadie',
        'Brent Wyatt',
        'Brian Alleyne',
        'Brian Hewitt',
        'Brian McNeil',
        'Brian Saunderson',
        'Bruno Vanhove',
        'Carlos Vives Bullejos',
        'Carolyn Rowse',
        'Cedric Drolet',
        'Céline Harrand (leeloo)',
        'Chris Demaeyer',
        'Christian Fischer',
        'Christian Henri Fischer',
        'Christian Prio',
        'Claude Gilson',
        'Corrado Bove',
        'Curtis Herle',
        'Daniel Le Berre',
        'Daniel Pfenniger',
        'Dariusz Wielebinski',
        'Dave Null',
        'Dave Postles',
        'David Hallam',
        'David Pernot (deap)',
        'David Postles',
        'David Queen',
        'Denis Marcq',
        'Derek Jennings',
        'Deri James',
        'Design D4PB',
        'Dick Gevers',
        'Didier Chaigne',
        'Didier Lallement',
        'Didier Leunen (sisopetron)',
        'Dieter Rogiest',
        'Dirk Mrosek',
        'Distrowatch.com',
        'Dominique Poirier',
        'Donald Boyd',
        'Douglas Trent',
        'Doug Lytle',
        'Duncan MacGregor',
        'Dušan Pavlík',
        'Eduardo Castiello Armayor',
        'Eduardo Llana Ugalde',
        'Edward Janusz',
        'Emmanuel Andry',
        'Enrico Gsell',
        'Eric Barbero',
        'Eric Dietrich',
        'Ernst Pini',
        'Erwien Yustitiawan',
        'Etienne Berger',
        'Eugeniy Rozhkov',
        'Fabio Riccio',
        'Fabrice DANT',
        'Fabrice Deslandes',
        'Fabrice Gaillard',
        'Fabrice Jade',
        'Felipe Valladolid Gonzalo',
        'Florian Berthol',
        'Florian Siegenthaler',
        'Francesca Silvana Scoppio',
        'Francesco De Crescenzo',
        'François Jaouen',
        'François Lamboley',
        'François Lermusiau',
        'François Millasson',
        'François Pellegrini',
        'Frank Eisele',
        'Franz Holzinger',
        'Franz Senftl',
        'Freddy Janssens',
        'Frédéric Bonnaud',
        'Frédéric Buclin',
        'Frederic Forjan',
        'Frédéric Hugot',
        'Gabor Alba',
        'Gabriel Diosan',
        'George Goslin',
        'George Magill',
        'George Mitchell',
        'Gerald Sprik',
        'Gérard Calas',
        'Gerardo Bueno Jiménez',
        'Gianpiero Baglioni',
        'Gilles Casetou',
        'giorgio f lazzari',
        'Giovanni Salvi',
        'Giuseppe Juri Facchinetti',
        'Glen Ogilvie',
        'Gonzalo Igartua',
        'Grigory Maksaev',
        'Guillaume Cottenceau',
        'Guillemot Yves',
        'Guy Laurent',
        'Hans Micheelsen',
        'Harold W Daley',
        'Heiko Geier',
        'Heinz Luitz',
        'Henk Elbers',
        'Hoyt Duff',
        'HTJ Simons',
        'Ilya Diallo',
        'Ivar Øines',
        'Jacob Daniels',
        'Jacques Anzeray',
        'Jacques Degois',
        'Jacques Paret-Gris',
        'Jacques Spring',
        'James Campbell',
        'J. and N. Stiegler',
        'Jan-Gunnar Pihlgren',
        'Jani J Välimaa',
        'Jarle Bremnes',
        'Jason Schindler',
        'J. David Eisenberg',
        'Jean Christophe Lluch',
        'Jean-Claude Colette',
        'Jean Derouet',
        'jean-fernand tixier',
        'Jean-François Ansart',
        'Jean-François Bellanger',
        'Jean-Francois Cayula',
        'Jean-François Ramez',
        'Jean Goujon',
        'Jean-Guy Tesseraud',
        'Jean-jacques Barret',
        'Jean-Jacques Barret',
        'Jean-Luc Versini',
        'Jean-Marc Sarat',
        'Jean-Michel Varvou',
        'Jean-Michel Varvou (vouf)',
        'Jean Monnard',
        'Jean Peyratout',
        'Jean Sié',
        'Jeffrey Bruton',
        'Jeffrey Kuhn',
        'Jens Jablonski',
        'Jérémie Servel',
        'Jérôme Benoit',
        'Jérôme Durand',
        'Jerome Martin (jmartin)',
        'Jesus del Castillo Baena',
        'Jin-tong Hu',
        'Joao P S Carvalho',
        'Joep van Ham',
        'Johannes Balke',
        'Johnny Christiansen',
        'Jonathan Bayle',
        'Jonathan Statler',
        'Jose Fernández Rosa',
        'Jose Luis Monzonis Cabrera',
        'Jose Luis Nunez Crespi',
        'Jose Paulo Batista Silva',
        'Josep Guallar-Esteve',
        'Joseph Hubert',
        'Josy Pullockara',
        'Juan Barea Sanchez',
        'Julia Jumeau',
        'Julien Artacho Nieto',
        'Julien Simon',
        'Julio Geraldo',
        'Jurgen and Monika Harms',
        'Jurgen Thurau',
        'Jürgen Thurau',
        'Jurij Galickij',
        'Kenneth Marsol Llop',
        'Kenneth Parkes',
        'Kimmo Suutala',
        'Kindl, Tomas, Judr.',
        'Kris Thomsen',
        'Lanfranco Gandolfo',
        'Laurent Breton',
        'Laurent Clerel',
        'Laurent Espitallier',
        'Laurent Trougnou',
        'L. C. Lawrence',
        'LibreStickers',
        'Liu Pow San',
        'Livre Livre',
        'Loïc Carré',
        'Louis Ramel',
        'Louis Soriano',
        'Lucas Betschart',
        'Luca Tani',
        'Ludwig Lemke',
        'Luis Chee Espinoza',
        'Luis Maria Garcia Ruiperez',
        'Lyoness Europe AG',
        'Manuel Fernandes Alonso',
        'Marcel Sahaghian',
        'Marc Gibert',
        'Marc Hotias',
        'Marc Montalbine',
        'Marcoi Pirotta',
        'Marco Rossi',
        'Marc Paré',
        'Marcus Moeller',
        'Marek Walter',
        'Margot Lawrence',
        'Marita Klen-Launonen (tumbeliina)',
        'Marita Launonen',
        'Marja van Waes',
        'Markus Schimpf (arno911)',
        'Markus Vollmer',
        'Martin Alduncin Garrido',
        'Martin Turner',
        'Marvin Jankes',
        'Marzio Messora',
        'Mat Thorpe',
        'Michael Golden',
        'Michael Görrissen',
        'Michael Lossin',
        'Michael Smith',
        'Michael Waggoner',
        'Michel Antoine (ptit-pol88)',
        'Michel de Mendez',
        'Michèle Lallement',
        'Michele Trotta',
        'Michel Renaud',
        'Mikael Hilger',
        'Mike Arnautov',
        'Mike Burgener',
        'Mike Crecelius',
        'M.J Thate Eo',
        'Mme Noot & Nee Huyghe',
        'Mona Zehle',
        'Morgan Leijström (Tribun AB)',
        'Mriganka Talukdar',
        'Murat Demir',
        'Nenad Latinović',
        'Nico Bergmann',
        'Nicolas Gandriau',
        'Nicos Stawrakakis',
        'Olaf Schnepel',
        'Olivier Le Roy',
        'Olivier Mejean (Goom)',
        'Olivier Mergnac',
        'Ondrej Hrstka',
        'Oswald und Adolfine Krop',
        'Ota Akira',
        'Otto Fischer',
        'Pascal Vilarem (Maât)',
        'Patrice Riant',
        'Patrick Charpentier',
        'Patrick Le Tiec',
        'Patrick Vossen',
        'Paul Dupouy',
        'Paul-Eric Despretz',
        'Paul Patrick Honkakari',
        'Pawel Susicki',
        'Peter Mains',
        'Peter Trussel',
        'Peter Wiberg',
        'Philgren Jan-Gunnar',
        'Philippe Cherpentier',
        'Philippe Jusseaume',
        'Philippe Pieyre (pepy)',
        'Philippe Poilbarbe',
        'Philippe Seraphin',
        'Piermario Rodella',
        'Pierre Bonneau',
        'Pierre Gabet',
        'Pierre Opter',
        'Pierre-Yves Dirand',
        'Pietr Petronov',
        'Placais',
        'Rafal Artur Prasal',
        'Raphael Vinet',
        'Rémi Chateauneu',
        'Rémi Verschelde (Akien)',
        'Rémy Clouard (shikamaru)',
        'Renaud Le Gac',
        'Renaud Michel',
        'René Fischer',
        'Rene Hytting',
        'Richard Chonak',
        'Richard Crosby',
        'Richard Monnier',
        'Richard Neill',
        'Robert J Greenwood',
        'Robert Riches',
        'Robert Shellard',
        'Rodney Blosser',
        'Rogelio Jose Trujillo Moreno',
        'Roger Mattson',
        'Roland Gillard',
        'Ronan Viel',
        'Sahaghian',
        'Samuel Iglesias Gonsalvez',
        'Samuel Verschelde (Stormi)',
        'Sandro Veronese',
        'Sascha Herholz',
        'Schouwen R M Van',
        'Sébastien Guerin',
        'Sébastien Gustin',
        'Sébastien Pinet',
        'Serge Moreau',
        'Shlomi Fish',
        'Sreejiraj Eluvangal',
        'Staale Ness',
        'Stefan John',
        'Stéphane Couturier',
        'Stephen Adrian',
        'Steven Hess',
        'Steven Shupe',
        'Surik Sayadyan',
        'Svein Hauge',
        'Sylvain Goumas',
        'Sylvain Haye',
        'Sylvain Leterreur',
        'Teofilo Casares De La Iglesia',
        'Thibaut François',
        'Thierry Chamouton',
        'Thomas Faber',
        'Thomas Fackler (tomm.fa)',
        'Thomas Lottmann',
        'Tino Gohl',
        'Tobias Müller',
        'Tomas Kindl',
        'Tomeu Ferrer Redondo',
        'Tomislav Jankovic',
        'Tom Van Dyck',
        'Tristan Campbell',
        'Tuan Nguyen',
        'Udo Zeppich',
        'Urs Menet',
        'Valentin Moon',
        'Valgo Urtone',
        'Vallin Estes',
        'Vasileios Karampelas',
        'Vernon Grimes III',
        'Vicente Salvador Cubedo',
        'Vilhjalmur Ingi Arnason',
        'Vincent Calame',
        'Vincent Ducastin',
        'Walter Müller',
        'Werner Brinkmann',
        'William Fischer',
        'William Shields',
        'Wolfgang Bornath (wobo)',
        'Wulf Wilhelm',
        'Xavier Allain',
        'Yannick Le Ny',
        'Yaroslav Malushin',
        'Александр Найдёнов',
        'Ермолаев Василий',
        'Николай Путроенок (nick7rus)',
        '姜 奕轲',
];

function thankyou_page() {
    var donators = {};
    for (var i = 0; i < previous_donors.length; i++) {
        donators[previous_donors[i]] = previous_donors_url;
    }

    $.getJSON(donations_who_url, function(data) {
        for (var i = 0; i < data.length; i++) {
            donators[data[i].who] = data[i].url;
        }
        var sorted_donators = [];
        for (var d in donators) {
            if (donators.hasOwnProperty(d))
                   sorted_donators.push(d);
        }
        sorted_donators.sort();

        var dlist = '';
        for (var i = 0; i < sorted_donators.length; i++) {
            dlist += '<li><a href="' + donators[sorted_donators[i]] + '">'
                     + sorted_donators[i] + '</a></li>';
        };
        document.getElementById("donlist").innerHTML=dlist;
    });

    $.getJSON(treasurer_infos_url, function(data) {
        document.getElementById("donations_30days").innerHTML=data.donations_30days;
        document.getElementById("last_update").innerHTML=data.last_update;
    });
}

function donate_page() {
    $.getJSON(treasurer_infos_url, function(data) {
        document.getElementById("donations_total").innerHTML=data.donations_total;
        document.getElementById("balance").innerHTML=data.balance;
    });
}
