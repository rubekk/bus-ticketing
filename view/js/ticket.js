const viewSeatsBtns= document.querySelectorAll(".view-seats-btn");
const busContainers= document.querySelectorAll(".bus-container");

busContainers.forEach(elem =>{
    elem.innerHTML= `
    <div class="row">
        <div class="seat">A1</div>
        <div class="seat">A2</div>
        <div class="gap"></div>
        <div class="seat">B1</div>
        <div class="seat">B2</div>
    </div>
    <div class="row">
        <div class="seat">A3</div>
        <div class="seat">A4</div>
        <div class="gap"></div>
        <div class="seat">B3</div>
        <div class="seat">B4</div>
    </div>
    <div class="row">
        <div class="seat">A5</div>
        <div class="seat">A6</div>
        <div class="gap"></div>
        <div class="seat">B5</div>
        <div class="seat">B6</div>
    </div>
    <div class="row">
        <div class="seat">A7</div>
        <div class="seat">A8</div>
        <div class="gap"></div>
        <div class="seat">B7</div>
        <div class="seat">B8</div>
    </div>
    <div class="last-row">
        <div class="seat">A9</div>
        <div class="seat">A10</div>
        <div class="seat">A11</div>
        <div class="seat">B9</div>
        <div class="seat">B10</div>
    </div>
    `;
})

viewSeatsBtns.forEach((elem,i) =>{
    elem.addEventListener("click", ()=>{
        if(busContainers[i].className== "bus-container hide") busContainers[i].className= "bus-container";
        else busContainers[i].className= "bus-container hide";
    })
})