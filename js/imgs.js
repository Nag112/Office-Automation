	 let slideIndex1 = 0; 
        let n1;
        increment1();
        function showDivs(n1) 
        {
        let j;
         let x = document.getElementsByClassName("sshow");
          if (n1 > x.length) 
          {
              slideIndex1 = 1;
          }    
          if (n1 < 1) 
          {
              slideIndex1 = x.length;
          }
        for (j = 0; j < x.length; j++)
        {
                x[j].style.display = "none";  
        }
        x[slideIndex1-1].style.display = "inline";
        setTimeout(increment1,2000);
        } 
        function increment1()
        {
            slideIndex1++;
            showDivs(slideIndex1);
        }  