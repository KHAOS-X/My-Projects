
      var lookup ={};
       
        lookup['saat'] = [
          "Agricultural Extension and Communication Technology",
          "Agricultural and Resource Economics",
          "Animal Production and Health",
          "Crop Soil and Pest Management",
          "Fishery  and Aquaculture Technology",
          "Ecotourism and Wildlife Management",
          "Forestry and Wood Technology",
          "Food Science and Technology",
        ];
        lookup['sbms'] = ["To be Added"];
        lookup['sbcs'] = ["To be Added"];
        lookup['scs']= ["To be Added"];
        lookup['seet']= [
          "Agricultural Engineering",
          "Civil Engineering",
          "Electrical and Electronics Engineering",
          "Mechanical Engineering",
          "Metallurgical and Materials Engineering",
          "Mining Engineering",
        ];
        lookup['sems']= [
          "Applied Geophysics",
          "Applied Geology",
          "Meteorology",
          "Marine Science and Technology",
          "Remote Sensing and Geoscience Information Systems",
        ];
        lookup['set']= [
          "Architecture",
          "Building Technology",
          "Estate Management",
          "Industrial Design",
          "Quantity Surveying",
          "Urban and Regional Planning",
          "Surveying and Geoinformatics",
        ];
        lookup['slit']=[
          "Project Management Technology",
          "Transport Management Technology",
          "Library Management Technology",
          "Entrepeneurship Management Technology",
        ];
        lookup['sls']= ["Biochemistry", "Biology", "Biotechnology", "Microbiology"];
        lookup['soc']= [
          "Computer Science",
          "Cybersecurity",
          "Information and Communication Technology",
          "Information Systems",
          "Software Engineering",
        ];
        lookup['sps']= [
          "Chemistry",
          "Mathematical Sciences",
          "Physics",
          "Statistics",
          "General Studies",
        ];
      

      function chooseDepartment() {
        var schoolList = document.getElementById("school");
        var departmentList = document.getElementById("department");
        var selSchool = schoolList.options[schoolList.selectedIndex].value;
        while (departmentList.options.length) {
            departmentList.remove(0);
        }
        var schools = lookup[selSchool];
        if (schools){
            var i;
            for (i = 0; i < schools.length; i++){
                var school = new Option(schools[i], i);
                departmentList.options.add(school);
            }
        }
    }
    