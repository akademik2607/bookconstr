<?php 
$connect = new PDO('mysql:host=localhost;dbname=bookconstr_db;charset=utf8', 'root', 'Hesaga0808!');
$prints = $connect->query('SELECT * FROM prints')->fetchall();

?>
<!DOCYPE html>
<html xml:lang="ru" lang="ru" class="bx-core bx-no-touch bx-no-retina bx-chrome">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="index, follow">
<meta name="keywords" content="фотоальбом, ручная работа, фото из instagram, конструктор фотоальбома">
<meta name="description" content="Мы предлагаем индивидуальные фотоальбомы ручной работы.">
<link href="./style/style1.css" type="text/css" rel="stylesheet">


      <title></title>
  </head>
<body>
	<header class="AD-header">
		<div class="center center-content">
			<a href="/" class="a-logo"></a>
			<div id="ADHeader">
				<div class="a-load-photo">
					<br>
					<a href="#UploadPhotoPopup" class="ad-bnt primary UploadPhotoPopupOpen">ЗАГРУЗИТЬ ФОТОГРАФИИ</a>
				</div>
				<div class="a-formats">
					ФОРМАТ<br>
					<div id="format-tab"><a href="javascript:$('#AD').AD('setSize', 560)" class="a-format active" data-size="560">15x15</a> <a href="javascript:$('#AD').AD('setSize', 561)" class="a-format" data-size="561">20x20</a> <a href="javascript:$('#AD').AD('setSize', 562)" class="a-format" data-size="562">25x25</a> <a href="javascript:$('#AD').AD('setSize', 3666613)" class="a-format" data-size="3666613">30x30</a> </div>
				</div>
				<!--<a href="#" class="a-refresh"></a>-->
				<div class="a-cost">
					СТОИМОСТЬ<br>
					<span>2390р</span>
				</div>
				<div class="a-buttons">
					<a href="#popup-save-with-name" class="butt primary open-popup-link">СОХРАНИТЬ</a><br>
					<a href="#" class="butt" id="add2cart">ЗАКАЗАТЬ</a>
					<div id="add2cartinfo">
						ПОСЛЕ ПЕРЕХОДА В СЛЕДУЮЩИЙ РАЗДЕЛ РЕДАКТИРОВАНИЕ АЛЬБОМА СТАНЕТ НЕВОЗМОЖНЫМ
					</div>
				</div>
				<div class="user-link">
									</div>
			</div>
			<div class="br"></div>
            <div style="display: none">
			<a href="javascript:$('#AD').AD('drawCover')">Обложка</a>
			<a href="javascript:$('#AD').AD('drawCover', {'debug':'ture'})">(отладка)</a>
			<a href="javascript:$('#AD').AD('drawCover', {'3d':'ture'})">(3д картинка)</a>
			<a href="javascript:$('#AD').AD('drawPage')">Отрисовать разворот</a>
			<a href="javascript:$('#AD').AD('drawPage', {'debug':'ture'})">(со вспомогательными элементами)</a>
			<a href="javascript:$('#AD').AD('getZipArhive')">архив</a>
            </div>
		</div>
	</header>
	<div id="AD" class="AD hasPrintWithPhoto hidePager" data-size="15">
		<div id="dragImage"></div>
		<div class="pager AS">
			<div class="center center-content">
				<div style="display: inline-block;vertical-align: top;">
					<div class="toTrimming" title="Область подрезки макета"></div>
					<div class="toCover">Обл.</div>
				</div>
				<div class="changePageCount" href="#AddPageInCenter"></div>
				<div class="arrow toLeft"></div>
				<div class="pager-slider-wrap">
					<div class="pager-slider" style="left: -455px;"><div class="page" data-id="0"><span class="page-r">1</span><span class="page-r">2</span></div><div class="page" data-id="1"><span class="page-r">3</span><span class="page-r">4</span></div><div class="page" data-id="2"><span class="page-r">5</span><span class="page-r">6</span></div><div class="page" data-id="3"><span class="page-r">7</span><span class="page-r">8</span></div><div class="page" data-id="4"><span class="page-r">9</span><span class="page-r">10</span></div><div class="page" data-id="5"><span class="page-r">11</span><span class="page-r">12</span></div><div class="page" data-id="6"><span class="page-r">13</span><span class="page-r">14</span></div><div class="page active" data-id="7"><span class="page-r">15</span><span class="page-r">16</span></div><div class="page" data-id="8"><span class="page-r">17</span><span class="page-r">18</span></div><div class="page" data-id="9"><span class="page-r">19</span><span class="page-r">20</span></div></div>
				</div>
				<div class="arrow toRight"></div>
				<div class="page-change">
					<div class="change pagePlus">+</div>
					<div class="change pageMinus">-</div>
				</div>
				<div class="ibw"></div>
			</div>
		</div>
		<div class="workarea cover-edit" style="opacity: 1;">
			<div class="workarea-arrow">
				<div class="arrow toLeft" style="width: 60px;"></div>
				<div class="arrow toRight" style="width: 60px;"></div>
			</div>
				<div class="workarea-zoom" style="width: 838.023px; height: 345.719px; font-size: 5.51253px;">
					<div class="cover-constructor">
							<div class="type-picker">
								<div class="selected-type">Classic</div>
								<ul class="type-dropdown"><li data-id="782322" class="active">Classic<br><small>(искусственная кожа)</small></li><li data-id="782323" class="">Alсantara <br><small>(материал алькантара)</small></li><li data-id="1768865" class="">MUSE<br><small>&nbsp;</small></li><li data-id="2635735" class="">Verona<br><small>&nbsp;</small></li></ul>
								
							</div>
							<div class="color-picker">
								<p class="title">Выберите цвет</p>
								<ul><li class="" data-id="579" style="background-color:#5eaac3"></li><li class="active" data-id="580" style="background-color:#7094b6"></li><li class="" data-id="581" style="background-color:#152e49"></li><li class="" data-id="582" style="background-color:#e1ca55"></li><li class="" data-id="583" style="background-color:#c8743c"></li><li class="" data-id="584" style="background-color:#b43831"></li><li class="" data-id="585" style="background-color:#662832"></li><li class="" data-id="586" style="background-color:#0f0f0f"></li><li class="" data-id="587" style="background-color:#ffffff"></li><li class="" data-id="588" style="background-color:#cdbda4"></li><li class="" data-id="589" style="background-color:#e8b5c5"></li><li class="" data-id="699161" style="background-color:#af4061"></li><li class="" data-id="699337" style="background-color:#7f4e36"></li><li class="" data-id="699338" style="background-color:#918a5d"></li><li class="" data-id="699340" style="background-color:#37253f"></li><li class="" data-id="1215372" style="background-color:#32512b"></li><li class="" data-id="1215418" style="background-color:#3a435a"></li><li class="" data-id="1430724" style="background-color:#d1f0ce"></li><li class="" data-id="1774916" style="background-color:#b79da9"></li><li class="" data-id="1775059" style="background-color:#414f42"></li></ul>
							</div>
							<div class="print-picker">
								<p class="title">Выберите принт</p>
								
								<div class="printPicker AS" data-dir="right" data-eop="4">
									<div class="printPicker-arrow">
										<div class="arrow toLeft"></div>
										<div class="arrow toRight"></div>
									</div>
									<div class="printPicker-wrap">

