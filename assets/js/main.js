var swiper = new Swiper(".mySwiper ", {
});
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.mySwiper').forEach(swiperEl => {
    const config = JSON.parse(swiperEl.getAttribute('data-swiper'));
    new Swiper(swiperEl, config);
  });
});



var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 2,  
  spaceBetween: 20,
  // autoplay: {
  //   delay: 3000, 
  //   disableOnInteraction: false,
  // },
  speed: 1000, 
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    
  },
  breakpoints: {
    640: { 
      slidesPerView: 2,
      spaceBetween: 20,
    },
    0: { 
      slidesPerView: 1,
      spaceBetween: 10,
    }
  }
});


// investor grievance togglebutton
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