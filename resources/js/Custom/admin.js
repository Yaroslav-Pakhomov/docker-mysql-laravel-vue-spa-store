'use strict';
document.addEventListener('DOMContentLoaded', () => {
    // Массив отношения вводимых символов к составлению ссылки (слага)
    const mapSymbol = {
        'А': 'A',
        'Б': 'B',
        'В': 'V',
        'Г': 'G',
        'Д': 'D',
        'Е': 'E',
        'Ё': 'Yo',
        'Ж': 'Zh',
        'З': 'Z',
        'И': 'I',
        'Й': 'J',
        'К': 'K',
        'Л': 'L',
        'М': 'M',
        'Н': 'N',
        'О': 'O',
        'П': 'P',
        'Р': 'R',
        'С': 'S',
        'Т': 'T',
        'У': 'U',
        'Ф': 'F',
        'Х': 'H',
        'Ц': 'C',
        'Ч': 'Ch',
        'Ш': 'Sh',
        'Щ': 'Sh',
        'Ъ': '',
        'Ы': 'Y',
        'Ь': '',
        'Э': 'E',
        'Ю': 'Yu',
        'Я': 'Ya',
        'а': 'a',
        'б': 'b',
        'в': 'v',
        'г': 'g',
        'д': 'd',
        'е': 'e',
        'ё': 'yo',
        'ж': 'zh',
        'з': 'z',
        'и': 'i',
        'й': 'j',
        'к': 'k',
        'л': 'l',
        'м': 'm',
        'н': 'n',
        'о': 'o',
        'п': 'p',
        'р': 'r',
        'с': 's',
        'т': 't',
        'у': 'u',
        'ф': 'f',
        'х': 'h',
        'ц': 'c',
        'ч': 'ch',
        'ш': 'sh',
        'щ': 'sh',
        'ъ': '',
        'ы': 'y',
        'ь': '',
        'э': 'e',
        'ю': 'yu',
        'я': 'ya',
    };

    let input_name_title = document.querySelector('input[name="title"]');
    if (input_name_title) {
        /*
        * Автоматическое создание slug при вводе title (замена кириллицы на латиницу)
        */
        input_name_title.addEventListener('input', function (e) {
            // Удаляем действия по умолчанию
            e.preventDefault();

            let text = this.value;
            setSlug(text);
        });
    }


    /**
     *  Мониторинг цвета
     */
    let input_name_code = document.querySelector('input[name="code"]');
    if (input_name_code) {
        /**
         *  Подбирает название и ссылку для цвета при редактировании/создании
         */
        input_name_code.addEventListener('input', function (e) {
            // Удаляем действия по умолчанию
            e.preventDefault();

            let n_match = ntc.name(this.value);
            let n_rgb = n_match[0]; // Значение RGB ближайшего совпадения
            let n_name = n_match[1]; // Текстовая строка: Название цвета
            let n_exactmatch = n_match[2]; // TRUE, если точное совпадение цветов

            document.querySelector('input[name="title"]').value = '';
            document.querySelector('input[name="slug"]').value = '';

            document.querySelector('.near__color').classList.add('d-none');
            if (n_exactmatch) {
                document.querySelector('input[name="title"]').value = n_name;
                setSlug(n_name);
                document.querySelector('.form-group > div > span').style.background = n_rgb;
            } else {
                document.querySelector('.near__color').classList.remove('d-none');
                document.querySelector('.near__color').innerHTML = 'Название цвета для данного кода нет, ближайший код цвета: ' + n_rgb;
            }
        });
    }

    /**
     * Получение слага(ссылки) из названия элемента
     */
    function setSlug(text_title) {
        let text_slug = '';

        for (let k in mapSymbol) {
            text_title = text_title.replace(RegExp(k, 'g'), mapSymbol[k]);
        }

        text_slug = text_title.replace(/[^- _a-zA-Z0-9]/g, '');
        text_slug = text_slug.replace(/\s+/g, '-');
        text_slug = text_slug.replace(/-+/g, '-');
        text_slug = text_slug.toLowerCase();

        document.querySelector('input[name="slug"]').value = text_slug;
    }

    /**
     * Активация кнопки количества у товара в редактировании заказа
     */
    const quantityWrapper = document.querySelectorAll(".quantity__box");
    if (quantityWrapper) {
        quantityWrapper.forEach(function (singleItem) {
            let increaseButton = singleItem.querySelector(".increase");
            let decreaseButton = singleItem.querySelector(".decrease");

            increaseButton.addEventListener("click", function (e) {
                let input = e.target.previousElementSibling.children[0];
                if (input.dataset.counter !== undefined) {
                    let value = parseInt(input.value, 10);
                    value = isNaN(value) ? 0 : value;
                    value++;
                    input.value = value;
                    getCalculateCost(singleItem, value);
                }
            });

            decreaseButton.addEventListener("click", function (e) {
                let input = e.target.nextElementSibling.children[0];
                if (input.dataset.counter !== undefined) {
                    let value = parseInt(input.value, 10);
                    value = isNaN(value) ? 0 : value;
                    value < 1 ? (value = 1) : "";
                    value--;
                    input.value = value;
                    getCalculateCost(singleItem, value);
                }
            });
        });
    }

    /**
     * Считает стоимость (цена * кол-во) товара при редактировании заказа
     */
    function getCalculateCost(singleItem, qty) {
        let parent_td = singleItem.closest('td.align-middle');
        let price_td = parent_td.previousElementSibling;
        let price_value = +price_td.textContent;
        let cost_td = parent_td.nextElementSibling;
        let cost_value = price_value * qty;
        cost_value = (Math.round(cost_value * 100)/100).toFixed(2);
        cost_td.textContent = cost_value;
    }

    /**
     * Кнопка "Корзины" у товара в редактировании заказа
     */
    const removeBlock = document.querySelectorAll(".form-check");
    if (removeBlock) {
        removeBlock.forEach(function (singleItem) {
            let removeElement = singleItem.querySelector(".form-check-label");

            removeElement.addEventListener("click", function () {
                let span = this.querySelector('span');
                span.classList.toggle('active');
            });
        });
    }
})
