<!DOCTYPE HTML>
<html>

    <head>
        <title>BokBok Log</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <!-- Page styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.css">
        <link rel="stylesheet" href="<?= base_url('public/css/'); ?>/styles.css">
        <style>
            #float_btn {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }

            .mdl-layout{
                background: url('http://www.getmdl.io/assets/demos/transparent.jpg') center / cover;
            }
            select {
                font-family: inherit;
                background-color: transparent;
                width: 300px;
                padding: 4px 0;
                font-size: 16px;
                color: rgba(0,0,0, 0.26);
                border: none;
                border-bottom: 1px solid rgba(0,0,0, 0.12);
            }
            /* Remove focus */
            select:focus {
                outline: none;
            }

            /* Hide label */
            .mdl-selectfield label {
                display: none;
            }

            /* Use custom arrow */
            .mdl-selectfield select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }

            .mdl-selectfield {
                font-family: 'Roboto','Helvetica','Arial',sans-serif;
                position: relative;
            }
            .mdl-selectfield:after {
                position: absolute;
                top: 0.75em;
                right: 0.5em;
                /* Styling the down arrow */
                width: 0;
                height: 0;
                padding: 0;
                content: '';
                border-left: .25em solid transparent;
                border-right: .25em solid transparent;
                border-top: 0.375em solid rgba(0,0,0, 0.12);
                pointer-events: none;
            }

        </style>

    </head>

    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
                <div class="mdl-layout__header-row">
                    <span class="android-title mdl-layout-title">
                      <!--<img class="android-logo-image" src="images/android-logo.png">-->
                        <a href="<?= site_url('blog') ?>">BokBok Log</a>
                    </span>
                    <!-- Add spacer, to align navigation to the right in desktop -->
                    <div class="android-header-spacer mdl-layout-spacer"></div>
                    <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                            <i class="material-icons">search</i>
                        </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" id="search-field" />
                        </div>
                    </div>
                    <!-- Navigation -->
                    <div class="android-navigation-container">
                        <nav class="android-navigation mdl-navigation">
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= site_url('blog') ?>">Home</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= site_url('users/register') ?>">Register</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= base_url() ?>upload/">Upload</a>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= site_url('pages/contact') ?>">Contact us</a>
                            <?php if ($this->session->userdata('user_id')) {
                                ?>
                                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= site_url('users/logout') ?>">(<?= $this->session->userdata['username'] ?>)Logout</a>
                                <?php
                            } else {
                                ?>
                                <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= site_url('users/login') ?>">Login</a>
                            <?php } ?>
                        </nav>
                    </div>
                    <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                        <li class="mdl-menu__item">5.0 Lollipop</li>
                        <li class="mdl-menu__item">4.4 KitKat</li>
                        <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
                        <li class="mdl-menu__item">Android History</li>
                    </ul>
                    <span class="android-mobile-title mdl-layout-title">
                        <img class="android-logo-image" src="images/android-logo.png">
                    </span>
                </div>
            </div>

            <div class="android-drawer mdl-layout__drawer">
                <span class="mdl-layout-title">
                  <!--<img class="android-logo-image" src="images/android-logo-white.png">-->
                    <a href="<?= base_url() ?>blog/">BokBok Log</a>
                </span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Phones</a>
                    <a class="mdl-navigation__link" href="">Tablets</a>
                    <a class="mdl-navigation__link" href="">Wear</a>
                    <a class="mdl-navigation__link" href="">TV</a>
                    <a class="mdl-navigation__link" href="">Auto</a>
                    <a class="mdl-navigation__link" href="">One</a>
                    <a class="mdl-navigation__link" href="">Play</a>
                    <div class="android-drawer-separator"></div>
                    <span class="mdl-navigation__link" href="">Versions</span>
                    <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
                    <a class="mdl-navigation__link" href="">KitKat 4.4</a>
                    <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
                    <a class="mdl-navigation__link" href="">Android history</a>
                    <div class="android-drawer-separator"></div>
                    <span class="mdl-navigation__link" href="">Resources</span>
                    <a class="mdl-navigation__link" href="">Official blog</a>
                    <a class="mdl-navigation__link" href="">Android on Google+</a>
                    <a class="mdl-navigation__link" href="">Android on Twitter</a>
                    <div class="android-drawer-separator"></div>
                    <span class="mdl-navigation__link" href="">For developers</span>
                    <a class="mdl-navigation__link" href="">App developer resources</a>
                    <a class="mdl-navigation__link" href="">Android Open Source Project</a>
                    <a class="mdl-navigation__link" href="">Android SDK</a>
                </nav>
            </div>


            <div class="android-content mdl-layout__content">
