const $buttonAdd = document.querySelector("#button-add");

const $buttonRemove = document.querySelector("#button-remove");

const $formAdd = document.querySelector("#add-form");

const $formRemove = document.querySelector("#remove-form");

const $sectionTwo = document.querySelector(".section-two");

$buttonAdd.addEventListener("click", ()=>{
    $formAdd.classList.remove("disabled");
    $formAdd.classList.add("active");

    $formRemove.classList.remove("active");
    $formRemove.classList.add("disabled");

    $sectionTwo.classList.add("max-height");
    $sectionTwo.classList.remove("min-height");
});

$buttonRemove.addEventListener("click", ()=>{
    $formAdd.classList.remove("active");
    $formAdd.classList.add("disabled");

    $formRemove.classList.remove("disabled");
    $formRemove.classList.add("active");

    $sectionTwo.classList.add("min-height");
    $sectionTwo.classList.remove("max-height");
});