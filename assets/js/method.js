'use strict';

window.onload = function () {

    $("#sortable").sortable();

    let name, description;

    startData.onsubmit = function () {

        createRankingAlternativesTable(this.numberOfAlternatives.value, this.numberOfExperts.value);


        startData.remove();
        rankingAlternatives.style.display = 'block';
        return false;
    };

    function createRankingAlternativesTable(numberOfAlternatives, numberOfExperts) {

    }


};