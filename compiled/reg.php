<?php include template("header.html");?>
<!--TOP start-->
<?php include template("top.html");?>
<!--TOP end-->

<!--HEAD start-->
<?php include template("head.html");?>
<!--HEAD end-->

<!--REG START-->
<div id="wp" class="wp">
	<div id="ct" class="ptm wp cl">
		<div class="mn">
			<div class="bm" id="main_message">
				<div class="bm_h bbs" id="main_hnav">
					<h3 id="layer_reginfo_t" class="xs2">Register now</h3>
				</div>
				<p id="returnmessage4"></p>
				<form method="post" autocomplete="off" name="register" id="registerform" action="">
					<div id="layer_reg" class="bm_c">
						<div class="mtw">
							<div id="reginfo_a">
								<div class="rfm">
									<table>
										<tr>
											<th><span class="rq">*</span><label for="5sMVeV">username:</label></th>
											<td><input type="text" id="5sMVeV" onblur="checkRegOut('5sMVeV','Please enter username');" onfocus="checkReg('5sMVeV')" name="username" class="px" autocomplete="off" size="25" maxlength="15"/></td>
											<td class="tipcol"><i id="tip_5sMVeV" class="p_tip">consist of 3 to 12 characters</i></td>
										</tr>
									</table>
								</div>
								<div class="rfm">
									<table>
										<tr>
											<th><span class="rq">*</span><label for="WXETc3">Password:</label></th>
											<td><input type="password" id="WXETc3" onblur="checkRegOut('WXETc3','please fill in the password');" onfocus="checkReg('WXETc3')" name="password" size="25" class="px" /></td>
											<td class="tipcol"><i id="tip_WXETc3" class="p_tip">please enter the password,consisting of 3 to 12 characters</i></td>
										</tr>
									</table>
								</div>
								<div class="rfm">
									<table>
										<tr>
											<th><span class="rq">*</span><label for="LzI33d">Confirm the password:</label></th>
											<td><input type="password" id="LzI33d" onblur="checkRegOut('LzI33d','please confirm the password');" onfocus="checkReg('LzI33d')" name="repassword" size="25" class="px" /></td>
											<td class="tipcol"><i id="tip_LzI33d" class="p_tip">please enter the password again</i></td>
										</tr>
									</table>
								</div>
								<div class="rfm">
									<table>
										<tr>
											<th><span class="rq">*</span><label for="A5MVeV">First name of an existing member:</label></th>
											<td><input type="text" id="A5MVeV" onblur="checkRegOut('A5MVeV','Please enter the first name of an existing user');" onfocus="checkReg('A5MVeV')" name="memberfirstname" class="px" autocomplete="off" size="25" maxlength="15"/></td>
											<td class="tipcol"><i id="tip_A5MVeV" class="p_tip">Please enter the first name of an existing user</i></td>
										</tr>
									</table>
								</div>
								<div class="rfm">
									<table>
										<tr>
											<th><span class="rq">*</span><label for="FQ817D">Email:</label></th>
											<td><input type="text" id="FQ817D" name="mail"  onblur="checkRegOut('FQ817D','please enter a valid email address');" onfocus="checkReg('FQ817D')" size="25" class="px" /><br /><em id="emailmore">&nbsp;</em></td>
											<td class="tipcol"><i id="tip_FQ817D" class="p_tip">please enter a valid email address</i></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div id="layer_reginfo_b">
						<div class="rfm mbw bw0">
							<table width="100%">
								<tr>
									<th>&nbsp;</th>
									<td>
									<span id="reginfo_a_btn">
									<em>&nbsp;</em>
									<button class="pn pnc" id="registerformsubmit" type="submit" name="regsubmit" value="true">
										<strong>Submit</strong>
									</button>
									</span>
									</td>
									<td></td>
								</tr>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
function checkReg(obj){
	document.getElementById('tip_'+obj).style.display='block';
}

function checkRegOut(obj,test){
	if(document.getElementById(obj).value==''){
		document.getElementById('tip_'+obj).innerHTML='<b style="color:red;">'+test+'</b>';
	}else{
		document.getElementById('tip_'+obj).style.display='none';
	}
}

function show(obj){
	document.getElementById(obj).src='verify.php?math='+Math.random();
}
</script>
<!--REG END-->

<!--FOOT start-->
<?php include template("footer.html");?>
<!--FOOT end-->
</body>
</html>
