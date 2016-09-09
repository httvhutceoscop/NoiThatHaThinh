function confirmDelete(delUrl)
{
	if (confirm('Bạn có muốn xóa thật không?')==true) 
	{
		if (confirm('Tất cả các dữ liệu con của nó cũng sẽ bị xóa. Bạn có muốn thao tác tiếp')==true)
		{
			document.location = delUrl;
		}
	}
}
function get_alias(){
	var str = (document.getElementById("idtitle").value);
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
	str= str.replace(/đ/g,"d");
	str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
	str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
	str= str.replace(/^\-+|\-+$/g,"");//cắt bỏ ký tự - ở đầu và cuối chuỗi
	document.getElementById("idalias").value = str;
	return str;
}
function BrowseServer()
{
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField;
	finder.popup();
}
function BrowseServer1()
{
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField1;
	finder.popup();
}
function BrowseServer2()
{
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField2;
	finder.popup();
}
function BrowseServer3()
{
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField3;
	finder.popup();
}
function BrowseServer4()
{
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.selectActionFunction = SetFileField4;
	finder.popup();
}
function SetFileField( fileUrl )
{
	document.getElementById( 'xFilePath' ).value = fileUrl;
}
function SetFileField1( fileUrl )
{
	document.getElementById( 'xFilePath1' ).value = fileUrl;
}
function SetFileField2( fileUrl )
{
	document.getElementById( 'xFilePath2' ).value = fileUrl;
}
function SetFileField3( fileUrl )
{
	document.getElementById( 'xFilePath3' ).value = fileUrl;
}
function SetFileField4( fileUrl )
{
	document.getElementById( 'xFilePath4' ).value = fileUrl;
}
function hinhanh()
{
var x;
x = document.getElementById("xFilePath").value
document.getElementById("hinhanh").innerHTML = "<img width='126' src='" + x +"'/>";
}
function hinhanh1()
{
var x;
x = document.getElementById("xFilePath1").value
document.getElementById("hinhanh1").innerHTML = "<img width='126' src='" + x +"'/>";
}
function hinhanh2()
{
var x;
x = document.getElementById("xFilePath2").value
document.getElementById("hinhanh2").innerHTML = "<img width='126' src='" + x +"'/>";
}		
function hinhanh3()
{
var x;
x = document.getElementById("xFilePath3").value
document.getElementById("hinhanh3").innerHTML = "<img width='126' src='" + x +"'/>";
}
function hinhanh4()
{
var x;
x = document.getElementById("xFilePath4").value
document.getElementById("hinhanh4").innerHTML = "<img width='126' src='" + x +"'/>";
}								