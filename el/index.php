<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="el">
<head>
    <meta charset="utf-8" />
    <title>Mageia – Μια νέα διανομή Linux</title>
    <meta name="description" content="Mageia is new community-based Linux distribution." />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>&ndash; Μια νέα διανομή Linux</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Η Mageia είναι ένα fork της Mandriva Linux, που υποστηρίζεται από μια μη
                    κερδοσκοπική οργάνωση η οποία αποτελείται από αναγνωρισμένους και
                    εκλεγμένους συνεισφέροντες.</p>
                    <p>Πέρα από την παροχή ενός ελεύθερου, ασφαλούς, σταθερού και με αντοχή στο
                    χρόνο λειτουργικού συστήματος, ο σκοπός είναι η πραγματοποίηση μιας
                    σταθερής και νόμιμης διακυβέρνησης γύρω από ένα συνεργατικό μοντέλο
                    (<a href="#announce">δείτε την αρχική ανακοίνωση</a>).</p>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/el/">Νέα</a></h2>
                    <?php include '../lib/news.php'; echo html_news('el'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Συμβαίνει τώρα</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Επικοινωνία</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Λίστες ταχυδρομείου</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Freenode network)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>Επικοινωνήστε με την ομάδα των ιδρυτών:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>Κατά προτίμηση στην αγγλική ή στην γαλλική αλλά δεν είναι υποχρεωτικό.
                                        Παρακαλώ περιμένετε μια απάντηση μέσα σε 2 ημέρες</li>
                                </ul></li>
                            <li><a href="http://www.twitter.com/mageia_org">twitter.com/mageia_org</a></li>
                            <li><a href="http://identi.ca/mageia">identi.ca/mageia</a></li>
                        </ul>
                        <!--
                        <p>Please do not use this address for discussions that can happen on above mailing-lists
                            or IRC channels.</p>
                        -->
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="yui-g">
                <div class="para" id="announce">
                    <p class="date">Παρίσι, 18 Σεπτεμβρίου 2010</p>
                    <p>Όπως θα γνωρίζετε, το μέλλον της Mandriva Linux είναι αβέβαιο. Οι περισσότεροι από το προσωπικό που εργάζονταν στην διανομή απολύθηκαν όταν έγινε η δικαστική εκκαθάριση της Edge-IT. Δεν εμπιστευόμαστε πια τα σχέδια της εταιρείας Mandriva SA και δεν πιστεύουμε πως η εταιρεία (και οποιαδήποτε εταιρεία) μπορεί να εξασφαλίσει την διατήρηση ενός τέτοιου έργου.</p>

                    <p>Πολλά πράγματα συνέβησαν τα τελευταία 12 χρόνια. Μερικά ήταν πολύ όμορφα: Η κοινότητα της Mandriva Linux είναι αρκετά μεγάλη, ενωμένη, με όρεξη και εμπειρία και η διανομή παραμένει μια από τις πιο γνωστές και επιβραβευμένες, εύκολη στη χρήση και με καινοτομίες. Κάποια γεγονότα δημιούργησαν αμφισβήτηση στην κοινότητα για το μέλλον της αγαπημένης της διανομής.</p>
                    <p>Αυτοί που εργάζονται σε αυτό το έργο, δεν επιθυμούν να εξαρτώνται από την οικονομική αστάθεια ή την αλλαγή στρατηγικής της εταιρείας.</p>
                </Div>
                <div class="para">
                    <h2>Δημιουργία fork του Mandriva Linux ; Ναι.</h2>

                    <p>Η δημιουργία fork ενός υπάρχοντος έργου ανοιχτού κώδικα δεν είναι μια εύκολη απόφαση να πάρει κανείς, και η δημιουργία ενός fork της Mandriva Linux είναι ένα τεράστιο έργο.</p>
                    <p>Δεν πρόκειται για απόφαση της στιγμής. Συζητήσαμε πολύ κατά το παρελθόν: ανάμεσα στο προσωπικό, τους συνεισφέροντες στην cooker και τους χρήστες. Ακούσαμε όλες τις απόψεις τις τελευταίες εβδομάδες, επειδή χρειαζόμασταν να αισθανθούμε την συναίνεση στο έργο πριν ξεκινήσουμε.</p>

                    <p>Πιστεύουμε ότι ένα fork είναι η καλύτερη λύση και αποφασίσαμε να ξεκινήσουμε μια νέα διανομή:
                        <strong>Mageia</strong>.</p>
                        
                </div>
                <div class="para">
                    <h2>Νέες βάσεις.</h2>
                    <p>Η μαγεία είναι μια κοινοτική διανομή: δεν θα εξαρτάτε από οποιαδήποτε εταιρεία.</p>
                    <p>Μια ένωση (μη κερδοσκοπική οργάνωση) θα υλοποιηθεί τις επόμενες ημέρες και θα διοικείται από ένα διοικητικό συμβούλιο που θα αποτελείται από μέλη της κοινότητας.</p>
                    <p>Αυτή η οργάνωση θα διαχειρίζεται και θα συντονίζει την διανομή: κώδικας και φιλοξενία του λογισμικού και της διανομής, σύστημα build, marketing, την προώθηση της επικοινωνίας και τις εκδηλώσεις. Τα δεδομένα, roadmaps, designs, θα μοιράζονται και θα συζητιόνται στο πλαίσιο αυτού του οργανισμού.</p>
                    <p>Θα συζητήσουμε και θα επισημάνουμε όλες αυτές τις λεπτομέρειες τις επόμενες ημέρες.</p>
                    <p>Η διανομή Mageia θα έχει τα χαρακτηριστικά που αποφασίζει το συμβούλιο, με την βοήθεια και την συνεισφορά ολόκληρης της κοινότητας, επιθυμούμε:</p>
                    <ul>
                        <li>Να κάνουμε το Linux και το ελεύθερο λογισμικό περισσότερο προσβάσιμο για όλους</li>
                        <li>Να παρέχουμε εργαλεία ρυθμίσεων τελείως ενσωματωμένα στο σύστημα</li>
                        <li>Να διατηρήσουμε ένα υψηλό επίπεδο ενσωμάτωσης ανάμεσα στο βασικό σύστημα, το περιβάλλον εργασίας (KDE/GNOME) και τις εφαρμογές, με εστίαση στην ενσωμάτωση λογισμικού τρίτων (ιδιόκτητου η μή).</li>
                        <li>Στόχευση στις νέες αρχιτεκτονικές υλικού και πλατφόρμες.</li>
                        <li>Βελτίωση της κατανόησης των υπολογιστών και των περιφερειακών.</li>
                    </ul>
                    <p>Θα έχετε χωρίς αμφιβολία και τις δικές σας ιδέες, μη διστάσετε να τις μοιραστείτε μαζί μας.</p>
                </div>
                <div class="para">
                    <h2>Η κοινότητα.</h2>
                    <p>Η κοινότητα Mageia για μας είναι:</p>
                    <ul>
                        <li>οι χρήστες</li>
                        <li>makers (designersοι κατασκευαστές (σχεδιαστές, προγραμματιστές, packagers, μεταφραστές, δοκιμαστές κλπ)</li>
                        <li>οι υποστηρικτές</li>
                    </ul>
                    <p>Όλα αυτά τα μέλη μπορεί να είναι προσωπικότητες, οργανισμοί, επιχειρήσεις απ όλο τον κόσμο.</p>
                    <p>Υπάρχει μια πραγματικά όμορφη πρόκληση: πληθώρα χωρών, πληθώρα γλωσσών, πληθώρα πολιτισμών. Είναι κάτι το εξαιρετικό.</p>
                    <p>Η εμπειρία από το Mandriva Assembly μας δίνει την εικόνα της δυσκολίας που θα συναντήσουμε. Αλλά πιστεύουμε ότι μπορούμε να τα καταφέρουμε καλύτερα !</p>
                </div>
                <div class="para" id="people">
                    <h2>Οι άνθρωποι</h2>
                    <p>Όποια και αν είναι η δραστηριότητά σας ή οι γνώσεις σας είμαστε μαζί. Η Mageia έχει σαν στόχο να σας είναι χρήσιμη, στον καθένα από εμάς σαν προσωπικότητα. Η εμπιστοσύνη είναι απαραίτητη.</p>
            
                    <p>Είμαστε στο ξεκίνημα του fork. Δεν θα είναι εύκολο. Αλλά πιστεύουμε πως είναι απαραίτητο.</p>

                    <?php include '../people.html'; ?>
            
                    <p>Για τους υπόλοιπους συνεισφέροντες: αν επιθυμείτε να προστεθεί το όνομά σας στην λίστα για να ακολουθήσετε το fork, μπορείτε να το ζητήσετε στο IRC ή μέσω ηλ. Ταχυδρομείου.</p>
                </div>
                <div class="para">
                    <h2>Μείνετε συντονισμένοι.</h2>
                    <p>Θα χρειαστούμε αρκετά για το μέλλον:</p>
                    <ul>
                        <li>υλικό για την φιλοξενία του κώδικα, την δημιουργία του συστήματος build και την φιλοξενία για το υλικό.</li>
                        <li>Προγραμματιστές, συνεισφέροντες, μεταφραστές, δοκιμαστές για να επενδυσουν στην ανάπτυξη της Mageia.</li>
                        <li>Συμβουλές για την οργάνωση αυτών των εργασιών...</li>
                    </ul>
                    <p>Εκτιμούμε ιδιαίτερα την βοήθεια και την υποστήριξή σας.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
