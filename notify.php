<?php include "header.php"; ?>

  <div class="container"><div class="row">

                <div class="page-content-wrap">
				<div class="panel panel-default">
                                <div class="panel-heading">
    <center>
       <div class="col-md-12">
                    <form action="not_act.php" method="post" role="form">
                        <h1><b>Single Notify</b></h1>

                                <div class="form-group">
                                    <label>Hacker (Cyber Name)</label>
                                    <input type="text" class="form-control" placeholder="Nick Name" name="hacker" onkeyup="valid(this)" onblur="valid(this)/>
                                </div>
                                <div class="form-group">
                                    <label>Team</label>
                                    <input type="text" class="form-control" placeholder="Team Name" name="team" onkeyup="valid(this)" onblur="valid(this)">
                                </div>
                                <div class="form-group">
                                    <label>Domain</label>
                                    <input type="text" class="form-control" placeholder="http://example.com" name="url" onkeyup="valid(this)" onblur="valid(this)">
                                </div>
                               <div class="form-group">
                                  <label>Proof of Concept (Now ll be displayed on mirror page)</label>
                                  <select class="form-control" name="poc" id="poc" required="">
                                    <option value="">--------SELECT--------</option>
                                    <option value="known vulnerability (i.e unpatched system)">Known Vulnerability (i.e Unpatched System)</option>
                                    <option value="Undisclosed Vulnerability">Undisclosed Vulnerability</option>
                                    <option value="Configuration / Admin. Mistake">Configuration / Admin. Mistake</option>
                                    <option value="Brute Force Attack">Brute Force Attack</option>
                                    <option value="Social Engineering">Social Engineering</option>
                                    <option value="Web Server Intrusion">Web Server Intrusion</option>
                                    <option value="Web Server External Module Intrusion">Web Server External Module Intrusion</option>
                                    <option value="Mail Server Intrusion">Mail Server Intrusion</option>
                                    <option value="FTP Server Intrusion">FTP Server Intrusion</option>
                                    <option value="SSH Server Intrusion">SSH Server Intrusion</option>
                                    <option value="Telnet Server Intrusion">Telnet Server Intrusion</option>
                                    <option value="RPC Server Intrusion">RPC Server Intrusion</option>
                                    <option value="Shares Misconfiguration">Shares Misconfiguration</option>
                                    <option value="Other Server Intrusion">Other Server Intrusion</option>
                                    <option value="SQL Injection">SQL Injection</option>
                                    <option value="URL Poisoning">URL Poisoning</option>
                                    <option value="File Inclusion">File Inclusion</option>
                                    <option value="Other Web Application Bug">Other Web Application Bug</option>
                                    <option value="Remote Admin Panel Access Through Bruteforcing">Remote Admin Panel Access Through Bruteforcing</option>
                                    <option value="Remote Admin Panel Access Through Password Guessing">Remote Admin Panel Access Through Password Guessing</option>
                                    <option value="Remote Admin Panel Access Through Social Engineering">Remote Admin Panel Access Through Social Engineering</option>
                                    <option value="Remote Against The Admin/User (Password Stealing/Sniffing)">Remote Against The Admin/User (Password Stealing/Sniffing)</option>
                                    <option value="Access Credentials Through Man In The Middle Attack">Access Credentials Through Man In The Middle Attack</option>
                                    <option value="Remote Service Password Guessing">Remote Service Password Guessing</option>
                                    <option value="Remote Service Password Bruteforce">Remote Service Password Bruteforce</option>
                                    <option value="Rerouting After Attacking the Firewall">Rerouting After Attacking the Firewall</option>
                                    <option value="Rerouting After Attacking the Router">Rerouting After Attacking the Router</option>
                                    <option value="DNS Attack Through Social Engineering">DNS Attack Through Social Engineering</option>
                                    <option value="DNS Attack Through Cache Poisoning">DNS Attack Through Cache Poisoning</option>
                                    <option value="Cross-Site Scripting">Cross-Site Scripting</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                                </div>
</center>
                        <input type="hidden" name="key" value="kucing"/>
                        <input type="hidden" name="secret" value="tai"/><br>
						
                        <button class="btn btn-default btn-block">Submit Site</button>
                        <button class="btn btn-danger btn-block">Cancel</button></div><script type="text/javascript">
  var vglnk = { key: '182c8663a7386809208e33440a48d7c0' };

  (function(d, t) {
    var s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
    s.src = '//cdn.viglink.com/api/vglnk.js';
    var r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
  }(document, 'script'));
</script>
                    </form>    
                </div>
                
                </div>
                        <input type="hidden" name="key" value="kucing"/>
                        <input type="hidden" name="secret" value="tai"/>
                    </form>
                </div>

                <div class="col-md-6">

                </div>
            </div></div>
        </div>
    </div>

</div><hr>

<script type="text/JavaScript">
function valid(f) {
!(/^[A-z&#209;&#241;0-9;@;/;,;!;&#45;&#150;&#63;:; ;!-.;]*$/i).test(f.value)?f.value = f.value.replace(/[^A-z&#209;&#241;0-9;@;/;,;!;&#45;&#150;&#63;:; ;!-.;]/ig,''):null;
}
</script>
<?php include "footer.php"; ?>