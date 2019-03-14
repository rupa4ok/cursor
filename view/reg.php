<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
    <title>Тестовое задание</title>
    <link rel="stylesheet" type="text/css" href="../template/css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<header>

</header>

<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="POST" action="reg.php">
                    <div class="form-row reg">
                        <label for="name">Ваш логин</label>
                        <input type="text" class="form-control" pattern="[а-яА-Яa-zA-Z0-9_-]{3,15}"
                               autofocus
                               required title="Логин от 3-х до 15 символов" placeholder="Ваш логин" name="login">
                        
                        <label for="name">Пароль</label>
                        <input type="password" class="form-control"
                               pattern="[а-яА-Яa-zA-Z0-9_-]{6,100}" autofocus
                               required title="Пароль не должен быть короче 6 символов" placeholder="Пароль" name="password">
                        
                        <label for="name">Подтвердите ваш пароль</label>
                        <input type="password" class="form-control"
                               pattern="[а-яА-Яa-zA-Z0-9_-]{6,100}" autofocus
                               required title="Пароль не должен быть короче 6 символов"
                               placeholder="Повторный пароль" name="confirm_password">
                        
                        <label for="email">Ваша почта</label>
                        <input type="email" class="form-control" autofocus
                               required title="" placeholder="Ваш email" name="email">
                        
                        <label for="name">Ваше имя</label>
                        <input type="text" id="name" class="form-control" pattern="[а-яА-Яa-zA-Z0-9_-]{3,15}"
                               autofocus
                               required title="Имя от 3-х до 30 символов" placeholder="Ваше имя" name="name">
                        
                        <input type="submit" class="btn btn-primary register" value="Зарегистрироваться">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>