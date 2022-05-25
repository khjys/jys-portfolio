									<script type="text/javascript">
									if($("input[name=extend]:checked").val() == "1"){
									var extra_txt_arr = document.getElementsByName("extra_txt[]");
									var extra_txt= true;
									for (var i=0 ;i<extra_txt_arr.length ;i++ )
									{
										if($(extra_txt_arr[i]).val()==""){
											extra_txt= false;
										}
									}
									if(!extra_txt){
										alert("기타수당 항목을 입력해 주세요.");
										$("#f_extra_txt").focus();
										return false;
									}

									var extra_money_arr = document.getElementsByName("extra_money[]");
									var extra_money= true;
									for (var i=0 ;i<extra_money_arr.length ;i++ )
									{
										if($(extra_money_arr[i]).val()=="") {
											extra_money= false;
										}
									}
									if(!extra_money){
										alert("기타수당 금액을 입력해 주세요.");
										$("#f_extra_money").focus();
										return false;
									}
									}

									if(n_day=="1") {
										var n_day1=$("#n_day1").val();
										var n_day2=$("#n_day2").val();
										var n_day3=$("#n_day3").val();
										if(n_day1=="") {
											alert("평일 출근시간을 입력해 주세요");
											$("#n_day1").focus();
											return false;
										}
										if(n_day2=="") {
											alert("평일 퇴근시간을 입력해 주세요");
											$("#n_day2").focus();
											return false;
										}

										if(n_day3=="") {
											alert("평일 휴게시간을 입력해 주세요");
											$("#n_day3").focus();
											return false;
										}
									}

									if(sat_day=="1") {
										var sat_day1=$("#sat_day1").val();
										var sat_day2=$("#sat_day2").val();
										var sat_day3=$("#sat_day3").val();
										if(sat_day1=="") {
											alert("토요일 출근시간을 입력해 주세요");
											$("#sat_day1").focus();
											return false;
										}
										if(sat_day2=="") {
											alert("토요일 퇴근시간을 입력해 주세요");
											$("#sat_day2").focus();
											return false;
										}

										if(sat_day3=="") {
											alert("토요일 휴게시간을 입력해 주세요");
											$("#sat_day3").focus();
											return false;
										}
									}

									if(sun_day=="1") {
										var sun_day1=$("#sun_day1").val();
										var sun_day2=$("#sun_day2").val();
										var sun_day3=$("#sun_day3").val();
										if(sun_day1=="") {
											alert("일요일 출근시간을 입력해 주세요");
											$("#sun_day1").focus();
											return false;
										}
										if(sun_day2=="") {
											alert("일요일 퇴근시간을 입력해 주세요");
											$("#sun_day2").focus();
											return false;
										}

										if(sun_day3=="") {
											alert("일요일 휴게시간을 입력해 주세요");
											$("#sun_day3").focus();
											return false;
										}
									}


									</script>
