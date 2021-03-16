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

//change textur
const changeTextur = () => {
    const colorPicker = document.querySelector('.color-picker'),
        typeDropDown = document.querySelector('.type-picker .type-dropdown');
        
    const changeActive = (event, par) =>{
        const target = event.target;
        if(target.tagName.toLowerCase() !== 'li') return;

        const list = par.querySelectorAll('li');
        list.forEach((item) => {
            item.classList.remove('active');
            if(item === target){
                item.classList.add('active');
            }
        });

        const activeColor = colorPicker.querySelector('.active'),
        activeType = typeDropDown.querySelector('.active');
    const textur = {
        color_id: activeColor.dataset.id,
        type_id: activeType.dataset.id
    };

    const textJson = JSON.stringify(textur);

    fetch('../ajax/ajax.php', {
        method: 'POST',
        body: textJson,
        headers: {
            "Content-Type": "application/json;charset=utf-8"
        }
        
    }).then((response) => {
        return response.text();
    }).then((result) => {
        const coverBackArr = JSON.parse(result),
             
            coverBackground = document.querySelector('.cover-background');
            coverBackground.style.backgroundImage = 'url(./texturs/' + coverBackArr[0][0] + ')';

    });
    };

    colorPicker.addEventListener('click', 
        (event) => changeActive(event, colorPicker));

    typeDropDown.addEventListener('click', 
        (event) => changeActive(event, typeDropDown));
    
};

changeTextur();

//upload photo popup
const photoPopup = () =>{
    const uploadPhotoPopup = document.getElementById('UploadPhotoPopup'),
        aLoadPhoto = document.querySelector('.a-load-photo');
    aLoadPhoto.addEventListener('click', (event) =>{
        event.preventDefault();
        uploadPhotoPopup.classList.remove('mfp-hide');
    });
};
photoPopup();

//pager slider

const changePagerSlider = () => {
    const pagerSlider = document.querySelector('.pager-slider'),
        slides = pagerSlider.querySelectorAll('.page'),
        pagerToLeft = document.querySelector('.pager .toLeft'),
        pagerToRight = document.querySelector('.pager .toRight');
    pagerSlider.addEventListener('click', (event) => {
        let target = event.target;
        while(!target.classList.contains('page')){
            if(target.classList.contains('pager-slider')) return;
            target = target.parentNode;
        }
        slides.forEach((item) => {
            item.classList.remove('active');
        });
        target.classList.add('active');
    });
    pagerToLeft.addEventListener('click', () => {
       const page = document.querySelector('.page'),
            width = page.offsetWidth;
        let temp = 0;

        temp = parseInt(pagerSlider.style.left) + width;
        if(temp >= width) return;
        pagerSlider.style.left = temp;

    });
    pagerToRight.addEventListener('click', () => {
       const page = document.querySelector('.page'),
            width = page.offsetWidth;
        let temp = 0;

        temp = parseInt(pagerSlider.style.left) - width;
        if(temp <= ((slides.length - 5) * -width)) return;
        pagerSlider.style.left = temp;

    });
};

changePagerSlider();

//page maket

const changeMaketPage = () => {
     const chooseMaketLeft = document.querySelector('.chooseMaketLeft'),
        chooseMaketRight = document.querySelector('.chooseMaketRight'),
        leftMakets = chooseMaketLeft.querySelector('.maketList'),
        leftMaketsList = leftMakets.querySelectorAll('.maket'),
        rightMakets = chooseMaketRight.querySelector('.maketList'),
        pageElements = document.querySelector('.builderBlock .elements');

    
        const drawPhoto = (target) => {
            console.log(target.parentNode.parentNode);
            const svg = target.querySelector('.active svg'),
            rectList = svg.querySelectorAll('rect'),
            photos = pageElements.querySelectorAll('.photo');

        
        /*photos.forEach((item) => {
            item.remove();
        });*/
        rectList.forEach((item) => {
            let elem = document.createElement('div');
            elem.classList.add('photo', 'droppable-image', 'empty', 'zoomIn');
            //elem.style.width = item.width.animVal.valueAsString;
                elem.style.width = String(item.width.animVal.valueInSpecifiedUnits / 2) + '%';
            elem.style.height = item.height.animVal.valueAsString;
            if(target.parentNode.parentNode.classList.contains('chooseMaketLeft')){
                elem.style.left = String(item.x.animVal.valueInSpecifiedUnits / 2) + '%';
                console.log('left');
            }else{
                console.log('right');
                elem.style.right = String(item.x.animVal.valueInSpecifiedUnits / 2) + '%';
            }
            elem.style.top = item.y.animVal.valueAsString;
            

            elem.innerHTML = '<img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" class="image r0 horizontal" style="left:NaN%;top:NaN%;"';
            pageElements.append(elem);
        });

        /*const svg = target.querySelector('svg'),
            rectList = svg.querySelectorAll('rect'),
            photos = pageElements.querySelectorAll('.photo');
        console.log(leftMakets.querySelector('.active svg'));
        console.log(rightMakets.querySelector('.active svg'));

        
        photos.forEach((item) => {
            item.remove();
        });
        rectList.forEach((item) => {
            let elem = document.createElement('div');
            elem.classList.add('photo', 'droppable-image', 'empty', 'zoomIn');
            //elem.style.width = item.width.animVal.valueAsString;
            elem.style.width = String(item.width.animVal.valueInSpecifiedUnits / 2) + '%';
            console.log(item.width.animVal);
            elem.style.height = item.height.animVal.valueAsString;
            elem.style.right = String(item.x.animVal.valueInSpecifiedUnits / 2) + '%';
            elem.style.top = item.y.animVal.valueAsString;
            

            elem.innerHTML = '<img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" class="image r0 horizontal" style="left:NaN%;top:NaN%;"';
            pageElements.append(elem);
            console.log(elem);
        });*/
    };
    function checkMaket(event){
        let target = event.target;
        const photos = pageElements.querySelectorAll('.photo');
        while(!target.classList.contains('maket')){
            if(target.classList.contains('maketList')) return;
            
            target = target.parentNode;
        }
        const list = this.querySelectorAll('.maket');
        list.forEach((maket) => {
            maket.classList.remove('active');
            if(maket === target){
                maket.classList.add('active');
            }
            
        });
        photos.forEach((item) => {
                item.remove();
            });
        drawPhoto(leftMakets);
        drawPhoto(rightMakets);
    };
    console.log(leftMakets);
    console.log(rightMakets);
    leftMakets.addEventListener('click', checkMaket.bind(leftMakets));
    rightMakets.addEventListener('click', checkMaket.bind(rightMakets));

};

changeMaketPage();


