@extends('layout')
@section('sidebar')
<style>
    input[type="text"], input[type="email"], input[type="password"], input[type="number"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #7EBEF1;
        border-radius: 25px;
        font-size: 15px;
        outline: none;
        font-family: 'Poppins';
    }

    .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #7EBEF1;
        color: #fff;
        border: none;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #6aaae4;
    }

    .form-select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #7EBEF1;
        border-radius: 25px;
        font-size: 15px;
        outline: none;
        font-family: 'Poppins';
    }

    .terms {
        font-size: 0.7rem;
        text-align: center;
        color: #888;
        margin-top: 10px;
    }

    .terms a {
        color: #7EBEF1;
        text-decoration: none;
    }

    .terms a:hover {
        text-decoration: underline;
    }

    .modal-content {
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        color: #7EBEF1;
        cursor: pointer;
    }

    h2 {
        text-align: left; /* Perbaikan text alignment */
        font-size: 1.5rem;
        color: #1a1a1a;
        margin-bottom: 20px;
    }
    .table-header {
  background-color: #7EBEF1; /* Warna latar belakang */
  color: #fff; /* Warna teks */
}












.container {
    margin-top: 60px; /* Sesuaikan angka ini dengan tinggi navbar */
}

/* Perbaiki navbar supaya tetap fixed dengan shadow */
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Memberikan shadow untuk memisahkan navbar dari konten */
}




    body {
  font-family: 'Open Sans';
}

a {
  cursor: pointer;
}

.editorAria {
  height:100%;
  min-height:400px;
  border:1px solid #ddd;
  overflow-y: auto;
  padding: 1em;
  margin-top: -2px;
  outline: none;
}

.toolbar {
	position:sticky;
	top:0;
	left:0;
	right:0;
	background-color:#fff;
	border:1px solid #ddd;
	padding:10px;
}

.toolbar a,
.fore-wrapper,
.back-wrapper {
  border: 1px solid #ddd;
  background: #FFF;
  font-family: 'Candal';
  color: #000;
  padding: 5px;
	margin: 2px 0px;
  width:35px;
	height:35px;
  display: inline-block;
	text-align:center;
  text-decoration: none;
}

.toolbar a:hover,
.fore-wrapper:hover,
.back-wrapper:hover {
  background: #0eacc6;
	color:#fff;
	border-color:#0eacc6;
}

a.palette-item {
	display:inline-block;
  height: 1.3em;
  width: 1.3em;
  margin: 0px 1px 1px;
	cursor:pointer;
}
a.palette-item[data-value="#FFFFFF"]{
	border:1px solid #ddd!important;
}
a.palette-item:hover {
  transform:scale(1.1);
}
.fore-wrapper,
.back-wrapper
{
	position:relative;
	cursor:auto;
}
.fore-palette,
.back-palette {
  display: none;
	cursor:auto;
}

.fore-wrapper:hover .fore-palette,
.back-wrapper:hover .back-palette {
	display:block;
}

.fore-wrapper .fore-palette,
.back-wrapper .back-palette {
	position:relative;
  display: inline-block;
  cursor: auto;
  display: block;
	left:0;
	top:calc(100% + 5px);
  position: absolute;
  padding: 10px 5px;
  width: 160px;
  background: #FFF;
  box-shadow: 0 0 5px #CCC;
	display:none;
	text-align:left;
}
.fore-wrapper .fore-palette:after,
.back-wrapper .back-palette:before
{
	content:'';
	display:inline-block;
	position:absolute;
	top:-10px;
	left:10px;
	width:0;
	height:0;
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-bottom: 10px solid #fff;
}
.fore-palette a,
.back-palette a {
  background: #FFF;
  margin-bottom: 2px;
	border:none;
}
.editor img
{
	max-width:100%;
	object-fit:cover;
}
</style>
<nav class="navbar">
    <div class="navbar-left">
      <img src="{{ asset('assets/img/logo.png') }}" alt="CaremaL Logo" class="logo">
        {{-- <span class="brand-name">CaremaL</span> --}}
    </div>
    <div class="navbar-right">
      <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="profil" class="profil">
        <span class="user-greeting">Hi, Prabowo Sub</span>
        <a href="#" class="language-switch">EN</a>
    </div>
</nav>
<header id="header" class="header d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="#artikel"><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
            <li><a href="/admin/daftarkontak"><i class="bi bi-telephone"></i><span>Kontak Darurat</span></a></li>
            <li><a href="/admin/daftardoktor" class="active"><i class="fa fa-user-md"></i><span>Doktor Hewan</span></a></li>
            <li><a href="/admin/datapuskeswans"><i class="bi bi-hospital"></i><span>Puskeswan</span></a></li>
        </ul>
    </nav>
</header>


