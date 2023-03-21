var type_c;
var type_vol_aller=document.querySelector('#type_vol_aller');
var type_vol_retour=document.querySelector('#type_vol_retour');

window.onload = function() {
var date = new Date();
var yearannee = date.getFullYear();
var mois = date.getMonth();
var Les_Mois =["Jan","Fev","Mar","Avr","Mai","Jun","Jul","Aou","Sep","Oct","Nov","Dec"];
var aujourdhui = date.getDate();
document.getElementById('jour').innerHTML=aujourdhui;
document.getElementById('mois').innerHTML=Les_Mois[mois];

document.getElementById("date_depart").value = yearannee+"-"+mois+1+"-"+this.justifyDay(aujourdhui);


 


}




 function close_calander(){
    //
    accueil_unflou();
     
      document.getElementsByClassName("calendar_container")[0].style.display = "none";
      document.getElementsByClassName('container-contenu')[0].classList.remove('flou');
     if (type_c=='retour'){
    
     document.querySelector(".bar-recherche__anuuler-retour").style.display = "flex";
     type_vol_retour.checked=true;
      //document.getElementsByClassName("container_r")[0].style.display = "none";
    }
  
      

        
 }    

 function annuler_retour(){
    document.getElementsByClassName("bar-recherche__anuuler-retour")[0].style.display = "none";
    document.getElementById('jour_r').innerHTML= "+";
    document.getElementById('mois_r').innerHTML= "";
    type_vol_aller.checked=true;
    document.getElementById("date_retour").value =  '';

 }
 var type_c="";

 function open_calandar(type){

     type_c=type;
    document.getElementsByClassName('calendar_container')[0].style.display="flex";
    document.getElementsByClassName('container-contenu')[0].classList.add('flou');
    accueil_flou();
     if (type=='aller') 
     type_c="aller";
    if (type=='retour') 
    type_c="retour";
        
    

     
 }    

         var elements = document.getElementsByClassName('container-date');
          var elements_r = document.getElementsByClassName('container-date_r');


     for (var i = 0; i < elements.length; i++) {
        elements[i].onclick = function () {active(event,'aller')};

     }
      for (var i = 0; i < elements_r.length; i++) {
        elements_r[i].onclick = function () {active(event,'retour')};

     }



 





