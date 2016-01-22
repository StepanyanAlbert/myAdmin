
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>
        Php My Admin
    </title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="the_biggest">


    <div class="phpMyAdmin col-lg-2 col-xs-2 col-sm-2 col-md-2">
        <h2 align="center"><span class="php reload">php</span><span class="reload">MyAdmin</span></h2>

        <a href="#"><i class="fa fa-home icon_home fa-2x r"></i></a>

        <a href="http://localhost:8080/phpmyadmin/doc/html/index.html" target="_blank"> <i
                class="fa fa-question fa-2x icon_question r"></i></a>


        <a href="http://dev.mysql.com/doc/refman/5.6/en/" target="_blank"> <i
                class="fa fa-external-link fa-2x r icon_externallink"></i></a>

        <i class="fa fa-refresh fa-2x icon_refresh r"></i>

        <button class="upper_button btn bg-default.round ">Recent</button>
        <button class="upper_button btn bg-default ">Favourites</button>
        <br>

        <div id="create_new_base">
            <i class="fa fa-2x fa-bars icon_database_new">

            </i><a href="#"><span class="create_databse">New </span></a><br>
        </div>
        <br>

        <div class="second_php_myAdmin">
        </div>
    </div>


    <div class="col-lg-10 col-xs-10 col-sm-10 col-md-10 header_big_div">

<div class="pos_fixed">
        <div class="row" id="server">
            <p>
                <i class="fa fa-location-arrow drag_this_div"></i>
                <i class="fa fa-desktop  icon_desktop"></i>
                <span class="localhost">SERVER: 127.0.0.1 >> </span> &nbsp
                <i class="fa fa-database new_database_sign"></i>
                <span class="database_name_new">DATABASE: <span class="new_database_inserted"></span></span>
            </p>
        </div>
        <div class="row submenues">
            <div class="structure c">
                <i class="fa fa-shield  repeat_"></i><span class="top_menu_structure text">Database</span>
            </div>
            <div class="sql c">

                <i class="fa  fa-deviantart repeat_"></i><span class="text">SQL</span>
            </div>
            <div class="search c">

                <i class="fa  fa-search  repeat_"></i><span class="text">Status</span>
            </div>

            <div class="query c">

                <i class="fa fa-dashcube repeat_"></i><span class="text">USERS</span>
            </div>


            <div class="export c">

                <i class="	fa fa-connectdevelop  repeat_"></i><span class="text">Export</span>
            </div>

            <div class="import c">

                <i class="fa fa-stack-exchange  repeat_"></i><span class="text">Import</span>
            </div>

            <div class="operations c">

                <i class="fa fa-tree  repeat_"></i><span class="text">Settings</span>
            </div>

            <div class="privileges c">

                <i class="fa fa-hashtag  repeat_"></i><span class="text">Replication </span>
            </div>


            <div class="routines c">

                <i class="fa fa-shopping-basket  repeat_"></i><span class="text">Variables</span>
            </div>
            <div class="charset c">

                <i class="fa fa-file-audio-o  repeat_"></i><span class="text">Charset</span>
            </div>
            <div class="engine c">

                <i class="fa fa-fire  repeat_"></i><span class="text">Engine</span>
            </div>


            <div class="dropdown dropdown_more">
                <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">More
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <div class="background_hover">
                        <li><a href="#"><i class="fa same fa-reddit-alien"></i><span
                                    class="color_blu_text">Events</span></a></li>
                    </div>
                    <div class="background_hover">
                        <li><a href="#"><i class="fa same fa-building"></i><span class="color_blu_text">Triggers</span></a>
                        </li>
                    </div>
                    <div class="background_hover">
                        <li><a href="#"><i class="fa same fa-cogs"></i><span class="color_blu_text">Tracking</span></a>
                        </li>
                    </div>
                    <div class="background_hover">
                        <li><a href="#"><i class="fa same fa-hdd-o"></i><span
                                    class="color_blu_text"> Designer</span></a>
                        </li>
                    </div>
                </ul>
            </div>

        </div>
