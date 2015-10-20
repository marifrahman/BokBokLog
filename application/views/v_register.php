<div class="android-more-section">
  <div class="android-section-title mdl-typography--display-1-color-contrast">Register as a new user</div>
  
  <div class="android-card-container mdl-grid">
	
	
	
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
	  <div class="mdl-card__media">
		<!--<img src="images/more-from-1.png">-->
	  </div>
	  <div class="mdl-card__title">
		 <h4 class="mdl-card__title-text"><a >Register as a new user</a></h4>
	  </div>
	  <div class="mdl-card__supporting-text">
		<div class="mdl-typography--font-light mdl-typography--subhead">
		<?php if($error){echo '<div style="color:red;">'.$error.'</div>'; }?>
        
        <form action="<?=  base_url()?>users/register/" method="post">
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
                
                
              
                
                <p><span>User Type</span>
                    <select class="form-control" name="user_type">
                    <option value="admin">Admin</option>
                    <option value="author">Author</option>
                    <option value="user" selected>User</option>
                </select>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Register" /></p>
            
        </form>
		
		
		</div>
	  </div>
	  <div class="mdl-card__actions">
		 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" >
		   Read More
		   <i class="material-icons">chevron_right</i>
		 </a>
	  </div>
	 
	</div>

	
	
	
  </div>
</div>














<