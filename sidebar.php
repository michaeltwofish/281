<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<hr/>
<div class="secondary">

<?php $theme->display ( 'searchform' ); ?>

<div class="sb-module">
<ul class="sbmenu">
<li><a href="<?php Site::out_url( 'habari' ); ?>">Home</a></li>
<?php
// List Pages
foreach ( $pages as $page ) {
echo '<li><a href="' . $page->permalink . '" title="' . $page->title . '">' . $page->title . '</a></li>' . "\n"; }
?>
</ul></div>

<div class="sb-module">
<p>&nbsp;&nbsp;</p>
</div>

<div class="sb-module">
<h2>LATEST ENTRIES</h2>
            <ul>
                <?php
                    foreach ($theme->recent_posts as $post) {
                        echo '<li><a href="', $post->permalink, '">',
                        $post->title, '</a></li>';
                    }
 
                ?>
            </ul>
</ul>

</div>

<div class="sb-module"><h2>FEEDS</h2>
<ul>
<li><a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>">Blog Entries</a></li>
<li><a href="<?php URL::out( 'atom_feed_comments' ); ?>">Comments</a></li>
</ul></div>

<div class="sb-module">
<a href="<?php Site::out_url( 'habari' ); ?>/admin">Site Admin</a>
</div>

</div>