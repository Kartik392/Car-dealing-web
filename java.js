// CAR FEATURE TOGGLE
const btn1 = document.getElementById("piston");
const btn2 = document.getElementById("seat");
const btn3 = document.getElementById("light");
const lorem1 = document.getElementById("lorem1Id");
const lorem2 = document.getElementById("lorem2Id");
const lorem3 = document.getElementById("lorem3Id");
const car1j = document.getElementById("car1");
const car2j = document.getElementById("car2");
const car3j = document.getElementById("car3");

btn1.onclick = function () {
  lorem1.style.display = "block";
  lorem2.style.display = "none";
  lorem3.style.display = "none";
  car1j.style.display = "block";
  car2j.style.display = "none";
  car3j.style.display = "none";
};

btn2.onclick = function () {
  lorem1.style.display = "none";
  lorem2.style.display = "block";
  lorem3.style.display = "none";
  car1j.style.display = "none";
  car2j.style.display = "block";
  car3j.style.display = "none";
};

btn3.onclick = function () {
  lorem1.style.display = "none";
  lorem2.style.display = "none";
  lorem3.style.display = "block";
  car1j.style.display = "none";
  car2j.style.display = "none";
  car3j.style.display = "block";
};

// GALLERY POPUP
jQuery(document).ready(function ($) {
  $(".popup-gallery").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
        return item.el.attr("title") || "";
      }
    }
  });
});

// SEARCH BAR TOGGLE
function toggleSearch() {
  let searchContainer = document.querySelector(".search-container");
  searchContainer.classList.toggle("active");
}

// SEARCH SCROLL
document.getElementById("searchBtn").addEventListener("click", function () {
  let query = document.getElementById("searchBox").value.toLowerCase();
  let sections = document.querySelectorAll("section");

  sections.forEach(section => {
    if (section.innerText.toLowerCase().includes(query)) {
      section.scrollIntoView({ behavior: "smooth" });
    }
  });
});

// GALLERY IMAGE REMOVAL
function startImageRemoval() {
  const images = document.querySelectorAll("#galleryRow img");
  images.forEach(img => {
    img.addEventListener("click", function handleClick() {
      const parent = img.parentElement;
      parent.remove();
      img.removeEventListener("click", handleClick);
    });
    img.classList.add("selected");
  });
  alert("Click on the image you want to remove.");


}


// Open and Close Modals
function openLoginModal() {
  document.getElementById("loginModal").style.display = "block";
}

function closeLoginModal() {
  document.getElementById("loginModal").style.display = "none";
}

function openSignupModal() {
  document.getElementById("signupModal").style.display = "block";
  closeLoginModal(); 
}

function closeSignupModal() {
  document.getElementById("signupModal").style.display = "none";
}

window.onclick = function(event) {
  if (event.target == document.getElementById("loginModal")) {
      closeLoginModal();
  }
  if (event.target == document.getElementById("signupModal")) {
      closeSignupModal();
  }
}




function submitLoginForm() {
  var email = document.getElementById("loginEmail").value;
  var password = document.getElementById("loginPassword").value;
  
  var formData = new FormData();
  formData.append("loginEmail", email);
  formData.append("loginPassword", password);
  
  var xhr = new XMLHttpRequest();
  
  xhr.open("POST", "login.php", true);
  
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          document.getElementById("loginMessage").innerHTML = xhr.responseText;
      }
  };
  
  xhr.send(formData);
}



// Toggle the search input field when the search button is clicked
function toggleSearchInput() {
  var searchInput = document.getElementById("searchInput");
  if (searchInput.style.display === "none" || searchInput.style.display === "") {
      searchInput.style.display = "inline-block";
  } else {
      searchInput.style.display = "none";
  }
}

function submitSearch() {
  var searchQuery = document.getElementById("searchInput").value;

  
  if (searchQuery.length > 0) {
      var formData = new FormData();
      formData.append("searchQuery", searchQuery);

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "search.php", true);

      xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
              document.getElementById("searchResults").innerHTML = xhr.responseText;
          }
      };

      xhr.send(formData);
  } else {
      document.getElementById("searchResults").innerHTML = "";
  }
}
