'use strict';
document.addEventListener('DOMContentLoaded', () => {

    /*
    * Автоматическое создание slug при вводе title (замена кириллицы на латиницу)
    */
    document.querySelector('input[name="title"]').addEventListener('input', function (e) {
        // Удаляем действия по умолчанию
        e.preventDefault();

        let map = {
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

        let text = this.value;
        for (let k in map) {
            text = text.replace(RegExp(k, 'g'), map[k]);
        }
        text = text.replace(/[^- _a-zA-Z0-9]/g, '');
        text = text.replace(/\s+/g, '-');
        text = text.replace(/-+/g, '-');

        document.querySelector('input[name="slug"]').value = text;
    });
})
