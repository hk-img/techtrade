var swiper = new Swiper(".mySwiper ", {
});
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.mySwiper').forEach(swiperEl => {
    const config = JSON.parse(swiperEl.getAttribute('data-swiper'));
    new Swiper(swiperEl, config);
  });
});



const levelButtons = document.querySelectorAll('.level-btn');
const contentDiv = document.getElementById('content');

// Define content for each level
const contents = {
  1: `
    <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full lg:h-[96px]">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </h1>
      </div>
      <div class="lg:w-[924px] pt-6 lg:h-[24px]">
        <h1 class="font-serif text-[#666666] font-medium text-base">
         For Trading & Demat Account related queries contact our customer service at info@techtrade.in or calls us on below number:
        </h1>
      </div>
      <div class="flex flex-row py-[23px] space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call: 0141-3561934</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 6:00pm)</h1>
      </div>
    </div>
  `,
  2: `
    <div class="flex flex-col">
       <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full lg:h-[96px]">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
           2Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </h1>
      </div>
      <div class="lg:w-[924px] pt-6 lg:h-[24px]">
        <h1 class="font-serif text-[#666666] font-medium text-base">
         For Trading & Demat Account related queries contact our customer service at info@techtrade.in or calls us on below number:
        </h1>
      </div>
      <div class="flex flex-row py-[23px] space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call: 0141-3561934</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 6:00pm)</h1>
      </div>
    </div>
    </div>
  `,
  3: `
    <div class="flex flex-col">
      <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full lg:h-[96px]">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
          3Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </h1>
      </div>
      <div class="lg:w-[924px] pt-6 lg:h-[24px]">
        <h1 class="font-serif text-[#666666] font-medium text-base">
          For Trading & Demat Account related queries contact our customer service at info@techtrade.in or calls us on below number:
        </h1>
      </div>
      <div class="flex flex-row py-[23px] space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call: 0141-3561934</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 6:00pm)</h1>
      </div>
    </div>
    </div>
  `,
  4: `
    <div class="flex flex-col">
      <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full lg:h-[96px]">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
          4Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </h1>
      </div>
      <div class="lg:w-[924px] pt-6 lg:h-[24px]">
        <h1 class="font-serif text-[#666666] font-medium text-base">
       For Trading & Demat Account related queries contact our customer service at info@techtrade.in or calls us on below number:
        </h1>
      </div>
      <div class="flex flex-row py-[23px] space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call: 0141-3561934</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 6:00pm)</h1>
      </div>
    </div>
    </div>
  `,
  5: `
    <div class="flex flex-col">
       <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full lg:h-[96px]">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
         5Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </h1>
      </div>
      <div class="lg:w-[924px] pt-6 lg:h-[24px]">
        <h1 class="font-serif text-[#666666] font-medium text-base">
         For Trading & Demat Account related queries contact our customer service at info@techtrade.in or calls us on below number:
        </h1>
      </div>
      <div class="flex flex-row py-[23px] space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call: 0141-3561934</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 6:00pm)</h1>
      </div>
    </div>
    </div>
  `
};

levelButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active color from all buttons
    levelButtons.forEach(btn => {
      btn.classList.remove('bg-[#C85103]');
      btn.classList.add('bg-white');

      btn.querySelectorAll('h1, span').forEach(el => {
        el.classList.remove('text-white');
        el.classList.add('text-black');
      });
    });

    // Add active color to clicked button
    button.classList.remove('bg-white');
    button.classList.add('bg-[#C85103]');

    button.querySelectorAll('h1, span').forEach(el => {
      el.classList.remove('text-black');
      el.classList.add('text-white');
    });

    // Update content based on clicked level
    const level = button.getAttribute('data-level');
    contentDiv.innerHTML = contents[level] || `<h1 class="text-[#666666]">No content for Level ${level}</h1>`;
  });
});








document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".underline-effect");
  const contents = document.querySelectorAll(".tab-content");

  buttons.forEach(button => {
      button.addEventListener("click", function () {
          // Remove active class from all buttons
          buttons.forEach(btn => {
              btn.classList.remove("active");
              btn.querySelector("span").classList.remove("w-full");
              btn.querySelector("span").classList.add("w-0");
          });

          // Add active class to clicked button
          this.classList.add("active");
          let underline = this.querySelector("span");
          underline.classList.remove("w-0");
          underline.classList.add("w-full");

          // Hide all content
          contents.forEach(content => content.classList.add("hidden"));

          // Show selected content
          const tabId = this.getAttribute("data-tab");
          document.getElementById(tabId).classList.remove("hidden");
      });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const contentBox = document.getElementById("content-box");
  const toggleBtn = document.getElementById("toggle-btn");

  let isExpanded = false; // Default collapsed

  toggleBtn.addEventListener("click", () => {
      if (isExpanded) {
          contentBox.style.maxHeight = "120px"; // Collapsed height
          toggleBtn.textContent = "Read More";
      } else {
          contentBox.style.maxHeight = contentBox.scrollHeight + "px"; // Full height based on content
          toggleBtn.textContent = "Read Less";
      }
      isExpanded = !isExpanded;
  });
});


