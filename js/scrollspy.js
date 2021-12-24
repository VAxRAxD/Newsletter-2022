let currentActive = 0;

const sections = document.querySelectorAll("section");
const links = document.querySelectorAll(".item");
/*window.addEventListener("scroll", () => {

    const current = sections.length - [...sections].reverse().findIndex((section) => window.scrollY >= section.offsetTop - sectionMargin ) - 1

    if (current !== currentActive) {
        
    }
});*/
const windowInnerWidth  = document.documentElement.clientWidth;
const breakId = 19 - Math.floor(windowInnerWidth/115);
window.onscroll = () => {
    sections.forEach(sec =>{
        let top = window.scrollY;   
        let offset = sec.offsetTop; 
        offset-=96; 
        let height = sec.offsetHeight;  
        let id = sec.getAttribute('id');
        let idInt = parseInt(id.substr(4,id.length-1));   
        if(top >= offset && top < (offset+height)){
            if(idInt <= breakId){
                links.forEach((link) => {
                    link.classList.remove('active');
                    document.querySelector(`.item[data-circle-year=${id}]`).classList.add('active');
                                    
                    
                });

                let scrollingOffset = (idInt)*115;
                if(scrollingOffset>115){
                    document.querySelector("#scroller").style.marginLeft = -(scrollingOffset-115)+"px";
                }else{
                    document.querySelector("#scroller").style.marginLeft = 0+"px";
                } 
            }
        }
    });
};