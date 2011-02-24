<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Λήψη της έκδοσης alpha της Mageia (unstable)</title> 
    <meta name="description" content="Σελίδα λήψης της πρώτης έκδοσης τεχνικής έκδοσης alpha της Mageia" /> 
    <meta name="keywords" content="mageia, alpha, unstable, iso, download, test, not for production" /> 
    <meta name="author" content="Mageia" /> 
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Λήψη της έκδοσης Alpha</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">Προσοχή! Alpha == Ασταθές λογισμικό!</h2> 
                    <p>ΔΕΝ προορίζεται ΓΙΑ: καθημερινή χρήση, δημόσια αξιολόγηση, παραγωγική εργασία.</p> 
                    <p>Προορίζεται ΓΙΑ: προγραμματιστές και δημιουργούς πακέτων.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>Οποιαδήποτε και αν είναι η χρήση που θα κάνετε των εικόνων ISO που βρίσκονται στην διάθεσή σας, αυτή θα γίνει με δική σας ευθύνη και με πλήρη επίγνωση των τυχών κινδύνων που μπορεί να υπάρξουν.
                    Αν ψάχνετε για μια σταθερή έκδοση Linux, ίσως είναι προτιμότερο να περιμένετε για τις επόμενες εκδόσεις της Mageia.</p> 
 
                <p style="font-weight: bold; color: #f22">Ακόμα μια φορά, παρακαλούμε ΜΗΝ
                    κάνετε λήψη και/ή εγκατάσταση αν δεν είστε σίγουρος/η
                    ότι κατανοείτε τι είναι αυτό το ISO και τι δεν είναι.</p> 
                
                <h2>Θέλετε ακόμα να κάνετε λήψη της πρώιμης Mageia Alpha;</h2> 
                <p>Εντάξει. Ας ξεκινησουμε με την παρουσίαση: έχουμε δυο εικόνες ISO: ένα DVD 32bit και ένα DVD 64bit.
                    Το καθένα έχει μέγεθος περίπου 2&nbsp;GiB.</p> 
                <p>Παρακάτω θα βρείτε την λίστα με τους εξυπηρετητές που κάνουν καθρεπτισμό του λογισμικού Mageia:</p> 
                <ol> 
                    <li>επιλέξτε τον εξυπηρετητή που σας βολεύει καλύτερα (κατά προτίμηση στη χώρα σας)</li> 
                    <li>επιλέξτε την εικόνα ISO που επιθυμείτε (τα ονόματα πρέπει να είναι αρκετά κατατοπιστικά).</li> 
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>Τοποθεσία</th><th>Πρωτόκολλο</th><th>Εξυπηρετητής</th></tr>
                </thead><tbody>
                <?php
                /* @fixme note to self: brains! */
                    $mirrors = array(
                        array('China', 'Beijing', 'http://fundawang.lcuc.org.cn/mageia/'),
                        array('Czech Republic', 'Praha', 'http://mageia.supp.name/'),
                        array('Deutschland', 'Erfurt', 'http://ftp.mandrivauser.de/mirrors/Mageia/'),
                        array('Deutschland', 'Erfurt', 'ftp://ftp.mandrivauser.de/mirrors/Mageia/'),
                        array('France', 'Paris', 'http://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/'),
                        array('France', 'Paris', 'ftp://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/'),
                        array('Nouvelle Calédonie', 'Nouméa', 'http://mageia.nautile.nc/mageia/distrib/'),
                        array('USA', 'Durham', 'ftp://distro.ibiblio.org/pub/linux/distributions/mageia/'),
                        array('USA', 'Durham', 'http://distro.ibiblio.org/pub/linux/distributions/mageia/'),
                    );
                    $tmpl = '<tr><td>%s, %s</td><td>%s</td><td><a href="%s%s">%s</a></td></tr>';
                    foreach ($mirrors as $m):
                        $pu = parse_url($m[2]);
                        echo sprintf($tmpl,
                            $m[1], $m[0],
                            strtoupper($pu['scheme']),
                            $m[2],
                            'iso/',
                            $pu['host']);
                    endforeach;
                ?>
                </body>
                </table>
                
                
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h2>Σχετικά με αυτή την έκδοση</h2> 
                    <p>Πρόκειται για το πρώτο ISO, από το σύστημά μας κατασκευής.
                        Κυκλοφορώντας το τώρα είναι ένας καλός τρόπος για να το δοκιμάσουμε και να δούμε τι
                        θα πρέπει να βελτιωθεί τις επόμενες εβδομάδες.</p> 
                    
                    <ul> 
			<li><a href="http://blog.mageia.org/?p=492" hreflang="en">Η ανακοίνωση στο ιστολόγιο</a></li> 
			<li><a href="/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">Σημειώσεις έκδοσης</a></li> 
                        <li><a href="/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">Errata</a></li> 
                        <li><a href="/el/">Τι είναι η Mageia?</a></li> 
                    </ul> 
                    <p>Η Alpha 2 θα κυκλοφορήσει στις 15 Μαρτίου.</p> 
                    <p>Μπορείτε να ελέγξετε το <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">φύλλο πορείας της Mageia 1</a>.</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>Μπορείτε να βοηθήσετε!</h2> 
                    <p>Ναι! Αυτή η έκδοση είναι ακόμα σε ανάπτυξη, και το ίδιο θα είναι και η επόμενη,
                        αλλά ακόμα καλύτερη!</p> 
                    <p>Υπάρχουν πολλά πράγματα που μπορούμε να κάνουμε για να συνεισφέρουμε 
                        στη Mageia: προγραμματισμός, δημιουργία πακέτων, δοκιμές, μετάφραση,
                        αναφορά και επιδιόρθωση σφαλμάτων, και <a href="http://mageia.org/wiki/">ακόμα πολλά άλλα</a>!</p> 
                    <p><a href="http://mageia.org/wiki/doku.php?id=contribute">Δείτε
                        πως μπορείτε να γίνετε μέλος και να συνεισφέρετε</a></p>

                </div>
                <div class="para">
                    <h3>Κάντε μια δωρεά!</h3> 
                    <p>Ναι! <a href="/el/donate/">Μπορείτε επίσης να κάνετε μια δωρεά!</a></p> 
                    <p>Η Mageia βασίζετε μόνο στη συμμετοχή της κοινότητάς της,
                        είτε από το χρόνο που διαθέτει, τις ικανότητές της, ή στα χρήματα που προσφέρει!</p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
		<p>Ναι, αυτή είναι πιο πολύ μια πρόχειρη σελίδα λήψης, προς το παρόν. Αλλά είναι καλή στο να κάνει αυτή την πρώτη έκδοση λιγότερο ελκυστική σε όσους δεν είναι προγραμματιστές.
                    Δεν έχουμε πει ότι είναι καλοδεχούμενοι όσοι θέλουν να συνεισφέρουν στις ομάδες
                    <a href="http://www.mageia.org/wiki/doku.php?id=web">Web</a> και <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">Sysadmin </a>;
                    Υπάρχουν <a href="http://www.mageia.org/wiki/doku.php?#teams">και άλλες φιλικές ομάδες</a> στο έργο.</p>

            </div>
        </div>
    </div>
</body>
</html>
