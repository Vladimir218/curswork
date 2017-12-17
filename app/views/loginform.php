<div class="img-w3l-agile">
    <img src="../../app/assets/images/1.jpg" alt=" ">
</div>
        <ul class="resp-tabs-list">
            <li class="resp-tab-item"><span>Вход</span></li>
            <li class="resp-tab-item"><h2><span>Регистрация</span></h2></li>
        </ul>
        <div class="resp-tabs-container">
            <div class="tab-1 resp-tab-content">
                <div class="login-top">
                    <form action="/Login/" method="post">
                        <input type="text" name="login" class="name" placeholder="Login" required=""/>
                        <input type="password" name="password" class="password" placeholder="Password" required=""/>

                        <div class="login-bottom">
                            <ul>

                                <li>
                                    <a href="#">Запрос на восстановление пароля</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <input type="submit" value="Вход">
                    </form>
                </div>
            </div>
            <div class="tab-1 resp-tab-content">
                <div class="login-top sign-top">
                    <form action="/Login/" method="post">
                        <input type="text" name="login" class="name" placeholder="Login" required=""/>
                        <input type="text" name="surname" class="name" placeholder="Фамилия" required=""/>
                        <input type="text" name="name" class="name" placeholder="Имя" required=""/>
                        <input type="text" name="patronymic" class="name" placeholder="Отчество" required=""/>
                        <input type="email" name="email" class="email" placeholder="Email" required=""/>
                        <input type="password" name="password" class="password" placeholder="Password" required=""/>
                        <input type="password" name="password1" class="password" placeholder="Confirm password" required=""/>

                        <div class="login-bottom">
                            <ul>
                                <li>
                                    <a href="#">Запрос на восстановление пароля</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <input type="submit" value="Регистрация">
                    </form>
                </div>
            </div>
        </div>