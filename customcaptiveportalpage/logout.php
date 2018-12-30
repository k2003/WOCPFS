<?php
	header("Expires: 0");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header("Connection: close");
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<title>P$T Authentication</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<!--===============================================================================================-->	
		<!-- <link rel="stylesheet" type="text/css" href="font-awesome.css"> -->
	<!--===============================================================================================-->
		<style>
			.login100-form-btn,.symbol-input100{-webkit-transition:all .4s;-o-transition:all .4s;-moz-transition:all .4s}*{margin:0;padding:0;box-sizing:border-box}body,html{height:100%;font-family:Kanit,sans-serif}input{outline:0;border:none}input:focus::-webkit-input-placeholder{color:transparent}input:focus:-moz-placeholder{color:transparent}input:focus::-moz-placeholder{color:transparent}input:focus:-ms-input-placeholder{color:transparent}textarea:focus::-webkit-input-placeholder{color:transparent}textarea:focus:-moz-placeholder{color:transparent}textarea:focus::-moz-placeholder{color:transparent}textarea:focus:-ms-input-placeholder{color:transparent}input::-webkit-input-placeholder{color:#999}input:-moz-placeholder{color:#999}input::-moz-placeholder{color:#999}input:-ms-input-placeholder{color:#999}textarea::-webkit-input-placeholder{color:#999}textarea:-moz-placeholder{color:#999}textarea::-moz-placeholder{color:#999}textarea:-ms-input-placeholder{color:#999}button{outline:0!important;border:none;background:0 0}button:hover{cursor:pointer}iframe{border:none!important}.limiter{width:100%;margin:0 auto}.container-login100{width:100%;min-height:100vh;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;justify-content:center;align-items:center;padding:15px;background-repeat:no-repeat;background-position:center;background-size:cover;position:relative;z-index:1}.container-login100::before{content:"";display:block;position:absolute;z-index:-1;width:100%;height:100%;top:0;left:0;background-color:rgba(175,184,199,.9)}.login100-form-btn,.wrap-login100{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox}.wrap-login100{width:960px;background:#fff;border-radius:10px;overflow:hidden;display:flex;flex-wrap:wrap;justify-content:space-between;padding:60px 130px 60px 95px}.login100-pic{width:316px}.login100-pic img{max-width:100%}.login100-form{width:290px}.login100-form-title{font-family:Kanit;font-size:24px;color:#333;line-height:1.2;text-align:center;width:100%;display:block;padding-bottom:54px}.input100,.login100-form-btn{font-family:Kanit;font-size:15px;line-height:1.5}.wrap-input100{position:relative;width:100%;z-index:1;margin-bottom:10px}.input100{color:#666;display:block;width:100%;background:#e6e6e6;height:50px;border-radius:25px;padding:0 30px 0 68px}.focus-input100,.symbol-input100{position:absolute;bottom:0;left:0;height:100%;border-radius:25px}.focus-input100{display:block;z-index:-1;width:100%;box-shadow:0 0;color:rgba(87,184,70,.8)}.container-login100-form-btn,.symbol-input100{width:100%}.input100:focus+.focus-input100{-webkit-animation:anim-shadow .5s ease-in-out forwards;animation:anim-shadow .5s ease-in-out forwards}@-webkit-keyframes anim-shadow{to{box-shadow:0 0 70px 25px;opacity:0}}@keyframes anim-shadow{to{box-shadow:0 0 70px 25px;opacity:0}}.symbol-input100{font-size:15px;display:flex;align-items:center;padding-left:35px;pointer-events:none;color:#666;transition:all .4s}.input100:focus+.focus-input100+.symbol-input100{color:#57b846;padding-left:28px}.container-login100-form-btn{display:flex;flex-wrap:wrap;justify-content:center;padding-top:20px}.login100-form-btn,.login100-form-btnd{text-transform:uppercase;width:100%;height:50px;border-radius:25px;padding:0 25px;color:#fff}.login100-form-btn{background:#57b846;display:flex;justify-content:center;align-items:center;transition:all .4s}.login100-form-btn:hover{background:#333}.login100-form-btnd{background:#b85146;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;justify-content:center;align-items:center;-webkit-transition:all .4s;-o-transition:all .4s;-moz-transition:all .4s;transition:all .4s}.login100-form-btnd:hover{background:#222}@media (max-width:992px){.wrap-login100{padding:177px 90px 33px 85px}.login100-pic{width:35%}.login100-form{width:50%}}@media (max-width:768px){.wrap-login100{padding:100px 80px 33px}.login100-pic{display:none}.login100-form{width:100%}}@media (max-width:576px){.wrap-login100{padding:100px 15px 33px}}#footer{text-align:left;padding:10px}#footer-box{background-color:#fff;padding:10px;width:auto;max-width:813px}.footerMenu{position:fixed;left:0;bottom:0;width:100%;background-color:#232425;color:#fff;text-align:center;padding:1%}.center{display:block;margin-left:auto;margin-right:auto}
			/* thai */
			@font-face{font-family:Kanit;font-style:normal;font-weight:400;src:local('Kanit Regular'),local('Kanit-Regular'),url(captiveportal-Kanit-Regular.ttf) format('woff2');unicode-range:U+0E01-0E5B,U+200C-200D,U+25CC}*{margin:0;padding:0;box-sizing:border-box}body,html{height:100%;font-family:Kanit,sans-serif}input{outline:0;border:none}input:focus::-webkit-input-placeholder{color:transparent}input:focus:-moz-placeholder{color:transparent}input:focus::-moz-placeholder{color:transparent}input:focus:-ms-input-placeholder{color:transparent}textarea:focus::-webkit-input-placeholder{color:transparent}textarea:focus:-moz-placeholder{color:transparent}textarea:focus::-moz-placeholder{color:transparent}textarea:focus:-ms-input-placeholder{color:transparent}input::-webkit-input-placeholder{color:#999}input:-moz-placeholder{color:#999}input::-moz-placeholder{color:#999}input:-ms-input-placeholder{color:#999}textarea::-webkit-input-placeholder{color:#999}textarea:-moz-placeholder{color:#999}textarea::-moz-placeholder{color:#999}textarea:-ms-input-placeholder{color:#999}button{outline:0!important;border:none;background:0 0}button:hover{cursor:pointer}iframe{border:none!important}.limiter{width:100%;margin:0 auto}.container-login100{width:100%;min-height:100vh;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;justify-content:center;align-items:center;padding:15px;background-repeat:no-repeat;background-position:center;background-size:cover;position:relative;z-index:1}.container-login100::before{content:"";display:block;position:absolute;z-index:-1;width:100%;height:100%;top:0;left:0;background-color:rgba(175,184,199,.9)}.wrap-login100{width:960px;background:#fff;border-radius:10px;overflow:hidden;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;flex-wrap:wrap;justify-content:space-between;padding:60px 130px 60px 95px}.login100-pic{width:316px}.login100-pic img{max-width:100%}.login100-form{width:290px}.login100-form-title{font-family:Kanit;font-size:24px;color:#333;line-height:1.2;text-align:center;width:100%;display:block;padding-bottom:54px}.input100,.login100-form-btn{font-family:Kanit;font-size:15px;line-height:1.5}.wrap-input100{position:relative;width:100%;z-index:1;margin-bottom:10px}.input100{color:#666;display:block;width:100%;background:#e6e6e6;height:50px;border-radius:25px;padding:0 30px 0 68px}.focus-input100,.symbol-input100{position:absolute;bottom:0;left:0;height:100%;border-radius:25px}.focus-input100{display:block;z-index:-1;width:100%;box-shadow:0 0;color:rgba(87,184,70,.8)}.container-login100-form-btn,.symbol-input100{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;width:100%}.input100:focus+.focus-input100{-webkit-animation:anim-shadow .5s ease-in-out forwards;animation:anim-shadow .5s ease-in-out forwards}@-webkit-keyframes anim-shadow{to{box-shadow:0 0 70px 25px;opacity:0}}@keyframes anim-shadow{to{box-shadow:0 0 70px 25px;opacity:0}}.symbol-input100{font-size:15px;display:flex;align-items:center;padding-left:35px;pointer-events:none;color:#666;-webkit-transition:all .4s;-o-transition:all .4s;-moz-transition:all .4s;transition:all .4s}.input100:focus+.focus-input100+.symbol-input100{color:#57b846;padding-left:28px}.container-login100-form-btn{display:flex;flex-wrap:wrap;justify-content:center;padding-top:20px}.login100-form-btn{color:#fff;text-transform:uppercase;width:100%;height:50px;border-radius:25px;background:#57b846;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;justify-content:center;align-items:center;padding:0 25px;-webkit-transition:all .4s;-o-transition:all .4s;-moz-transition:all .4s;transition:all .4s}.login100-form-btn:hover{background:#333}@media (max-width:992px){.wrap-login100{padding:177px 90px 33px 85px}.login100-pic{width:35%}.login100-form{width:50%}}@media (max-width:768px){.wrap-login100{padding:100px 80px 33px}.login100-pic{display:none}.login100-form{width:100%}}@media (max-width:576px){.wrap-login100{padding:100px 15px 33px}}#footer{text-align:left;padding:10px}#footer-box{background-color:#fff;padding:10px;width:auto;max-width:813px}.error-notice{margin:5px}.oaerror{width:90%;background-color:#FFF;padding:20px;border:1px solid #eee;border-left-width:5px;border-radius:5px 25px;margin:0 auto;font-family:Kanit,sans-serif;font-size:16px}.danger{border-left-color:#d9534f;background-color:rgba(217,83,79,.1)}.danger strong{color:#d9534f}
		</style>

		<script>
			window.onbeforeunload = confirmExit;
			function confirmExit(){
				return "คุณต้องการปิดหน้าต่างนี้ ใช่ไหม";
			}
		</script>
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('captiveportal-bg-01.jpg');">
			<!-- <div class="container-login100"> -->
			<div class="wrap-login100">
				<img class="center" src="captiveportal-img-01.png" alt="IMG">
				<span class="login100-form-title"> ระบบพิสูจน์ตัวตน <br> โรงเรียนพระปริยัติธรรมวัดโสธรวราราม </span>

				<?php
					$clientip = $_SERVER['REMOTE_ADDR'];
					$db = new SQLite3("/var/db/captiveportalpstlab.db"); // ให้เปลี่ยนชื่อ captiveportal ในที่นี้้ คือ captiveportalpstlab.db
					$results = $db->query("SELECT * FROM captiveportal WHERE ip='$clientip'");
					while ($row = $results->fetchArray()) {
						$sessionid=$row['sessionid'];
						$username=$row['username'];
						$firstname=$row['firstname'];
						$lastname=$row['lastname'];
						$macaddress=$row['mac'];
					}
					if($sessionid=="") {
						echo "<div class='login100-form'>
								<p style='text-align: center'>กรุณาคลิกปุ่มข้างล่าง  เพื่อเข้าสู่ระบบ</p>
								<div class='container-login100-form-btn'>
									<a href=http://LAN_IP:8002/index.php?zone=pstlab'>
										<input type='button' value='เข้าสู่หน้าล๊อกอิน' class='login100-form-btn'>
									</a>
									</a>
								</div>
							</div>
		
							<div class='login100-form'>
									<p style='text-align: center'> คลิกปุ่มข้างล่าง  เพื่อเปลี่ยนรหัสผ่าน</p>
									<div class='container-login100-form-btn'  style='color: #FF0000;'>
										<a href='http://LAN_IP/admin/pass.php'>
											<input type='button' value=' เปลี่ยนรหัสผ่าน ' class='login100-form-btnd'>
										</a>
									</div>
							</div>
		
							<div id='footer'>
								<div id='footer-box'>
		
									<div style='text-align: center;padding: 10px;'>
										<p>หมายเลขไอพี คือ $clientip </p>
										<p>ไม่มีผู้ใช้งานค้างอยู่ในระบบ</p>
									</div>
		
									<h2>-:-คำแนะนำ Pst Authentication-:-</h2>
									<ol>
										<li>ลงชื่อเข้าใช้ Internet 1 ครั้ง สามารถใช้งานต่อเนื่องได้ 2 ชม. ในกรณีที่ต้องการใช้งานต่อสามารถลงชื่อเข้าใช้งานใหม่อีกครั้ง</li>
										<li>หลังจากลงชื่อเข้าใช้ Internet แล้ว หากไม่มีการใช้งาน Internet นาน 10 นาที ระบบจะทำการ Sing Out อัตโนมัติ</li>
										<li>ผู้ใช้งาน 1 Account สามารถใช้งานได้ 1 เครื่องเท่านั้น</li>
										<li>สำหรับนักเรียน Username = รหัสประจำตัวนักเรียน  ,  Password = วันเดือนปีเกิด  (เช่น 01042554)</li>
										<li>มีปัญหาการเข้าใช้งาน Internet ให้ติดต่องานผู้ดูแลระบบ (พระมหาดีเป็นดร้า เดสาร)</li>
										<li><strong><a href='http://LAN_IP/admin/pass.php' target='_blank' rel='noopener noreferrer' style='text-decoration: none;color: #FF0000;'>เปลี่ยนรหัสผ่าน</a></strong><br/></li>
									</ol>
								</div>
							</div>";
						//ให้เปลี่ยนไอพีเซอร์เวอร์ ในที่นี้คือ LAN_IP และชื่อ zone captiveportal ในที่นี้้ คือ buwifi
						$db->close();

					}else{

						$Dbaseservername = "localhost";
						$Dbaseusername = "root";
						$Dbasepassword = "100100122";
						$Dbasedbname = "radius3";

						// Create connection
						$Dbaseconn = mysqli_connect($Dbaseservername, $Dbaseusername, $Dbasepassword, $Dbasedbname);
						// Check connection
						if (!$Dbaseconn) {
							die("Connection failed: " . mysqli_connect_error());
						}
						mysqli_set_charset($Dbaseconn, 'utf8');

						$Dbasesql = "SELECT CONCAT(`firstname`, `lastname`)AS name , `mailaddr` FROM `account` WHERE username = '$username'";
						$Dbaseresult = mysqli_query($Dbaseconn, $Dbasesql);

						while($row = mysqli_fetch_assoc($Dbaseresult)) {
							$userrAccname = $row["username"];
							$name = $row["name"];
							$mailaddr = $row["mailaddr"];
						}

						echo "<div class='login100-form'>
									<p style='text-align: center'>กดปุ่มด้านล่าง เมื่อต้องการเข้าสู่ระบบอินเทอร์เน็ต</p>
									<div class='container-login100-form-btn'>
										<a href='https://www.google.com/' target='_blank' style=\"text-decoration: none;\">
											<input type='submit' name='accept' class='login100-form-btn' value='<<< เข้าสู่อินเทอร์เน็ต >>>' id='login'>
										</a>
									</div>
								</div>
			
								<div class='\login100-form'>
										<p style='text-align: center'> เลิกใช้งานให้คลิกที่ปุ่ม Logout เพื่อออกจากระบบ</p>
										<div class='container-login100-form-btn'  style='color: #FF0000;'>
											<form method='POST' action='http://LAN_IP:8002/'>
												<input name='logout_id' type='hidden' value='$sessionid'>
												<input name='zone' type='hidden' value='pstlab'>
												<input name='logout' type='submit' value='<<< ออกจากระบบ >>>' class='login100-form-btnd' />
											</form>
										</div>
								</div>
			
								<div id='footer'>
									<div id='footer-box'>
			
										<div style='text-align: center;padding: 10px;'>
											<h1 style='color: #FF0000;'>กรุณา...อย่าปิด X หน้าต่างนี้...!</h1>
											<p>สวัสดี : $name </p>
											<p>username : $username </p>
											<p>Email : $mailaddr </p>
											<p>หมายเลขไอพี คือ $clientip </p>
											<p>Mac Address คือ $macaddress </p>
										</div>
			
										<h2>-:-คำแนะนำ Pst Authentication-:-</h2>
										<ol>
											<li>ลงชื่อเข้าใช้ Internet 1 ครั้ง สามารถใช้งานต่อเนื่องได้ 2 ชม. ในกรณีที่ต้องการใช้งานต่อสามารถลงชื่อเข้าใช้งานใหม่อีกครั้ง</li>
											<li>หลังจากลงชื่อเข้าใช้ Internet แล้ว หากไม่มีการใช้งาน Internet นาน 10 นาที ระบบจะทำการ Sing Out อัตโนมัติ</li>
											<li>ผู้ใช้งาน 1 Account สามารถใช้งานได้ 1 เครื่องเท่านั้น</li>
											<li>สำหรับนักเรียน Username = รหัสประจำตัวนักเรียน  ,  Password = วันเดือนปีเกิด  (เช่น 01042554)</li>
											<li>มีปัญหาการเข้าใช้งาน Internet ให้ติดต่องานผู้ดูแลระบบ (พระมหาดีเป็นดร้า เดสาร)</li>
											<li><strong><a href='http://LAN_IP/admin/pass.php' target='_blank' rel='noopener noreferrer' style='text-decoration: none;color: #FF0000;'>เปลี่ยนรหัสผ่าน</a></strong><br/></li>
										</ol>
									</div>
								</div>";
						//ให้เปลี่ยนไอพีเซอร์เวอร์ ในที่นี้คือ LAN_IP และชื่อ zone captiveportal ในที่นี้้ คือ buwifi
						mysqli_close($Dbaseconn);
						$db->close();
					}


				?>
			</div>
			<div class="footerMenu">
				<p>Designed with lots of love by <a href="http://www.ddeshar.com.np" title="Newa web developer" style="text-decoration: none;color: #FF0000;">ddeshar.com.np</a>.</p>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="captiveportal-jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="tilt.jquery.min.js"></script> -->
	<script >
		"use strict";var _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"===("undefined"==typeof module?"undefined":_typeof(module))&&module.exports?module.exports=function(i,s){return void 0===s&&(s="undefined"!=typeof window?require("jquery"):require("jquery")(i)),t(s),s}:t(jQuery)}(function(t){return t.fn.tilt=function(i){var s=function(){this.ticking||(requestAnimationFrame(g.bind(this)),this.ticking=!0)},e=function(){var i=this;t(this).on("mousemove",o),t(this).on("mouseenter",a),this.settings.reset&&t(this).on("mouseleave",l),this.settings.glare&&t(window).on("resize",d.bind(i))},n=function(){var i=this;void 0!==this.timeout&&clearTimeout(this.timeout),t(this).css({transition:this.settings.speed+"ms "+this.settings.easing}),this.settings.glare&&this.glareElement.css({transition:"opacity "+this.settings.speed+"ms "+this.settings.easing}),this.timeout=setTimeout(function(){t(i).css({transition:""}),i.settings.glare&&i.glareElement.css({transition:""})},this.settings.speed)},a=function(i){this.ticking=!1,t(this).css({"will-change":"transform"}),n.call(this),t(this).trigger("tilt.mouseEnter")},r=function(i){return"undefined"==typeof i&&(i={pageX:t(this).offset().left+t(this).outerWidth()/2,pageY:t(this).offset().top+t(this).outerHeight()/2}),{x:i.pageX,y:i.pageY}},o=function(t){this.mousePositions=r(t),s.call(this)},l=function(){n.call(this),this.reset=!0,s.call(this),t(this).trigger("tilt.mouseLeave")},h=function(){var i=t(this).outerWidth(),s=t(this).outerHeight(),e=t(this).offset().left,n=t(this).offset().top,a=(this.mousePositions.x-e)/i,r=(this.mousePositions.y-n)/s,o=(this.settings.maxTilt/2-a*this.settings.maxTilt).toFixed(2),l=(r*this.settings.maxTilt-this.settings.maxTilt/2).toFixed(2),h=Math.atan2(this.mousePositions.x-(e+i/2),-(this.mousePositions.y-(n+s/2)))*(180/Math.PI);return{tiltX:o,tiltY:l,percentageX:100*a,percentageY:100*r,angle:h}},g=function(){return this.transforms=h.call(this),this.reset?(this.reset=!1,t(this).css("transform","perspective("+this.settings.perspective+"px) rotateX(0deg) rotateY(0deg)"),void(this.settings.glare&&(this.glareElement.css("transform","rotate(180deg) translate(-50%, -50%)"),this.glareElement.css("opacity","0")))):(t(this).css("transform","perspective("+this.settings.perspective+"px) rotateX("+("x"===this.settings.disableAxis?0:this.transforms.tiltY)+"deg) rotateY("+("y"===this.settings.disableAxis?0:this.transforms.tiltX)+"deg) scale3d("+this.settings.scale+","+this.settings.scale+","+this.settings.scale+")"),this.settings.glare&&(this.glareElement.css("transform","rotate("+this.transforms.angle+"deg) translate(-50%, -50%)"),this.glareElement.css("opacity",""+this.transforms.percentageY*this.settings.maxGlare/100)),t(this).trigger("change",[this.transforms]),void(this.ticking=!1))},c=function(){var i=this.settings.glarePrerender;if(i||t(this).append('<div class="js-tilt-glare"><div class="js-tilt-glare-inner"></div></div>'),this.glareElementWrapper=t(this).find(".js-tilt-glare"),this.glareElement=t(this).find(".js-tilt-glare-inner"),!i){var s={position:"absolute",top:"0",left:"0",width:"100%",height:"100%"};this.glareElementWrapper.css(s).css({overflow:"hidden","pointer-events":"none"}),this.glareElement.css({position:"absolute",top:"50%",left:"50%","background-image":"linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",width:""+2*t(this).outerWidth(),height:""+2*t(this).outerWidth(),transform:"rotate(180deg) translate(-50%, -50%)","transform-origin":"0% 0%",opacity:"0"})}},d=function(){this.glareElement.css({width:""+2*t(this).outerWidth(),height:""+2*t(this).outerWidth()})};return t.fn.tilt.destroy=function(){t(this).each(function(){t(this).find(".js-tilt-glare").remove(),t(this).css({"will-change":"",transform:""}),t(this).off("mousemove mouseenter mouseleave")})},t.fn.tilt.getValues=function(){var i=[];return t(this).each(function(){this.mousePositions=r.call(this),i.push(h.call(this))}),i},t.fn.tilt.reset=function(){t(this).each(function(){var i=this;this.mousePositions=r.call(this),this.settings=t(this).data("settings"),l.call(this),setTimeout(function(){i.reset=!1},this.settings.transition)})},this.each(function(){var s=this;this.settings=t.extend({maxTilt:t(this).is("[data-tilt-max]")?t(this).data("tilt-max"):20,perspective:t(this).is("[data-tilt-perspective]")?t(this).data("tilt-perspective"):300,easing:t(this).is("[data-tilt-easing]")?t(this).data("tilt-easing"):"cubic-bezier(.03,.98,.52,.99)",scale:t(this).is("[data-tilt-scale]")?t(this).data("tilt-scale"):"1",speed:t(this).is("[data-tilt-speed]")?t(this).data("tilt-speed"):"400",transition:!t(this).is("[data-tilt-transition]")||t(this).data("tilt-transition"),disableAxis:t(this).is("[data-tilt-disable-axis]")?t(this).data("tilt-disable-axis"):null,axis:t(this).is("[data-tilt-axis]")?t(this).data("tilt-axis"):null,reset:!t(this).is("[data-tilt-reset]")||t(this).data("tilt-reset"),glare:!!t(this).is("[data-tilt-glare]")&&t(this).data("tilt-glare"),maxGlare:t(this).is("[data-tilt-maxglare]")?t(this).data("tilt-maxglare"):1},i),null!==this.settings.axis&&(console.warn("Tilt.js: the axis setting has been renamed to disableAxis. See https://github.com/gijsroge/tilt.js/pull/26 for more information"),this.settings.disableAxis=this.settings.axis),this.init=function(){t(s).data("settings",s.settings),s.settings.glare&&c.call(s),e.call(s)},this.init()})},t("[data-tilt]").tilt(),!0});

		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
</body>
</html>