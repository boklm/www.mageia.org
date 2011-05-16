<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="el">
<head>
    <meta charset="utf-8" />
    <title>Mageia εκστρατεία δωρεάς</title>
    <meta name="description" content="Η Mageia είναι μια νέα κοινοτική διανομή Linux." />
    <meta name="keywords" content="mageia, δωρεά, donation" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Εκστρατεία δωρεάς</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div style="float: right; border: 1px solid #aaa; padding: 0 0 1em 0; margin: 0 0 2em 1em;">
                        <ul>
                            <li><a href="#why">Γιατί να κάνω μια δωρεά;</a></li>
                            <li><a href="#status">Πως μπορώ να παρακολουθήσω τις δωρεές;</a></li>
                            <li><a href="#d-paypal">Κάντε μια δωρεά</a> (PayPal, έμβασμα, επιταγή)</li>
                            <li><a href="/en/thank-you/#fund">Ευχαριστούμε!</a></li>
                        </ul>
                    </div>
                    <h2><a name="why">Γιατί να κάνω μια δωρεά;</a></h2>
                    <p>Η Mageia.Org είναι μια μη κερδοσκοπική οργάνωση με σκοπό τη διαχείριση της διανομής Mageia.
                        Ώς μη κερδοσκοπική οργάνωση, μπορεί να δέχεται δωρεές από την κοινότητα
                        για την υποστήριξή της σε διάφορα πεδία:</p>
                    <ul>
                        <li>υλικό και εξυπηρετητές φιλοξενίας.</li>
                        <li>ονόματα τομέων;</li>
                        <li>καταχωρήσεις του σήματος κατατεθέν.</li>
                        <li>καλούδια για τη διάδοση της Mageia.</li>
                        <li>έξοδα διαχείρισης.</li>
                        <li>ενδεχομένως, το νομικό συμβούλιο,</li>
                        <li>κλπ.</li>
                    </ul>

                    <h2><a name="status">Πως μπορώ να παρακολουθήσω τις δωρεές;</a></h2>
                    <p>Προς το παρόν, έχουμε λάβει <strong><?php echo $g_donate_amount; ?></strong>
                        ευχαριστούμε όλους τους <a href="/en/thank-you/">δωρητές</a> μας! (εβδομαδιαία ενημέρωση)</p>

                    <p>Θα πραγματοποιείται μια μηνιαία αναφορά για τα ληφθέντα ποσά και τον τρόπο χρήσης τους.
                        Πιστεύουμε πως η δημοσιοποίηση των λογαριασμών είναι αναγκαίο. Όπως αποφασίστηκε 
                        στην πρώτη συστατική γενική συνέλευση, ο ταμίας της Mageia.Org είναι ο Damien Lallement.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <h2><a name="d-paypal">Δωρεά μέσω PayPal,</a></h2>
                    <?php include '../../paypal.inc.php'; echo html_paypal_form('el'); ?>
                </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3>μέσω τραπεζικού εμβάσματος,</h3>
                    <p>χρησιμοποιώντας το παρακάτω
                        αναγνωριστικό κώδικα τράπεζας (IBAN-BIC):</p>
                    <pre class="donate-coord">
<u>Προς όφελος του:</u>

<?php echo $G_coord_assos; ?>


<u>Τραπεζικός λογαριασμός:</u>

<?php echo $G_coord_assos_bank; ?>

</pre>
                </div></div>
                <div class="yui-u"><div class="para">
                    <h3>ή μέσω επιταγής (μόνο σε &euro;).</h3>
                    <p>Μπορείτε να στείλετε τη δωρεά σας μέσω επιταγής σ' αυτήν τη διεύθυνση:</p>
                    <pre class="donate-coord">
<?php echo $G_coord_assos; ?>
</pre>
                    <p>Χρησιμοποιήστε το "Mageia.Org" στη γραμμή "Σε διαταγή...".</p>
                </div><div class="para">
                    <p><strong>Παρακαλώ σημειώστε ότι:</strong></p>
                    <ul>
                        <li>Το Paypal κρατάει ένα μικρό ποσοστό προμήθειας για κάθε δωρεά (περίπου ...%) με αποτέλεσμα να λαμβάνουμε λίγο
                            λιγότερο από το ποσό που στέλνετε.</li>
                        <li>Τα έξοδα μετατροπής συναλλάγματος βαρύνουν τη Mageia, γι' αυτό σας παρακαλούμε να χρησιμοποιείτε ως νόμισμα το &euro;.</li>
                        <li>Αν επιθυμείτε να κάνετε μια ανώνυμη δωρεά, παρακαλούμε προσθέστε ένα σχόλιο.</li>
                    </ul>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