document.addEventListener('DOMContentLoaded', function(){
    var today = new Date(),
        year = today.getFullYear(),
        month = today.getMonth(),
        monthTag =["Jan","Fev","Mar","Avr","Mai","Jun","Jul","Aou","Sep","Oct","Nov","Dec"],
        
        day = today.getDate(),
        days = document.getElementsByTagName('td'),
        selectedDay,
        setDate,
        daysLen = days.length;
// options should like '2014-01-01'
    function Calendar(selector, options) {
        this.options = options;
        this.draw();
    }
    
    Calendar.prototype.draw  = function() {
        this.getCookie('selected_day');
        this.getOptions();
        this.drawDays();
        var that = this,
            reset = document.getElementById('reset'),
            pre = document.getElementsByClassName('pre-button'),
            next = document.getElementsByClassName('next-button');
            
            pre[0].addEventListener('click', function(){that.preMonth(); });
            next[0].addEventListener('click', function(){that.nextMonth(); });
            reset.addEventListener('click', function(){that.reset(); });
        while(daysLen--) {
            days[daysLen].addEventListener('click', function(){that.clickDay(this); });
        }
    };
    
    Calendar.prototype.drawHeader = function(e) {
        var headDay = document.getElementsByClassName('head-day'),
            headMonth = document.getElementsByClassName('head-month');

            e?headDay[0].innerHTML = e : headDay[0].innerHTML = day;
            headMonth[0].innerHTML = monthTag[month] +" - " + year;        
     };
    
    Calendar.prototype.drawDays = function() {
        var startDay = new Date(year, month, 1).getDay(),
//      下面表示这个月总共有几天
            nDays = new Date(year, month + 1, 0).getDate(),
    
            n = startDay;
//      清除原来的样式和日期
        for(var k = 0; k <42; k++) {
            days[k].innerHTML = '';
            days[k].id = '';
            days[k].className = '';
        }

        for(var i  = 1; i <= nDays ; i++) {
            days[n].innerHTML = i; 
            n++;
        }
        
        for(var j = 0; j < 42; j++) {
            if(days[j].innerHTML === ""){
                
                days[j].id = "disabled";
                
            }else if(j === day + startDay - 1){
                if((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth())&&(year===today.getFullYear()))){
                    this.drawHeader(day);
                    days[j].classList.add ("today");
                }
            }
            
        }
    };
    
    Calendar.prototype.clickDay = function(o) {
        if(o.textContent!=""){
                var selected = document.getElementsByClassName("selected");
                
                var moi=document.getElementsByClassName("head-month")[0];

                    len = selected.length;
                if(len !== 0){ 
                    selected[0].className = "";
                }
                o.className = "selected";
                var moi_anne=moi.innerHTML;
                jour_z = o.textContent;
                moi_z=moi_anne.substr(0,3);
                annee_z=moi_anne.substr(6,10);


            


            
                if (type_c=="aller") { 
                    document.getElementById('jour').innerHTML= jour_z;
                    document.getElementById('mois').innerHTML= moi_z;
                    moi_z=textToDate(moi_z);
                    jour_z=justifyDay(jour_z);
                    annee_z=document.getElementsByClassName('head-month')[0].innerHTML.substring(6,10);
                    
                    document.getElementById("date_depart").value = annee_z+"-"+moi_z+"-"+jour_z;
                    

                    }
                if (type_c=="retour")  {
                    document.getElementById('jour_r').innerHTML= jour_z;
                    document.getElementById('mois_r').innerHTML= moi_z;
                    moi_z=textToDate(moi_z);
                    jour_z=justifyDay(jour_z);
                    annee_z=document.getElementsByClassName('head-month')[0].innerHTML.substring(6,10);

                    document.getElementById("date_retour").value =  annee_z+"-"+moi_z+"-"+jour_z;
                    }
                var tdy=document.getElementsByClassName('today');
                if(tdy.length>0)
                tdy[0].classList.remove('today');
                selectedDay = new Date(year, month, o.innerHTML);
                this.drawHeader(o.innerHTML);
                this.setCookie('selected_day', 1);
        }
        
    };
    
    Calendar.prototype.preMonth = function() {
        if(month < 1){ 
            month = 11;
            year = year - 1; 
        }else{
            month = month - 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };
    
    Calendar.prototype.nextMonth = function() {
        if(month >= 11){
            month = 0;
            year =  year + 1; 
        }else{
            month = month + 1;
        }
        this.drawHeader(1);
        this.drawDays();
    };
    
    Calendar.prototype.getOptions = function() {
        if(this.options){
            var sets = this.options.split('-');
                setDate = new Date(sets[0], sets[1]-1, sets[2]);
                day = setDate.getDate();
                year = setDate.getFullYear();
                month = setDate.getMonth();
        }
    };
    
     Calendar.prototype.reset = function() {
         month = today.getMonth();
         year = today.getFullYear();
         day = today.getDate();
         var Les_Mois =["Jan","Fev","Mar","Avr","Mai","Jun","Jul","Aou","Sep","Oct","Nov","Dec"];
         if (type_c=='aller'){      
          document.getElementById('jour').innerHTML=day;
          document.getElementById('mois').innerHTML=Les_Mois[month];
         
        }
         if (type_c=='retour') {
          document.getElementById('jour_r').innerHTML=day;
          document.getElementById('mois_r').innerHTML=Les_Mois[month];

        }
         
         var selected = document.getElementsByClassName("selected"),
         len = selected.length;
         if(len !== 0){ 
            selected[0].className = "";
        }
       
        
         this.options = undefined;
         this.drawDays();
     };
    
    Calendar.prototype.setCookie = function(name, expiredays){
        if(expiredays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredays*24*60*60*1000));
            var expires = "; expires=" +date.toGMTString();
        }else{
            var expires = "";
        }
        document.cookie = name + "=" + selectedDay + expires + "; path=/";
    };
    
    Calendar.prototype.getCookie = function(name) {
        if(document.cookie.length){
            var arrCookie  = document.cookie.split(';'),
                nameEQ = name + "=";
            for(var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                var c = arrCookie[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1,c.length);
                    
                }
                if (c.indexOf(nameEQ) === 0) {
                    selectedDay =  new Date(c.substring(nameEQ.length, c.length));
                }
            }
        }
    };
    var calendar = new Calendar();
    
        
}, false);



function textToDate(text){
var retour;
switch(text){
case"Jan":retour="01";
break;
case"Fev":retour="02";
break;
case"Mar":retour="03";
break;
case"Avr":retour="04";
break;
case"Mai":retour="05";
break;
case"Jun":retour="06";
break;
case"Jul":retour="07";
break;
case"Aou":retour="08";
break;
case"Sep":retour="09";
break;
case"Oct":retour="10";
break;
case"Nov":retour="11";
break;
case"Dec":retour="12";
break;
}

return retour;

}


function justifyDay(jour){
    if(jour<10)
    return "0"+jour;
    else return jour;
}
