let loadMore = document.querySelector('#load-more');
let currentIndex = 3;

loadMore.onclick = () =>{
    console.log("button clicked");
    let blogCard = [...document.querySelectorAll('.blog_cards .blog_card_group')];
    for(var i = currentIndex; i < blogCard.length; i++){
        blogCard[i].style.display = 'inline-block';
    }   
    currentIndex += 3;
    
    if(currentIndex >= blogCard.length){
        loadMore.style.display = 'none';
    }
}
