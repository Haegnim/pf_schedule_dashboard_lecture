// for(let i = 0; i < AbortController.length; i++){

// }

// forEach(value){

// }

// map(value){

// }

//앞으로 할 것
//filter

//Contents Text
const conTxt = document.querySelectorAll('.con-txt p a');

conTxt.forEach(element => {
    const cutTxt = element.textContent.slice(0,10) + "...";
    element.textContent = cutTxt;
});

//Mobile Menu Activate
const mobileMenu = document.querySelector('.mobile-menu');

mobileMenu.onclick = () => {
    mobileMenu.classList.toggle('active');

}

const btn = document.querySelector('#btn');


function bgBtn(){
    const wrap = document.querySelector('.wrapper');
    const btn = document.querySelector('#btn span');
    wrap.classList.toggle("active");
    btn.classList.toggle("active");
}

btn.addEventListener('click', function(){
    wrap.style.background="#efefef"
});

//Pie Chart Rendering Code
$(function(){
    $(window).ajaxComplete(function(){
    let lWidth = 10;
    let tWidth = 8;
    let eachSize = 110;

    let pieSize = 200;
    let clearSet;
    const winWidth = $(window).width();

    if(winWidth <= 1280 && winWidth > 950){
        pieSize = 150;
    } else if(winWidth <= 950 && winWidth > 400) {
        pieSize = 170;
    } else if(winWidth <= 400) {
        pieSize = 140;
    } else {
        pieSize = 200;
    }



    $('.total-chart .chart').easyPieChart({
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#13C7A3',
        trackColor: '#fff',
        scaleColor: false,
        lineWidth: 18,
        trackWidth: 18,
        size: pieSize,
        lineCap: 'round',
        onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent);
        }
    });


    //window.addEventListener('resize', function(){
        $(window).resize(function(){
        const winWidth = $(window).width();

        if(winWidth <= 1280 && winWidth > 950){
            pieSize = 150;
        } else if(winWidth <= 950 && winWidth > 400) {
            pieSize = 170;
        } else if(winWidth <= 400) {
            pieSize = 140;
        } else {
            pieSize = 200;
        }

        clearTimeout(clearSet);
        clearSet = setTimeout(function(){

            $('.total-chart .chart canvas').removeData('easyPieChart').find('canvas').remove;
            //var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
                $('.total-chart .chart').easyPieChart({
                    easing: 'easeOutElastic',
                    delay: 3000,
                    barColor: '#13C7A3',
                    trackColor: '#bbb',
                    scaleColor: false,
                    lineWidth: 18,
                    trackWidth: 18,
                    size: pieSize,
                    lineCap: 'round',
                    onStep: function(from, to, percent) {
                        this.el.children[0].innerHTML = Math.round(percent);
                    }
              
                }, 150);
            });
    });
        
//--------each charts

    if(winWidth <= 950){
        lWidth = 5;
        tWidth = 5;
    } else {
        lWidth = 8;
        tWidth = 8;
    }
    if(winWidth <= 1280){
        eachSize = 90;
    } else {
        eachSize = 110;
    }

    //

        const poData = [
            {poKind:'.db-pofol', bColor:'#13C7A3', tColor:'#fff'},
            {poKind:'.api-pofol', bColor:'#0078FF', tColor:'#fff'},
            {poKind:'.renewal-pofol', bColor:'#8933FF', tColor:'#fff'},
            {poKind:'.panning-pofol', bColor:'#BD5ED9', tColor:'#fff'},
            //{poKind:'.total-chart', bColor:'#BD5ED9', tColor:'#e6e6e6'}
        ];

        function startPie(){
            poData.map(value => {
                //document.querySelector(value.poKind + ' .chart').remove();
                //console.log(value.b);
                //var chart = window.chart = new EasyPieChart(document.querySelector(value.poKind + ' .chart'), {
                    $(value.poKind + ' .chart').easyPieChart({
                    easing: 'easeOutElastic',
                    delay: 3000,
                    barColor: value.bColor,
                    trackColor: value.tColor,
                    scaleColor: false,
                    lineWidth: lWidth,
                    trackWidth: tWidth,
                    size: eachSize,
                    lineCap: 'round',
                    onStep: function (from, to, percent) {
                        this.el.children[0].innerHTML = Math.round(percent);
                    }
                });
            });
        }
        startPie();    

    });
});
//Open Modal for
//1. 버튼 DOM 저장 => index.php 143번줄
const modalBtn =document.querySelector('#open-modal');
//5. modal변수에 모달박스 DOM 저장
const modal=document.querySelector('#myModal');
//6. X버튼 DOM 저장
const times = document.querySelector('#times');


//4. modalBtn을 클릭했을 때 모달 박스 보이기
// When the user clicks on the button, open the modal 
modalBtn.onclick = function() {
    modal.style.display = "block";
}
  //7. X버튼 클릭시 모달창 제거
// When the user clicks on <span> (x), close the modal
times.onclick = function() {
    modal.style.display = "none";
}

  //모달 이외 영역 클릭 시 모달창 제거
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}