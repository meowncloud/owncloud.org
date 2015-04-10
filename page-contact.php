<?php get_template_part('templates/parts/title'); ?>
If you want to talk to ownCloud users, contributors and fans, join the <a href="/promote" target="_blank">community conversation</a> over social media, the forums and other places. If you are looking for answers to questions, see <a href="/faq" target="_blank">the ownCloud FAQ</a> and our <a href="/support" target="_blank">support page</a>.

For the latest news, subscribe to our <a href="https://owncloud.org/feed/">RSS feed</a>.</p>

<p>For reporting vulnerabilities, read <a href="https://owncloud.org/security">Security</a>.</p>

<h2>Active contributors on the <a href="../news">ownCloud blog roll</a>:</h2>

<?php
if(CONTRIBOOK) {

	require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php');

	$users=CONTRIBOOK_USER::getusers();
	echo('<table>');
	foreach($users as $user) {
		$data = CONTRIBOOK_USER::getuser($user);
		echo('<tr><td style="padding:5px;">');
		if(empty($data['picture_50'])) { $data['picture_50'] = 'blogger_50.png'; }

		echo('<span class="contribook_microbloguserpicture"><a href="/user/?user='.$user.'"><img src="'.CONTRIBOOK_PHOTO_URL.$data['picture_50'].'" border="0" /></a></span>');

		echo('</td><td style="padding:5px;">');

		echo('<a href="/user/?user='.$user.'">'.$data['name'].'</a><br />');
		echo($data['role']);

		echo('</td></tr>');
	}

	echo('</table>');

}
?>
Ping the community manager  on IRC (nick: jospoortvliet) or <a href="https://plus.google.com/117563705675081959469">G+</a>.
