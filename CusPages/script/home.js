const dist = 257
function srcLeft(listName, event){
    let list = document.querySelector(listName)
    list.scroll({
        left: list.scrollLeft - dist,
        behavior: 'smooth'
    });
    event.preventDefault();
    console.log("HAHA");
}

function srcRight(listName, event){
    let list = document.querySelector(listName)
    list.scroll({
        left: list.scrollLeft + dist,
        behavior: 'smooth'
    });
    event.preventDefault();
}