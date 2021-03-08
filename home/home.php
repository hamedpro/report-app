<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>report app v1!</title>
<link rel="icon" type="image/jpg" href="../common/logo-final-2.jpg">
<link rel="stylesheet" href="../common/common.css">
<link rel="stylesheet" href="home.css">
<script src="../common/jquery-3.5.1.js"></script>
<script src="home.js"></script>
</head>
<body>
<?php 
include_once("../templates/header.php");
include_once("../common/main.php");
$sql = "
	select * from reports where not (seen_status = 'true')
";
$results = mysqli_query($conn,$sql);
$unread_reports_count = mysqli_num_rows($results);
$sql = "
	select * from reports
";
$results = mysqli_query($conn,$sql);
$all_reports_count = mysqli_num_rows($results);
$sql = "
	select * from drivers
";
$results = mysqli_query($conn,$sql);
$all_drivers_count = mysqli_num_rows($results);
$sql = "
	select * from service_records
";
$results = mysqli_query($conn,$sql);
$all_services_count = mysqli_num_rows($results);

 ?>
<div class="background"></div>
<svg width="1em" height="1em" viewBox="0 0 16 16" class="title_icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
</svg>
<h1 class="title">از منوی مقابل گزینه مورد نظر خود را انتخاب کنید:</h1>
<svg width="1em" height="1em" viewBox="0 0 16 16" class="tips_icon"xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>
<div class="tips">
	<h1>شما <span><?php echo $unread_reports_count ?></span> گزارش رسیدگی نشده دارید.</h1>
	<h1>شما مجموعا <span><?php echo $all_reports_count ?></span> گزارش ثبت کرده اید.</h1>
	<h1>شما مجموعا <span><?php echo $all_drivers_count ?></span> راننده ثبت کرده اید.</h1>
	<h1>مجموع تعداد همه سرویس های ثبت شده: <span><?php echo $all_services_count ?></span></h1>
</div>
<div class="start_menu">
	<div class="container">
		<div class="container_1">
			<div class="item" id="button_1">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
				</svg>
				<div class="name">راننده جدید</div>
			</div>
			<div class="item" id="button_3">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-text" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
					<path fill-rule="evenodd" d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
				</svg>
				<div class="name">گزارش جدید</div>
			</div>
			<div class="item" id="button_6">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
				</svg>
				<div class="name">تنظیمات</div>
			</div>
		
		</div>
		<div class="container_2">
			<div class="item" id="button_2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
				</svg>
				<div class="name">ویرایش اطلاعات</div>
			</div>
			<div class="item" id="button_4">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
					<path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
				</svg>
				<div class="name">ثبت سرویس جدید</div>
			</div>
			<div class="item" id="button_5">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
				  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
				  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
				</svg>
				<div class="name">خروجی و آمار</div>
			</div>
		</div>
		<div class="container_3"></div>
		<div class="container_4"></div>
		<!-- <div class="container_5"></div> -->
	</div>
</div>
<div class="pop_up_background"></div>
<div class="pop_up">
	<div style="position:relative;height:100%;width:100%">
		<svg class="icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
		</svg>
		<h3 class="info">در صورت تمایل به مشاهده گزارشی که سیستم تولید میکند و شامل گزارش های رسیدگی نشده و ... است، تایید کنید.</h3>
		<button class="ok_button">مشاهده گزارش سیستم</button>
		<button class="cancel_button">لغو و بازگشت</button>
	</div>
</div>

</body>
</html>
