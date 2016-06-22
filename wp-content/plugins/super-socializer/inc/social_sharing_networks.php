<?php
defined('ABSPATH') or die("Cheating........Uh!!");

function fetch_sharing_networks(){
	$sharingNetworks = array(
		'facebook_like' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%">%like_count_container%<div class="fb-like" data-href="%post_url%" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>',
		'facebook_recommend' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%">%like_count_container%<div class="fb-like" data-href="%post_url%" data-layout="button_count" data-action="recommend" data-show-faces="false" data-share="false"></div></li>',
		'twitter_tweet' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%" heateor-ss-data-href="%post_url%">%like_count_container%<a href="https://twitter.com/share" class="twitter-share-button" data-url="%post_url%" data-counturl="%post_url%" data-text="%decoded_post_title%" data-via="%twitter_username%" data-lang="%language%" >Tweet</a><script>!function(d,s,id) {var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if (!d.getElementById(id)) {js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");</script></li>',
		'google_plusone' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%">%like_count_container%<script type="text/javascript" src="https://apis.google.com/js/platform.js">{lang: "%language%"}</script><div class="g-plusone" data-size="medium" data-href="%post_url%" data-callback="heateorSsmiGpCallback"></div></li>',
		'google_plus_share' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%">%like_count_container%<script type="text/javascript" src="https://apis.google.com/js/platform.js">{lang: "%language%"}</script><div class="g-plus" data-action="share" data-annotation="bubble" data-href="%post_url%"></div></li>',
		'linkedin_share' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%">%like_count_container%<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: %language%</script><script type="IN/Share" data-url="%post_url%" data-counter="right"></script></li>',
		'pinterest_pin' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%">%like_count_container%<a style="text-decoration:none" data-pin-lang="%language%" href="//www.pinterest.com/pin/create/button/?url=%post_url%" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script></li>',
		'buffer_share' => '<li style="padding:%padding%px 0 !important" class="the_champ_%network%">%like_count_container%<a href="http://bufferapp.com/add" class="buffer-add-button" data-text="%post_title%" data-url="%post_url%" data-count="horizontal" data-via="%buffer_username%" ></a><script type="text/javascript" src="https://d389zggrogs7qo.cloudfront.net/js/button.js"></script></li>',
		'xing_share' => '<li style="padding:%padding%px 0 !important" class="the_champ_xing">%like_count_container%<div data-type="XING/Share" data-counter="right" data-url="%post_url%" data-lang="%language%"></div><script>(function (d, s) {var x = d.createElement(s), s = d.getElementsByTagName(s)[0]; x.src = "https://www.xing-share.com/js/external/share.js"; s.parentNode.insertBefore(x, s); })(document, "script");</script></li>',
		'yummly_share' => '<li style="padding:%padding%px 0 !important" class="the_champ_yummly">%like_count_container%<a href="//yummly.com" class="YUMMLY-YUM-BUTTON">Yum</a><script src="https://www.yummly.com/js/widget.js?general"></script></li>',
		'reddit_badge' => '<li style="padding:%padding%px 0 !important" class="the_champ_reddit">%like_count_container%<script type="text/javascript" src="//www.reddit.com/static/button/button1.js"></script></li>',
		'stumbleupon_badge' => '<li style="padding:%padding%px 0 !important" class="the_champ_stumbleupon">%like_count_container%<su:badge layout="1" location="%post_url%"></su:badge><script type="text/javascript">(function() {var li = document.createElement(\'script\' ); li.type = \'text/javascript\'; li.async = true;li.src = (\'https:\' == document.location.protocol ? \'https:\' : \'http:\' ) + \'//platform.stumbleupon.com/1/widgets.js\';var s = document.getElementsByTagName(\'script\' )[0]; s.parentNode.insertBefore(li, s);})();</script></li>',
		'facebook' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.facebook.com/sharer/sharer.php?u=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'twitter' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://twitter.com/intent/tweet?%via_twitter_username%text=%post_title%&url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'linkedin' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.linkedin.com/shareArticle?mini=true&url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'google_plus' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://plus.google.com/share?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'print' => '<li class="%li_class%"><i %style% alt="Print" Title="Print" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'window.print()\'><ss style="display:block" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'email' => '<li class="%li_class%"><i %style% alt="Email" Title="Email" class="theChampSharing theChamp%ucfirst_network%Background" onclick="window.location.href = \'mailto:?subject=\' + decodeURIComponent(\'%post_title%\' ) + \'&body=\' + decodeURIComponent(\'%post_url%\' )"><ss style="display:block" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'yahoo' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://bookmarks.yahoo.com/toolbar/SaveBM/?u=%post_url%&t=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'reddit' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://reddit.com/submit?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'digg' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://digg.com/submit?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'delicious' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://del.icio.us/post?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'stumbleupon' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.stumbleupon.com/submit?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'float_it' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.designfloat.com/submit.php?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'tumblr' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.tumblr.com/share?v=3&u=%post_url%&t=%post_title%&s=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'vkontakte' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://vkontakte.ru/share.php?&url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'pinterest' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick="javascript:void((function() {var e=document.createElement(\'script\' );e.setAttribute(\'type\',\'text/javascript\' );e.setAttribute(\'charset\',\'UTF-8\' );e.setAttribute(\'src\',\'//assets.pinterest.com/js/pinmarklet.js?r=\'+Math.random()*99999999);document.body.appendChild(e)})());"><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'xing' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.xing-share.com/social_plugins/share?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'whatsapp' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background"><a href="whatsapp://send?text=%post_title% %post_url%"><ss style="display:block" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></a></i></li>',
		'yummly' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.yummly.com/urb/verify?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'buffer' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://buffer.com/add?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'AIM' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://lifestream.aol.com/?url=%%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Amazon_Wish_List' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.amazon.com/wishlist/add?u=%post_url%&t=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'AOL_Mail' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://webmail.aol.com/25045/aol/en-us/Mail/compose-message.aspx?subject=%post_title%&body=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'App.net' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://account.app.net/login/")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Baidu' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://cang.baidu.com/do/add?it=%post_title%&iu=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Balatarin' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.balatarin.com/login")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'BibSonomy' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.bibsonomy.org/login")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Bitty_Browser' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.bitty.com/manual/?contenttype=&contentvalue=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Blinklist' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://blinklist.com/blink?t=%post_title%&d=&u=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Blogger_Post' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.blogger.com/blog_this.pyra?t&u=%post_url%&l&n=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'BlogMarks' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://blogmarks.net/my/new.php?mini=1&simple=1&title=%post_title%&url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Bookmarks.fr' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.bookmarks.fr/Connexion/?action=add&address=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Box.net' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.box.com/api/1.0/import?url=%post_url%&name=%post_title%&description=&import_as=link")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'BuddyMarks' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://buddymarks.com/login.php?bookmark_title=%post_title%&bookmark_url=%post_url%&bookmark_desc=&bookmark_tags=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Care2_News' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.care2.com/passport/login.html?promoID=10&pg=http://www.care2.com/news/compose?sharehint=news&share[share_type]news&bookmarklet=Y&share[title]=%post_title%&share[link_url]=%post_url%&share[content]=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'CiteULike' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.citeulike.org/posturl?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Diary.Ru' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.diary.ru/?newpost&title=%post_title%&text=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'diHITT' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.dihitt.com/submit?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Diigo' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.diigo.com/post?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'DZone' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.dzone.com/links/add.html?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Evernote' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.evernote.com/clip.action?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Fark' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.fark.com/submit?new_url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Flipboard' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://share.flipboard.com/flipit/load?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Folkd' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.folkd.com/page/social-bookmarking.html?addurl=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Google_Bookmarks' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.google.com/bookmarks/mark?op=edit&bkmk=%post_url%&title=%post_title%&annotation=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Google_Gmail' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://mail.google.com/mail/?ui=2&view=cm&fs=1&tf=1&su=%post_title%&body=Link:%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Hacker_News' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://news.ycombinator.com/submitlink?u=%post_url%&t=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Hatena' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://b.hatena.ne.jp/bookmarklet?url=%post_url%&btitle=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Instapaper' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.instapaper.com/edit?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Jamespot' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//my.jamespot.com/")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Kakao' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://story.kakao.com/share?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Kindle_It' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//fivefilters.org/kindle-it/send.php?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Known' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://withknown.com/share/?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Line' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background"><a href="line://msg/text/%post_title%! %post_url%"><ss style="display:block" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></a></i></li>',
		'LiveJournal' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.livejournal.com/update.bml?subject=%post_title%&event=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Mail.Ru' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://connect.mail.ru/share?share_url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Mendeley' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.mendeley.com/sign-in/")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Meneame' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.meneame.net/submit.php?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Mixi' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://mixi.jp/share.pl?mode=login&u=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'MySpace' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://myspace.com/")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Netlog' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.netlog.com/go/manage/links/view=save&origin=external&url=%post_url%&title=%post_title%&description=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Netvouz' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.netvouz.com/action/submitBookmark?url=%post_url%&title=%post_title%&popup=no&description=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'NewsVine' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.newsvine.com/_tools/seed?popoff=0&u=%post_url%&h=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'NUjij' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.nujij.nl/nieuw-bericht.2051051.lynkx?title=%post_title%&url=%post_url%&bericht=&topic=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Odnoklassniki' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://connect.ok.ru/dk?cmd=WidgetSharePreview&st.cmd=WidgetSharePreview&st.shareUrl=%post_url%&st.client_id=-1")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Oknotizie' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//oknotizie.virgilio.it/post?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Outlook.com' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://mail.live.com/default.aspx?rru=compose?subject=%post_title%&body=%post_url%&lc=1033&id=64855&mkt=en-us&cbcxt=mai")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Pinboard' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://pinboard.in/popup_login/?url=%post_url%&title=%post_title%&later=&description=&next=same")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Plurk' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.plurk.com/m?content=%post_url%&qualifier=shares")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Pocket' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://readitlaterlist.com/save?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'PrintFriendly' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.printfriendly.com/print?url=%post_url%&partner=a2a")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Protopage_Bookmarks' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.protopage.com/add-button-site?url=%post_url%&label=&type=page")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Pusha' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.pusha.se/posta?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Qzone' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Rediff MyPage' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//share.rediff.com/bookmark/addbookmark?bookmarkurl=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Renren' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.connect.renren.com/share/sharer?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Segnalo' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://segnalo.virgilio.it/post.html.php?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Sina Weibo' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//service.weibo.com/share/share.php?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'SiteJot' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("http://www.sitejot.com/loginform.php?iSiteAdd=&iSiteDes=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Slashdot' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//slashdot.org/submission?url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Stumpedia' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.stumpedia.com/submit?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Svejo' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://svejo.net/story/submit_by_url?url=%post_url%&title=%post_title%&summary=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Symbaloo_Feeds' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.symbaloo.com/")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Tuenti' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.tuenti.com/share?p=b5dd6602&url=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Twiddla' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.twiddla.com/New.aspx?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'TypePad_Post' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("https://www.typepad.com/services/quickpost/post?v=2&qp_show=ac&qp_title=%post_title%&qp_href=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Viadeo' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.viadeo.com/shareit/share/?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Wanelo' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//wanelo.com/p/post?bookmarklet=&images%5B%5D=&url=%post_url%&title=%post_title%&price=&shop=")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Webnews' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.webnews.de/login")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'WordPress' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.addtoany.com/ext/wordpress/press_this?linkurl=%post_url%&linkname=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Wykop' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//www.wykop.pl/dodaj?url=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Yahoo_Mail' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//compose.mail.yahoo.com/?Subject=%post_title%&body=Link:%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Yahoo_Messenger' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("ymsgr:sendim?m=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'Yoolink' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//yoolink.to/addorshare?url_value=%post_url%&title=%post_title%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>',
		'YouMob' => '<li class="%li_class%"><i %style% alt="%title%" Title="%title%" class="theChampSharing theChamp%ucfirst_network%Background" onclick=\'theChampPopup("//youmob.com/startmob.aspx?cookietest=true&mob=%post_url%")\'><ss style="%inner_style%" class="theChampSharingSvg theChamp%ucfirst_network%Svg"></ss></i></li>'
	);
	return $sharingNetworks;
}