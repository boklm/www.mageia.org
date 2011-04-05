<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title>How to report a bug | Mageia</title>
    <meta name="description" content="How to report a bug for Mageia.">
    <meta name="keywords" content="mageia, linux, bug, report, procedure, support, help">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../../analytics.php'; ?>
</head>
<body class="report-a-bug">
    <?php include '../../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">How to Report a Bug</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div class="qsidesummary">
                        <ol>
                            <li><a href="#update">Update your system</a></li>
                            <li><a href="#reproduce">Reproduce the bug</a></li>
                            <li><a href="#go">Go to bugs.mageia.org</a></li>
                            <li><a href="#search">Search for similar bugs</a></li>
                            <li><a href="#file">File a new bug</a></li>
                            <li><a href="#follow">Follow up</a></li>
                            <li><a href="#thx">Thank you!</a></li>
                            <li><a href="#more">More</a></li>
                        </ol>
                    </div>
                    
                    <h2 id="update">1. Update your system.</h2>
                    <p>Make sure your system is up-to-date, 
                        and double-check if you still encounter the same bug.</p>
                    <p>If not, that means that an installed update may have fixed the bug
                        &ndash; you may stop here.</p>
                    
                    <hr />
                    <h2 id="reproduce">2. Reproduce the bug.</h2>
                    <p>Make sure you can reproduce the bug, and how you do it.</p>
                    <p>If not, it will be difficult for developers to identify and fix this bug.
                        But if you still think this is important enough to be reported, continue.</p>

                    <hr />
                    <h2 id="go">3. Go to <a href="https://bugs.mageia.org/">bugs.mageia.org</a>.</h2>
                    <p>&hellip; and sign in with <a href="https://identity.mageia.org/">your Mageia account</a>.
                        If you do not have an account yet,
                        you can <a href="https://identity.mageia.org/register">register one</a>.</p>
                    
                    <hr />
                    <h2 id="search">4. Search for a similar bug.</h2>
                    <p>This bug may have been reported already. So search for it using the search box.</p>
                    <p>If there is one such similar bug:</p>
                    <ul>
                        <li>has it been resolved already? does the proposed resolution work for you?</li>
                        <li>is it still pending resolution? then try to see if
                            you can add relevant information into the comments
                            section of the bug (bottom of the page).</li>
                        <li>do you want to be notified of updates relative to this bug? then add yourself in the Cc list.</li>
                    </ul>
                    <p>If you found no similar bug, or if the resolution doesn't work for you, you may continue.</p>

                    <hr />
                    <h2 id="file">5. File a new bug.</h2>
                    <p>Choose the Product, Component, Version, Hardware Platform that best match
                        the context of this bug. Put the name of the Source RPM of the package
                        (see below for more details).</p>
                    
                    <p>Write a clear summary explaining the bug, in a few words.</p>

                    <p>Explain the bug in details, following the template provided to you in the report form.</p>
                    
                    
                    <p>Attach the documents that seem relevant and informative about this bug.</p>

                    <p>Assign the bug to the packager maintainer (or let the triage team add it)</p>
                    
                    <p>Post your bug.</p>
                    
                    <hr />
                    <h3>Document your bug!</h3>
                    <p>It is crucial that you gather information about your bug:</p>
                    <ul>
                        <li>what is the software involved? what is the package, source package of it?</li>
                        <li>who is the maintainer?</li>
                        <li>do you have a log file or a screenshot that may help demonstrate the problem?</li>
                    </ul>
                    <p><code class="term">$ rpm -qi package</code></p>
                    <p>will give you a lot of informations about a package already: source package name, maintainer, etc.</p>

                    <hr />
                    <h2 id="follow">6. Follow up.</h2>
                    <p>Your bug will be reviewed by the Triage team and/or the maintainer of the package,
                        or other contributors.
                        It will help a lot that you answer their questions so they can get a better picture
                        of the issue at hand and fix it more quickly.</p>
                    <p>Similarly, your bug may be silently fixed in a later release.
                        If so, consider closing your bug on your own.</p>

                    <hr />
                    <h2 id="thx">7. Thank you!</h2>
                    <p>Thanks to take the time to report to us about your experience
                        of Mageia. This will help make it a better operating system for everyone.</p>

                    <hr />
                    <h2 id="more">More.</h2>
                    <p>For a more detailed description of <a href="http://mageia.org/wiki/doku.php?id=qa_bugzilla#how-to_report_a_bug">how to report a bug</a>.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
