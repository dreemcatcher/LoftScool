<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table width=100% border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <?php


            /*
             * Задание #1
             * Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
             * Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
            */


            $strings ="Положив книжку на колени, Лисбет отпила кофе из стоявшего под рукой стакана и потянулась за сигаретами. 
            Не поворачивая головы, она перевела взгляд на горизонт. С террасы возле бассейна ей был виден кусочек Карибского 
            моря за стеной гостиничной территории, проглядывавший в просвет между пальмами и рододендронами. В открытом море 
            плыла парусная яхта, держа курс на север, в сторону Санта-Лючии или Доминики. Еще дальше видно было серое грузовое 
            судно, идущее на юг, в Гайану или одну из соседних с ней стран. Слабый бриз пытался развеять утренний зной, но Лисбет 
            почувствовала, как у нее по лбу медленно стекает на бровь капля пота. Она не любила жариться на солнце и старалась 
            по возможности проводить время в тени, под тентом, но, несмотря на это, загорела до цвета ореха. Сейчас на ней были 
            шорты цвета хаки и черная рубашка.
            Из громкоговорителя, расположенного у барной стойки, раздавались странные звуки в стиле стилпан. Она совершенно 
            не интересовалась музыкой и не смогла бы отличить Свена Ингвара от Ника Кейва, но стилпан привлек ее внимание, и она 
            невольно прислушалась. Трудно было представить себе, что кто-то сумеет настроить сковородку, и уж тем более казалось 
            сомнительным, что какая-то кастрюля может издавать звуки музыки, которые не спутаешь ни с чем другим. Лисбет слушала 
            как завороженная.
            Внезапно что-то ее отвлекло, и она снова перевела взгляд на женщину, которой только что принесли бокал с напитком 
            апельсинового цвета.
            Конечно, Лисбет это не касалось. Просто она не могла понять, почему эта женщина остается в гостинице. Прошлой ночью 
            в соседнем номере происходило нечто кошмарное. Оттуда доносился плач, сдавленные взволнованные голоса и временами 
            что-то похожее на звук пощечины. Раздавал пощечины мужчина лет сорока с лишним, с темными, гладко зачесанными 
            волосами с невиданным в нынешнее время пробором посередине, — как полагала Лисбет, муж постоялицы. Судя по всему, 
            в Гренаду он приехал по делам. Что это были за дела, Лисбет не имела ни малейшего представления, но каждое утро 
            постоялец приходил в бар пить кофе в пиджаке и при галстуке, после чего, взяв портфель, садился в ожидавшее у двери 
            такси.
            В гостиницу он возвращался под вечер, когда его жена купалась в бассейне, и усаживался с ней на террасе. Обычно они 
            обедали вдвоем, проводя время в тихой и, казалось бы, задушевной беседе. Женщина часто выпивала лишнего, однако 
            не переходила границ приличия и не доставляла неприятностей окружающим.
            Скандалы в соседнем номере случались регулярно и начинались между десятью и одиннадцатью часами вечера, как раз 
            когда Лисбет укладывалась в кровать с книгой о тайнах математики. О злостном рукоприкладстве речи не шло. Насколько 
            Лисбет могла оценить, за стеной происходила привычная и занудная перебранка. Прошлой ночью Лисбет не сдержала 
            любопытства и вышла на балкон, чтобы через приотворенную дверь послушать, о чем идет спор между супругами. Битый 
            час муж ходил из угла в угол, называя себя жалким типом, который не заслуживает ее любви, и на все лады твердил, 
            что она, конечно же, должна считать его обманщиком. И жена каждый раз говорила ему, что вовсе так не считает, 
            и как могла старалась его успокоить, но он настаивал на своем, пока она не сдалась под его натиском и не 
            подтвердила, как он требовал: «Да, ты обманщик». Достигнув цели, он тотчас же воспользовался ее вынужденным 
            признанием, чтобы перейти в наступление, и обрушился на нее с упреками в безнравственности и дурном поведении, 
            в том числе обозвал жену шлюхой. В отношении себя Лисбет такого бы не спустила, однако она тут была ни при чем 
            и потому не могла решить, как ей отнестись к случившемуся и следует ли что-либо предпринимать.
            Пока Лисбет удивлялась тому, как постоялец пилит свою жену, разговор вдруг оборвался и послышалось что-то похожее 
            на звук пощечины. Она подумала, что нужно выйти в коридор и высадить дверь соседнего номера, но неожиданно 
            там воцарилась тишина.
            Нынешним утром, разглядывая женщину, сидящую возле бассейна, Лисбет увидела синяк у нее на плече и ссадину 
            на бедре, но больше ничего особенно страшного не заметила.
            За девять месяцев до этого Лисбет наткнулась в римском аэропорту да Винчи на брошенный кем-то номер 
            «Попьюлар сайенс» и прочитала в нем одну статью, вызвавшую у нее смутный интерес к такой темной для нее области, 
            как сферическая астрономия. Поддавшись порыву, она там же, в Риме, зашла в университетскую книжную лавку и 
            приобрела основные пособия по этой теме. Но для того чтобы понять сферическую астрономию, требовалось разобраться 
            в некоторых математических сложностях. Путешествуя, она в последние месяцы не раз наведывалась в университетские 
            книжные лавки, чтобы обзавестись еще какой-нибудь книгой на нужную ей тему.
            Ее ученые занятия носили несистематический и случайный характер, и по большей части книги лежали в ее сумке 
            нераспакованными. Так продолжалось, пока она не побывала в университетской книжной лавке Майами, откуда вышла 
            с книгой Л. Парно «Измерения в математике» (Гарвардский университет, 1999). На эту книжку она напала, перед 
            тем как отправиться на Флорида-Кейс, откуда начался ее тур по островам Карибского моря.";

            // Разбиваем текст на части чтобы не готовить массив текста заранее. Мне лень это делать.
            $arrayStrings=explode(".", $strings);
            function myFunc($arr, $second=FALSE){
                // Сравниваем с FALSE
                if ($second==FALSE) {
                    for ($i = 0; $i < count($arr); $i++) {
                        echo "<p>" . $arr[$i] . "</p>";
                    }
                }
                else
                {
                    $stringString = implode(".", $arr);
                    return $stringString;
                }
            }
            echo "<h1>Распределить по параграфам.</h1>";
            myFunc($arrayStrings);
            echo "<br>";

            echo "<h1>Склеить всё в 1 строку.</h1>";
            echo myFunc($arrayStrings, TRUE);
            echo "";


            //Задание #3
            //1. Функция должна принимать переменное число аргументов.
            //2. Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие
            //, которое необходимо выполнить со всеми передаваемыми аргументами.
            //3. Остальные аргументы это целые и/или вещественные числа.
            //   Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
            //Результат: 1 + 2 + 3 + 5
            //.2 = 11.2


            function calcEverything()
            {

                // Да глупая проверка первый аргумент. Зато работает! И можно в случае чего улучшить
                for ($i = 0; $i <2; $i++) {
                    if ($i == 0) {
                        $deistv = func_get_arg($i);
                    } else {
                        //echo func_get_arg($i);
                        //echo $deistv;
                        $someAct = func_num_args(1);
                        $primer='';
                        if ($deistv == '+') {
                            echo "Сложение<br>";
                            for ($j = 1; $j < func_num_args(); $j++) {
                                $someAct = $someAct + func_get_arg($j);
                                if ($j==1)
                                {
                                    $primer= func_get_arg(1);
                                }else                        {
                                    $primer=$primer.'+'.func_get_arg($j);
                                }
                            }
                            echo $primer."=".$someAct."<br>";
                        }
                        elseif
                        ($deistv == '-') {
                            echo "Вычитание<br>";
                            for ($j = 1; $j < func_num_args(); $j++) {
                                $someAct = $someAct - func_get_arg($j);
                                if ($j==1)
                                {
                                    $primer= func_get_arg(1);
                                }else                        {
                                    $primer=$primer.'-'.func_get_arg($j);
                                }
                            }
                            echo $primer."=".$someAct."<br>";
                        }
                        elseif ($deistv == '*') {
                            echo "Умножение<br>";
                            for ($j = 1; $j < func_num_args(); $j++) {
                                $someAct = $someAct * func_get_arg($j);
                                if ($j==1)
                                {
                                    $primer= func_get_arg(1);
                                }else                        {
                                    $primer=$primer.'*'.func_get_arg($j);
                                }
                            }
                            echo $primer."=".$someAct."<br>";
                        }
                        elseif ($deistv == '/') {
                            echo "Деление<br>";
                            for ($j = 1; $j < func_num_args(); $j++) {
                                $someAct = $someAct / func_get_arg($j);
                                if ($j==1)
                                {
                                    $primer= func_get_arg(1);
                                }else                        {
                                    $primer=$primer.'/'.func_get_arg($j);
                                }
                            }
                            echo $primer."=".$someAct."<br>";
                        }
                        else {
                            echo "Неизвестная операция<br>";
                        }
                    }
                }
            }
            echo "<br>";
            echo calcEverything("+", 1, 2, 3, 5.2);
            echo calcEverything("+", 8, 8, 15, 16, 23, 42, 84,186);
            echo calcEverything("-", 1, 2, 3, 5.2);
            echo calcEverything("*", 1, 2, 3, 5.2);
            echo calcEverything("/", 1, 2, 3, 5.2);


            //Задание #4
            //1. Функция должна принимать два параметра – целые числа.
            //2. Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию.
            //   (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8)
            //3. В остальных случаях выдавать корректную ошибку.


            function intcheck($a){
                if(!intval($a) or $a < 1 or !preg_match('/^\+?\d+$/', $a))
                {
                    return 'NOT ok';
                }
                else
                {
                    return 'ok';
                }
            }

            // теперь функция построения таблицы. Для простоты ввода включим уже в неё, проверку не целочисленность
            // Чтобы 100 раз код не переписывать проверку вынесем в отодельную функцию
            function multiplicationTable($x,$y){
                if (intcheck($x)=='ok' and intcheck($y)=='ok'){
                    echo "<table>";
                    echo "Выводим таблицу размером ".$x." на ".$y;
                    echo "<tr>";
                    for($i=1;$i<$x; $i++){
                        for($j=1;$j<$y;$j++){
                            //$m=$i*$j;
                            $proizv=$i*$j." ";
                            echo "<td>" . $proizv . "</td>";
                        }
                        $j=1;
                        echo "</tr>";
                    }
                    echo "</table>";
                }else
                {
                    echo "Один из параметров введён неверно";
                    echo "<br>Что это вообще за параметр такой  ".$x."  ".$y."?";
                }
            }
            echo "<br>";
            echo multiplicationTable(1,1);
            echo "<br>";
            echo multiplicationTable(2,2);
            echo "<br>";
            echo multiplicationTable(3,3);
            echo "<br>";
            echo multiplicationTable(4,4);
            echo "<br>";
            echo multiplicationTable(5,6);
            echo "<br>";
            echo multiplicationTable(6,6);

            echo "<br>";
            echo multiplicationTable(6.7,6);

            echo "<br>";
            echo multiplicationTable(89,-31);

            echo "<br>";
            echo multiplicationTable(6,'Игорь');


            //Задание #5
            //1. Написать две функции.
            //2. Функция No1 принимает 1 строковый параметр и возвращает true, если строка является палиндромом*,
            //​   false в противном случае. Пробелы и регистр не должны учитываться.
            //3. Функция No2 выводит сообщение в котором на русском языке оговариваетсярезультат из функции No1
            //   * Палиндром – строка, одинаково читающаяся в обоих направлениях.


            function palindromCheck($text){
                // Удаляем пробелы
                $WithoutSpace = str_replace(" ","",$text);
                // Переводим буквы в нижний регистр
                $SmallText=mb_strtolower($WithoutSpace);
                $length = mb_strlen($SmallText);
                // считаем символы
                $halfLength= floor($length/2);
                for ($i=0; $i<=$halfLength; $i++){
                    $FirstSymbol=mb_substr($SmallText,$i,1);;
                    $LastSymbol=mb_substr($SmallText,$length-1-$i,1);;
                    if ($FirstSymbol==$LastSymbol){
                        // $result='TRUE';
                        return TRUE;
                    }else{
                        // $result='FALSE';
                        return FALSE;
                        break;
                    }
                }
                echo "Результат: {$result}\n";
            }

            function verifivator($r){
                if ($r==TRUE){
                    echo "Это палиндром";
                }else{
                    echo "Это не палиндром";
                }
            }

            echo "<br>";
            echo verifivator(palindromCheck('А роза упала на лапу Азора'));
            echo "<br>";
            echo verifivator(palindromCheck('Болвана в лоб'));
            echo "<br>";
            echo verifivator(palindromCheck('Да гневен гад'));
            echo "<br>";
            echo verifivator(palindromCheck('Маска как сам'));
            echo "<br>";
            echo verifivator(palindromCheck('Чем нежен меч'));
            echo "<br>";
            echo verifivator(palindromCheck('Какой-то там текст ждля проверки что не палиндром'));
            echo "<br>";

            echo verifivator(palindromCheck('Вид усов осудив'));
            echo "<br>";

            echo verifivator(palindromCheck('     Лев с ума ламу свёл               '));
            echo "<br>";
            echo verifivator(palindromCheck('      Кот, сука, за кусток              '));
            echo "<br>";
            echo verifivator(palindromCheck('           Уверена я, а не реву         '));
            echo "<br>";
            echo verifivator(palindromCheck('          Цени в себе свинец          '));
            echo "<br>";
            echo verifivator(palindromCheck('         Отлично кончил-то           '));
            echo "<br>";
            echo verifivator(palindromCheck('      Кошмар, срам, шок              '));
            echo "<br>";
            echo verifivator(palindromCheck('             Милашка, как шалим       '));
            echo "<br>";


            //Задание #6
            //1. Выведите информацию о текущей дате в формате 31.12.2016 23:59
            //2. Выведите unixtime время соответствующее 24.02.2016 00:00:00.


            $d = getdate(); // использовано текущее время
            foreach ( $d as $key => $val )
            {
                $key = $val;
            }
            echo "<br>Выведите информацию о текущей дате в формате 31.12.2016 23:59<br>";
            echo "<br>$d[mday].$d[mon].$d[year]"." "."$d[hours]".":"."$d[minutes]<br>";
            echo "<br>Выведите unixtime время соответствующее 24.02.2016 00:00:00.<br>";
            echo "<br>$d[mday].$d[mon].$d[year]"." "."$d[hours]".":"."$d[minutes]".":"."$d[seconds]<br>";

            echo "<br>";

            // или так, не совсем понятно во втором случае надо вывести дану или именно 24.02.2016 00:00:00
            $mt = mktime(00,00,00,24,02,2015);
            //echo $mt."<br>";
            echo 'Дата время: '.date('d.m.Y H:i:s', $mt).'<br>';
            echo '=======================================<br>';


            //Задание #7
            //1. Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все заглавные буквы “К”.
            //2. Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию дополнить задание.

            $text = 'Карл у Клары украл кораллы';
            $regexp= '/К/u';
            $result=preg_replace($regexp, ' ', $text);
            echo $result;
            echo "<br>";

            $othertext = 'Две бутылки лимонада';
            $regexp= '/Две/u';
            $result=preg_replace($regexp, 'Три', $othertext);
            echo $result;


            //Задание #8
            //1. Напишите функцию, которая с помощью регулярных выражений, получит информацию о переданных RX пакетах из переданной строки:
            //2. Пример строки: “RX packets:950381 errors:0 dropped:0 overruns:0 frame:0. “
            //3. Если кол­во пакетов более 1000, то выдавать сообщение: “Сеть есть”
            //4. Если в переданной в функцию строке есть “:)”, то нарисовать смайл в ASCII и невыдавать сообщение из пункта No3. Смайл должен храниться в отдельной функции


            function rxCheck($text){
                // Ищем смайлик
                $smileRegexp = '/[:][)]/';
                $Smileresult = preg_match($smileRegexp, $text, $foundSmile);
                //print_r ($foundSmile);
                if ($Smileresult==1){
                    echo ":)";
                }
                else
                {
                    // вычисляем packets:950381 ибо просто по числу найти можно много чего
                    $regexp = '/packets:[0-9]{1,9}/';
                    $result = preg_match($regexp, $text, $found);
                    //print_r ($found);
                    //Ковыряем результат, выкидваем из него packets: чтобы получить число с которым можно сравнивать
                    $regexp = '/[0-9]{1,9}/';
                    $result = preg_match($regexp, $text, $foundPacks);
                    //print_r ($foundPacks);
                    $countPacks=$foundPacks[0];
                    echo $countPacks;
                    echo "<br>";
                    if ($countPacks>1000){
                        echo "Сеть есть<br>";
                    }
                    else{
                        echo "Сети нет<br>";
                    }

                }
            }

            echo rxCheck("RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.");
            echo "<br>";
            echo rxCheck("RX packets:100 errors:0 dropped:0 overruns:0 frame:0.");
            echo "<br>";
            echo rxCheck("RX packets:999999 errors:0 dropped:0 overruns:0 frame:0.");
            echo "<br>";
            echo rxCheck("RX packets:95031 errors:0 dropped:0 overruns:0 frame:0.");
            echo "<br>";
            echo rxCheck("RX packets:0381 errors:0 dropped:0 overruns:0 frame:0.");
            echo "<br>";
            echo rxCheck("RX packets:112 errors:0 dropped:0 overruns:0 frame:0.  :)");
            echo "<br>";


            //Задание #9
            //1.
            //Создайте средствами ОС файл test.txt и поместите
            // в него текст “Hello, world”
            //2.
            //Напишите функц
            //ию, которая будет принимать имя файла, открывать файл и
            //выводить содержимое на экран.


            function OpenSomeFile($a){
                $fp = fopen($a, "r");
                if ($fp)
                {
                    while (!feof($fp))
                    {
                        $mytext = fgets($fp, 999);
                        return $mytext;
                    }
                }
                else echo "Ошибка при открытии файла";
                fclose($fp);
            }
            echo OpenSomeFile('test.txt');
            echo "<br>";


            // Задание #10
            //1. Создайте файл anothertest.txt средствами PHP. Поместите в него текст ­ “Hello again!”


            function createFile($a='somerandomname.txt',$b='Hello'){
                $fp = fopen($a, "w");
                fwrite($fp, $b);
                fclose($fp);
                $fp = fopen($a, "r");
                // Тут проверка создался ли файл и чтение из него
                if ($fp)
                {
                    while (!feof($fp))
                    {
                        $mytext = fgets($fp, 999);
                        return $mytext;
                    }
                }
                else echo "Ошибка при открытии файла";
                fclose($fp);

                // Тут проверка кончилась
            }
            echo createFile("anothertest.txt", "Hello again");
            echo "<br>";


            ?>
        </td>
        <td>
        </td>
    </tr>
</table>

<?php

?>

<?php

?>

<?php

?>

<?php

?>
<?php

?>

<?php

?>

<?php

?>


</body>
</html>