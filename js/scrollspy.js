let currentActive = 0;
const sections = document.querySelectorAll("section");
const links = document.querySelectorAll(".item");
const windowInnerWidth  = document.documentElement.clientWidth;
const breakId = 21 - Math.floor(windowInnerWidth/115);
window.onscroll = () => {
    sections.forEach(sec =>{
        let top = window.scrollY;   
        let offset = sec.offsetTop; 
        offset-=96; 
        let height = sec.offsetHeight;  
        let id = sec.getAttribute('id');
        let idInt = parseInt(id.substr(4,id.length-1));   
        if(top >= offset && top < (offset+height)){
            links.forEach((link) => {
                link.classList.remove('active');
                document.querySelector(`.item[data-circle-year=${id}]`).classList.add('active');

            });
            if(idInt <= breakId){
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