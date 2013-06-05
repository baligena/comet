<html> 
<head>
<title> Comet :  Ajax </title>
<style>
	body { margin:0px; padding:0px; overflow:hidden; }
	#msg { margin:0px; padding:10px;width : 700px; height:300px; overflow-y:scroll; border:1px solid #000; }
	#send{ width: 700px; height:100px; overflow-y:scroll; }
</style>

<script src="jquery.js"></script>
<script>

var timestamp = null;
function comet() {
	$.ajax({
		type : 'Get',
		url  : 'read.php?timestamp=' + timestamp,
		async : true,
		cache : false,
		
		success : function(data) {
					var json = eval('(' + data + ')');
					console.log(data);
					console.log(json);
					if(json['msg'] == ''){
						$('#msg').html('No msg');					
					}else { 
						$('#msg').html(json['msg']);
						$('#msg').animate({scrollTop: $('#msg').get(0).scrollHeight},200);
					}
					timestamp  = json['timestamp'];
					setTimeout('comet()', 1000);
		},
		error : function(XMLHttpRequest, textstatus, error) { 
					alert(error);
					setTimeout('comet()', 15000);
		}		
	});
}

$(function() {
	comet();
	$('#send').bind('keyup', function(e) {
		var msg = $(this).val();
		if(e.keyCode == 13 && e.shiftKey) { 
			return ; 
		}else if(msg!='' && e.keyCode == 13) {
			$.ajax({
				type : 'GET',
				url  : 'write.php?msg='+ msg.replace(/\n/g,'<br />'),
				async : true,
				cache : false
			});
			$(this).val('')
		}
	})
});
</script>
</head>
<body>
<div id="msg"> </div>
 <br />
 Msg :
 <br />
<textarea id="send" name="msg"></textarea>	
</body>
</html>
