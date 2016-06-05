<div class="container">
    <div class="row">

        <div class="col-md-6">
            <h1 style="display: inline-block;"><?= $Lang->get('ERROR__404_LABEL') ?></h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
					<?php
					$msg = $Lang->get('ERROR__404_CONTENT');
					$msg = str_replace('{URL}', $url, $msg);
					echo $msg;
					?>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="content">
  <div class="container">

    <div class="col-sm-6 col-sm-offset-3" id="error-page">

      <div class="box">

        <h3><?= $Lang->get('ERROR__404_CONTENT', array('{URL}' => $url)) ?></h3>
        <h4 class="text-muted"><?= $Lang->get('ERROR__404_LABEL') ?></h4>

        <p class="buttons"><a href="index.html" class="btn btn-template-main"><i class="fa fa-home"></i> Go to Homepage</a></p>

      </div>

    </div>
  </div>
</div>
