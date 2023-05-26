 // SELECT INPUT CONFIGURATION
     

      // function chooseDepartment() {
      //    var lookup =[];
       
      //   lookup['SAAT'] = [
      //     "Agricultural Extension and Communication Technology",
      //     "Agricultural and Resource Economics",
      //     "Animal Production and Health",
      //     "Crop Soil and Pest Management",
      //     "Fishery  and Aquaculture Technology",
      //     "Ecotourism and Wildlife Management",
      //     "Forestry and Wood Technology",
      //     "Food Science and Technology",
      //   ];
        // lookup['SBMS'] = ["To be Added"];
        // lookup['SBCS'] = ["To be Added"];
        // lookup['SCS']= ["To be Added"];
        // lookup['SEET']= [
          // "Agricultural Engineering",
          // "Civil Engineering",
          // "Electrical and Electronics Engineering",
          // "Mechanical Engineering",
          // "Metallurgical and Materials Engineering",
          // "Mining Engineering",
        // ];
        // lookup['SEMS']= [
        //   "Applied Geophysics",
        //   "Applied Geology",
          // "Meteorology",
          // "Marine Science and Technology",
          // "Remote Sensing and Geoscience Information Systems",
        // ];
        // lookup['SET']= [
          // "Architecture",
          // "Building Technology",
          // "Estate Management",
          // "Industrial Design",
          // "Quantity Surveying",
        //   "Urban and Regional Planning",
        //   "Surveying and Geoinformatics",
        // ];
        // lookup['SLIT']=[
          // "Project Management Technology",
          // "Transport Management Technology",
          // "Library Management Technology",
          // "Entrepeneurship Management Technology",
        // ];
        // lookup['SLS']= ["Biochemistry", "Biology", "Biotechnology", "Microbiology"];
        // lookup['soc']= [
        //   "Computer Science",
        //   "Cybersecurity",
        //   "Information and Communication Technology",
        //   "Information Systems",
          // "Software Engineering",
        // ];
        // lookup['SPS']= [
          // "Chemistry",
          // "Mathematical Sciences",
          // "Physics",
          // "Statistics",
          // "General Studies",
        // ];
      
    //     var schoolList = document.getElementById("school_admitted");
    //     var departmentList = document.getElementById("department");
    //     var selSchool = schoolList.options[schoolList.selectedIndex].value;
    //     while (departmentList.options.length) {
    //         departmentList.remove(0);
    //     }
    //     var schools = lookup[selSchool];
    //     if (schools){
    //         var i;
    //         for (i = 0; i < schools.length; i++){
    //             var school = new Option(schools[i], i);
    //             departmentList.options.add(school);
    //         }
    //     }
    // }

// BACKGROUND IMAGE CHANGER    
        function changebgimg(){
            const images = [
            'url("./asset/bg1 (1).jpg")',
            'url("./asset/bg1 (2).jpg")',
            'url("./asset/bg1 (3).jpg")',
            'url("./asset/bg1 (4).jpg")',
            'url("./asset/bg1 (5).jpg")'
        ]

        const body = document.querySelector('body')
        const bgimg = images[Math.floor(Math.random() * images.length)];
        body.style.backgroundImage = bgimg;
        }
        setInterval(changebgimg, 10000)
    
//  DYNAMIC PAGE SWITCH
        

        function showForm(formIndex, colorCode){
          var navButton = document.querySelectorAll(".nav_button")
        var navPanel = document.querySelectorAll(".form_panel")
          navButton.forEach(function(node){
            node.style.backgroundColor="";
            node.style.color="";
          });
          navButton[formIndex].style.backgroundColor = colorCode;
          navButton[formIndex].style.color ='black';
          navPanel.forEach(function(node){
            node.style.display="none";
          });
          navPanel[formIndex].style.display="block";
          navPanel[formIndex].style.backgroundColor=colorCode;

        };
      window.onload= showForm(0, '#f6f6c9')