<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проектирование архитектуры корпоративных информационных систем</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('site.webp'); /* Замените на путь к вашему изображению */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Затемнение фона для лучшей читаемости */
            z-index: -1;
        }

        nav {
            width: 300px;
            background-color: rgba(51, 51, 51, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav > ul > li {
            margin-bottom: 15px;
        }

        nav ul ul {
            margin-left: 20px;
            margin-top: 5px;
            display: none;
        }

        nav > ul > li:hover > ul {
            display: block;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 8px 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        nav > ul > li > a {
            font-weight: bold;
            font-size: 1.1em;
            border-left: 3px solid #4CAF50;
            padding-left: 7px;
        }

        h1 {
            margin-left: 30px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <h1>Проектирование архитектуры КИС</h1>
    
    <nav>
        <ul>
            <li><a href="#">Лабораторная работа №1</a>
                <ul>
                    <li><a href="http://f1127675.xsph.ru/lab1/MyProject/users.php">Задание 1</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab1/MyProject/uml.html">Диаграмма</a></li>
                </ul>
            </li>
            
            <li><a href="#">Лабораторная работа №2</a>
                <ul>
                    <li><a href="http://f1127675.xsph.ru/lab2/FactoryMethod.php">Factory Method</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/AbstractFactory.php">Abstract Factory</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Builder.php">Builder</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Singleton.php">Singleton</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Adapter.php">Adapter</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Bridge.php">Bridge</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Composite.php">Composite</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Decorate.php">Decorator</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Facade.php">Facade</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Flyweight.php">Flyweight</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Proxy.php">Proxy</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/ChainOfResponsibility.php">Chain of Responsibility</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Command.php">Command</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Iterator.php">Iterator</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Mediator.php">Mediator</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Memento.php">Memento</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Observer.php">Observer</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/State.php">State</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Strategy.php">Strategy</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/TemplateMetod.php">Template Method</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab2/Visitor.php">Visitor</a></li>
                </ul>
            </li>
            
            <li><a href="#">Лабораторная работа №3</a>
                <ul>
                    <li><a href="http://f1127675.xsph.ru/lab3/patterns/singleton/settings_use.php">Singleton</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab3/patterns/factory_use.php">Factory Method</a></li>
                    <li><a href="//www.plantuml.com/plantuml/png/dLBDQl905DtFKzo5y2LyIFSkMg4lK0fTopHEPM2IoCoaFuYWqbtx0Dtq7QmqL6tr6UwyKMyIHsEpqrNkEUUUUmPFrrYkRHOhzW_m3JTkXhcRk6VCSUMc4E0SFzpKpTo4ljR4RjmBhW3N-8rp8gOXuxV6QXvPY1Gt1gxJp0eD8mRq-p_aseWWqwe3f9B98En0B1z57qPqsSfeNEcqIFf21yJUfv98Rpe6DcQiShvCbHAHbMdYtNkzA4r8c4KsYFPi1owurlmfFBRs2UgeAU1I31NST3dSlp6qu4zdnU0rpJH7T7ZmkE83iVUetbfVsqNU9GKV_JY3N_UgbeYvL2NMtcD3KZ-akh-JjkwaDhQNy5XuH74Fd1QcUamZZ9LMYJyOULgHs1CEKIlVYw9HtNByn2qkS8uRN68EPu1VD2nmIVGIVt1R5lMLLVzJktrUQmmhiZR0msV9LDKjz-jpiLgVkvGlYzKl">Диаграмма классов</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab3/patterns/mvc/mvc_use.php">MVC</a></li>
                    <li><a href="https://www.plantuml.com/plantuml/svg/RL513e8m4Bpt5HjE4k437Wo9yQW74xsQJMa8iHIpBHgZ_DsbWb3qs9cTcTrfPXsIQoeDrKqASKLvmK91nAy8dW90QhGMZbRHfZQEQgqLUG8WXOPX2oj08dnuR7a-ozfOHurqYnW-61JATGuCZBEj6As_XWOhnJEiBqtHOvpvWwaAIns2GNBWauGMoKmTZqlkMUQNdFfsn84D_XBRpYfaXiDsI9UylfjJgUxzWKiWPN8k8aU7GnSpSIk4cDMTfg-rx-alCSrXRSO9_9_Y3G00.svg">Ещё диаграмма классов</a></li>
                </ul>
            </li>

            <li><a href="#">Лабораторная работа №4</a>
                <ul>
                    <li><a href="http://f1127675.xsph.ru/lab4/news.php">Задание 1</a></li>
                    <li><a href="https://img.plantuml.biz/plantuml/svg/LL7BJiD03Bn7oZzOvTA891Tk5Q0IfGSaMWbLdAFDnaGhfRl5Te08-7VoR9gRFPwHP-mjYoAfJnMyCTAnOS6Jx_cUiOBqhZJ2ym6_E4tWn_S0Re7L9tR8MenK689MWgMZ9eJ2i2Pp5kDi2EngqXXiSkSgL7RGbYYzDDY08bBDW1POeU0qk0Z-EXkwKiomTA2TPO4qoGvF-nqymCgsuxZ8Lzquoefy0yVN5oDur_Epda-rbdKm00Kk-akYfTlPxEnrOVMAVDEIqwJ5hXOl4epu506_KO_RuQD6acRiaBKwur78s7A4MhtiY1pjUO9qvHYxkjqmlUV-DuwdG_dUM4JHutmBtzkYBTfN_mC0">Диаграмма классов</a></li>
                </ul>
            </li>

            <li><a href="#">Лабораторная работа №5</a>
                <ul>
                    <li><a href="http://f1127675.xsph.ru/lab5/news.php">Задание 1</a></li>
                    <li><a href="https://img.plantuml.biz/plantuml/svg/hP2z3i8m38JtF8N78g0R2sBeoiB20rHkOgIAr1MEmuyGxqvKXHGnaycVTNUnhWcAed7muB7R66CzXW27E7GauNY9AEJWQI2zDKpQBVIiUK7ilj564UAic7PBQ5ixSb29LglPlohMHTO9tNfsrGUlwFkPcEvQu4oFCkSV4x-CIMaa9xG4-pIWZf8k_rzy2TtLzKz3fY5sgSGt">Диаграмма классов</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</body>
</html>

</nav>

</body>
</html>
