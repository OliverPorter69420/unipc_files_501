const toggleNode = document.getElementById('arrow1')
const toggleNode2 = document.getElementById('arrow2')

const buttonNode = document.getElementById('button1')
const buttonNode2 = document.getElementById('button2')
const buttonNode3 = document.getElementById('button3')
const buttonNode4 = document.getElementById('button4')
const buttonNode5 = document.getElementById('button5')
const buttonNode6 = document.getElementById('button6')

const buttonLength = document.getElementById('carousel').childElementCount
const img = document.getElementById("image");
const imageSources = ["Snake.png", "Husky.png", "Hamster.png","Cat.png","Turtle.png","Fish.png"];
let count = 1
let mainNode = document.getElementById('button' + count)
let oldMainNode = document.getElementById('button1')

function incriment_count(addAmount, count) {
    newCount =  count + addAmount 
        
    if (newCount < 1) {
        return buttonLength
    }

    if (newCount > buttonLength){
        return 1
    }

    return newCount;
}

function changeImage(index) {
    img.src = imageSources[index];    
}

function changeNode (count) {
    oldMainNode = mainNode
    mainNode = document.getElementById('button' + count)
}

toggleNode.addEventListener("click", function() {
    count = incriment_count(-1,count)
    changeNode(count)
    changeImage(count-1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})

toggleNode2.addEventListener("click", function() {
    count = incriment_count(1,count)
    changeNode(count)
    changeImage(count - 1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})

buttonNode.addEventListener("click", function(){
    count = 1
    changeNode(count)
    changeImage(count-1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})

buttonNode2.addEventListener("click", function(){
    count = 2
    changeNode(count)
    changeImage(count-1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})
buttonNode3.addEventListener("click", function(){
    count = 3
    changeNode(count)
    changeImage(count-1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})

buttonNode4.addEventListener("click", function(){
    count = 4
    changeNode(count)
    changeImage(count-1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})

buttonNode5.addEventListener("click", function(){
    count = 5
    changeNode(count)
    changeImage(count-1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})

buttonNode6.addEventListener("click", function(){
    count = 6
    changeNode(count)
    changeImage(count-1)

    oldMainNode?.classList.remove('active')
    mainNode.classList.toggle('active')
})
