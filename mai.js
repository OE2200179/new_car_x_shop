var sliderImages = Array.from(document.querySelectorAll(".slider-cont img"));
var slidecount = sliderImages.length;
var curentindex = 1;

//get slide number element
var slidenumberelement = document.getElementById("slider-number");

// get buttons
var prevbtn = document.getElementById("prev");
var nextbtn = document.getElementById("next");

// handel click prev and next

prevbtn.onclick = prevslide;
nextbtn.onclick = nextslide;

// creat main ul element

var paginationElement = document.createElement("ul");

// set attribute on element

paginationElement.setAttribute("id", "main-ul");

// creaate list li

for (let i = 1; i <= slidecount; i++) {
  // creat main ul element

  var paginationItem = document.createElement("li");
  //set data index
  paginationItem.setAttribute("data-index", i);

  //set item content
  paginationItem.appendChild(document.createTextNode(i));

  // appemd iyem to the main parent

  paginationElement.appendChild(paginationItem);
}

// append child of paginatioon elemet in body

document.getElementById("indecators").appendChild(paginationElement);

var paginationnewul = document.getElementById("main-ul");
// get pagenation items
var pagenationPolits = Array.from(document.querySelectorAll("#main-ul li"));
pagenationPolits.forEach((ele) => {
  ele.onclick = function () {
    curentindex = parseInt(this.getAttribute("data-index"));
    checher();
  };
});
//tregar the checker function
checher();
// function next slide

function nextslide() {
  if (nextbtn.classList.contains("disabled")) {
    return false;
  } else {
    curentindex++;

    checher();
  }
}
// function prev slide
function prevslide() {
  if (prevbtn.classList.contains("disabled")) {
    return false;
  } else {
    curentindex--;

    checher();
  }
}

//create chaker function

function checher() {
  //set the slide number
  slidenumberelement.textContent =
    "slide # " + curentindex + ` of ${slidecount}`;

  // tregae function remove all active from elements
  removeActiveClass();
  //set active class on the currente
  sliderImages[curentindex - 1].classList.add("active");

  paginationnewul.children[curentindex - 1].classList.add("active");

  //check the current element is the first

  if (curentindex == 1) {
    prevbtn.classList.add("disabled");
  } else {
    prevbtn.classList.remove("disabled");
  }
  if (curentindex == slidecount) {
    nextbtn.classList.add("disabled");
  } else {
    nextbtn.classList.remove("disabled");
  }
}
//remove all actives classes from element
function removeActiveClass() {
  sliderImages.forEach(function (img) {
    img.classList.remove("active");
  });
  // lop thro
  pagenationPolits.forEach(function (polits) {
    polits.classList.remove("active");
  });
}
