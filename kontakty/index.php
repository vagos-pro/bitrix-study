<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;
apikey=b1275cff-913b-4278-bd84-7bb4585be9f8" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    function init () {
        var myMap = new ymaps.Map("banner", {
                center: [55.76, 37.64],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            }),
            // Создание макета содержимого хинта.
            // Макет создается через фабрику макетов с помощью текстового шаблона.
            HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
                "<b>{{ properties.object }}</b><br />" +
                "{{ properties.address }}" +
                "</div>", {
                    // Определяем метод getShape, который
                    // будет возвращать размеры макета хинта.
                    // Это необходимо для того, чтобы хинт автоматически
                    // сдвигал позицию при выходе за пределы карты.
                    getShape: function () {
                        var el = this.getElement(),
                            result = null;
                        if (el) {
                            var firstChild = el.firstChild;
                            result = new ymaps.shape.Rectangle(
                                new ymaps.geometry.pixel.Rectangle([
                                    [0, 0],
                                    [firstChild.offsetWidth, firstChild.offsetHeight]
                                ])
                            );
                        }
                        return result;
                    }
                }
            );

        var myPlacemark = new ymaps.Placemark([55.764286, 37.581408], {
            address: "Ташкент, улица Садыка Азимова, 68",
            object: "ООО МАГАЗИН
        }, {
            hintLayout: HintLayout
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>
    <!-- Banner -->
    <section id="banner">
        <header>
            <h2>Адрес: <em>100031, г. Ташкент, ул. Садыка Азимова, 68.</em></h2>
            <a href="#name" class="button">Написать сообщение</a>
        </header>
    </section>

    <!-- Posts -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                            <h3>Контакты</h3>
                            <p>
                                100031, г. Ташкент, Садык Азимов, 68.<br>
                                <a href="tel:+998337331551">+998 33 733 15 51</a><br>
                                <a href="mailto:mr.sdksdk@mail.ru">mr.sdksdk@mail.ru</a>
                            </p>
                        <p>Время работы:<br>ПН-ПТ 09:00 - 18:00</p>
                    </div>
                </section>
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <h3>ООО "Магазин"</h3>
                        <p>
                            ИНН 361605835204<br>
                            ОГРНИП 318366800082035<br>
                            р/сч 40802810913000019698<br>
                            кор/сч 30101810600000000681<br>
                            БИК 042007681<br>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>