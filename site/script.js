var invocation = new XMLHttpRequest();
var url = 'http://localhost/';
const box = document.querySelector('.box');
const text2 = document.querySelector('.text2');
const text3 = document.querySelector('.text3');
const text4 = document.querySelector('.text4');

fetch(url)
    .then( res => res.json())
    .then
    (
       data => data.forEach((datas) => {
           
            box.innerHTML += 
            `   
                <div class="element">
                    <p class="text1">
                    <h4>id:  ${datas.id}</h4>
                    </p>
                    <p class="text1">
                    <h4>Nom:   ${datas.owner}</h4>
                    </p>
                    <p class="text2">
                    <h4>Numéro:   ${datas.tel}</h4>
                    </p>
                    <p class="text3">
                    <h4>Emis le:   ${datas.postdate}</h4>
                    </p>
                    <p class="text4">
                    <h4>Localisation:   ${datas.location}</h4>
                    </p>
                    <a href="/show/${datas.id}/" class="more">Plus</a>
                    <a href="/update/${datas.id}/" class="more">Update</a>
                    <a href="/delete/${datas.id}/" class="more">delete</a>
                    
                </div>
            `
        })
    )