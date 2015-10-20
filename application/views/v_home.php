
<a name="top"></a>

<div class="android-more-section">
    <!--<div class="android-section-title mdl-typography--display-1-color-contrast">More from Android</div>-->

    <div class="android-card-container mdl-grid">


        <?php foreach ($posts as $post) {
            ?>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                <div class="mdl-card__media">
                      <!--<img src="images/more-from-1.png">-->
                </div>
                <div class="mdl-card__title">
                    <h4 class="mdl-card__title-text"><a href="<?= site_url('/') ?>blog/post/<?= $post['post_id'] ?>"><?= $post['post_title']; ?></a></h4>
                </div>
                <div class="mdl-card__supporting-text">
                    <span class="mdl-typography--font-light mdl-typography--subhead"><?= substr(strip_tags($post['post']), 0, 200) . '...'; ?></span>
                </div>
                <div class="mdl-card__actions">
                    <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?= site_url('/') ?>blog/post/<?= $post['post_id'] ?>">
                        Read More
                        <i class="material-icons">chevron_right</i>
                    </a>
                </div>
                <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user') {
                    ?>
                    <div class="mdl-card__menu">
                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" >
                            <i class="material-icons">Edit Post</i>
                        </button>
                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="<?= site_url('/') ?>blog/deletepost/<?= $post['post_id'] ?>">
                            <i class="material-icons">Delete post</i>
                        </button>
                    </div>
                <?php } ?>
            </div>


        <?php }
        ?>

        <span  id="float_btn" >
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Page: <?= $pages ?>
            </button>     
            <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user') {
                ?>
                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="<?= site_url('/') ?>blog/new_post/">
                    <i class="material-icons">add</i>
                </button>
            <?php }
            ?>
        </span>
    </div>
</div>










