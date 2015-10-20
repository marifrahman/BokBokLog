<div class="android-more-section">
    <div class="android-card-container mdl-grid">



        <div class="mdl-cell mdl-cell--8-col mdl-cell--10-col-tablet mdl-cell--10-col-phone mdl-card mdl-shadow--3dp">
            <form action="<?= site_url('users/register') ?>" method="post">
                <div class="mdl-card__media">
                      <!--<img src="images/more-from-1.png">-->
                </div>
                <div class="mdl-card__title">
                    <h4 class="mdl-card__title-text"><a >Register as a new user</a></h4>
                </div>
                <div class="mdl-card__supporting-text">
                    <?php
                    if ($error) {
                        echo '<div style="color:red;">' . $error . '</div>';
                    }
                    ?>


                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="username"  id="username" />
                        <label class="mdl-textfield__label" for="username">Username</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" name="email"  id="email" />
                        <label class="mdl-textfield__label" for="email">Email</label>
                    </div>			
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" name="password"  id="password" />
                        <label class="mdl-textfield__label" for="password">Password</label>
                    </div>			
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" name="passconf"  id="passconf" />
                        <label class="mdl-textfield__label" for="passconf">Retype Password</label>
                    </div>			
                    <div class="mdl-selectfield">
                        <label>Standard Select</label>
                        <select class="browser-default" name="user_type">
                            <option value="" disabled selected>Choose User Type </option>
                            <option value="admin">Admin</option>
                            <option value="author">Author</option>
                            <option value="user" selected>User</option>
                        </select>
                    </div>
                </div>
                <p>
                <div class="mdl-card__actions ">
                    <input type="submit" class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" value="Register" />
                </div>
                </p>
            </form>     
        </div>




    </div>
</div>
