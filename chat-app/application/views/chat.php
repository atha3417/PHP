<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aplikasi Chatting Sederhana</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="background-color: #eaeaea; position: relative;">

	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto"style="bottom: -15px;">
				<div id="pesan" style="overflow: auto; height: 430px; background-color: #97CDD9;">
					<?php foreach($chat as $list) {
						echo "<p class='ml-2'><span><b>".$list->name."</b> : </span><span>".$list->message."</span></p>";
					} ?>
				</div>
				<div>
					<div class="form-group">
						<input type="text" name="name" id="name" class="form-control" placeholder="Your Nama" required>
					</div>
					<div class="form-group">
						<textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
					</div>
					<div class="form-group">
						<input type="button" value="Send Message" class="form-control btn btn-primary" onclick="store();">
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://js.pusher.com/6.0/pusher.min.js"></script>
<!-- My Script -->
<script>
	function store() {
		var value = {
			name: $('#name').val(),
			message: $('#message').val()
		}

		$.ajax({
			url: '<?= site_url('chat/store') ?>',
			type: 'POST',
			data: value,
			dataType: 'JSON'
		})

	}

    var pusher = new Pusher('25257dfdc17294e6a1f8', {
      cluster: 'ap1'
    })

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      addData(data)
    })


    function addData(data) {
    	var str = ''
    	for(var z in data) {
    		str += '<p class="ml-2"><span><b>'+data[z].name+'</b> : </span><span>'+data[z].message+'</span></p>'
    	}
    	$('#message').val('')
    	$('#pesan').html(str)
    }
</script>
</body>
</html>