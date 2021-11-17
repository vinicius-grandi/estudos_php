let icons = document.querySelectorAll('.icons')
let aicons = Array.from(icons)
let menu = document.querySelectorAll(".menu")

menu.forEach(
    (el) => {el.addEventListener('mouseenter', showicon)
             el.addEventListener('mouseout', showicon)}
)

function showicon() {
    if(verify()) {
    icons.forEach((el) => el.classList.remove('flip-vertical-right')
    )
    } else {
    icons.forEach((el) => el.classList.add('flip-vertical-right')
    )
    }
}

function verify(){
    for (let i in aicons) {
        return Object.values(aicons[i].classList).includes('flip-vertical-right')
}}