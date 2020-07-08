$('#terminal').on('keyup', '.user_input', function(e) {
	if (e.keyCode == 13) {
		index = -2;
		indexChanged = false;
		let values = $(this).val().trim().split(' ');
		$(this).attr('disabled', 'disabled');
		if (values == '') {
			appendResponse('Fill command first!');
			appendInput();
		} else {
			if (values[0] == 'open') {
				openLink(values[1]);
				appendResponse('Opening '.values[1]);
				appendInput();
			} else if (values[0] == 'say') {
				if (values.length == 2) {
					appendResponse("Hello "+values[1]);
					appendInput();
				} else {
					appendResponse('"'+values[0]+'" Expects parameter 1 to be resource!');
					appendInput();
				}
			} else if (values[0] == 'look') {
				if (values.length == 2) {
					$.post('api/index.php', {
						job: values[0],
						table: values[1]}, function(data) {
							for (let i = 0; i < data.length; i++) {
								appendResponse(data[i].title);
							}
							appendInput();
					});
				} else {
					appendResponse('"'+values[0]+'" Expects parameter 1 to be resource!');
					appendInput();
				}
			} else if (values[0] == 'look_at') {
				if (values.length == 3) {
					$.post('api/index.php', {
							job: values[0],
							table: values[1],
							title: values[2]
						}, function(data) {
							for (let i = 0; i < data.length; i++) {
								appendResponse(data[i].title+" - "+data[i].description);
							}
							appendInput();
					});
				} else {
					appendResponse('"'+values[0]+'" Expects parameter 2 to be resource!');
					appendInput();
				}
			} else {
				appendResponse('"'+values[0]+'" is not recognized as an internal command!');
				appendInput();
			}
		}
	}
})

function appendResponse(message) {
	$('#terminal').append(`
			<div class="bot_output">`+message+`</div>
	`);
}

function appendInput() {
	$('#terminal').append(`
		<span>$admin : <input class="user_input" placeholder="_" autofocus></span>
	`);
	$('.user_input').focus();
}

function openLink(link) {
	window.open("http://"+link, '_blank');
}

let index = -2;
indexChanged = false;

$('#terminal').keydown(function(e) {
	if (e.keyCode == 38) {
		travelDom('-');
		indexChanged = true;
	} else if (e.keyCode == 40) {
		travelDom('+');
	}
});

function travelDom(sign) {
	if (indexChanged == true && sign == '+') {
		index++;
	} else if (indexChanged == true && sign == '-') {
		index--;
	}
	data = $('.user_input').eq(index).val();
	$('.user_input').last().val(data)
	indexChanged = true;
}
