

window.onload = ()=>{
  let green = '#66c3d0';
  let red = '#ed6f9d';
  let blue = '#598dd8';

    class EasyHTTP {
      async get(url, data) {
        const response = await fetch(url, {
          method: 'GET',
          headers: {
            'Content-type': 'application/json'
          },
          body: JSON.stringify(data)
        });
      }
    }  
    
    
  function hidingAmination(block, firstClassName,secondClassName,timing){
    block.classList.add(secondClassName)
    setTimeout(()=>block.classList.remove(firstClassName),timing)
    setTimeout(()=>block.classList.remove(secondClassName),timing)
  }
  let catalogBtn = document.getElementById('catalogBtn');
  let catalogDraw = document.querySelector('.svg__catalog__btn');
  if(catalogBtn){
    catalogBtn.addEventListener('click',()=>{
    catalogDraw.classList.add('svg__catalog__btn__animate') 
    });
  }  
  // getting svg length
// function totalLength(){
//     console.log((document.querySelector('.cls-circle')).getTotalLength());
//   }
//   totalLength();

//copy image protection
  // window.addEventListener('contextmenu',(e)=>e.preventDefault());


 

//size__choosing__div width
  sizeBack = document.querySelector('.item__size__div__back');
  sizeDiv = document.querySelector('.size__choosing__div');
  if(sizeBack){
    sizeDiv.style.width = `${sizeBack.clientWidth}+px`
  }

  
  //changing item amount in basket
  let minus = Array.from(document.querySelectorAll('.minus'));
  let plus = Array.from(document.querySelectorAll('.plus'));
  let itemSum = Array.from(document.querySelectorAll('.item__sum'));
  let yourSum = document.getElementById('currentSum');
  let itemBasketQuantity = Array.from(document.querySelectorAll('.item__quantity'));
  if(yourSum){
    var currentSum = Number(yourSum.dataset.currentsum);
  }
  
  if(minus.length>0){
    
  	for(let i=0;i<minus.length;i++){
      if(itemSum.length>0){
        itemSum[i].innerText = Number(itemSum[i].dataset.price) * Number(itemBasketQuantity[i].innerText) + "Р";
      }
  		  minus[i].addEventListener('click',()=>{
  			  if(Number(minus[i].nextSibling.nextSibling.innerText)>1){
  				  let current__item__number = Number(minus[i].nextSibling.nextSibling.innerText);
  				  minus[i].nextSibling.nextSibling.innerText = current__item__number - 1;
  				  minus[i].parentNode.childNodes[7].value =  minus[i].nextSibling.nextSibling.innerText;
           
	                let hiddenInputQuantity = document.getElementById('item__quantity__input');
     	            (hiddenInputQuantity ? hiddenInputQuantity.value= minus[i].nextSibling.nextSibling.innerText : 1);

            if(itemSum.length>0){
              let needToMinus = Number(itemSum[i].dataset.price);
              itemSum[i].innerText = needToMinus * Number(itemBasketQuantity[i].innerText);
              currentSum = currentSum - needToMinus;
              yourSum.setAttribute('data-currentsum', currentSum);
              yourSum.innerText = currentSum + ' Р';
            }
          
	          if(window.location.href.includes('cart')){ 
	  				  var minusId = minus[i].dataset.id;
	  				  var quant = minus[i].parentNode.childNodes[7].value;
	  				  const http = new EasyHTTP;
	  				  const url = 'http://jb.slim.technology/ajax/countBasket.php?id='+`${minusId}`+'&q='+`${quant}`;
	  				  http.get(url);
	          }
            
  
  			  }
        
  		  });
        
  		  plus[i].addEventListener('click',()=>{
  			  let current__item__number = Number(minus[i].nextSibling.nextSibling.innerText);
  			  minus[i].nextSibling.nextSibling.innerText = current__item__number + 1;
  			  minus[i].parentNode.childNodes[7].value =  minus[i].nextSibling.nextSibling.innerText;

          let hiddenInputQuantity = document.getElementById('item__quantity__input');
            (hiddenInputQuantity ? hiddenInputQuantity.value= minus[i].nextSibling.nextSibling.innerText : 1);
          if(itemSum.length>0){
            let needToMinus = Number(itemSum[i].dataset.price);
            itemSum[i].innerText = needToMinus * Number(itemBasketQuantity[i].innerText);
            currentSum = currentSum +	needToMinus;
            yourSum.setAttribute('data-currentsum', currentSum);
            yourSum.innerText = currentSum + ' Р';
          }
          
        if(window.location.href.includes('cart')){
  			  var minusId = minus[i].dataset.id;
  			  var quant = minus[i].parentNode.childNodes[7].value;
  			  const http = new EasyHTTP;
  			  const url = 'http://jb.slim.technology/ajax/countBasket.php?id='+`${minusId}`+'&q='+`${quant}`;
  			  http.get(url);
        }
  		  });      
  	}
  }

  // delete item in basket
  if(yourSum){
	  var currentSum = Number(yourSum.dataset.currentsum);
  }
  let deleteBasketBtn = Array.from(document.querySelectorAll('.basket__item .basket__delete__btn'));
  let basketLines = Array.from(document.querySelectorAll('.green__line'));
  let itemToDelete = Array.from(document.querySelectorAll('.basket__item'));
  let circle1 = document.getElementById('circle1');
  let circle2 = document.getElementById('circle2');

      
     
  if(deleteBasketBtn.length>0){
    for(let i=0;i<deleteBasketBtn.length;i++){ 
      deleteBasketBtn[i].addEventListener('click',()=>{
        let needToMinus = Number(itemSum[i].dataset.price) * Number(itemBasketQuantity[i].innerText);
        itemToDelete[i].remove()
        basketLines[i+1].remove()
        currentSum = currentSum - needToMinus
        yourSum.setAttribute('data-currentsum', currentSum)
        yourSum.innerText = currentSum + ' Р'
        
        var minusId = minus[i].dataset.id;
        const http = new EasyHTTP;
        const url = 'http://jb.slim.technology/ajax/deleteBasket.php?id='+`${minusId}`;

        http.get(url);
      })
      deleteBasketBtn[i].addEventListener('mouseover',()=>{
        circle1.style.background =`${red}`
        circle2.style.border = `2px solid ${red}`
      })
      deleteBasketBtn[i].addEventListener('mouseleave',()=>{
        circle1.style.background = `${green}`
        circle2.style.border = `2px solid ${green}`
      })
      
  }
}
    
				

// // Появление кнопки "ввести промокод"
let promoValue = document.getElementById('promocodeValue');
let promoBtn = document.getElementById('insert__promocode');
if(promoValue !=null){
   promoValue.addEventListener('keydown', ()=>{(promoValue.value.length>=5 ? promoBtn.style.opacity = '1' : promoBtn.style.opacity = '0')})
}
 
//animation button rings
let toBasket = Array.from(document.querySelectorAll('.basket__btn__div'));
let toBsketSign = document.getElementById('to__basket');


if(toBasket){
  for(let i=0;i<toBasket.length;i++){
    let ring1=toBasket[i].childNodes[3].childNodes[0].childNodes[0].childNodes[1];
    let ring2=toBasket[i].childNodes[3].childNodes[0].childNodes[0].childNodes[3];
    toBasket[i].addEventListener('mouseover',()=>{
      ring1.style.animation = 'dashBig .5s linear forwards'
      ring1.style.stroke = '#ffffff'
      ring2.style.animation = 'dashSmall .5s linear forwards'
      toBsketSign.style.color = '#ffffff'
    });
    toBasket[i].addEventListener('mouseleave',()=>{
      ring1.style.animation = 'none'
      ring1.style.fill = '#ffffff'
      ring2.style.animation = 'none'
      ring2.style.fill = '#ffffff'
      ring1.style.stroke = '#000000'
      toBsketSign.style.color = '#000000'
    });
  }
}

let currentSize = document.querySelector('.current__size__text');
let otherSizes = document.querySelector('.other__sizes');
let ad = document.querySelector('.ad');
if(currentSize){
  currentSize.addEventListener('click',()=>{
    otherSizes.classList.toggle('showSizesBlock')
    ad.classList.toggle('rotate__ad')
  });
  ad.addEventListener('click',()=>{
    otherSizes.classList.toggle('showSizesBlock')
  });
  
  otherSizes.addEventListener('click',()=>otherSizes.classList.remove('showSizesBlock'));
}
// document.addEventListener('click',function(e){
//   if((!e.target.classList.contains('current__size__text'))){
//     if(otherSizes.classList.contains('showSizesBlock')){
//       otherSizes.classList.remove('showSizesBlock');
//     }
//   }
// })



let itemSize = Array.from(document.querySelectorAll('.size__choosing__label'));
let cs = document.querySelector('.current__size__text');
for(let i=0;i<itemSize.length;i++){
  itemSize[i].addEventListener('change',function(){
    var current = document.querySelector(".active");
    current.classList.remove('active');
    itemSize[i].classList.add('active');
    cs.innerText = itemSize[i].childNodes[1].dataset.val;
  })
}


//catalog filter3
let filter3Choise = Array.from(document.querySelectorAll('.catalog__filter3 label'));
for(let i=0;i<filter3Choise.length;i++){
  filter3Choise[i].addEventListener('click',function(){
    
    if(filter3Choise[i].childNodes[0].checked == false){
      filter3Choise[i].classList.add('active')
      filter3Choise[i].childNodes[0].checked = true;
    }
    else{
      filter3Choise[i].childNodes[0].checked = false;
      filter3Choise[i].classList.remove('active')
    }
    for(let j=0;j<filter3Choise.length;j++){
      if(filter3Choise[j].childNodes[0].checked == false){filter3Choise[j].classList.remove('active')}
    }
  // (filter3Choise[i].childNodes[0].checked ? filter3Choise[i].classList.remove('active') : filter3Choise[i].classList.add('active'))
  })
}

//read about in item.php

let readAboutTrigger = document.querySelector('.read__about');
let readAboutBlock = document.querySelector('.about__delivery__popup');
let readAboutClosingBtn = document.querySelector('.about__delivery__popup .basket__delete__btn');
if (readAboutTrigger) readAboutTrigger.addEventListener('click',()=>readAboutBlock.classList.toggle('showPopUp'));
if(readAboutBlock){
  document.addEventListener('click',function(e){
    if(!e.target.classList.contains('about__delivery__popup') && !e.target.classList.contains('read__about') && !e.target.classList.contains('info__menu') && !e.target.classList.contains('nav-link')){
      if(readAboutBlock.classList.contains('showPopUp')){ 
         readAboutBlock.classList.add('hidePopup');
         hidingAmination(readAboutBlock, 'hidePopup','showPopUp',1000);
      }
    }
  })
  if(readAboutClosingBtn){
  readAboutClosingBtn.addEventListener('click',function(){
    console.log(2);
        readAboutBlock.classList.add('hidePopup');
         hidingAmination(readAboutBlock, 'hidePopup','showPopUp',2000);
  })
  }
}






//filter popUp
let filterTrigger = Array.from(document.querySelectorAll('.catalog__filter2 span'));
let filter2 = document.querySelector('.catalog__filter2__popup');
if (filterTrigger.length>0){
  for(let i=0;i<filterTrigger.length;i++){
    filterTrigger[i].addEventListener('click',()=>{
      if(window.innerWidth>800){filter2.classList.add('showfilterPopUp')}
      else{filter2.classList.add('showfilterPopUpM')}
    });
  }
} 
let filter2ColsingBtn = document.querySelector('.catalog__filter2__popup .basket__delete__btn');
(filter2ColsingBtn ? filter2ColsingBtn.addEventListener('click',()=>{
  if(window.innerWidth>800){hidingAmination(filter2, 'showfilterPopUp','hideFilterPopup',300)}
  else(hidingAmination(filter2, 'showfilterPopUpM','hideFilterPopupM',300))
}) : 1)






//item card sizes height

let sizes = Array.from(document.querySelectorAll('.all__sizes__1'));
let sizesBlock = document.getElementById('what__size__should');
if(sizes.length>0){sizesBlock.style.height = sizes[0].clientHeight + 'px'; console.log(sizes[0].clientHeight + 'px')};









//arrow cirlces in slider
function circleArrows(arrows,circles){
  if(arrows.length>0){
    for(let i=0;i<2;i++){
      arrows[i].addEventListener('mouseover',()=>{
          circles[i].classList.remove('removedash')
          circles[i].classList.add('dash')})
        arrows[i].addEventListener('mouseleave',()=>{
          circles[i].classList.remove('dash')
          circles[i].classList.add('removedash')
      })
    };
  }
}

function circleArrowsMobile(arrows,circles){
  if(arrows.length>0){
    for(let i=0;i<2;i++){
      arrows[i].addEventListener('click',()=>{
        console.log(2)
            circles[i].classList.remove('removedash')
            circles[i].classList.add('dash')
            setTimeout(()=>{
              circles[i].classList.add('removedash')
              circles[i].classList.remove('dash')
              console.log(3)
            },1000)
      })  
    };
  }
}

let sliderArrows = Array.from(document.querySelectorAll('.item__slider__arrows div'));
let cirlces =Array.from(document.querySelectorAll('.cls-circle'));
(window.innerWidth>800 ? circleArrows(sliderArrows,cirlces) : circleArrowsMobile(sliderArrows,cirlces));

let sliderArrowsI = Array.from(document.querySelectorAll('.ia'));
let cirlcesI =Array.from(document.querySelectorAll('.ia .cls-circle'));
(window.innerWidth>800 ? circleArrows(sliderArrowsI,cirlcesI) : circleArrowsMobile(sliderArrowsI,cirlcesI));
;

let sliderArrowsE = Array.from(document.querySelectorAll('.ea'));
let cirlcesE =Array.from(document.querySelectorAll('.ea .cls-circle'));
(window.innerWidth>800 ? circleArrows(sliderArrowsE,cirlcesE) : circleArrowsMobile(sliderArrowsE,cirlcesE));
;

let newSliderArrows = Array.from(document.querySelectorAll('.slider__wrapper .slider__arrow'));
(window.innerWidth>800 ? circleArrows(newSliderArrows,cirlces) : circleArrowsMobile(newSliderArrows,cirlces));
circleArrows(newSliderArrows,cirlces);







// //order label movement
let orderInputs = Array.from(document.querySelectorAll('.order__wrapper input'));
if(orderInputs.length>0){
	for(let i = 0; i< orderInputs.length; i++){
		(orderInputs[i].value ?  orderInputs[i].previousSibling.previousSibling.style.transform = "translateY(0px)" : 1)
		  orderInputs[i].onfocus = function(){
		    orderInputs[i].previousSibling.previousSibling.style.transform = "translateY(0px)";
		  }
		
		  orderInputs[i].onblur = function(){
		     if(!orderInputs[i].value){
		        orderInputs[i].previousSibling.previousSibling.style.transform = "translateY(22px)";
		      }  else{
		        orderInputs[i].classList.add('green__input');
		      }
		  }
		
		  orderInputs[i].addEventListener('keyup',function(){
		    if(!orderInputs[i].value){
		      orderInputs[i].previousSibling.previousSibling.style.transform = "translateY(22px)";
		    }  else{
		      orderInputs[i].previousSibling.previousSibling.style.transform = "translateY(0px)";
		    }
		  })
		
		  
		  orderInputs[i].addEventListener('mouseover',function(){
		    orderInputs[i].previousSibling.previousSibling.style.transform = "translateY(0px)";
		  });
		
		  orderInputs[i].addEventListener('mouseleave',function(){
		    if(!orderInputs[i].value){
		      orderInputs[i].previousSibling.previousSibling.style.transform = "translateY(22px)";
		    }  else{
		      orderInputs[i].classList.add('green__input');
		    }
		  });
		}
}
//flowers animation

let flowers=Array.from(document.querySelectorAll('.flower'));
let giraffeMain = document.querySelector('.lets__talk__first');
let giraffeAbout = document.querySelector('.giraffe__about')
let giraffeM = document.querySelector('.flowers__and__giraffe .giraffe');

if(flowers.length>0){
  flowers[0].style.transform='translateY(-15px)';

  if(window.location.href.includes('about') || window.innerWidth<800){   
      flowers[0].classList.add('flower__moves')
      setTimeout(()=>flowers[1].classList.add('flower__moves2'),1000)
      giraffeM.classList.add('giraffe__moves')
  }
  else{
    giraffeMain.addEventListener('mouseover',()=>{
      flowers[0].classList.add('flower__moves')
      setTimeout(()=>flowers[1].classList.add('flower__moves2'),1000)
      giraffeM.classList.add('giraffe__moves')
    })
    // giraffeMain.addEventListener('mouseleave',()=>{
    //   flowers[0].classList.remove('flower__moves')
    //   setTimeout(()=>flowers[1].classList.remove('flower__moves2'),1000)
    //   giraffeM.classList.remove('giraffe__moves')
    // })
  }
}
// main whale animation
let mainWhale = document.querySelector('.lets__talk__second');
let seegulls = Array.from(document.querySelectorAll('.seegull'));

if(mainWhale){
  if(window.innerWidth<800){
    for(let i=0;i<seegulls.length;i++){
      seegulls[0].classList.add('seegull__flies')
      setTimeout(()=>seegulls[1].classList.add('seegull__flies'),500)
      setTimeout(()=>seegulls[2].classList.add('seegull__flies'),1200)
      setTimeout(()=>seegulls[3].classList.add('seegull__flies'),1800)
      setTimeout(()=>seegulls[4].classList.add('seegull__flies'),2700)
      
    }
  }else{
    mainWhale.addEventListener('mouseenter',()=>{
      for(let i=0;i<seegulls.length;i++){
        seegulls[0].classList.add('seegull__flies')
        setTimeout(()=>seegulls[1].classList.add('seegull__flies'),500)
        setTimeout(()=>seegulls[2].classList.add('seegull__flies'),1200)
        setTimeout(()=>seegulls[3].classList.add('seegull__flies'),1800)
        setTimeout(()=>seegulls[4].classList.add('seegull__flies'),2700)
        
      }
    })
  }
  
}

//item whale animation

//reg email validation
let regSbmBtn = document.getElementById('reg__btn');
let regPas = document.getElementById('psw__validation');
let regEmailError = document.getElementById('error__validation');
let regPswError = document.getElementById('error__validation_pas');
if(regSbmBtn){
  regSbmBtn.addEventListener('click', function(e){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = document.getElementById('lk__prop__email');
        if(reg.test(address.value) == false) {
          regEmailError.style.opacity = '1';
          address.classList.remove('green__input');
          address.classList.add('red__input');
          e.preventDefault();
          return false;
        }
          if(regPas.value.length<5){
            regPswError.style.opacity = '1';
            e.preventDefault();
          }
        
});
}
if(regPas){
  regPas.addEventListener('click',()=>{
    if(regPswError.style.opacity == '1'){regPas.value=''}
  })
}
//switching reg animals
let switchinBtns = Array.from(document.querySelectorAll('.reg__trigger'));
let regAnimals = Array.from(document.querySelectorAll('.toy'));

if(switchinBtns.length>0){
  regAnimals[0].classList.add('showBasic');
  for(let i=0;i<switchinBtns.length;i++){
    switchinBtns[i].addEventListener('click',()=>{
      for(let j=0;j<3;j++){
        if(j==i){
          regAnimals[j].classList.toggle('showBasic')
        }else{
          regAnimals[j].classList.add('hideBasic')
          regAnimals[j].classList.toggle('showBasic')
          setTimeout(()=>regAnimals[j].classList.remove('hideBasic'),1000)
        }
      }
   })
  }
}

// order checkings
let paymentType = Array.from(document.querySelectorAll('.payment__type__p'));
let deliveryType = Array.from(document.querySelectorAll('.delivery__type__p'));
let arrow = Array.from(document.querySelectorAll('.order__block .arrow'));
let hiddenOrderDelInputs = Array.from(document.querySelectorAll('.delivery__type'));
let hiddenOrderPayInputs = Array.from(document.querySelectorAll('.payment__type'));
let deliveryData = Array.from(document.querySelectorAll('.delivery__type__data'));
if(arrow.length>0){
  arrow[0].classList.add('left__arrow__delivery');
  arrow[1].classList.add('right__arrow__delivery');
  arrow[2].classList.add('left__arrow');
  arrow[3].classList.add('right__arrow');
}
let leftArrow = Array.from(document.querySelectorAll('.left__arrow .cls-1'));
let rightArrow = Array.from(document.querySelectorAll('.right__arrow .cls-1'));
  if(paymentType.length>0){
    for(let i=0;i<2;i++){
      paymentType[0].addEventListener('click',()=>{
        paymentType[0].style.color = '#66c3d0'
        paymentType[1].style.color = '#000000'
        hiddenOrderPayInputs[0].checked = 'checked'
        for(let j=0;j<leftArrow.length;j++){leftArrow[j].style.fill = '#66c3d0'}
        for(let j=0;j<rightArrow.length;j++){rightArrow[j].style.fill = '#000000'}
      })
      paymentType[1].addEventListener('click',()=>{
        paymentType[1].style.color = '#66c3d0'
        paymentType[0].style.color = '#000000'
        hiddenOrderPayInputs[1].checked = 'checked'
        for(let j=0;j<rightArrow.length;j++){rightArrow[j].style.fill = '#66c3d0'}
        for(let j=0;j<leftArrow.length;j++){leftArrow[j].style.fill = '#000000'}
      })
    }
  }

  let leftArrowDel = Array.from(document.querySelectorAll('.left__arrow__delivery .cls-1'));
  let rightArrowDel = Array.from(document.querySelectorAll('.right__arrow__delivery .cls-1'));
  
  if(paymentType.length>0){
    let ddHeight = deliveryData[0].clientHeight;

    for(let i=0;i<2;i++){
      deliveryType[0].addEventListener('click',()=>{
        deliveryType[0].style.color = '#66c3d0'
        deliveryType[1].style.color = '#000000'
        hiddenOrderDelInputs[0].checked = 'checked'
        for(let j=0;j<leftArrowDel.length;j++){leftArrowDel[j].style.fill = '#66c3d0'}
        for(let j=0;j<rightArrowDel.length;j++){rightArrowDel[j].style.fill = '#000000'}
        deliveryData[1].style.display = 'none'
        deliveryData[0].style.display = 'flex'
      })
      deliveryType[1].addEventListener('click',()=>{
        deliveryType[1].style.color = '#66c3d0'
        deliveryType[0].style.color = '#000000'
        hiddenOrderDelInputs[1].checked = 'checked'
        for(let j=0;j<leftArrowDel.length;j++){rightArrowDel[j].style.fill = '#66c3d0'}
        for(let j=0;j<rightArrowDel.length;j++){leftArrowDel[j].style.fill = '#000000'}
        deliveryData[0].style.display = 'none'
        deliveryData[1].style.display = 'block'
        deliveryData[1].style.height =  ddHeight + 'px'
      })
    }
  }



//menu btn movement
let menuBtn = document.querySelector('.menu__btn');
let menuSticks = Array.from(document.querySelectorAll('.stick'));
let smallerCircle = document.querySelector('.smaller__circle');
let menu = document.querySelector('.sliding__menu');
let menuClosingBtn = document.querySelector('.sliding__menu .basket__delete__btn');
let body = document.querySelector('body');
menuBtn.addEventListener('mouseenter',()=>{
  menuSticks[0].classList.add('move__stick')
  menuSticks[1].classList.add('move__stick')
  smallerCircle.classList.add('w')
  

});
menuBtn.addEventListener('mouseleave',()=>{
  menuSticks[0].classList.remove('move__stick')
  menuSticks[1].classList.remove('move__stick')
  smallerCircle.classList.remove('w')
  smallerCircle.style.fill = '#66c3d0 !important'
});

menuBtn.addEventListener('click',()=>{
  menu.classList.add('sliding__menu__animation')
  menu.style.display = 'block'
  body.classList.add('vi')
});
menuClosingBtn.addEventListener('click',()=>{
  menu.classList.add('sliding__menu__animation__hide')
  setTimeout(()=>menu.classList.remove('sliding__menu__animation'),500)
  setTimeout(()=>menu.classList.remove('sliding__menu__animation__hide'),500)
  setTimeout(()=>menu.style.display = 'none',700)
  body.classList.remove('vi')
});

let searchIcon = document.querySelector('.search__icon');
let search = document.querySelector('.sliding__search');
let searchClosingBtn = document.querySelector('.sliding__search .basket__delete__btn');

searchIcon.addEventListener('click',(e)=>{
  search.classList.add('search__menu__animation')
  search.style.display = 'block'
  body.classList.add('vi')
  e.preventDefault()

});
searchClosingBtn.addEventListener('click',()=>{
  hidingAmination(search, 'search__menu__animation','search__menu__animation__hide',1000)
  // setTimeout(()=>search.style.display = 'none',700)
  body.classList.remove('vi')
});


//about brands block
let brandsShowMore = document.getElementById('learn__more__sign');
let brandsShowLess = document.querySelector('.learn__about .basket__delete__btn');
let learnAbout = document.querySelector('.learn__about');
if(brandsShowMore){
  brandsShowMore.addEventListener('click',()=>learnAbout.classList.add('showPopUp'));
  brandsShowLess.addEventListener('click',()=>{hidingAmination(learnAbout,'showPopUp','hidePopup',500)});
}

if(learnAbout){
  document.addEventListener('click',function(e){
    if(!e.target.classList.contains('learn__about') && !e.target.classList.contains('learn__more__sign')){
      if(learnAbout.classList.contains('showPopUp')){
        brandsShowLess.addEventListener('click',()=>{hidingAmination(learnAbout,'showPopUp','hidePopUp',1500)});
      }
    }
  })
}

// //info block
let textsDiv = document.querySelector('.info');
let tabsArray = Array.from(document.querySelectorAll('.nav-link'));
let textsArray = Array.from(document.querySelectorAll('.info__text p'));
let infoHeader = document.querySelector('.info__header h1');
let infoLine = document.querySelector('.info__menu .green__line');
let iw = document.querySelector('.info');
let fullUrl =  Array.from(document.location.href.split('text='));
let infoUrl = fullUrl[1];
if(infoUrl=='delivery'){
  tabsArray[0].classList.remove('active');
  tabsArray[1].classList.add('active');
  textsArray[0].style.opacity = '0';
  textsArray[2].style.opacity = '0';
  textsArray[1].style.opacity = '1';
  infoHeader.innerText = tabsArray[1].innerText;
}
if(infoUrl=='refund'){
  tabsArray[0].classList.remove('active');
    tabsArray[1].classList.remove('active');
  tabsArray[2].classList.add('active');
   textsArray[0].style.opacity = '0';
  textsArray[1].style.opacity = '0';
  textsArray[2].style.opacity = '1';
  infoHeader.innerText = tabsArray[2].innerText;
}

if(textsArray.length>1){
	for(let i = 0; i< tabsArray.length; i++){
    if(iw){
      let textsHeight = textsArray[3].clientHeight;
	    textsDiv.style.height = textsHeight + 200 + 'px';
    }
	  tabsArray[i].addEventListener('click',function(){
	      let current = document.querySelector(".active");
	      current.className = current.className.replace("active", "");
	      this.className += " active";
        if(iw){infoHeader.innerText = tabsArray[i].innerText;}
        for(let j = 0; j< textsArray.length; j++){
	        if (j == i){
            textsArray[j].style.opacity = '1';
            // tabsArray[j].style.color = 'red';
	        }else{
            textsArray[j].style.opacity = '0';
            tabsArray[i].style.color = 'black';
	        }
        }
	  });
	}
}

//tabs in sizes

let sizesTabs = document.querySelectorAll('.all__sizes__tabs p');
let sizesBLock = document.querySelectorAll('.all__sizes__1');
if(sizesTabs.length>1){
	for(let i = 0; i< sizesTabs.length; i++){
	  sizesTabs[i].addEventListener('click',function(){
	      let current = document.querySelector(".active");
	      current.className = current.className.replace("active", "");
	      this.className += " active";
        for(let j = 0; j< sizesBLock.length; j++){
	        if (j == i){
	          sizesBLock[j].style.opacity = '1';
	        }else{
	          sizesBLock[j].style.opacity = '0';
	        }
        }
	  });
	}
}

//sizes block height
// let sizeBLock = Array.from(document.querySelectorAll('.all__sizes__1'));
// if(sizeBlock.length>0){
//   let sizeBlockHeight = sizeBLock[0].clientHeight;
//   let all__sizes__blocks = document.querySelector('.all__sizes__blocks');
//   all__sizes__blocks.style.height = sizeBlockHeight + 'px';
// }

//about us appearance
let AS = Array.from(document.querySelectorAll('.about__us'));
if(AS.length>0){
  window.addEventListener('scroll',()=>{
    for(let i=0;i<AS.length;i++){
      if(AS[i].getBoundingClientRect().top<500){
        AS[i].classList.add('show__about')
      }
    } 
  })
}
let heartLink = document.querySelector('.likes__link');
if(heartLink) heartLink.childNodes[1].classList.add('go__heart');
let likedHearts = Array.from(document.querySelectorAll('.liked__items .heart'));
if(likedHearts.length>0) {
  for(let i=0;i<likedHearts.length;i++){
    likedHearts[i].classList.add('filled__heart')
  }
}
//hearts
let littleHeart = Array.from(document.querySelectorAll('.heart'));
let heartHint = document.querySelector('.hint');
let heartHintFill = littleHeart[0].childNodes[0].childNodes[0].childNodes[0];

if(littleHeart[1]){
    littleHeart[1].addEventListener('mouseover',()=>{
  if(heartHint){
    if(localStorage.getItem('hintShown')!=='1'){
      heartCoord = littleHeart[1].getBoundingClientRect();
      let hintL = heartCoord.left + 80 + 'px';
      let hintT = heartCoord.top - 80 + 'px';
      heartHint.style.top = hintT;
      heartHint.style.left = hintL;
      heartHint.style.display = 'block';
      heartHint.classList.add('showBasic');
      localStorage.setItem('hintShown','1')
      setTimeout(()=>{
        heartHint.classList.add('hideBasic');
      },4000)
      setTimeout(()=>{
        heartHint.style.display = 'none';
      },5000)
    }
  }
  });
  
//убираем подсказку про сердечки
if(window.location.href.includes('catalog')){
  littleHeart[1].addEventListener('mouseleave',()=>{(heartHint ? heartHint.classList.remove('showBasic') : 1)});
}


//работа страницы с лайками. добавление и удаление
  for(let i=0;i<littleHeart.length;i++){
    
    littleHeart[i].addEventListener('click',(e)=>{
      
      littleHeart[i].classList.toggle('filled__heart');
      heartHintFill.style.fill = '#ed6f9d';
      (littleHeart[i].classList.contains('go__heart') ? 1 : e.preventDefault());
      
      if(window.location.href.includes('likes')){
        const http = new EasyHTTP;
        let heartId = document.querySelector('.show__heart').dataset.id;
        const url = 'http://jb.slim.technology/ajax/deletelike.php?id='+`${heartId}`;
        http.get(url);
        
        console.log(heartId);
        
        let heartBlock = document.querySelector('.show__heart');
        setTimeout(()=>{heartBlock.remove()},500);
      }else{
        const http = new EasyHTTP;
         let heartId = document.querySelector('.show__heart').dataset.id;
         const url = 'http://jb.slim.technology/ajax/like.php?id='+`${heartId}`;
          http.get(url);
      }
    
    (e.target.classList.contains('heart') && !littleHeart[i].classList.contains('go__heart')  ? e.preventDefault(): 1);
  });
  }
}
//catalog card animations

let whichS = document.getElementById('which__size');
if(whichS){
  let smallGiraffe = whichS.childNodes[5];
  whichS.addEventListener('mouseover',()=>{
    (smallGiraffe.classList.contains('pause')? smallGiraffe.classList.remove('pause') : 1)
    smallGiraffe.classList.add('giraffe__moves')
  });
  whichS.addEventListener('mouseleave',()=>smallGiraffe.classList.add('pause'));
}
// footer links animation
let footerLink = document.querySelector('.footer__link');
function changeFooterLink(link__class){
  let footerPayment = document.querySelector(link__class);
  let footerPaymentLetters = Array.from(document.querySelectorAll(`${link__class} .cls-2`));
  let footerPaymentBack = document.querySelector(`${link__class} .cls-1-back`);  
  
  footerPayment.addEventListener('mouseenter',()=>{
    for(let i=0;i<footerPaymentLetters.length;i++){
      footerPaymentLetters[i].style.fill = '#66c3d0'
      footerPaymentBack.style.fill = '#ffffff'
    }
  })
  footerPayment.addEventListener('mouseleave',()=>{
    for(let i=0;i<footerPaymentLetters.length;i++){
      footerPaymentLetters[i].style.fill = '#ffffff'
      footerPaymentBack.style.fill = '#66c3d0'
    }
  })
}

changeFooterLink('.link__back__payment');
changeFooterLink('.link__back__delivery');
changeFooterLink('.link__back__oferta');
changeFooterLink('.link__back__refund');

let h2HappySign = document.querySelector('.about__third h2');
let happyTop = document.querySelector('.about__third__top__sign');
if(happyTop){
  let w = h2HappySign.clientWidth+15;
  happyTop.style.width = `${w}px`;
}

// //checking errors in order form

let orderBtn = document.querySelector('.order__btn');
let errorSign = Array.from(document.querySelectorAll('.error__sign'));

if(window.location.href.includes('order')){
  if(orderBtn){
    orderBtn.addEventListener('click', function(e){
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      var address = document.getElementById('order__email');
          if(reg.test(address.value) == false) {
            e.preventDefault();
            return false;
          }
  });
    orderBtn.addEventListener('click', function(e){
      
      let orderInputsReq = Array.from(document.querySelectorAll('.required'));
      for(let i=0;i<orderInputsReq.length;i++){
        if(!orderInputsReq[i].value){
          orderInputsReq[i].style.borderBottom = '1px solid #EA2C32';
          errorSign[i].style.opacity = '1';
          errorSign[i].classList.add('error__shown');
          let allErrors = Array.from(document.querySelectorAll('.error__shown'));
          window.scrollTo(0, allErrors[0].offsetTop-180);
          
          e.preventDefault();
          return false;
        }
        orderInputsReq[i].onblur = function(){
          if(orderInputsReq[i].value){
            orderInputsReq[i].style.borderBottom = '1px solid #13100D';
            orderInputsReq[i].nextSibling.nextSibling.style.display = 'none';
            errorSign[i].style.opacity = '0';
            (errorSign[i].classList.contains('error__shown') ? errorSign[i].classList.remove('error__shown') : 1);
          }
        }
      }
      
    });
  }
}

//order mobile h2
let hm = Array.from(document.querySelectorAll('.hm'));
if(hm.length>0){
  for(let i =0;i<hm.length;i++){
    if(window.innerWidth < 900){
      hm[i].innerText=''
    }
  }
}
// //reg block
let regAr = document.querySelectorAll('.reg__window__menu a');
let regFormAr = document.querySelectorAll('.reg__window__form form');

reg = Array.from(regAr);
regForm = Array.from(regFormAr);
for(let i = 0; i< regAr.length; i++){
  regAr[i].addEventListener('click',function(){
	  var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      for(let j = 0; j< regForm.length; j++){
        if (j == i){
          regForm[j].style.opacity = '1';
          setTimeout(
            ()=>regForm[j].style.display = 'flex'
          ,500);
        }else{
          regForm[j].style.opacity = '0';
          setTimeout(
            ()=>regForm[j].style.display = 'none'
          ,500);
        }
      }
  });
}

//filter choosings
let labelCArray = Array.from(document.querySelectorAll('.possibly__active'));
for(let i = 0; i< labelCArray.length; i++){
  labelCArray[i].addEventListener('change',function(){
        this.classList.toggle('active__filter');
        // (window.innerWidth < 768 ? catalogShownBtnMobile.style.opacity = '1': 1);
    });
}

//attention sign in order
let attentionBtn = document.getElementById('pay__in__shop');
let notattentionBtn = document.getElementById('pay__online');
let attentionSign = document.getElementById('payment__attention');
if(attentionSign){
  attentionBtn.addEventListener('click',()=>attentionSign.classList.add('showSizesBlock'));
  notattentionBtn.addEventListener('click',()=>(attentionSign.classList.contains('showSizesBlock') ? attentionSign.classList.remove('showSizesBlock') : 1));
}


//instagram text appearance
let instImgs = Array.from(document.querySelectorAll('.instagram__slider a'));
let instTexts = Array.from(document.querySelectorAll('.instagram__text'));
  for(let i=0;i<instImgs.length;i++){
    instImgs[i].addEventListener('mouseover',()=>{instTexts[i].classList.add('showBasic')})
    instImgs[i].addEventListener('mouseleave',()=>{instTexts[i].classList.remove('showBasic')})    
}







//catalog image animation
let ciPaths1 = Array.from(document.querySelectorAll('.catalog__img .cls-1'));
let ciPaths2 = Array.from(document.querySelectorAll('.catalog__img .cls-2'));
let ciPaths3 = Array.from(document.querySelectorAll('.catalog__img .cls-3'));
let ciPaths4 = Array.from(document.querySelectorAll('.catalog__img .cls-4'));
let ciPaths5 = Array.from(document.querySelectorAll('.catalog__img .cls-5'));
let ciPaths6 = Array.from(document.querySelectorAll('.catalog__img .cls-6'));
let ciPaths = ciPaths1.concat(ciPaths2).concat(ciPaths3);
let ciPathsS = ciPaths4.concat(ciPaths5).concat(ciPaths6);
if(ciPaths.length>0){
  window.addEventListener('scroll',()=>{
    for(let i=0;i<ciPaths.length;i++){
      if(ciPaths[i].getBoundingClientRect().top<350){
          ciPaths[i].style.fill = '#ed6f9d'
        }
    }
    for(let i=0;i<ciPathsS.length;i++){
      if(ciPathsS[i].getBoundingClientRect().top<250){
          ciPathsS[i].style.stroke = '#ed6f9d'
        }
    }
  }) 
}
//phone mask
var element = document.getElementById('lk__phone');
if(element){
  var maskOptions = {
    mask: '+{7}(000)000-00-00'
  };
  var mask = IMask(element, maskOptions);
  
}

// mouse movement
var $circle1 = $('#circle1');
var $circle2 = $('#circle2');

function moveCircle(e) {
  TweenLite.to($circle1, 0.3, {
    css: {
      left: e.pageX + 20 +'px',
      top: e.pageY  + 20 +'px'
    }
  });
  TweenLite.to($circle2, 0.32, {
    css: {
      left: e.pageX + 20 +'px',
      top: e.pageY  + 20 +'px'
    }
  });
}


$(window).on('mousemove', moveCircle);


let allLinks = Array.from(document.querySelectorAll('a'));

if(allLinks){
  for(let i=0;i<allLinks.length;i++){
     allLinks[i].addEventListener('mouseenter',()=>{
      circle1.style.background = `${blue}`
      circle2.style.border = `8px solid ${blue}`
      circle2.style.width = '40px'
      circle2.style.height = '40px'
     })
     allLinks[i].addEventListener('mouseleave',()=>{
      circle1.style.background = `${green}`
      circle2.style.border = `2px solid ${green}`
      circle2.style.width = '30px'
      circle2.style.height = '30px'
     })
  }
}

let itemBasket = document.querySelector('.item__basket__btn');
let iconBasketQuantity = document.querySelector('.hbq__quantity');
if(itemBasket){
  itemBasket.addEventListener('click',(e)=>{
    iconBasketQuantity.innerText = parseInt(iconBasketQuantity.innerText) + 1;
    toBsketSign.innerText = 'добавлено'
    setTimeout(()=>toBsketSign.innerText = 'в корзину',2000)
  });
}

}