document.addEventListener("DOMContentLoaded", function () {
  let nseBtn = document.getElementById("nseBtn");
  let bseBtn = document.getElementById("bseBtn");

  if (nseBtn && bseBtn) { 
      // Click event listener add kar rahe hain
      nseBtn.addEventListener("click", function () {
          toggleActive("NSE");
      });

      bseBtn.addEventListener("click", function () {
          toggleActive("BSE");
      });

      // Function ko define kar rahe hain
      function toggleActive(selected) {
        let nseBtn = document.getElementById("nseBtn");
        let bseBtn = document.getElementById("bseBtn");
    
        if (selected === "NSE") {
            nseBtn.classList.add("bg-slate-600", "text-white");
            nseBtn.classList.remove("bg-white", "text-[#425061]");
    
            bseBtn.classList.add("bg-white", "text-[#425061]");
            bseBtn.classList.remove("bg-slate-600", "text-white");
        } else {
            bseBtn.classList.add("bg-slate-600", "text-white");
            bseBtn.classList.remove("bg-white", "text-[#425061]");
    
            nseBtn.classList.add("bg-white", "text-[#425061]");
            nseBtn.classList.remove("bg-slate-600", "text-white");
        }
    }
    
  }
});





var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 1,  
  spaceBetween: 10,
  speed: 1000, 
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: { // sm (>=640px)
      slidesPerView: 1,
      spaceBetween: 10,
    },
    768: { // md (>=768px)
      slidesPerView: 1,
      spaceBetween: 15,
    },
    1024: { // lg (>=1024px)
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1280: { // xl (>=1280px)
      slidesPerView: 2,
      spaceBetween: 20,
    }
  }
});


// // irfcclick
// document.querySelectorAll(".rounded-md").forEach(div => {
//   div.addEventListener("click", function () {
//     window.location.href = "irfc.html";
//   });
// });



   
window.onload = function() {
  setTimeout(function() {
      document.getElementById('popup').classList.remove('hidden');
  }, 2000); // 2000 milliseconds = 2 seconds
};

function closePopup() {
  document.getElementById('popup').classList.add('hidden');
}




const modal = document.getElementById("modal");
const openModalBtns = document.querySelectorAll(".openModal");
const closeModalBtn = document.getElementById("closeModal");

// Open modal on any button click
openModalBtns.forEach((item) => {

    item.addEventListener("click", () => {
        modal.classList.remove("hidden");
    });
});

// Close modal when clicking on close button
closeModalBtn.addEventListener("click", () => {
  modal.classList.add("hidden");
});

// Close modal when clicking outside modal content
window.addEventListener("click", (event) => {
  if (event.target === modal) {
      modal.classList.add("hidden");
  }
});





function toggleActive(selected) {
  let nseBtn = document.getElementById("nseBtn");
  let bseBtn = document.getElementById("bseBtn");

  if (selected === "NSE") {
      nseBtn.classList.add("bg-white", "text-[#425061]");
      nseBtn.classList.remove("bg-slate-600", "text-white");

      bseBtn.classList.add("bg-slate-600", "text-white");
      bseBtn.classList.remove("bg-white", "text-[#425061]");
  } else {
      bseBtn.classList.add("bg-white", "text-[#425061]");
      bseBtn.classList.remove("bg-slate-600", "text-white");

      nseBtn.classList.add("bg-slate-600", "text-white");
      nseBtn.classList.remove("bg-white", "text-[#425061]");
  }
}  


// downloadpagejs
function toggleAccordion(id) {
  let content = document.getElementById("content-" + id);
  let icon = document.getElementById("icon-" + id);
  let accordion = document.getElementById("accordion-" + id);

  let isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

  // Sab accordions ko close karo
  document.querySelectorAll("[id^='content-']").forEach((el) => {
    el.style.maxHeight = null;
    el.classList.add("overflow-hidden"); // Smooth closing effect
  });

  document.querySelectorAll("[id^='icon-']").forEach((el) => {
    el.classList.remove("rotate-180");
  });

  document.querySelectorAll("[id^='accordion-']").forEach((el) => {
    el.classList.add("border"); // Sab pe border wapas lagao
  });

  // Agar ye close tha to open karo
  if (!isOpen) {
    content.style.maxHeight = content.scrollHeight + "px";
    content.classList.remove("overflow-hidden"); // Show content smoothly
    icon.classList.add("rotate-180");

    // Set a small delay to remove border AFTER maxHeight sets in
    setTimeout(() => {
      accordion.classList.remove("border"); // Open hone pe border hatao
    }, 150); // Thoda delay rakha taki transition smooth ho
  }
}







 

// investor grievance togglebutton




let isOpen = true;

function toggleContent() {
  var content = document.getElementById("jobContent");
  var iconPath = document.getElementById("iconPath");

  if (isOpen) {
    content.style.maxHeight = "0px";
    content.style.opacity = "0";
    iconPath.setAttribute("d", "M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"); // Plus icon
  } else {
    content.style.maxHeight = "1000px";
    content.style.opacity = "1";
    iconPath.setAttribute("d", "M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"); // Minus icon
  }

  isOpen = !isOpen;
}