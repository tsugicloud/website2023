<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

require "top.php";
require "nav.php";

?>

<!-- Fix for smartphone screen responsiveness -->
<style>
code {
  word-break: break-word;
}
</style>

<div id="container">
<h1>Tsugi Cloud</h1>
<p>

<ul>
<li><p><b>
An App Store for Education
</b>
The tools hosted on this site can be seamlessly integrated into any Learning Management System that supports IMS Learning Tools Interoperability.
</p></li>

<li><p><b>
Free Hosting
</b>
TsugiCloud provides socially responsible free hosting of open source Tsugi tools that are developed as part of the Tsugi project.
</p></li>

<li><p><b>
Teachers and Learners
</b>

Teachers and Learners have access to a wide range of tools to improve the overall user experience in their courses.
</p></li>


<li><p><b>
Developers
</b>

Developers can build open source Tsugi tools as part of the Apereo Project and submit them to be hosted on this service.
</p></li>

<li><p><b>
IT Staff
</b>

The tools on this server can be integrated as an App Store into an LMS that supports the IMS Content Item Message standard or Google Classroom. Also, Tsugi and the Tsugi Tools project are all 100% open source so a school has the option to host their own independent instance of a Tsugi App Store.
</p></li>

<li><p><b>
Commercial Hosting for Tsugi
</b>

Learning Experiences provides the resources this site is free to use. You can purchase commercial hosting for Tsugi from Learning Experiences.
</p></li>
</ul>

<h3>Copyright</h3>
<p>
The material produced specifically for this site is by Charles Severance and others
and is Copyright Creative Commons Attribution 3.0 
unless otherwise indicated.  
</p>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php 
require "footer.php";
