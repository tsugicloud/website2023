<?php
require "../../../top.php";
require "../../../nav.php";
?>
<div id="container">
<h2>FAQ</h2>
<p><strong>How would a teacher use TsugiCloud?</strong></p>
<p>Most Learning Management Systems (LMS) support the IMS Learning Tools Interoperability&reg; (LTI) specification.   To integrate a tool, you need to apply for a key and secret in the App Store.  When you receive your key and secret, you can visit the app store and get the launch URL to plug the tool into your LMS.</p>
<p>If you use Google Classroom, go into the App Store and connect your Classrooms to this store.  At that point, you can immediately install Apps into Google Classroom.  Google Classroom will be able to launch the apps and the apps will be able to send grades to Google Classroom for your students.</p>
<p><strong>I am a campus IT staff member, can we use TsugiCloud?</strong></p>
<p>Yes, most LMS's like Sakai, Canvas, Blackboard, Moodle, or Brightspace allow an administrator to install an LTI tool for all users.  If your LMS supports IMS Content Item (a.k.a. IMS Deep Linking) it is possible to install <em>the app store</em> into your LMS once and users can convienently select items from this store and install them using the system-wide key and secret.  Look for the &quot;System-wide URLs&quot; in the App Store or in the &quot;Using Your Key&quot; area under Settings.</p>
<p><strong>Can I test these tools with 12345/secret</strong></p>
<p>Yes you can.  You should <em>never</em> use this key and secret in production. All the data associated with 12345/secret is thrown away periodically.  Using a commonly known test key/secret exposes any data stored under that key.  So 12345/secret is <em>perfect</em> for testing but very bad for production.</p>
<p><strong>Can I pay for TsugiCloud?</strong></p>
<p>No.  This is and will continue to be a free service.  If you want to support the effort, please join and/or donate to <a href="https://www.apereo.org" target="_blank">Apereo</a> and support the Tsugi project. You can purchase hosting for Tsugi tools from <a href="https://www.learnxp.com/" target="_blank">Learning Experiences</a>.  Learning Experiences is a <a href="https://www.apereo.org/content/commercial-affiliates" target="_blank">Tsugi Commercial Affialiate</a>.</p>
<p><strong>Can I build my own educational tool like these tools?</strong></p>
<p>These tools are all built using a free and 100% open source framework called <a href="https://www.tsugi.org/" target="_blank">Tsugi</a>.  The Tsugi web site has details on how to get started developing educational tools using Tsugi.</p>
<p><strong>How do I submit a tool I have written to host it on TsugiCloud?</strong></p>
<p>This site only hosts tools that are open source and accepted as part of the <a href="https://github.com/tsugitools" target="_blank">Tsugi Tools</a> project in
Apereo.  If you have a Tsugi tool, you need to move the source code into this project, and get all the intellectual property cleared using Apereo <a href="https://www.apereo.org/licensing/agreements" target="_blank">Contributor License Agreements</a>.  Once that is done and the code has passed code review, it will be added to this site for free hosting.   If you want a place to stage your Tsugi tools in public but without the licensing rigor of the Tsugi Tools organization, you can use the <a href="https://github.com/tsugicontrib" target="_blank">Tsugi Contrib</a> area but those tools are not eligible for hosting on TsugiCloud.org.</p>
<?php
require "../../../footer.php";
