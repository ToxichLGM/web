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
                    <li><a href="//www.plantuml.com/plantuml/png/dL9B3jCm4Dtx5BEeH2BKik-YLE8228brPL9JMNAIodRug5HgAtPm03RS8I0Ysa9xXl6DcCHrav1Ting_z-RD6sNcnd9jYrIn9u3VyE8EMBcT-umLdjmU8YpnXzkxWzjHTIRsuhxW2V2CVx0aOXyp_iPOpHCBYUB6mAkyi4B3XW5zJzTS6n4LMas1L39RnLD8vGUnX0rDjZBPUfqMsLBeYDXtkIGoc6w1RHdppYzofKHYPPu5zyKYoJCI5ecDaZixXUTSQ_unxbk715tKr70Z1WyFNThvhmqrXD55_GYQOPeU7RSUB_bAt3sWqn5Mlp63qBqKTuEHIBbKlSt6C5gJxdskbm4FuhTI6xl8U2e2edW07WtaLse3MMcL-7ymcLgHsG0_D8pkytjzSdHu5Vx2A_x44Yzun0gU0Vx6ae0ZqKVyYzVcPByo_yV6uq-ppl6mEl0GRKkYPhSpRXowxxhNjtO41YOJGXgjT_T0NR8vxLAawXy0">Диаграмма классов</a></li>
                    <li><a href="http://f1127675.xsph.ru/lab3/patterns/mvc/mvc_use.php">MVC</a></li>
                    <li><a href="https://www.plantuml.com/plantuml/png/RP7FJeD04CRl-nIJdY2M5_3GD34UFEZ1HA_DP1a9wVuniukDgNrtPxM0Wt3RtxVVRmROfuoS1-_CEzeZTWGR_s4tS3O0rc5Ay9A8xsB879qZBe4y3Go24zm2CkFd3xiv76mCAVDWSrN3BuEESZ48cEzUpAIUXG4zoHtfzw6xCfdvZv77tcce9YlFLYksYtOzB_aajQgUaZbuZcuzk2ygdOmlzeXyRECflFPqWlErmXHQugh5ZEEtM9G1-f29tz0IbEh3U5fpZ0fbk1XZ5Z-iQRvsKDXQe3OrVmyIx_GIPY_31---0G00">Вторая диаграмма классов</a></li>
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
