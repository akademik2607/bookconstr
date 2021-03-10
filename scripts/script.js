"use strict";
//change cover or pages
const coverOrPages = () => {
    const AD = document.getElementById('AD'),
        workarea = document.querySelector('.workarea'),
        toPager = document.querySelector('.toPager'),
        toCover = document.querySelector('.toCover');

    toPager.addEventListener('click', () => {
        workarea.classList.remove('cover-edit');
        AD.classList.remove('hidePager');
    });

    toCover.addEventListener('click', () => {
        workarea.classList.add('cover-edit');
        AD.classList.add('hidePager');
    });

};

coverOrPages();

//print prints

const printPrints = () => {
    const printPickerList = document.querySelector('.printPickerList'),
        printBackground = document.querySelector('.print-background');

    printPickerList.addEventListener('click', (event) => {
        let target = event.target;
        while(!target.classList.contains('img')){
            if(target.classList.contains('printPickerList')) return;
            target = target.parentNode;
            
        }
        printBackground.style.backgroundImage = target.style.backgroundImage;
    });
};

printPrints();
