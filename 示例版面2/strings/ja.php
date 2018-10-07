<?php
const S_HOME = 'ホーム';
const S_ADMIN = '管理用';
const S_RETURN = '掲示板に戻る';
const S_POSTING = 'レス送信モード';
const S_NOTAGS = 'タグがつかえます';
const S_NAME = 'おなまえ';
const S_EMAIL = 'E-mail';
const S_SUBJECT = '題　　名';
const S_SUBMIT = '送信する';
const S_COMMENT = 'コメント';
const S_OEKAKI = 'お絵描き';
const S_UPLOADFILE = '添付File';
const S_NOFILE = '画像なし';
const S_DELPASS = '削除キー';
const S_DELEXPL = '(記事の削除用。英数字で8文字以内)';
const S_RULES = '<LI>添付可能ファイル：GIF, JPG, PNG ブラウザによっては正常に添付できないことがあります。
<LI>最大投稿データ量は '.MAX_KB.' KB までです。sage機能付き。
<LI>画像は横 '.MAX_W.'ピクセル、縦 '.MAX_H.'ピクセルを超えると縮小表示されます。';
const S_REPORTERR = '該当記事がみつかりません';
const S_THUMB = 'サムネイルを表示しています.クリックすると元のサイズを表示します.';
const S_PICNAME = '画像タイトル：';
const S_REPLY = '返信';
const S_OLD = 'このスレは古いので、もうすぐ消えます。';
const S_RESU = 'レス';
const S_ABBR = '件省略。全て読むには返信ボタンを押してください。';
const S_REPDEL = '【記事削除】';
const S_DELPICONLY = '画像だけ消す';
const S_DELKEY = '削除キー';
const S_DELETE = '削除';
const S_PREV = '前のページ';
const S_NEXT = '次のページ';
const S_FOOT = '- <a href="http://php.s3.to" target="_blank">GazouBBS</a> + <a href="http://www.2chan.net/" target="_blank">ふたば</a> + <a href="http://www.1chan.net/futallaby/" target="_blank">futallaby</a> + <a href="https://github.com/knarka/fikaba" target="_blank">fikaba</a> -'; //Prints footer (leave these credits)
const S_UPFAIL = 'アップロードに失敗しました<br />サーバがサポートしていない可能性があります';
const S_NOREC = 'アップロードに失敗しました<br />画像ファイル以外は受け付けません';
const S_SAMEPIC = 'アップロードに失敗しました<br />同じ画像がありました';
const S_TOOBIG = 'アップロードに失敗しました<br />サイズが大きすぎます<br />'.MAX_KB.'Kバイトまで';
const S_TOOBIGORNONE ='アップロードに失敗しました<br />画像サイズが大きすぎるか、<br />または画像がありません。';
const S_UPGOOD = '画像 $upfile_name のアップロードが成功しました<br /><br />';
const S_STRREF = '拒絶されました(str)';
const S_UNJUST = '不正な投稿をしないで下さい(post)';
const S_NOPIC = '画像がありません';
const S_NOTEXT = '何か書いて下さい';
const S_MANAGEMENT = '削除';
const S_DELETION = '削除';
const S_TOOLONG = '本文が長すぎますっ！';
const S_UNUSUAL = '異常です';
const S_BADHOST = '拒絶されました(host)';
const S_PROXY80 = 'ＥＲＲＯＲ！　公開ＰＲＯＸＹ規制中！！(80)';
const S_PROXY8080 = 'ＥＲＲＯＲ！　公開ＰＲＯＸＹ規制中！！(8080)';
const S_SUN = '日';
const S_MON = '月';
const S_TUE = '火';
const S_WED = '水';
const S_THU = '木';
const S_FRI = '金';
const S_SAT = '土';
const S_ANONAME = '名無し';
const S_ANOTEXT = '本文なし';
const S_ANOTITLE = '無題';
const S_RENZOKU = '連続投稿はもうしばらく時間を置いてからお願い致します';
const S_RENZOKU2 = '画像連続投稿はもうしばらく時間を置いてからお願い致します';
const S_RENZOKU3 = '連続投稿はもうしばらく時間を置いてからお願い致します';
const S_DUPE = 'アップロードに失敗しました<br />同じ画像があります';
const S_NOTHREADERR = 'スレッドがありません';
const S_SCRCHANGE = '画面を切り替えます';
const S_BADDELPASS = '該当記事が見つからないかパスワードが間違っています';
const S_WRONGPASS = 'パスワードが違います';
const S_MANALOGGEDIN = 'ようこそ';
const S_RETURNS = '掲示板に戻る';
const S_LOGUPD = 'ログを更新する';
const S_MANAMODE = '管理モード';
const S_MANAREPDEL = '記事削除';
const S_MANABAN = '禁止のパネル';
const S_MANAPOST = '管理ポスト';
const S_MANASUB = ' 認証';
const S_DELLIST = '削除したい記事のチェックボックスにチェックを入れ、削除ボタンを押して下さい。';
const S_ITDELETES = '削除する';
const S_MDRESET = 'リセット';
const S_MDONLYPIC = '画像だけ消す';
const S_MDTABLE1 = '<th>削除</th><th>記事No</th><th>投稿日</th><th>題名</th>';
const S_MDTABLE2 = '<th>投稿者</th><th>IP</th><th>コメント</th><th>ホスト名</th><th>添付<br />(Bytes)</th><th>md5</th><th>レスと</th><th>タイムスタンプ</th><th>タイムスタンプ（ms）</th>';
const S_RESET = 'リセット';
const S_IMGSPACEUSAGE = '【 画像データ合計 : <b>$all</b> KB 】';
/* begin MySQL specific section */
const S_SQLCONF = '接続失敗';		//MySQL connection failure
const S_SQLDBSF = 'mysql_select_db失敗<br />';	//database select failure
const S_TCREATE = 'テーブルを作成します<br />\n';	//creating table
const S_TCREATEF = 'テーブル作成失敗<br />';		//table creation failed
const S_SQLFAIL = 'sql失敗<br />';		//SQL Failure
const S_CATALOG = 'カタログモード';
const S_CATALOGBUTTON = "カタログ";
const S_MANABANIP = 'IPかポストの番号';
const S_VERSION = 'のversionは';
include("strings/en.php");
