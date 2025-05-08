var swiper = new Swiper(".mySwiper ", {
});
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.mySwiper').forEach(swiperEl => {
    const config = JSON.parse(swiperEl.getAttribute('data-swiper'));
    new Swiper(swiperEl, config);
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

  let isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

  document.querySelectorAll("[id^='content-']").forEach((el) => {
      el.style.maxHeight = null;
  });

  document.querySelectorAll("[id^='icon-']").forEach((el) => {
      el.classList.remove("rotate-180");
  });

  if (!isOpen) {
      content.style.maxHeight = content.scrollHeight + "px";
      icon.classList.add("rotate-180");
  }
}





 

// investor grievance togglebutton
const levelButtons = document.querySelectorAll('.level-btn');
const contentDiv = document.getElementById('content');

// Define content for each level
const contents = {
  1: `
    <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full py-2">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
          For Trading & Demat Account related queries contact our customer service at cs@techtrade.in or calls us on below number:      
        </h1>
      </div>
      <div class="flex flex-row py-4 space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call: 0141-3561934</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 5:00pm)</h1>
      </div>
    </div>
  `,
  2: `
    <div class="flex flex-col">
       <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full h-auto py-2">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
           If you do not receive a satisfactory response at Level 1 within 3 working days, you may write to us at boby.jha@techtrade.in  or calls us on below numbers:
        </h1>
      </div>

      <div class="flex flex-row py-4 space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call: 7792022531</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 5:00pm)</h1>
      </div>
    </div>
    </div>
  `,
  3: `
    <div class="flex flex-col">
      <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full h-auto py-2">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
            If you still have not received a satisfactory response at Level 2 within 3 working days, you may contact our Compliance Officer (Mrs. Sapna Chouhan) at sapna.chouhan@techtrade.in or call on below number:
        </h1>
      </div>
      <div class="flex flex-row py-4 space-x-9">
        <h1 class="font-serif text-[#666666] font-medium text-base">Call:7300006530</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 5:00pm)</h1>
      </div>
    </div>
    </div>
  `,
  4: `
    <div class="flex flex-col">
      <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full h-auto py-2">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
           If you have not received a satisfactory response at Level 3 within 7 working days, you may also approach our CEO (Mr. Praveen Kumar Agarwal) at praveen@techtrade.in or call on below number:
        </h1>
      </div>
      <div class="flex flex-row py-4 space-x-9">
       <h1 class="font-serif text-[#666666] font-medium text-base">Call:7300006530</h1>
        <h1 class="font-serif text-[#666666] font-medium text-base">(Monday-Friday from 9:00am to 5:00pm)</h1>
      </div>
    </div>
    </div>
  `,
  5: `
    <div class="flex flex-col">
       <div class="flex flex-col">
      <div class="lg:w-[1140px] w-full h-auto py-2">
        <h1 class="font-serif text-[#666666] font-medium text-base leading-8">
           In absence of response/complaint not addressed to your satisfaction, you may lodge a complaint with SEBI at
        </h1>
      </div>
      <div class="lg:w-[924px] flex flex-col gap-y-2">
      <a href="https://scores.sebi.gov.in/" class="font-serif text-[#666666] font-medium text-base">
          SEBI : https://scores.sebi.gov.in/
        </a>
        <a href="https://investorhelpline.nseindia.com/NICEPLUS/" class="font-serif text-[#666666] font-medium text-base">
          NSE : https://investorhelpline.nseindia.com/NICEPLUS/
        </a>
         <a href="https://bsecrs.bseindia.com/ecomplaint/frmInvestorHome.aspx" class="font-serif text-[#666666] font-medium text-base">
         BSE : https://bsecrs.bseindia.com/ecomplaint/frmInvestorHome.aspx
        </a>
         <a href="https://www.mcxindia.com/Investor-Services" class="font-serif text-[#666666] font-medium text-base">
          MCX : https://www.mcxindia.com/Investor-Services
        </a>
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