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