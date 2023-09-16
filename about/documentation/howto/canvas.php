<?php
require "../../../top.php";
require "../../../nav.php";
?>
<div id="container">
<h2>Canvas Integration</h2>
<p>You can view, install, and use TsugiCloud in the EduAppCenter at:</p>
<pre><code>https://www.eduappcenter.com/apps/1010</code></pre>
<p><strong>Using TsugiCloud in Canvas</strong></p>
<p>There are several different use cases for using TsugiCloud in Canvas.  In all cases you will need a Key and Secret.</p>
<ol>
<li>
<p>Go to the App Store and login with your Google Account</p>
</li>
<li>Go to the Settings and select &quot;Manage LMS Access Keys&quot;.  Request an LTI 1.x key and wait for the email approving the key and giving your key and secret.  Keep these safe.</li>
</ol>
<p>You can either install tools into Canvas one at a time, or install the entire TsugiCloud app store into Canvas in a single step.  Depending on your local configuration, you may or may not need to get your Canvas adminstrator to install these tools.</p>
<p>If you are a Canvas administrator, you can install either a single tool or the entire store for your users using these same URLs.   You only need one key and secret for an entire Canvas installation and the users never need to see their key and secret when the tools are installed by the Canvas adminstrator.</p>
<p><strong>Using a Single Tool in Canvas</strong></p>
<ol>
<li>
<p>Go to the Tsugi App Store.  Find the application you want to install and go to the Details page.  If you click on &quot;Tool URLs&quot; you will be given a Canvas configuration URL (ends with &quot;.xml&quot;).  Copy the URL that looks as follows:</p>
<p><a href="https://www.tsugicloud.org/mod/map/canvas-config.xml">https://www.tsugicloud.org/mod/map/canvas-config.xml</a></p>
</li>
<li>Go into a Canvas course, and select &quot;Settings&quot;, &quot;Apps&quot;, &quot;View App Configurations&quot;, and &quot;+ App&quot;.  Under Configuration Type, select &quot;By URL&quot;.  Enter the configuration URL, Key, and Secret and give the tool a name and save the configuration.   This tool will now be avaialable as one of the &quot;External Tools&quot; thoughout the Canvas UI.</li>
</ol>
<p><strong>Installing TsugiCloud as an App Store in Canvas</strong></p>
<p>You can install TsugiCloud as a searchable &quot;Store&quot; inside of Canvas with a single key and secret and then you can easily pull in any of the tools at various points in the Canvas UI.</p>
<ol>
<li>
<p>Go to your Tsugi Settings and select &quot;Manage LMS Keys&quot; and then &quot;Using Your Key&quot; and then &quot;Canvas&quot;.  You should copy the URL that looks like:</p>
<p><a href="https://www.tsugicloud.org/tsugi/lti/store/canvas-config.xml">https://www.tsugicloud.org/tsugi/lti/store/canvas-config.xml</a></p>
</li>
<li>Go into a Canvas course, and select &quot;Settings&quot;, &quot;Apps&quot;, &quot;View App Configurations&quot;, and &quot;+ App&quot;.  Under Configuration Type, select &quot;By URL&quot;.  Enter the configuration URL, Key, and Secret and give the tool a name and save the configuration.   The tools in this site will now be avaialable as a searchable course in the the &quot;External Tools&quot; options in the Canvas UI.  </li>
</ol>
<p>These tools will appear under Modules, Assignments, and even in the rich text editor when installed in this manner.</p>
<?php
require "../../../footer.php";