</div>
        <div class="row general_settings" style="margin-top: 85px"> <img src="../images/loading.gif" id="loading"  alt="image">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <div class="panel  panel-danger" >

                    <div class="panel_head gen panel-heading">
                        <h2 class="htwo_style">
                            General Settings
                        </h2>
                    </div>

                    <i class="fa fa-database server_connection">

                    </i><span class="server_connection">Server connection collation</span>
                    <a href="http://dev.mysql.com/doc/refman/5.6/en/charset-connection.html" target="_blank">
                        <i class="fa fa-question question_mark"></i></a> :

                    <select lang="en" name="collation_connection" id="select_collation_connection" class="autosubmit">
                        <option value="">Collation</option>
                        <option value=""></option>
                        <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                            <option value="armscii8_bin" title="Armenian, Binary">armscii8_bin</option>
                            <option value="armscii8_general_ci" title="Armenian, case-insensitive">armscii8_general_ci
                            </option>
                        </optgroup>
                        <optgroup label="euckr" title="EUC-KR Korean">
                            <option value="euckr_bin" title="Korean, Binary">euckr_bin</option>
                            <option value="euckr_korean_ci" title="Korean, case-insensitive">euckr_korean_ci</option>
                        </optgroup>
                        <optgroup label="gb2312" title="GB2312 Simplified Chinese">
                            <option value="gb2312_bin" title="Simplified Chinese, Binary">gb2312_bin</option>
                            <option value="gb2312_chinese_ci" title="Simplified Chinese, case-insensitive">
                                gb2312_chinese_ci
                            </option>
                        </optgroup>
                        <optgroup label="gbk" title="GBK Simplified Chinese">
                            <option value="gbk_bin" title="Simplified Chinese, Binary">gbk_bin</option>
                            <option value="gbk_chinese_ci" title="Simplified Chinese, case-insensitive">gbk_chinese_ci
                            </option>
                        </optgroup>
                        <optgroup label="geostd8" title="GEOSTD8 Georgian">
                            <option value="geostd8_bin" title="Georgian, Binary">geostd8_bin</option>
                            <option value="geostd8_general_ci" title="Georgian, case-insensitive">geostd8_general_ci
                            </option>
                        </optgroup>
                        <optgroup label="greek" title="ISO 8859-7 Greek">
                            <option value="greek_bin" title="Greek, Binary">greek_bin</option>
                            <option value="greek_general_ci" title="Greek, case-insensitive">greek_general_ci</option>
                        </optgroup>
                        <optgroup label="hebrew" title="ISO 8859-8 Hebrew">
                            <option value="hebrew_bin" title="Hebrew, Binary">hebrew_bin</option>
                            <option value="hebrew_general_ci" title="Hebrew, case-insensitive">hebrew_general_ci
                            </option>
                        </optgroup>
                        <optgroup label="latin2" title="ISO 8859-2 Central European">
                            <option value="latin2_czech_cs" title="Czech, case-sensitive">latin2_czech_cs</option>
                            <option value="latin2_general_ci" title="Central European (multilingual), case-insensitive">
                                latin2_general_ci
                            </option>
                            <option value="latin2_hungarian_ci" title="Hungarian, case-insensitive">latin2_hungarian_ci
                            </option>
                        </optgroup>
                        <optgroup label="ucs2" title="UCS-2 Unicode">
                            <option value="ucs2_bin" title="Unicode (multilingual), Binary">ucs2_bin</option>
                        </optgroup>
                        <optgroup label="ujis" title="EUC-JP Japanese">
                            <option value="ujis_bin" title="Japanese, Binary">ujis_bin</option>
                            <option value="ujis_japanese_ci" title="Japanese, case-insensitive">ujis_japanese_ci
                            </option>
                        </optgroup>
                        <optgroup label="utf16" title="UTF-16 Unicode">
                            <option value="utf16_bin" title="unknown, Binary">utf16_bin</option>
                            <option value="utf16_croatian_ci" title="Croatian, case-insensitive">utf16_croatian_ci
                            </option>
                        </optgroup>
                        <optgroup label="utf16le" title="UTF-16LE Unicode">
                            <option value="utf16le_bin" title="unknown, Binary">utf16le_bin</option>
                            <option value="utf16le_general_ci" title="unknown, case-insensitive">utf16le_general_ci
                            </option>
                        </optgroup>
                        <optgroup label="utf32" title="UTF-32 Unicode">
                            <option value="utf32_unicode_ci" title="Unicode (multilingual), case-insensitive">
                                utf32_unicode_ci
                            </option>
                            <option value="utf32_vietnamese_ci" title="unknown, case-insensitive">utf32_vietnamese_ci
                            </option>
                        </optgroup>
                        <optgroup label="utf8" title="UTF-8 Unicode">
                            <option value="utf8_romanian_ci" title="Romanian, case-insensitive">utf8_romanian_ci
                            </option>
                            <option value="utf8_sinhala_ci" title="unknown, case-insensitive">utf8_sinhala_ci</option>
                        </optgroup>
                        <optgroup label="utf8mb4" title="UTF-8 Unicode">
                            <option value="utf8mb4_unicode_ci" title="Unicode (multilingual), case-insensitive"
                                    selected="selected">utf8mb4_unicode_ci
                            </option>
                            <option value="utf8mb4_vietnamese_ci" title="unknown, case-insensitive">
                                utf8mb4_vietnamese_ci
                            </option>
                        </optgroup>
                    </select>

                </div>
                <div class="panel panel-danger">

                    <div class="panel_head panel-heading">
                        <h2 class="htwo_style">Appearance Settings</h2>

                    </div>

                    <div class="group">
                        <ul>
                            <li id="li_select_lang" class="no_bullets">
                                <i class="fa fa-male"></i>
                                <bdo lang="en" dir="ltr"><label for="sel-lang">Language<a
                                            href="http://localhost:8080/phpmyadmin/doc/html/faq.html#faq7-2"
                                            target="documentation">
                                            <i class="fa fa-question"></i>
                                        </a>: </label></bdo><select name="lang" class="autosubmit" lang="en" dir="ltr"
                                                                    id="sel-lang">
                                    <option value="az">Az&#601;rbaycanca - Azerbaijani</option>
                                    <option value="bg">&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; -
                                        Bulgarian
                                    </option>
                                    <option value="bn">বাংলা - Bangla</option>
                                    <option value="ca">Catal&agrave; - Catalan</option>
                                    <option value="cs">Čeština - Czech</option>
                                    <option value="da">Dansk - Danish</option>
                                    <option value="de">Deutsch - German</option>
                                    <option value="el">&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940; - Greek
                                    </option>
                                    <option value="en" selected="selected">English</option>
                                    <option value="en_GB">English (United Kingdom)</option>
                                    <option value="es">Espa&ntilde;ol - Spanish</option>
                                    <option value="et">Eesti - Estonian</option>
                                    <option value="fi">Suomi - Finnish</option>
                                    <option value="fr">Fran&ccedil;ais - French</option>
                                    <option value="gl">Galego - Galician</option>
                                    <option value="hi">&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; - Hindi</option>
                                    <option value="hu">Magyar - Hungarian</option>
                                    <option value="hy">Հայերէն - Armenian</option>
                                    <option value="ia">Interlingua - Interlingua</option>
                                    <option value="id">Bahasa Indonesia - Indonesian</option>
                                    <option value="it">Italiano - Italian</option>
                                    <option value="ja">&#26085;&#26412;&#35486; - Japanese</option>
                                    <option value="ko">&#54620;&#44397;&#50612; - Korean</option>
                                    <option value="lt">Lietuvi&#371; - Lithuanian</option>
                                    <option value="nb">Norsk - Norwegian</option>
                                    <option value="nl">Nederlands - Dutch</option>
                                    <option value="pl">Polski - Polish</option>
                                    <option value="pt">Portugu&ecirc;s - Portuguese</option>
                                    <option value="pt_BR">Portugu&ecirc;s - Brazilian portuguese</option>
                                    <option value="ro">Rom&acirc;n&#259; - Romanian</option>
                                    <option value="ru">&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; - Russian
                                    </option>
                                    <option value="si">&#3523;&#3538;&#3458;&#3524;&#3517; - Sinhala</option>
                                    <option value="sk">Sloven&#269;ina - Slovak</option>
                                    <option value="sl">Sloven&scaron;&#269;ina - Slovenian</option>
                                    <option value="sq">Shqip - Albanian</option>
                                    <option value="sr@latin">Srpski - Serbian latin</option>
                                    <option value="sv">Svenska - Swedish</option>
                                    <option value="tr">T&uuml;rk&ccedil;e - Turkish</option>
                                    <option value="uk">&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072;
                                        - Ukrainian
                                    </option>
                                    <option value="zh_CN">&#20013;&#25991; - Chinese simplified</option>
                                    <option value="zh_TW">&#20013;&#25991; - Chinese traditional</option>
                                </select></form>
                            </li>
                            <li id="theme" class="no_bullets">
                                <i class="fa fa-paint-brush"></i>
                                <a href="./themes.php" target="themes" class="themeselect">Theme:</a>
                                <select name="set_theme" lang="en" dir="ltr" class="autosubmit">
                                    <option value="original">Original</option>
                                    <option value="pmahomme" selected="selected">pmahomme</option>
                                </select></form>
                            </li>
                            <li id="li_select_fontsize">
                                <form name="form_fontsize_selection" id="form_fontsize_selection" method="get"
                                      action="index.php" class="disableAjax">
                                    <input type="hidden" name="token" value="1117fd3f2b5aa9e04e21d6b90b230899"/>
                                    <label for="select_fontsize">Font size:</label>
                                    <select name="set_fontsize" id="select_fontsize" class="autosubmit">
                                        <option value="50%">50%</option>
                                        <option value="60%">60%</option>
                                        <option value="70%">70%</option>
                                        <option value="80%">80%</option>
                                        <option value="90%">90%</option>
                                        <option value="95%">95%</option>
                                        <option value="96%">96%</option>
                                        <option value="97%">97%</option>
                                        <option value="98%">98%</option>
                                        <option value="99%">99%</option>
                                        <option value="100%" selected="selected">100%</option>
                                        <option value="101%">101%</option>
                                        <option value="102%">102%</option>
                                        <option value="103%">103%</option>
                                        <option value="104%">104%</option>
                                        <option value="105%">105%</option>
                                        <option value="110%">110%</option>
                                        <option value="120%">120%</option>
                                        <option value="130%">130%</option>
                                        <option value="140%">140%</option>
                                        <option value="150%">150%</option>
                                    </select>
                                </form>
                            </li>
                        </ul>
                        <ul>

                            <li id="li_user_preferences" class="no_bullets">
                                <i class="fa fa-modx"></i>
                                <a href="prefs_manage.php?token=1117fd3f2b5aa9e04e21d6b90b230899">
                                    More settings</a>

                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="panel panel-danger">

                    <div class="panel_head panel-heading">
                        <h2 class="htwo_style">Database server</h2>

                    </div>
                    <div class="back group">
                        <ul>
                            <li class="m" id=" li_server_info">Server: 127.0.0.1 via TCP/IP</li>
                            <li class="m" id=" li_server_type">Server type: MySQL</li>
                            <li class="m" id=" li_server_version">Server version: 5.6.26 - MySQL Community Server
                                (GPL)
                            </li>
                            <li class="m" id=" li_mysql_proto">Protocol version: 10</li>
                            <li class="m" id="li_user_info">User: root@localhost</li>
                            <li class="m" id=" li_select_mysql_charset"> Server charset: <span lang="en" dir="ltr">UTF-8 Unicode(utf8) </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-5  col-md-5 col-sm-5 col-xs-5">
                <div class="panel panel-danger">

                    <div class="panel_head panel-heading">
                        <h2 class="htwo_style">Web Server</h2>

                    </div>
                    <div class="group">


                        <ul>
                            <li class="m" id="li_web_server_software">Apache/2.4.16 (Win32) OpenSSL/1.0.1p PHP/5.6.12
                            </li>
                            <li class="m" id="li_mysql_client_version">Database client version: libmysql - mysqlnd
                                5.0.11-dev - 20120503 -
                                $Id: 3c688b6bbc30d36af3ac34fdd4b7b5b787fe5555 $
                            </li>
                            <li class="m" id="li_used_php_extension">PHP extension: mysqli
                                <a href="http://php.net/manual/en/book.mysqli.php" target="documentation" <i
                                    class="fa fa-question"></a></i></li>
                            <li class="m" id="li_used_php_version">PHP version: 5.6.12</li>
                        </ul>
                    </div>

                </div>


            </div>

            <div class="col-xs-7 col-md-7 col-lg-7">

                <!--  empty div to make equal-->
            </div>

            <div class="col-xs-5 col-md-5 col-lg-5">
                <div class="panel panel-danger">

                    <div class="panel_head panel-heading">
                        <h2 class="htwo_style">phpMyAdmin</h2>

                    </div>
                    <div class="group">

                        <ul>
                            <li id="li_pma_version" class="m jsversioncheck">Version information: <span
                                    class="version">4.4.14</span></li>
                            <li class="m" id="li_pma_docs"><a href="./doc/html/index.html"
                                                              target="_blank">Documentation</a>
                            </li>
                            <li class="m" id="li_pma_wiki"><a href="./url.php?url=http%3A%2F%2Fwiki.phpmyadmin.net%2F"
                                                              target="_blank">Wiki</a>
                            </li>
                            <li class="m" id="li_pma_homepage"><a
                                    href="./url.php?url=http%3A%2F%2Fwww.phpMyAdmin.net%2F" target="_blank">Official
                                    Homepage</a>
                            </li>
                            <li class="m" id="li_pma_contribute"><a
                                    href="./url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2Fcontribute%2F"
                                    target="_blank">Contribute</a>
                            </li>
                            <li class="m" id="li_pma_support"><a
                                    href="./url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2Fsupport%2F"
                                    target="_blank">Get support</a>
                            </li>
                            <li class="m" id="li_pma_changes"><a
                                    href="changelog.php?token=e5d579ff2b12c002e80a9021073bfda1"
                                    target="_blank">List of changes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=" col-lg-12 col-xs-12 col-md-12 col-sm-12">
                <div class="row">
                    <p class="alert_box">A newer version of phpMyAdmin is available and you should consider upgrading.
                        The newest version is 4.5.3.1, released on 2015-12-2.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script src="script.js">

</script>

</body>
</html>
