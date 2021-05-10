function changeLink(){
    var fileName = location.href.split("ste240t44/")[1];
    console.log(fileName);
    //if on homepage, "Home" in nav is black
    if(fileName =="index.php" || fileName ==""){
        document.getElementsByTagName("a")[1].style.color = "black";
    }
    //if on reference pages, "Reference" in nav is black
    if(fileName =="referenceAlphabet.php" || fileName =="referenceCategory.php"){
        document.getElementsByTagName("a")[3].style.color = "black";
    }
    //If on one of the lesson pages, "Learn" is black
    if(fileName !="index.php" && fileName !="" && fileName !="referenceAlphabet.php" && fileName !="referenceCategory.php" && fileName !="ourTeam.php"){
        document.getElementsByTagName("a")[2].style.color = "black";
    }

    //This is stuff for the sidebar in Learn tab
    if(fileName =="assets/lessons/INTROkernel.php"){
        document.getElementsByTagName("a")[4].style.color="#5EE6DC";
    }
    if(fileName =="assets/lessons/BASICmisc.php"){
        document.getElementsByTagName("a")[5].style.color="#5EE6DC";
    }
    if(fileName =="assets/lessons/BASICfiles.php"){
        document.getElementsByTagName("a")[6].style.color="#5EE6DC";
    }
    if(fileName =="assets/lessons/BASICdirectory.php"){
        document.getElementsByTagName("a")[7].style.color="#5EE6DC";
    }
    if(fileName =="assets/lessons/ADVANCEDfiles.php"){
        document.getElementsByTagName("a")[9].style.color="#5EE6DC";
    }
    if(fileName =="assets/lessons/ADVANCEDdirectory.php"){
        document.getElementsByTagName("a")[10].style.color="#5EE6DC";
    }
    if(fileName =="assets/lessons/ADVANCEDcoding.php"){
        document.getElementsByTagName("a")[11].style.color="#5EE6DC";
    }
    if(fileName =="assets/lessons/ADVANCEDvieditor.php"){
        document.getElementsByTagName("a")[12].style.color="#5EE6DC";
    }
    
    //for our team page in footer
    if(fileName =="ourTeam.php"){
        document.getElementById("ourTeamLink").style.color="black";
    }
}