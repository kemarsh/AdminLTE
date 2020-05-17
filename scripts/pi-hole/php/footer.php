<?php
/* Pi-hole: A black hole for Internet advertisements
*  (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*  Network-wide ad blocking via your own hardware.
*
*  This file is copyright under the latest version of the EUPL.
*  Please see LICENSE file for your rights under this license. */ ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- Modal for custom disable time -->
    <div class="modal fade" id="customDisableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Custom disable timeout</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input id="customTimeout" class="form-control" type="number" value="60">
                            <div class="input-group-btn" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input type="radio"> Secs
                                </label>
                                <label id="btnMins" class="btn btn-default active">
                                    <input type="radio"> Mins
                                </label>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="pihole-disable-custom" class="btn btn-primary" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
<?php
  // Flushes the system write buffers of PHP. This attempts to push everything we have so far all the way to the client's browser.
  flush();
  // Run update checker
  //  - determines local branch each time,
  //  - determines local and remote version every 30 minutes
  require "scripts/pi-hole/php/update_checker.php";
?>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <strong><a href="https://pi-hole.net/donate/" rel="noopener" target="_blank"><i class="fa fa-heart text-red"></i> Donate</a></strong> if you found this useful.
            </div>
            <!-- Version Info -->
            <div class="col-xs-12 col-sm-6 col-md-8 text-center version-info">
                <ul class="list-inline">
                    <li>
                        <strong>Pi-hole Version</strong> <?php
                        echo $core_current;
                        if(isset($core_commit)) { echo " (".$core_branch.", ".$core_commit.")"; }
                        if($core_update){ ?><br><a class="alert-link lookatme" href="https://github.com/pi-hole/pi-hole/releases" rel="noopener" target="_blank">(Update available!)</a><?php } ?>
                    </li>
                    <li>
                        <strong>Web Interface Version</strong> <?php
                        echo $web_current;
                        if(isset($web_commit)) { echo " (".$web_branch.", ".$web_commit.")"; }
                        if($web_update){ ?><br><a class="alert-link lookatme" href="https://github.com/pi-hole/AdminLTE/releases" rel="noopener" target="_blank">(Update available!)</a><?php } ?>
                    </li>
                    <li>
                        <strong>FTL Version</strong> <?php
                        echo $FTL_current;
                        if(isset($FTL_commit)) { echo " (".$FTL_branch.", ".$FTL_commit.")"; }
                        if($FTL_update){ ?><br><a class="alert-link lookatme" href="https://github.com/pi-hole/FTL/releases" rel="noopener" target="_blank">(Update available!)</a><?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!-- ./wrapper -->
<script src="scripts/pi-hole/js/footer.js"></script>
</body>
</html>
