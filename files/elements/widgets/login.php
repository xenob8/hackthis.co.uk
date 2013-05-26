                    <article class="widget">
                        <h1>Login</h1>
<?php
    if (isset($user->login_error)):
?>
                        <div class='msg msg-error'>
                            <i class='icon-error'></i>
                            <?=$user->login_error;?>
                        </div>
<?php
    endif;
?>
                        <form id="login_form" action="?login" method="POST">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password">
                            <a class="white" href="/?request">Forgot details?</a>
                            <input type="submit" value="Login" class="button">
                        </form>

                        <a class='stop-external' href='https://www.facebook.com/dialog/oauth?client_id=<?=$app->config('facebook')['public'];?>&redirect_uri=http://dev.hackthis/?facebook&scope=email'>Facebook</a>
                    </article>