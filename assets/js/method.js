'use strict';

window.onload = function () {

    let name, description;

    startData.onsubmit = function () {

        let alternativesTable = createRankingAlternativesTable(this.numberOfAlternatives.value, this.numberOfExperts.value);

        start.onclick = function () {
            let preferredAlternativesTable = createPreferredAlternativesTable(alternativesTable);
            findBestAlternative(preferredAlternativesTable);
        };

        startData.remove();
        $('.hidden').addClass('displayed');
        return false;
    };

    function createRankingAlternativesTable(numberOfAlternatives, numberOfExperts) {

        let alternatives = [];

        for (let i = 0; i < numberOfExperts; i++) {
            $("#rankingAlternativesTable thead tr:last").append("<td>Эксперт №" + (i + 1) + "</td>");
            $("#rankingAlternativesTable tr:last").append("<td><ul class=\"list-group sortable\"></td>");

            for (let j = 0; j < numberOfAlternatives; j++) {
                let li = $('<li></li>').attr('data-alternative', j).text("Альтернатива №" + j).addClass('list-group-item alternative' + j).on('dblclick', editableAlternatives);
                $("#rankingAlternativesTable ul:last").append(li).sortable();
                if (alternatives.length != numberOfAlternatives) {
                    alternatives.push(li);
                }
            }
        }

        return alternatives;
    }

    function editableAlternatives() {
        let newTitle = prompt('Новое название', $(this).text());
        if (newTitle.length < 1) {
            alert('Название не может быть пустым');
        } else {
            let alternatives = $(".alternative" + $(this).data('alternative'));
            for (let k = 0; k < alternatives.length; k++) {
                alternatives[k].innerText = newTitle;
            }
        }
    }

    function createPreferredAlternativesTable(alternatives) {
        $('#preferredAlternativesTable thead tr:last').append('<td></td>');
        for (let j = 0; j < alternatives.length; j++) {

            $('#preferredAlternativesTable thead tr:last').append('<td>' + alternatives[j][0].innerText + '</td>');

            $('#preferredAlternativesTable tbody').append('<tr>' + '</tr>');

            $('#preferredAlternativesTable tbody tr:last').append('<td>' + alternatives[j][0].innerText + '</td>');
            for (let i = 0; i < alternatives.length; i++) {
                if (i === j) {
                    $('#preferredAlternativesTable tbody tr:last').append('<td></td>');
                } else {
                    $('#preferredAlternativesTable tbody tr:last').append('<td>' + getAlternativeRating(i, j)+ '</td>');
                }

            }
        }

        return $('#preferredAlternativesTable');
    }

    function getAlternativeRating(x, y) {
        let result = 0;

        let td = $('#rankingAlternativesTable tbody td');
        for (let j = 0; j < td.length; j++) {
            let lis = $(td[j]).find('li');
            for (let i = 0; i < lis.length; i++) {
                if($(lis[i]).data('alternative') == y){
                    result++;
                }else if($(lis[i]).data('alternative') == x){
                   break;
                }
            }
        }
        return result;
    }

    function findBestAlternative(preferredAlternativesTable) {
       let rows = $(preferredAlternativesTable).find('tbody tr');

        for (let i = 0; i < $(rows).length; i++) {
            let td = $(rows[i]).find('td');
            for (let j = i; j < $(td).length; j++) {
                if($(td[j]).text() == ''){
                    continue;
                }

                let color = getRandomArbitrary(100000, 900000);

                if (+$(td[j]).text() > +$($(rows[j]).find('td')[i]).text()){
                    // console.log($(td[j]).text() + '-' + $($(rows[j]).find('td')[i]).text());
                    // continue;
                }


                // $(td[j]).attr('style', 'background:#' + color);
                // $($(rows[j]).find('td')[i]).attr('style', 'background:#' + color);

            }

        }
    }

    function getRandomArbitrary(min, max) {
        return Math.round(Math.random() * (max - min) + min);
    }

};