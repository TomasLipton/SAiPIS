'use strict';

window.onload = function () {

    let name, description;

    startData.onsubmit = function () {

        createRankingAlternativesTable(this.numberOfAlternatives.value, this.numberOfExperts.value);


        startData.remove();
        rankingAlternatives.style.display = 'block';
        return false;
    };

    function createRankingAlternativesTable(numberOfAlternatives, numberOfExperts) {

        for (let i = 0; i < numberOfExperts; i++) {
            $("#rankingAlternativesTable thead tr:last").append("<td>Эксперт №" + (i + 1) + "</td>");
            $("#rankingAlternativesTable tr:last").append("<td><ul class=\"list-group sortable\"></td>");

            for (let j = 0; j < numberOfAlternatives; j++) {
                $("#rankingAlternativesTable ul:last").append(" <li class=\"list-group-item\" data-alternativeNumber=" + j + ">Porta ac consectetur ac</li>").sortable().on('dblclick', function () {
                    alert();
                });
            }

        }

    }


};