<div class="container">
  <div class="col">
    <div data-mdb-input-init class="form-outline">
      <input type="text" id="form6Example1" class="form-control" />
      <label class="form-label" for="form6Example1">Buat Judul</label>
    </div>
  </div>
	<div class="text-right my-3">
		<button class="btn btn-info" id="getHTML" get-data="editor-1">Get HTML</button>
	</div>
  <div class="row align-items-center justify-content-center">
    <div class="col-md-12 col-lg-8">
			<div class="editor" id="editor-1">
      <div class="toolbar">
        <a href="#" data-command='undo' data-toggle="tooltip" data-placement="top" title="Undo"><i class='fa fa-undo'></i></a>
        <a href="#" data-command='redo' data-toggle="tooltip" data-placement="top" title="Redo"><i class='fa fa-redo '></i></a>
				<a href="#" data-command='removeFormat' data-toggle="tooltip" data-placement="top" title="Clear format"><i class='fa fa-times '></i></a>
        <div class="fore-wrapper"><i class='fa fa-font' data-toggle="tooltip" data-placement="top" title="text color" style='color:#C96;'></i>
          <div class="fore-palette">
          </div>
        </div>
        <div class="back-wrapper"><i class='fa fa-font'  data-toggle="tooltip" data-placement="top" title="Background color" style='background:#C96;'></i>
          <div class="back-palette">
          </div>
        </div>
        <a href="#" data-command='bold' data-toggle="tooltip" data-placement="top" title="Bold"><i class='fa fa-bold'></i></a>
        <a href="#" data-command='italic' data-toggle="tooltip" data-placement="top" title="Italic"><i class='fa fa-italic'></i></a>
        <a href="#" data-command='underline' data-toggle="tooltip" data-placement="top" title="Underline"><i class='fa fa-underline'></i></a>
        <a href="#" data-command='strikeThrough' data-toggle="tooltip" data-placement="top" title="Stike through"><i class='fa fa-strikethrough'></i></a>
        <a href="#" data-command='justifyLeft' data-toggle="tooltip" data-placement="top" title="Left align"><i class='fa fa-align-left'></i></a>
        <a href="#" data-command='justifyCenter'><i class='fa fa-align-center' data-toggle="tooltip" data-placement="top" title="Center align"></i></a>
        <a href="#" data-command='justifyRight' data-toggle="tooltip" data-placement="top" title="Right align"><i class='fa fa-align-right'></i></a>
        <a href="#" data-command='justifyFull' data-toggle="tooltip" data-placement="top" title="Justify"><i class='fa fa-align-justify'></i></a>
        <a href="#" data-command='indent' data-toggle="tooltip" data-placement="top" title="Indent"><i class='fa fa-indent'></i></a>
        <a href="#" data-command='outdent'  data-toggle="tooltip" data-placement="top" title="Outdent"><i class='fa fa-outdent'></i></a>
        <a href="#" data-command='insertUnorderedList'  data-toggle="tooltip" data-placement="top" title="Unordered list"><i class='fa fa-list-ul'></i></a>
        <a href="#" data-command='insertOrderedList' data-toggle="tooltip" data-placement="top" title="Ordered list"><i class='fa fa-list-ol'></i></a>
        <a href="#" data-command='h1' data-toggle="tooltip" data-placement="top" title="H1">H1</a>
        <a href="#" data-command='h2'  data-toggle="tooltip" data-placement="top" title="H2">H2</a>
        <a href="#" data-command='createlink' data-toggle="tooltip" data-placement="top" title="Inser link"><i class='fa fa-link'></i></a>
        <a href="#" data-command='unlink' data-toggle="tooltip" data-placement="top" title="Unlink"><i class='fa fa-unlink'></i></a>
        <a href="#" data-command='insertimage' data-toggle="tooltip" data-placement="top" title="Insert image"><i class='fa fa-image'></i></a>
        <a href="#" data-command='p' data-toggle="tooltip" data-placement="top" title="Paragraph">P</a>
        <a href="#" data-command='subscript' data-toggle="tooltip" data-placement="top" title="Subscript"><i class='fa fa-subscript'></i></a>
        <a href="#" data-command='superscript'  data-toggle="tooltip" data-placement="top" title="Superscript"><i class='fa fa-superscript'></i></a>
      </div>
      <div id='editor' class="editorAria" contenteditable>
        <h1>Rich Text Editor.</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
				<img src="https://images.pexels.com/photos/2067423/pexels-photo-2067423.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
      </div>
				</div>
    </div>
  </div>
</div>

<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
$(document).ready(function(){	
var colorPalette = ['000000', 'FF9966', '6699FF', '99FF66', 'CC0000', '00CC00', '0000CC', '333333', '0066FF', 'FFFFFF'],
forePalette = $('.fore-palette'),
backPalette = $('.back-palette'),
editor = $('.editor');

  for (var i = 0; i < colorPalette.length; i++) {
    forePalette.append('<a href="#" data-command="foreColor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
    backPalette.append('<a href="#" data-command="backColor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
  }
  $('.toolbar a').click(function(e) {
		e.preventDefault();
    var command = $(this).data('command');
    if (command == 'h1' || command == 'h2' || command == 'p') {
      document.execCommand('formatBlock', false, command);
    }
    if (command == 'foreColor' || command == 'backColor') {
			var color = $(this).data('value');
      document.execCommand($(this).data('command'), false, color);
			alert(color);
    }
		if (command == 'removeFormat') {
      document.execCommand('removeFormat', false, command);
    }
    if (command == 'createlink' || command == 'insertimage') {
      url = prompt('Enter the link here: ', 'http:\/\/');
			console.log(command + " " + url);
			document.execCommand($(this).data('command'), false, url);
      // document.execCommand($(this).data('command') && 'enableObjectResizing', false, url);
    } else document.execCommand($(this).data('command'), false, url);
  });
	$('.editorAria img').click(function(){
      document.execCommand('enableObjectResizing', false);
	});
	$("#getHTML").click(function(){
		var editorId = $(this).attr('get-data');
		var html = $("#" + editorId).find('.editorAria').html();
		alert(html);
	});
});
</script>