<div class="printPickerList cols-4" style="top: 0px;">

<?php foreach($prints as $print){ ?>
<div class="print " data-id="<?=$print['print_id']?>">
    <div class="img" style="background-image:url(images/<?=$print['print_path']?>)">
            <img src="images/prop-1-1.png" alt="">
        </div>
    </div>
<?php } ?>
</div>
									</div>
								</div>
							</div>
							<div class="decor-picker">
                                <button class="ad-bnt use-photo">С ФОТОГРАФИЕЙ</button>
                                <button class="ad-bnt use-print">С ПРИНТОМ</button>
                                <button class="ad-bnt use-text">Ваш текст</button>
                            </div>
							<div class="pager-show">
								<p>ОБЛОЖКА <img src="images/cover-button.png" class="toPager"></p><br>
								<div class="togglePager">Все страницы</div>
							</div>
							<div class="cover-view"><div data-id="580" class="cover-background" style="background-image:url('/upload/iblock/786/78690f757044f783d13febd4d7632069.jpg')"></div><div class="shadow-background"></div><div class="elements"><div class="print-background cm7" style="background-image:url('/upload/iblock/467/46737cfa36693ed25cbda6a93e1ec654.png' );width:46.666666666666664%;height:46.666666666666664%;left:26.666666666666668%;top:26.666666666666668%;"></div></div></div>
					</div>
					<div class="page-constructor">
						<div class="chooseMaket chooseMaketLeft AS" data-dir="left">
							<div class="chooseMaket-arrow">
								<div class="arrow toLeft"></div>
								<div class="arrow toRight"></div>
							</div>
							<div class="maketList-wrap">
								<div class="maketList" style="top: 0px;"><div class="maket active" data-id="3605981"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="100%" height="100%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605982"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="80%" height="80%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605983"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="10%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="10%" y="50.5%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605984"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605985"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="23.5%" width="39.5%" height="53%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="23.5%" width="39.5%" height="53%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605989"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><text x="35%" y="50%">text</text></svg></div><div class="maket" data-id="3605991"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="23.5%" y="10%" width="53%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="23.5%" y="50.5%" width="53%" height="39.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605994"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="16.84%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="16.84%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605995"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="16.84%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="16.84%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605996"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605997"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="0%" y="33.66%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="33.66%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="0%" y="67.33%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="67.33%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605998"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="0%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605999"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606000"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606001"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606002"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="23.5%" y="10%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="23.5%" y="50.5%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="10%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606003"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="23.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="23.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="50.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606009"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="37%" width="53%" height="53%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3666608"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="16.84%" width="49.5%" height="66.32%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="16.84%" width="49.5%" height="66.32%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3666609"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="16.84%" y="0%" width="66.32%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="16.84%" y="50.5%" width="66.32%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671524"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671525"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="100%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671526"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671527"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="100%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div></div>
							</div>
						</div>
						<div class="chooseMaket chooseMaketRight AS" data-dir="right">
							<div class="chooseMaket-arrow">
								<div class="arrow toLeft"></div>
								<div class="arrow toRight"></div>
							</div>
							<div class="maketList-wrap">
								<div class="maketList" style="top: 0px;"><div class="maket active" data-id="3605981"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="100%" height="100%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605982"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="80%" height="80%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605983"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="10%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="10%" y="50.5%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="39.5%" height="39.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605984"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605985"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="23.5%" width="39.5%" height="53%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="23.5%" width="39.5%" height="53%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605989"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><text x="35%" y="50%">text</text></svg></div><div class="maket" data-id="3605991"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="23.5%" y="10%" width="53%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="23.5%" y="50.5%" width="53%" height="39.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605994"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="16.84%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="16.84%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605995"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="16.84%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="16.84%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605996"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605997"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="0%" y="33.66%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="33.66%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="0%" y="67.33%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="67.33%" width="49.5%" height="32.66%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605998"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="0%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605999"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606000"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="50.5%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606001"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="33.66%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="67.33%" y="0%" width="32.66%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606002"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="23.5%" y="10%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="23.5%" y="50.5%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="10%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="26%" height="39.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606003"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="23.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="23.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="50.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="39.5%" height="26%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606008"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="10%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="37%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="10%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="37%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="64%" y="64%" width="26%" height="26%" style="fill:#cdcdcd;"></rect><rect x="10%" y="37%" width="53%" height="53%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3666608"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="16.84%" width="49.5%" height="66.32%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="16.84%" width="49.5%" height="66.32%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3666609"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="16.84%" y="0%" width="66.32%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="16.84%" y="50.5%" width="66.32%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671524"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671525"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="100%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671526"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.5%" width="100%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3671527"><svg width="100" height="100" style="width: 32.25px; height: 32.25px;"><rect x="0%" y="0%" width="49.5%" height="100%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="0%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="50.5%" width="49.5%" height="49.5%" style="fill:#cdcdcd;"></rect></svg></div></div>
							</div>
						</div>
						<div class="builderBlockBackground" style="background-image: url(&quot;/upload/iblock/786/78690f757044f783d13febd4d7632069.jpg&quot;);">
							
						</div>
						<div class="builderBlock">
							<div class="elements"><dvi class="bgwrap"><div class="bg bgleft" style="background-color:#ffffff"></div><div class="bg bgright" style="background-color:#ffffff"></div></dvi><div class="photo droppable-image empty zoomIn" style="width:50%;height:100%;left:0%;top:0%;"><img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" class="image r0 horizontal" style="left:NaN%;top:NaN%;" data-dh="0" data-dw="0.01500000000001478"><div class="changeImage"><div class="changeImageElem delete"></div><div class="changeImageElem rotate"></div><div class="changeImageElem zoomOut"></div><div class="changeImageElem zoomIn"></div><div class="changeImageElem move"></div></div></div><div class="photo droppable-image empty zoomIn" style="width:50%;height:100%;left:50%;top:0%;"><img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" class="image r0 horizontal" style="left:NaN%;top:NaN%;" data-dh="0" data-dw="0.01500000000001478"><div class="changeImage"><div class="changeImageElem delete"></div><div class="changeImageElem rotate"></div><div class="changeImageElem zoomOut"></div><div class="changeImageElem zoomIn"></div><div class="changeImageElem move"></div></div></div><div class="trimming" style="border: solid 1.417em rgba(255,0,0,.5);"></div></div>
						</div>
						<div class="bottomBar">
							<div class="attrib attribLeft">
								<div class="chooseText butt" data-type="left"><img src="images/texticon.png" alt=""></div>
								<div class="chooseColor butt" data-type="left"><img src="images/coloricon.png" alt=""></div>
								<div class="chooseBackground butt" data-type="left"><img src="images/backgroundicon.png" alt=""></div>
							</div>
							<div class="attrib attribRight">
								<div class="chooseColor butt" data-type="right"><img src="images/coloricon.png" alt=""></div>
								<div class="chooseText butt" data-type="right"><img src="images/texticon.png" alt=""></div>
							</div>
							<div class="chooseMaketFull AS" data-dir="both">
								<div class="chooseMaketFull-arrow">
									<div class="arrow toLeft"></div>
									<div class="arrow toRight"></div>
								</div>
								<div class="maketList-wrap">
									<div class="maketList" style="left: 0px;"><div class="maket" data-id="3605986"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5.06672%" y="10.1334%" width="29.5%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="35.25%" y="10.1334%" width="29.5%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="65.4333%" y="10.1334%" width="29.5%" height="79.7331%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605987"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="0%" width="32.8778%" height="100%" style="fill:#cdcdcd;"></rect><rect x="33.5611%" y="0%" width="32.8778%" height="100%" style="fill:#cdcdcd;"></rect><rect x="67.1222%" y="0%" width="32.8778%" height="100%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3605988"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="0%" width="32.8778%" height="100%" style="fill:#cdcdcd;"></rect><rect x="33.5611%" y="0%" width="66.4389%" height="100%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606010"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="0%" width="100%" height="100%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606011"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="0%" width="66.4389%" height="100%" style="fill:#cdcdcd;"></rect><rect x="71.5056%" y="10.1334%" width="23.4276%" height="79.7331%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606012"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5.06672%" y="10.1334%" width="23.4276%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="33.5611%" y="0%" width="66.4389%" height="100%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606013"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="0%" width="61.4389%" height="100%" style="fill:#cdcdcd;"></rect><rect x="66.5056%" y="10.1334%" width="28.4276%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="66.5056%" y="50.6258%" width="28.4276%" height="39.533%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606014"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5.06672%" y="10.1334%" width="28.4276%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="5.06672%" y="50.6258%" width="28.4276%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="38.5611%" y="0%" width="61.4389%" height="100%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606015"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5.06672%" y="10.1334%" width="60.4389%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="66.5056%" y="10.1334%" width="28.4276%" height="79.7331%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606016"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5.06672%" y="10.1334%" width="28.4276%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="34.4944%" y="10.1334%" width="60.4389%" height="79.7331%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606017"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5.06672%" y="10.1334%" width="60.4389%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="70.5724%" y="10.1334%" width="24.3609%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="70.5724%" y="50.6258%" width="11.9305%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="83.0028%" y="50.6258%" width="11.9305%" height="39.533%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606018"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5.06672%" y="10.1334%" width="29.5%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="35.25%" y="10.1334%" width="29.5%" height="79.7331%" style="fill:#cdcdcd;"></rect><rect x="72.7166%" y="25.1334%" width="20%" height="49.7331%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606019"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="10.1334%" width="29%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="0%" y="50.6258%" width="29%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="29.7805%" y="10.1334%" width="40.4389%" height="80.1%" style="fill:#cdcdcd;"></rect><rect x="71%" y="10.1334%" width="29%" height="39.533%" style="fill:#cdcdcd;"></rect><rect x="71%" y="50.6258%" width="29%" height="39.533%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606020"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5%" y="23%" width="17.5%" height="54%" style="fill:#cdcdcd;"></rect><rect x="23.2%" y="23%" width="17.5%" height="54%" style="fill:#cdcdcd;"></rect><rect x="41.4%" y="23%" width="17.5%" height="54%" style="fill:#cdcdcd;"></rect><rect x="59.6%" y="23%" width="17.5%" height="54%" style="fill:#cdcdcd;"></rect><rect x="77.8%" y="23%" width="17.2%" height="54%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606021"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="5%" y="10%" width="19.8%" height="53.3%" style="fill:#cdcdcd;"></rect><rect x="5%" y="65%" width="19.8%" height="25%" style="fill:#cdcdcd;"></rect><rect x="25.5%" y="10%" width="19.8%" height="25.3%" style="fill:#cdcdcd;"></rect><rect x="25.5%" y="37%" width="19.8%" height="53%" style="fill:#cdcdcd;"></rect><rect x="46%" y="10%" width="49%" height="80%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3606022"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="14%" width="24.55%" height="72%" style="fill:#cdcdcd;"></rect><rect x="25.25%" y="14%" width="24.25%" height="72%" style="fill:#cdcdcd;"></rect><rect x="50.5%" y="14%" width="24.55%" height="72%" style="fill:#cdcdcd;"></rect><rect x="75.75%" y="50.85%" width="24.25%" height="35.15%" style="fill:#cdcdcd;"></rect><rect x="75.75%" y="14%" width="24.25%" height="35.15%" style="fill:#cdcdcd;"></rect></svg></div><div class="maket" data-id="3666607"><svg width="200" height="100" style="width: 49.5625px; height: 23.0156px;"><rect x="0%" y="0%" width="66.4389%" height="100%" style="fill:#cdcdcd;"></rect><rect x="67.1222%" y="0%" width="32.8778%" height="100%" style="fill:#cdcdcd;"></rect></svg></div></div>
								</div>
							</div>
							<div class="backgroundColorPicked"><div class="color" data-color="#f7ebdb" style="background-color:#f7ebdb"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#b29d82" style="background-color:#b29d82"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#00736e" style="background-color:#00736e"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#b8cab4" style="background-color:#b8cab4"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#e4d4ba" style="background-color:#e4d4ba"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#f4c1bd" style="background-color:#f4c1bd"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#016191" style="background-color:#016191"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#e0e5f8" style="background-color:#e0e5f8"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#5b3a2b" style="background-color:#5b3a2b"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#5f605b" style="background-color:#5f605b"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#cdf5f5" style="background-color:#cdf5f5"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#000000" style="background-color:#000000"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color" data-color="#ffffff" style="background-color:#ffffff"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> </div>
							<div class="backgroundImagePicked"><div class="color active" data-color=""><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"></div> <div class="color " data-color="3655479"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>1</span></div> <div class="color " data-color="3655480"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>2</span></div> <div class="color " data-color="3655481"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>3</span></div> <div class="color " data-color="3655482"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>4</span></div> <div class="color " data-color="3655483"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>5</span></div> <div class="color " data-color="3655484"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>6</span></div> <div class="color " data-color="3655485"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>7</span></div> <div class="color " data-color="3655486"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>8</span></div> <div class="color " data-color="3655487"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>9</span></div> <div class="color " data-color="3655488"><img alt="" src="/bitrix/css/ald/img//prop-1-1.png"><span>10</span></div> </div>
						</div>
					</div>
				</div>
		</div>
		<div class="photos AS">
			<div class="arrow toLeft"></div>
			<div class="photo-slider-wrap">
				<div id="vue-photos-slider" class="photo-slider"></div>
			</div>
			<div class="arrow toRight"></div>
		</div>
		
		
			
		<div id="AddPageInCenter" class="white-popup mfp-hide box-window">
			<p class="box_title">ДОБАВЛЕНИЕ РАЗВОРОТА В АЛЬБОМ</p>

			<p class="box_subtitle">Выберите номер страницы, после которой будет вставлен новый разворот.</p>


			<p class="box_subtitle">
				<select id="InsertPageAfter" class="style1"><option value="1">2-я страница</option><option value="2">4-я страница</option><option value="3">6-я страница</option><option value="4">8-я страница</option><option value="5">10-я страница</option><option value="6">12-я страница</option><option value="7">14-я страница</option><option value="8">16-я страница</option><option value="9">18-я страница</option><option value="10">20-я страница</option></select>

				<br>
				<br>
				<a href="javascript:$('#AD').AD('closePopup')" class="a-butt">ОТМЕНИТЬ</a>
				<a href="javascript:$('#AD').AD('$insertNewPage')" class="a-butt primary">ДОБАВИТЬ</a>
			</p>

		</div>


		<div id="popup-save-with-name" class="mfp-hide white-popup box-window">
			<p class="box_title">Укажите название альбома для сохранения</p>

			
			<p class="box_subtitle">
				
				<input type="text" id="album_name" name="album_name" value="">
				
				<br>
				<br>
				<a href="javascript:$('#AD').AD('closePopup')" class="a-butt">ОТМЕНИТЬ</a>
				<a href="javascript:$('#AD').AD('saveData');$('#AD').AD('closePopup');" class="a-butt primary">СОХРАНИТЬ</a>
			</p>
		</div>
		
	</div>
	

	
	<div id="UploadPhotoPopup" class="white-popup mfp-hide">

		<div class="pg-main-wrap">
