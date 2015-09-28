<h2>Register</h2>

<?php if ($user->hasError()): ?>
    <div class="alert alert-block">
        <h4 class="alert-heading">Validation error!</h4>
            <?php if (!empty($user->validation_errors['username']['length'])): ?>
                <div><em>Username</em> must be between
                    <?php eh($user->validation['username']['length'][1]) ?> and
                    <?php eh($user->validation['username']['length'][2]) ?> characters in length.
                </div>
            <? endif ?>
            <?php if (!empty($user->validation_errors['firstname']['length'])): ?>
                <div><em>Firstname</em> must be between
                    <?php eh($user->validation['firstname']['length'][1]) ?> and
                    <?php eh($user->validation['firstname']['length'][2]) ?> characters in length.
                </div>
            <? endif ?>
            <?php if (!empty($user->validation_errors['lastname']['length'])): ?>
                <div><em>Lastname</em> must be between
                    <?php eh($user->validation['lastname']['length'][1]) ?> and
                    <?php eh($user->validation['lastname']['length'][2]) ?> characters in length.
                </div>
            <? endif ?>
            <?php if (!empty($user->validation_errors['email']['length'])): ?>
                <div><em>Email Address</em> must be between
                    <?php eh($user->validation['email']['length'][1]) ?> and
                    <?php eh($user->validation['email']['length'][2]) ?> characters in length.
                </div>
            <? endif ?>
            <?php if (!empty($user->validation_errors['password']['length'])): ?>
                <div><em>Password</em> must be between
                    <?php eh($user->validation['password']['length'][1]) ?> and
                    <?php eh($user->validation['password']['length'][2]) ?> characters in length.
                </div>
            <? endif ?>
    </div>
<? endif ?> 

<form name="login" method="post" action="<?php eh(url('')) ?>">
    <div>
        <label>First Name</label>
            <input type="text" class="span2" name="firstname" placeholder="Frist Name" value="<?php eh(Param::get('firstname')) ?>">
        <label>Last Name</label> 
            <input type="text" class="span2" name="lastname" placeholder="Last Name" value="<?php eh(Param::get('lastname')) ?>">
        <label>Username</label> 
            <input type="text" class="span2" name="username" placeholder="Username" value="<?php eh(Param::get('username')) ?>">
        <label>Email Address</label> 
            <input type="text" class="span3" name="email" placeholder="email@something.something" value="<?php eh(Param::get('emailaddress')) ?>">
        <label>Password</label> 
            <input type="password" class="span2" name="password" placeholder="Password" value="<?php eh(Param::get('password')) ?>">
        <br/>
        <input type="hidden" name="page_next" value="register_end">
        <button type="submit" class="btn btn-primary"> Submit </button> 
    </div>
</form>