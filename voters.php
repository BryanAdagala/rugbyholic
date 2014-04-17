	<div id="qp_main80384" style="border:1px solid black;margin:10px;padding:10px;padding-bottom:12px;background-color:rgb(44,97,141)">
	<div style="font-family:Arial;font-size:12px;font-weight:bold;background-color:rgb(18,50,90);width:100%;color:white"><div style="padding:10px">Which is your favorite team?</div></div>
	<form id="qp_form80384" action="team_polls.php" method="post" target="_blank" style="padding:0px;margin-top:10px">
	<div style="width:100%"><div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="1">Lunchbar Quins</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="2">Nakuru</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="3">Strathmore</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="4">Mwamba</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="5">Impala</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="6">Nondies</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="7">Meanmachine</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="8">Homeboyz</span></div>
	<div style="display:block;font-family:Arial;font-size:12px;color:white;padding-top:5px;padding-bottom:5px;clear:both;width:100%">
	<span style="display:block;padding-left:30px"><input style="float:left;width:25px;margin-left:-25px;margin-top:-1px;padding:0px;height:18px" name="qp_v80384" type="radio" value="9">Kisumu</span></div></div>
	<div style="padding-top:10px;clear:both">
	<input name="qp_b80384" style="width:80px;margin-right:5px" type="submit" value="Vote" /></div>
	</form></div>

	<!--<fieldset>
	<legend style="color:#FFF">Results</legend>
		<ul>
		<li>
			<span style="color:#FFF">Lunchbar Quins</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion1?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion1, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion1, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Nakuru</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion2?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion2, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion2, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Strathmore</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion3?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion3, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion3, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Mwamba</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion4?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion4, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion4, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Impala</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion5?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion5, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion5, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Nondies</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion6?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion6, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion6, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Meanmachine</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion7?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion7, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion7, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Homeboyz</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion8?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion8, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion8, 2); ?>%
			</div>
		</li>
		<li>
			<span style="color:#FFF">Kisumu</span><br />
			<span class="total_votes" style="color:#FFF"><?php echo $num_rowsQuestion9?> votes</span><br />
			<div class="results-bar" style="width: <?php echo round($perQuestion9, 2); ?>%; color:#FFF;">
				<?php echo round($perQuestion9, 2); ?>%
			</div>
		</li>
		</ul>
	<h6 style="color:#FFF">Total votes:<?php echo $totalRows_rs_vote?></h6>
	</fieldset>//-->