<form id="bx_img_upl_1_form" name="bx_img_upl_1_form" action="/constructor/?album=3686454" method="POST" enctype="multipart/form-data" class="bxiu-photo-form">
	<input type="hidden" name="save_upload" id="save_upload" value="Y">
	<input type="hidden" name="sessid" id="sessid" value="17eca06838cdb786bb8f0113e452ff14">
	<input type="hidden" name="SECTION_ID" value="0">
	<input type="hidden" name="photo_resize_size" value="">
	<input type="hidden" name="photo_public" value="">
<div class="bxu-thumbnails bxu-thumbnails-start bxu-main-block-reduced-size" id="bxuMainUploader2"> <!-- bxu-thumbnails-loading bxu-thumbnails-start-->
	<div class="bxu-top-block" style="display: none;"><div class="bxu-top-block-inner">
		<label class="pg-top-bar-text" for="photo_album_idbx_img_upl_1">Загрузить в альбом:</label>
		<select class="pg-select" name="photo_album_id" id="photo_album_idUploader2" onchange="this.nextSibling.style.display=(this.value=='new'?'':'none');">
			<option value="new" selected=""> - Создать новый -</option>
									</select><input id="new_album_nameUploader2" name="new_album_name" type="text" value="" placeholder="Новый альбом" class="bxu-top-block-inp"><span class="bxu-loading-block">
			<span class="bxu-loading-block-bar"><span class="bxu-loading-block-bar-inner" id="bxuUploadBarUploader2"></span></span>
			<span class="bxu-loading-block-text">Загружено <span id="bxuUploadedUploader2"></span> из <span id="bxuForUploadUploader2"></span></span>
			<span class="bxu-loading-block-cancel-btn" id="bxuCancelUploader2">Отменить</span>
		</span><div class="bxu-settings-block">
			<span class="bxu-settings-block-templates">
				<span class="bxu-templates-btn bxu-templates-btn-small bxu-templates-btn-active" id="bxuReducedUploader2" title="Упрощенный просмотр"></span><span id="bxuEnlargeUploader2" class="bxu-templates-btn bxu-templates-btn-big" title="Обычный просмотр"></span>
			</span>		</div>
	</div></div>
		<div class="bxu-main-block" id="bxuDropzoneUploader2" dropzone="copy f:*/*">
		<div class="bxu-start-block">
			<div class="bxu-start-block-spacer-div">
				<img class="bxu-start-block-spacer-img" src="/bitrix/css/ald/pu/images/pg-start-spacer.png">
				<input type="file" id="bxuUploaderStartFieldUploader2" multiple="multiple" name="bxu_files[]" accept="image/*">
			</div>
			<div class="bxu-start-block-cont">
				<img src="/bitrix/css/ald/pu/images/start-img.png" class="bxu-start-block-img" alt="">
				<div class="bxu-start-block-text">
					Загрузить фотографии					<span class="bxu-start-block-description bxu-dnd">Перетащить с помощью Drag’n’drop</span>
				</div>
			</div>
			<div class="bxu-start-block-btn">
				<a class="webform-button webform-button-blue"><span class="webform-button-text">Загрузить<input type="file" id="bxuUploaderStartUploader2" class="bxu-file-input" multiple="multiple" name="bxu_files[]" accept="image/*"></span>
				</a>
			</div>
		</div>
		<ul class="bxu-items" id="bxuItemsUploader2" style="height: auto;max-height:470px;"></ul>
		<div class="bxu-bottom-block">
			<div class="bxu-bottom-block-shadow-wrap">
				<div class="bxu-bottom-block-shadow"></div>
			</div>
			<div class="bxu-bottom-block-btns">
				<a class="webform-button webform-button-accept" id="bxuStartUploadingUploader2">
					<span class="webform-button-text">Загрузить</span>
				</a>
				<a class="webform-button webform-button-add">
					<span class="webform-button-text">Добавить еще						<input type="file" id="bxuUploaderUploader2" name="bxu_files[]" class="bxu-file-input" multiple="multiple" accept="image/*">
					</span>
				</a>
			</div>
			<div class="bxu-bottom-block-text">Выбрано изображений: <span id="bxuImagesCountUploader2">0</span></div>
		</div>
	</div>
</div>
	
</form>
</div>
<div class="bxiu-notice bxiu-notice-form">
	<p>Большие фотографии при загрузке будут автоматически уменьшены до размеров <i>6000 x 6000 px</i> пропорционально своим размерам.</p>
	<p>Каждая загружаемая фотография не может превышать максимального разрешенного настройками системы размера - <i>15 Мб</i>.</p>
</div>
	</div>

    <script src="scripts/script.js"></script>
</body></html>
