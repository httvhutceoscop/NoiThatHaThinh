$(document).ready(function() {
	$("a#aLogin").click(function() {
			$('#loginPopup').slideToggle();
			return false;
		}
	);
	$("a#aHelp").click(function() {
			$('#helperPopup').slideToggle();
			return false;
		}
	);
	$('.info-titleds').click( function (){
			$('.info-content').slideToggle();
		}
	);
	$('ul.list-posts li:even').addClass("alt-row"); // Add class "alt-row" to even table rows
	$('ul.list-cat li:even').addClass("alt-row"); // Add class "alt-row" to even table rows
	$('ul.list-post li:even').addClass("alt-row"); // Add class "alt-row" to even table rows
	$('div#bt').insertAfter(".home_title"); // Add class "alt-row" to even table rows
});


function addFilePicture(upload_field)
{
	var re_text = /\.jpg|\.gif|\.jpeg/i;
	var filename = upload_field.value;
	if (filename.search(re_text) == -1) {
		alert("File should be either jpg or gif or jpeg");
		upload_field.form.reset();
		return false;
	}
	document.getElementById('picture_preview').innerHTML = '<div><img height="20" src="http://localhost/chungcu/images/loading.gif" border="0" /></div>';
	upload_field.form.action = './img/upload-picture.php';
	upload_field.form.target = 'upload_iframe';
	upload_field.form.submit();
	upload_field.form.action = 'http://localhost/chungcu/userpost/add';
	upload_field.form.target = '';
	return true;
}

function editFilePicture(upload_field, id)
{
	var re_text = /\.jpg|\.gif|\.jpeg/i;
	var filename = upload_field.value;
	if (filename.search(re_text) == -1) {
		alert("File should be either jpg or gif or jpeg");
		upload_field.form.reset();
		return false;
	}
	document.getElementById('picture_preview').innerHTML = '<div><img height="20" src="http://localhost/chungcu/images/loading.gif" border="0" /></div>';
	upload_field.form.action = '../img/upload-picture.php';
	upload_field.form.target = 'upload_iframe';
	upload_field.form.submit();
	upload_field.form.action = 'http://localhost/chungcu/userpost/edit/' + id;
	upload_field.form.target = '';
	return true;
}